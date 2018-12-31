var CACHE_NAME = 'eksekutif-cache';
var urlsToCache = [
  '/',
  'offlinePage.html'
];

self.addEventListener('install', function(event) {
  // Perform install steps
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(function(cache) {
        console.log('Opened cache');
        return cache.addAll(urlsToCache);
      })
  );

});

self.addEventListener('activate', (event) => {
  event.waitUntil(async function() {
    const cacheNames = await caches.keys();
    await Promise.all(
      cacheNames.filter((cacheName) => {
        // Return true if you want to remove this cache,
        // but remember that caches are shared across
        // the whole origin
      }).map(cacheName => caches.delete(cacheName))
    );
  }());
});

self.addEventListener('fetch', function(event) {
    console.log('fetching url:'+event.request.url);
    
    event.respondWith(async function() {
    try {
      var fetchRequest = event.request.clone();
      return await fetch(fetchRequest).then(
            function(response) {
              // Check if we received a valid response
              if(!response || response.status !== 200 || response.type !== 'basic') {
                return response;
              }
  
              // IMPORTANT: Clone the response. A response is a stream
              // and because we want the browser to consume the response
              // as well as the cache consuming the response, we need
              // to clone it so we have two streams.
              var responseToCache = response.clone();
  
              caches.open(CACHE_NAME)
                .then(function(cache) {
                  cache.put(event.request, responseToCache);
                })
  
              return response;
            }
          )
      //return await fetch(event.request);
    } catch (err) {
      return caches.match(event.request)
        .then(function(response) {
          console.log('cache match, return cache');
          if (response) {
            return response;
          }else{
            return caches.match('offlinePage.html')
          }
        })
    }
  }());
  });