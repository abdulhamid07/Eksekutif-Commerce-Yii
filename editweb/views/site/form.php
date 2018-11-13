<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Input Data Barang';
$this->params['breadcrumbs'][] = $this->title;
?>        
      <div class="box box-primary">

        <div class="box-header with-border">
          <p class="text-red">Tanda * artinya inputan haru diisi</p>
        </div>
        <form action="#">
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="box-body">
                <div class="form-group">
                  <label for="" class="has-error">Nama Barang <span class="text-red">*</span></label>
                  <input style="border:1px solid #000;" type="text" class="form-control" id="namabarang" placeholder="Masukkan Nama Barang">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Merk <span class="text-red">*</span></label>
                 <select style="border:1px solid #000;" name="merkBarang" class="form-control">
                   <option value="">- Pilih Merk -</option>
                 </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Kategori <span class="text-red">*</span></label>
                 <select style="border:1px solid #000;" name="merkBarang" class="form-control">
                   <option value="">- Pilih Kategori -</option>
                 </select>
                </div>
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Harga <span class="text-red">*</span></label>
                        <input style="border:1px solid #000;" type="text" class="form-control" id="hargabarang" placeholder="Masukkan Harga Barang">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Stok <span class="text-red">*</span></label>
                        <input style="border:1px solid #000;" type="text" class="form-control" id="hargabarang" placeholder="Masukkan Harga Barang">
                      </div>
                    </div>
                </div>
                <div class="form-group">
                        <label for="">Pemasok <span class="text-red">*</span></label>
                        <input style="border:1px solid #000;" type="text" class="form-control" id="pemasok" placeholder="Masukkan Nama Pemasok">
                </div>
                <div class="row">
                    <div class="col-md-12">
                      <label for="exampleInputFile">Gambar <span class="text-red">*</span></label>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="file" id="exampleInputFile">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="file" id="exampleInputFile">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="file" id="exampleInputFile">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="file" id="exampleInputFile">
                      </div>
                    </div>
                    
                </div>
                      
              </div>
              <!-- /.box-body -->

            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="box-body">
              <div class="form-group">
                  <label for="">Prosesor <span class="text-red">*</span></label>
                  <input style="border:1px solid #000;" type="text" class="form-control" id="prosesor" placeholder="Masukkan Tipe Prosesor">
                </div>
              <!-- /.form-group -->
              <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">RAM <span class="text-red">*</span></label>
                        <input style="border:1px solid #000;" type="text" class="form-control" id="ram" placeholder="Kapasitas dan Tipe RAM">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Penyimpanan <span class="text-red">*</span></label>
                        <input style="border:1px solid #000;" type="text" class="form-control" id="memori" placeholder="Kapasitas dan Tipe Penyimpanan">
                      </div>
                    </div>
              </div>
              <!-- /.form-group -->
              <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Grafis <span class="text-red">*</span></label>
                        <input style="border:1px solid #000;" type="text" class="form-control" id="vga" placeholder="Kapasitas dan Tipe VGA">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Kondisi <span class="text-red">*</span></label>
                          <div class="radio">
                            <label>
                              <input style="border:1px solid #000;" type="radio" name="kondisi" id="optionsRadios1" value="baru">
                             Baru
                           </label>
                             <label>
                             <input style="border:1px solid #000;" type="radio" name="kondisi" id="optionsRadios2" value="bekas">
                             Bekas
                            </label>
                          </div>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Kelengkapan <span class="text-red">*</span></label>
                        <textarea style="border:1px solid #000;" name="kelengkapan" class="form-control" rows="6"></textarea>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Keterangan Lain</label>
                        <textarea style="border:1px solid #000;" name="kelengkapan" class="form-control" rows="6"></textarea>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="submit" class="btn btn-default">Cancel</button>
              </div>
            </form>
      </div>