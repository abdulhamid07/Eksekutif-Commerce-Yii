<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Input Data Pemasok';
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
            <div class="col-md-12">
              <div class="box-body">
              <div class="form-group">
                  <label for="">Nama <span class="text-red">*</span></label>
                  <input style="border:1px solid #000;" type="text" class="form-control" id="nama" placeholder="Masukkan Nama Pemasok">
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