

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
              <h3 class="box-title">Edit Data Pribadi <strong><?php echo $edit->FullName; ?></strong></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

           <?php echo form_open_multipart('pribadi/edit'); ?>
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
                  <input type="text" name="FullName" id="FullName" class="form-control" placeholder="Nama Lengkap" value="<?php echo $edit->FullName; ?>" >
                </div>
              <!-- <div class="form-group">
                  <label for="merk">Tanggal Lahir</label>
                  <input type="text" name="tgllahir" id="datepicker" class="form-control" placeholder="Tanggal Lahir" 
                  value="<//?php echo set_value('tgllahir'); ?>" data-date-format="yyyy-mm-dd" />
                </div> -->
              <div class="form-group">
                  <label for="merk">NIK</label>
                  <input type="text" name="NIK" id="NIK" class="form-control" placeholder="Nomor Induk Kependudukan" value="<?php echo $edit->NIK; ?>">
                </div>
                <div class="form-group">
                  <label for="merk">No.KK</label>
                  <input type="text" name="noKK" id="noKK" class="form-control" placeholder="Nomor Kartu Keluarga" value="<?php echo $edit->noKK; ?>">
                </div>
                <div class="form-group">
                  <label for="merk">BPJS Kesehatan</label>
                  <input type="text" name="noBPJSkesehatan" id="noBPJSkesehatan" class="form-control" placeholder="BPJS Kesehatan" value="<?php echo $edit->noBPJSkesehatan; ?>">
                </div>
                <div class="form-group">
                  <label for="merk">BPJS Ketenagakerjaan</label>
                  <input type="text" name="noBPJSketenagakerjaan" id="noBPJSketenagakerjaan" class="form-control" placeholder="BPJS Ketenagakerjaan" value="<?php echo $edit->noBPJSketenagakerjaan; ?>">
                </div>
                <div class="form-group">
                  <label for="merk">NPWP</label>
                  <input type="text" name="noNPWP" id="noNPWP" class="form-control" placeholder="NPWP" value="<?php echo $edit->noKK; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile"></label>
                  <img src="<?php echo base_url();?>assets/foto-pribadi/<?php echo $edit->foto; ?>"width="211" height="259">
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