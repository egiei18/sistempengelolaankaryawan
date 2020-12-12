<!-- Select2 -->
<link rel="stylesheet" href="<?=base_url()?>assets/plugins/datepicker/datepicker3.css">
  <!-- bootstrap datepicker -->
<script src="<?=base_url()?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap-3.4.1.min.js" ></script>
<script>
  $(function () {
    //Initialize Select2 Elements
     //Date picker
    $('#datepicker').datepicker({ autoclose: true, dateFormat: 'yy-mm-dd' });
      //dateFormat: 'yy-mm-dd'
//}{
     //// autoclose: true,
     // dateFormat: 'yy-mm-dd'
    //});
  });
</script>

  <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Perubahan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

           <?php echo form_open_multipart('perubahan/add'); ?>

              <div class="box-body">

                <?php if(validation_errors() != false) { ?>
                  <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <?php echo validation_errors(); ?>
                </div>
                <?php } ?>

                <div class="form-group">
                  <label for="merk">Nama Lengkap</label>
                  <input type="text" name="FullName" id="FullName" class="form-control" placeholder="Nama Lengkap" value="<?php echo set_value('FullName'); ?>" required="">
                </div>
              <!-- <div class="form-group">
                  <label for="merk">Tanggal Lahir</label>
                  <input type="text" name="tgllahir" id="datepicker" class="form-control" placeholder="Tanggal Lahir" 
                  value="<//?php echo set_value('tgllahir'); ?>" data-date-format="yyyy-mm-dd" />
                </div> -->
                <div class="form-group">
                <label for="exampleFormControlSelect1">Status</label>
                <select class="form-control" name="status_karyawan" id="status_karyawan">
                <option value="Calon Pegawai">Calon Pegawai</option>
                <option value="Pegawai">Pegawai</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Perubahan Status</label>
                <select class="form-control" name="perubahan_status" id="perubahan_status">
                <option value="Mutasi">Mutasi</option>
                <option value="Promosi">Promosi</option>
                <option value ="Demosi">Demosi</option>
                </select>
            </div>
            <!-- <div class="form-group">
                <label for="exampleFormControlSelect1">Divisi</label>
                <select class="form-control" name="divisi" id="divisi">
                <option value="HR">HR</option>
                <option value="Finance">Finance</option>
                <option value="Customer Services">Customer Services</option>
                <option value ="International Network">International Network</option>
                <option value="Marketing">Marketing</option>
                <option value="Operational">Operational</option>
                <option value ="General Affair">General Affair</option>
                <option value="IT">IT</option>
                </select> -->
                
                <div class="form-group">
                  <label for="merk">Divisi</label>
                  <input type="text" name="divisi" id="divisi" class="form-control" placeholder="Divisi" value="<?php echo set_value('divisi'); ?>" required="">
                </div>
            
                <!-- <div class="form-group">
                  <label for="merk">Jabatan</label>
                  <input type="text" name="jabatan" id="jabatan" class="form-control" placeholder="Jabatan" value="<?php echo set_value('jabatan'); ?>" required="">
                </div> -->
                <div class="form-group">
                <label for="exampleFormControlSelect1">Jabatan</label>
                <select class="form-control" name="jabatan" id="jabatan">
                <option value="Staff">Staff</option>
                <option value="Supervisor">Supervisor</option>
                <option value="Asistant Manager">Asistant Manager</option>
                <option value ="Manager"> Manager</option>
                <option value="Senior Manager">Senior Manager</option>
                <option value="General Manager">General Manager</option>
                <option value ="B.O.D">B.O.D</option>
                </select>
                </div>
                <div class="form-group">
                  <label for="merk">Tanggal Perubahan Status</label>
                  <input type="date" name="tanggal_status" id="tanggal_status" class="form-control" placeholder="Tanggal Perubahan Status" value="<?php echo set_value('tanggal_status'); ?>" required="">
                </div>
                <div class="form-group">
                  <label for="merk">Tanggal Perubahan Gaji</label>
                  <input type="date" name="tanggal_gaji" id="tanggal_gaji" class="form-control" placeholder="Tanggal Perubahan Gaji" value="<?php echo set_value('tanggal_gaji'); ?>" required="">
                </div>
              </div>
                <!-- <div class="form-group">
                  <label for="exampleInputFile">Foto Supir</label>
                  <input type="file" id="foto" name="foto">
                </div> -->
              </div>
                </div>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
              <button type="button" class="btn btn-default" onclick="window.history.back()">Cancel</button>
                <button type="submit" class="btn btn-primary" name="submit" value="submit">Save</button>
              </div>
            <?php echo form_close(); ?>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
          
          <!-- /.box -->

          
          <!-- /.box -->

          <!-- Input addon -->
          
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        
        <!--/.col (right) -->
      </div>