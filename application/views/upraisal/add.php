<!-- Select2 -->
<link rel="stylesheet" href="<?=base_url()?>assets/plugins/datepicker/datepicker3.css">
  <!-- bootstrap datepicker -->
<script src="<?=base_url()?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap-3.4.1.min.js" ></script><br>
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
              <h3 class="box-title">Tambah </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

           <?php echo form_open_multipart('upraisal/add'); ?>

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
                  <label for="merk">Penilaian Kinerja Karyawan</label>
                  <input type="text" name="abjad" id="abjad" class="form-control" placeholder="Penilaian Kinerja Karyawan Abjad" value="<?php echo set_value('abjad'); ?>" required="">
                </div>
                <div class="form-group">
                  <label for="merk">Nilai Angka</label>
                  <input type="text" name="angka" id="angka" class="form-control" placeholder="Penilaian Kinerja Karyawan Angka" value="<?php echo set_value('angka'); ?>" required="">
                </div>
                <div class="form-group">
                  <label for="merk">Tanggal Penilaian</label>
                  <input type="date" name="tanggal_penilaian" id="tanggal_penilaian" class="form-control" placeholder="Tanggal Penilaian" value="<?php echo set_value('tanggal_penilaian'); ?>" required="">
                </div>
                
              </div>

                <!-- <div class="form-group">
                  <label for="exampleInputFile">Foto Supir</label>
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