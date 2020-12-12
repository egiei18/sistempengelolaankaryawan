

<!-- Select2 -->
<link rel="stylesheet" href="<?=base_url()?>assets/plugins/datepicker/datepicker3.css">
  <!-- bootstrap datepicker -->
<script src="<?=base_url()?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>

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
              <h3 class="box-title">Edit Data Perubahan Status Yang Bernama :  <strong><?php echo $edit->FullName; ?></strong></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

           <?php echo form_open_multipart('status/edit'); ?>
           <input type="hidden" name="id" value="<?php echo $edit->id; ?>">

              <div class="box-body">

                <?php if(validation_errors() != false) { ?>
                  <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <?php echo validation_errors(); ?>
                </div>
                <?php } ?>

                <div class="form-group">
                  <label for="merk">Nama Lengkap</label>
                  <input type="text" name="FullName" id="FullName" class="form-control" placeholder="Nama Lengkap" value="<?php echo $edit->FullName; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Status</label>
                  <select class="form-control" name="status_karyawan" id="status_karyawan">
                  
                <option value="Calon Pegawai" <?php if($edit->status_karyawan=="Calon Pegawai"){?>selected<?php } ?>>Calon Pegawai</option>
                  <option value="Pegawai"<?php if($edit->status_karyawan=="Pegawai"){?>selected<?php } ?>>Pegawai</option>
                  
                  </select value="<?php echo $edit->status_karyawan; ?>">
              </div>
              <div class="form-group">
                  <label for="exampleFormControlSelect1">Perubahan Status</label>
                  <select class="form-control" name="perubahan_status" id="perubahan_status">
                  <option value="Mutasi"  <?php if($edit->perubahan_status=="Mutasi"){?>selected<?php } ?>>Mutasi</option>
                  <option value="Promosi"  <?php if($edit->perubahan_status=="Promosi"){?>selected<?php } ?>>Promosi</option>
                  <option value="Demosi"   <?php if($edit->perubahan_status=="Demosi"){?>selected<?php } ?>>Demosi</option>
                  </select>
              </div>
                
              
              <div class="form-group">
                  <label for="merk">Divisi</label>
                  <input type="text" name="divisi" id="divisi" class="form-control" placeholder="Divisi" value="<?php echo $edit->divisi; ?>">
                </div>
             
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Jabatan</label>
                  <select class="form-control" name="jabatan" id="jabatan" >
                  <option value="Staff" <?php if($edit->jabatan=="Staff"){?>selected<?php } ?>>Staff</option>
                  <option value="Supervisor" <?php if($edit->jabatan=="Supervisor"){?>selected<?php } ?>>Supervisor</option>
                  <option value="Asistant Manager" <?php if($edit->jabatan=="Asistant Manager"){?>selected<?php } ?>>Asistant Manager</option>
                  <option value ="Manager" <?php if($edit->jabatan=="Manager"){?>selected<?php } ?>>Manager</option>
                  <option value="Senior Manager" <?php if($edit->jabatan=="Senior Manager"){?>selected<?php } ?>>Senior Manager</option>
                  <option value="Branch Manager" <?php if($edit->jabatan=="Branch Manager"){?>selected<?php } ?>>Branch Manager</option>
                  <option value="General Manager" <?php if($edit->jabatan=="General Manager"){?>selected<?php } ?>>General Manager</option>
                  <option value ="B.O.D" <?php if($edit->jabatan=="B.O.D"){?>selected<?php } ?>>B.O.D</option>
                  </select>
              </div>
                <div class="form-group">
                  <label for="merk">Tanggal Perubahan Status</label>
                  <input type="date" name="tanggal_status" id="tanggal_status" class="form-control" placeholder="Tanggal Perubahan Status" value="<?php echo $edit->tanggal_status; ?>">
                </div>
                <div class="form-group">
                  <label for="merk">Tanggal Perubahan Gaji</label>
                  <input type="date" name="tanggal_gaji" id="tanggal_gaji" class="form-control" placeholder="Tanggal Perubahan Status" value="<?php echo $edit->tanggal_status; ?>">
                </div>
                <!-- <div class="form-group">
                  <label for="exampleInputFile">Foto Mobil</label>
                  <input type="file" id="foto" name="foto">
                </div> -->
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