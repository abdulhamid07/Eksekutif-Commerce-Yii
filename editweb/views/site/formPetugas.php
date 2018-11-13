<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Input Data Petugas';
$this->params['breadcrumbs'][] = $this->title;
?>        
      <div class="box box-primary">

        <div class="box-header with-border">
          <p class="text-red">Tanda * artinya inputan harus diisi</p>
        </div>
        <form action="#">
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <!-- /.col -->
            <div class="col-md-6">
              <div class="box-body">
              <div class="form-group">
                  <label for="">Nama Lengkap<span class="text-red">*</span></label>
                  <input style="border:1px solid #000;" type="text" class="form-control" id="nama" placeholder="Masukkan Nama Petugas">
                </div>
              <!-- /.form-group -->
                      <div class="form-group">
                        <label for="">Alamat <span class="text-red">*</span></label>
                        <input style="border:1px solid #000;" type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat">
                    </div>

                      <div class="form-group">
                        <label for="">No Telepon <span class="text-red">*</span></label>
                        <input style="border:1px solid #000;" type="text" class="form-control" id="no_telp" placeholder="Masukkan No Telepon Aktif">
                      </div>
              <!-- /.form-group -->
              </div>
            </div>
            <div class="col-md-6">
              <div class="box-body">
              <div class="form-group">
                  <label for="">Email <span class="text-red">*</span></label>
                  <input style="border:1px solid #000;" type="text" class="form-control" id="nama" placeholder="Masukkan Email">
                </div>
              <!-- /.form-group -->
                      <div class="form-group">
                        <label for="">Password <span class="text-red">*</span></label>
                        <input style="border:1px solid #000;" type="password" class="form-control" id="alamat" placeholder="Masukkan Password">
                    </div>

                      <div class="form-group">
                        <label for="">Konfirmasi Password <span class="text-red">*</span></label>
                        <input style="border:1px solid #000;" type="password" class="form-control" id="no_telp" placeholder="Konfirmasi Password">
                      </div>
              <!-- /.form-group -->
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