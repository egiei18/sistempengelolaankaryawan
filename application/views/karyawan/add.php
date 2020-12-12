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
              <h3 class="box-title">Tambah Data Karyawan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

           <?php echo form_open_multipart('karyawan/add'); ?>

              <div class="box-body">

                <?php if(validation_errors() != false) { ?>
                  <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <?php echo validation_errors(); ?>
                </div>
                <?php } ?>
                
                <div class="form-group">
                  <label for="merk">NIP</label>
                  <input type="text" name="NIP" id="NIP" class="form-control" placeholder="Nomor Induk Pegawai" value="<?php echo set_value('NIP'); ?>" required="">
                </div>
              <!-- <div class="form-group">
                  <label for="merk">Tanggal Lahir</label>
                  <input type="text" name="tgllahir" id="datepicker" class="form-control" placeholder="Tanggal Lahir" 
                  value="<?php echo set_value('tgllahir'); ?>" data-date-format="yyyy-mm-dd" />
                </div> -->
              
              <div class="form-group">
                  <label for="merk">Nama Lengkap</label>
                  <input type="text" name="FullName" id="FullName" class="form-control" placeholder="Nama Lengkap" value="<?php echo set_value('FullName'); ?>" required="">
                </div>
                <div class="form-group">
                  <label for="merk">Agama</label>
                  <input type="text" name="agama" id="agama" class="form-control" placeholder="Agama" value="<?php echo set_value('agama'); ?>" required="">
                </div>
                <!-- <div class="form-group">
                  <label for="merk">Usia</label>
                  <input type="text" name="usia" id="usia" class="form-control" placeholder="Usia" value="<?php echo set_value('usia'); ?>" required="">
                </div> -->
                <div class="form-group">
                  <label for="merk">Status</label>
                  <input type="text" name="status" id="status" class="form-control" placeholder="Married atau Single" value="<?php echo set_value('status'); ?>" required="">
                </div>
                <div class="form-group">
                  <label for="merk">Tempat Lahir</label>
                  <input type="text" name="tempat_lahir" id="tempatlahir" class="form-control" placeholder="Tempat Lahir" value="<?php echo set_value('tempat_lahir'); ?>" required="">
                </div>
                <div class="form-group">
                  <label for="merk">Tanggal Lahir</label>
                  <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" value="<?php echo set_value('tanggal_lahir'); ?>" required="">
                </div>
                <div class="form-group">
                  <label for="merk">Jenis Kelamin</label>
                  <input type="text" name="gender" id="gender" class="form-control" placeholder="Jenis Kelamin" value="<?php echo set_value('gender'); ?>" required="">
                </div>
                <!-- <div class="form-group">
                  <label for="merk">Divisi</label>
                  <input type="text" name="divisi" id="divisi" class="form-control" placeholder="Divisi" value="<?php echo set_value('divisi'); ?>" required="">
                </div> -->
                <!-- <div class="form-group">
                <label for="exampleFormControlSelect1">Divisi</label>
                <select class="form-control" name="divisi" id="divisi">
                <option value="HR">HR</option>
                <option value="Finance">Finance</option>
                <option value="Customer Services">Customer Services</option>
                <option value ="International Network">International Network</option>
                <option value="Marketing">Marketing</option>
                <option value="Operational">Operational</option>
                <option value ="Key Account">Key Account</option>
                <option value ="General Affair">General Affair</option>
                <option value="IT">IT</option>
                </select>
            </div> -->
            <div class="form-group">
                  <label for="merk">Divisi</label>
                  <input type="text" name="divisi" id="divisi" class="form-control" placeholder="Divisi" value="<?php echo set_value('divisi'); ?>" required="">
                </div>
                <!-- <div class="form-group">
                  <label for="merk">Jabatan</label>
                  <input type="text" name="Jabatan" id="Jabatan" class="form-control" placeholder="Jabatan" value="<?php echo set_value('Jabatan'); ?>" required="">
                </div> -->
                <div class="form-group">
                <label for="exampleFormControlSelect1">Jabatan</label>
                <select class="form-control" name="Jabatan" id="Jabatan">
                <option value="Staff">Staff</option>
                <option value="Supervisor">Supervisor</option>
                <option value="Asistant Manager">Asistant Manager</option>
                <option value ="Manager"> Manager</option>
                <option value="Senior Manager">Senior Manager</option>
                <option value="Branch Manager">Branch Manager</option>
                <option value="General Manager">General Manager</option>
                <option value ="B.O.D">B.O.D</option>
                </select>
                </div>
                <div class="form-group">
                  <label for="merk">No. Handphone</label>
                  <input type="text" name="MobileNo" id="MobileNo" class="form-control" placeholder="No. Handphone "value="<?php echo set_value('MobileNo'); ?>" required="">
                </div>
                <div class="form-group">
                  <label for="merk">Alamat Email</label>
                  <input type="text" name="EmailAddress" id="EmailAddress" class="form-control" placeholder="Email Address" value="<?php echo set_value('EmailAddress'); ?>" required="">
                </div>
                <div class="form-group">
                  <label for="merk">Tanggal Masuk</label>
                  <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control" placeholder="Tanggal Masuk" value="<?php echo set_value('tanggal_masuk'); ?>" required="">
                </div>
              
                <div class="form-group">
                  <label for="merk">Alamat</label>
                  <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat Tempat Tinggal" value="<?php echo set_value('EmailAddress'); ?>" required="">
                </div>
                <div class="form-group">
                  <label for="merk">Kode Pos</label>
                  <input type="text" name="kode_pos" id="kode_pos" class="form-control" placeholder="Kode Pos" value="<?php echo set_value('kode_pos'); ?>" required="">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Foto Karyawan</label>
                  <input type="file" id="foto" name="foto">
                </div>
              </div>
       

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