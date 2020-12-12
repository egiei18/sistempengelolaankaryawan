

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
              <h3 class="box-title">Edit Data Karyawan <strong><?php echo $edit->FullName; ?></strong></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

           <?php echo form_open_multipart('karyawan/edit'); ?>
           <input type="hidden" name="id" value="<?php echo $edit->id; ?>">

              <div class="box-body">

                <?php if(validation_errors() != false) { ?>
                  <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <?php echo validation_errors(); ?>
                </div>
                <?php } ?>

                <div class="form-group">
                  <label for="merk">NIP</label>                                                                
                  <input type="text" name="NIP" id="NIP" class="form-control" placeholder="Nomor Induk Pegawai" value="<?php echo $edit->NIP; ?>">
                </div>
             
              <div class="form-group">
                  <label for="merk">Nama Lengkap</label>
                  <input type="text" name="FullName" id="FullName" class="form-control" placeholder="Nama Lengkap" value="<?php echo $edit->FullName; ?>">
                </div>
                <div class="form-group">
                  <label for="merk">Agama</label>
                  <input type="text" name="agama" id="agama" class="form-control" placeholder="Agama" value="<?php echo $edit->agama; ?>">
                </div>
              
                <div class="form-group">
                  <label for="merk">Status</label>
                  <input type="text" name="status" id="status" class="form-control" placeholder="Married atau Single" value="<?php echo $edit->status; ?>">
                </div>
                <div class="form-group">
                  <label for="merk">Tempat Lahir</label>
                  <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="<?php echo $edit->tempat_lahir; ?>">
                </div>
                <div class="form-group">
                  <label for="merk">Tanggal Lahir</label>
                  <input type="date" name="tanggal_lahir" id="tanggal_lahiir" class="form-control" placeholder="Tanggal Lahir" value="<?php echo $edit->tanggal_lahir; ?>">
                </div>
                <div class="form-group">
                  <label for="merk">Jenis Kelamin</label>
                  <input type="text" name="gender" id="gender" class="form-control" placeholder="Jenis Kelamin" value="<?php echo $edit->gender; ?>">
                </div>
                <div class="form-group">
                  <label for="merk">Divisi</label>
                  <input type="text" name="divisi" id="divisi" class="form-control" placeholder="Divisi" value="<?php echo $edit->divisi; ?>">
                </div>
                <!-- <div class="form-group">
                  <label for="merk">Jabatan</label>
                  <input type="text" name="Jabatan" id="Jabatan" class="form-control" placeholder="Jabatan" value="<?php echo $edit->Jabatan; ?>">
                </div> -->
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Jabatan</label>
                  <select class="form-control" name="Jabatan" id="Jabatan" >
                  <option value="Staff" <?php if($edit->Jabatan=="Staff"){?>selected<?php } ?>>Staff</option>
                  <option value="Supervisor" <?php if($edit->Jabatan=="Supervisor"){?>selected<?php } ?>>Supervisor</option>
                  <option value="Asistant Manager" <?php if($edit->Jabatan=="Asistant Manager"){?>selected<?php } ?>>Asistant Manager</option>
                  <option value ="Manager" <?php if($edit->Jabatan=="Manager"){?>selected<?php } ?>>Manager</option>
                  <option value="Senior Manager" <?php if($edit->Jabatan=="Senior Manager"){?>selected<?php } ?>>Senior Manager</option>
                  <option value="Branch Manager" <?php if($edit->Jabatan=="Branch Manager"){?>selected<?php } ?>>Branch Manager</option>
                  <option value="General Manager" <?php if($edit->Jabatan=="General Manager"){?>selected<?php } ?>>General Manager</option>
                  <option value ="B.O.D" <?php if($edit->Jabatan=="B.O.D"){?>selected<?php } ?>>B.O.D</option>
                  </select>
              </div>
                <div class="form-group">
                  <label for="merk">No. Handphone</label>
                  <input type="text" name="MobileNo" id="MobileNo" class="form-control" placeholder="No. Handphone "value="<?php echo $edit->MobileNo; ?>">
                </div>
                <div class="form-group">
                  <label for="merk">Alamat Email</label>
                  <input type="text" name="EmailAddress" id="EmailAddress" class="form-control" placeholder="Email Address" value="<?php echo $edit->EmailAddress; ?>">
                </div>
                <div class="form-group">
                  <label for="merk">Tanggal Masuk</label>
                  <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control" placeholder="Tanggal Masuk" value="<?php echo $edit->tanggal_masuk; ?>">
                </div>
                <!-- <div class="form-group">
                  <label for="merk">Lama Bekerja</label>
                  <input type="text" name="lama_bekerja" id="lama_bekerja" class="form-control" placeholder="Lama Bekerja "value="<?//php echo set_value('lama_bekerja'); ?>" required="">
                </div> -->
                <div class="form-group">
                  <label for="merk">Alamat</label>
                  <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat Rumah" value="<?php echo $edit->alamat; ?>">
                </div>
                <div class="form-group">
                  <label for="merk">Kode Pos</label>
                  <input type="text" name="kode_pos" id="kode_pos" class="form-control" placeholder="Kode Pos" value="<?php echo $edit->kode_pos; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile"></label>
                  <img src="<?php echo base_url();?>assets/foto/<?php echo $edit->foto; ?>"width="211" height="259">
                  <input type="file" id="foto" name="foto">
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