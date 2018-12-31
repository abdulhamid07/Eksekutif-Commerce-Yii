<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Input Data Kirim';
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
                  <label for="">Id Detail Transaksi <span class="text-red">*</span></label>
                  <input style="border:1px solid #000;" type="text"  class="form-control" id="nama" placeholder="Masukkan Id Detail Transaksi">
                </div>
              <!-- /.form-group -->
                      <div class="form-group">
                        <label for="exampleInputPassword1">Petugas Yang Mengirim<span class="text-red">*</span></label>
                       <select style="border:1px solid #000;" name="merkBarang" class="form-control">
                         <option value="">- Pilih Petugas -</option>
                         <option value="" selected="">xxxxxxxxxx</option>
                       </select>
                      </div>

                      <div class="form-group">
                        <label>Tanggal Kirim</label>

                        <div class="input-group date">
                          <div class="input-group-addon" style="border:1px solid #000;">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input style="border:1px solid #000;" type="text" class="form-control pull-right" id="datepicker">
                        </div>
                        <!-- /.input group -->
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Status Kirim <span class="text-red">*</span></label>
                       <select style="border:1px solid #000;" name="merkBarang" class="form-control">
                         <option value="">- Status Kirim -</option>
                         <option value="" selected="">xxxxxxxxxx</option>
                       </select>
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