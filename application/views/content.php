<style type="text/css">
  .gambar {
    height: 100px !important;
    width: 130px !important;
  }
</style>

  

        <div class="col-md-12">
              <!-- USERS LIST -->
              
              <div class="box box-default">
                
                <div class="box-header with-border">
                  
                  <h3 class="box-title">Dashboard</h3>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $countKaryawan ?></h3>

                <p>Total Karyawan</p>
              </div>
              <div class="icon">
                <i class="ion-android-contacts"></i>
              </div>
              <a href="<?=base_url()?>karyawan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3 ><?php echo $countGenderPria ?><sup style="font-size: 20px"></sup></h3>

                <p>Karyawan Laki-laki</p>
              </div>
              <div class="icon">
                <i class="ion ion-male"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
         
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3 ><?php echo $countGenderWanita ?></h3>

                <p>Karyawan Perempuan</p>
              </div>
              <div class="icon">
                <i class="ion ion-female"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
       
                
                <!-- /.box-header -->
                <!-- /.box-body -->
                <!-- <div class="box-footer text-center">
                  <a href="<?=base_url()?>mobil" class="uppercase">Lihat Semua Mobil</a>
                </div> -->
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
            </div>

<script src="<?=base_url()?>assets/bootstrap/js/bootstrap-3.4.1.min.js" ></script>
