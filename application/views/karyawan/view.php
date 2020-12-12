<link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables/dataTables.bootstrap.css">
<link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables/dataTable-1-10-22.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables/dataTable-buttons-1.6.4.min.css">


<!-- DataTables -->
<script src="<?=base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>

<link href="<?=base_url()?>assets/plugins/datatables/select2.min.css" rel="stylesheet" />
<script src="<?=base_url()?>assets/plugins/datatables/select2@4.1.0.min.js"></script>

<link rel="stylesheet" href="<?=base_url()?>assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<!-- page script -->

<div class="modal fade " id="filter_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Filter</h4>
        
      </div>
      <form method="post" action="<?php echo base_url('karyawan');?>">
      <div class="modal-body">    
      <div class="form-group">
        <label for="formGroupExampleInput">Usia</label>
        <div class="form-inline">
          <input type="text" class="form-control"  placeholder="Usia" name="usia">
          &nbsp;Tahun
        </div>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Usia Antara</label>
        <div class="form-inline">
          <input type="text" class="form-control"  placeholder="Usia" name="usia1"> -
          <input type="text" class="form-control"  placeholder="Usia" name="usia2">&nbsp;Tahun
        </div>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Lama Kerja</label>
        <div class="form-inline">
          <input type="text" class="form-control"  placeholder="Lama Kerja" name="lamakerja">
          &nbsp;Tahun
        </div>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Lama Kerja Antara</label>
        <div class="form-inline">
          <input type="text" class="form-control"  placeholder="Lama Kerja" name="lamakerja1"> -
          <input type="text" class="form-control"  placeholder="Lama Kerja" name="lamakerja2">&nbsp;Tahun
        </div>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Jabatan</label>
        <div class="form-inline">
          <select class="form-control  select2" name="jabatan[]" multiple>
           <?php foreach ($jabatan as $key => $value){ ?>
           <option name="jabatan" value="<?php echo $value->Jabatan;?>"><?php echo $value->Jabatan;?></option>
            <?php }?>
          </select>
          </div>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Kotamadya</label>
        
          <select class="form-control  select2" name="kotamadya[]" multiple>
           <option value="Jakarta Pusat">Jakarta Pusat<option>
           <option value="Jakarta Selatan">Jakarta Selatan<option>
           <option value="Jakarta Timur">Jakarta Timur<option>
           <option value="Jakarta Barat">Jakarta Barat<option>
           <option value="Jakarta Utara">Jakarta Utara<option>
          </select>
      
      </div>
      <!-- <div class="form-group">
        <label for="formGroupExampleInput">Jabatan</label>
        <div class="form-inline">
          <input type="text" class="form-control"  placeholder="Jabatan" name="jabatan">
          &nbsp;
        </div>
      </div> -->
      <!-- <div class="form-group">
        <label for="formGroupExampleInput">Jabatan</label>
        <div class="form-inline">
          <input type="text" class="form-control"  placeholder="Jabatan" name="jabatan1"> -
          <input type="text" class="form-control"  placeholder="Jabatan" name="jabatan2"> - 
          <input type="text" class="form-control"  placeholder="Jabatan" name="jabatan3"> -
          <input type="text" class="form-control"  placeholder="Jabatan" name="jabatan4"> -
          <input type="text" class="form-control"  placeholder="Jabatan" name="jabatan5"> -
          <input type="text" class="form-control"  placeholder="Jabatan" name="jabatan6"> -
          <input type="text" class="form-control"  placeholder="Jabatan" name="jabatan7">&nbsp;
        </div>
      </div> -->
      </div>
      
      <div class="modal-footer">
        <button type="submit" name="filter" class="btn btn-primary">Filter</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="box animate__animated animate__zoomIn">
            <div class="box-header">
              <h3 class="box-title">Data Karyawan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

            <?php if($this->session->flashdata('info')) { ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo $this->session->flashdata('info'); ?>
              </div>
            <?php } ?>
              <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped" >
                <thead>
                <tr>
                <!-- <th>ID</th> -->
                <!-- <th>NIP</th> -->
                <th>Nama Lengkap</th>
                <th>Agama</th>
                <th>Usia</th>
                <th>Status</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Divisi</th>
                <th>Jabatan</th>
                <!-- <th>No.Handphone</th>
                <th>Alamat Email</th> -->
                <th>Tanggal Masuk</th>
                <th>Lama Bekerja</th>
                <th>Alamat</th>
                <th>Kode Pos</th>
                
                  <?php if ($this->session->userdata('hak_akses') == 'Admin') {?>
                  <th>Action</th>
                  <?php }elseif($this->session->userdata('hak_akses') == 'User') { ?>
                  <th>Action</th>
                  <?php } ?>
                </tr>
                </thead>
                <tbody>
                <?php
                  $id = 1;
                  foreach($tabel_karyawan as $karyawan) {
                  ?>         
                    <tr>
                    <!-- <td><?php echo $id++?></td> -->
                    <!-- <td><?php echo $karyawan->NIP?></td> -->
                    <td><?php echo $karyawan->FullName?></td>
                    <td><?php echo $karyawan->agama?></td>
                    <td><?php echo $karyawan->usia?> tahun</td>
                    <td><?php echo $karyawan->status?></td>
                    <td><?php echo $karyawan->tempat_lahir?></td>
                    <td><?php echo date('d M Y',strtotime($karyawan->tanggal_lahir));?></td>
                    <td><?php echo $karyawan->gender?></td>
                    <td><?php echo $karyawan->divisi?></td>
                    <td><?php echo $karyawan->Jabatan?></td>
                    <!-- <td><?php echo $karyawan->MobileNo?></td>
                    <td><?php echo $karyawan->EmailAddress?></td> -->
                    <td><?php echo date('d M Y',strtotime($karyawan->tanggal_masuk));?></td>
                    <td><?php echo $karyawan->lama_bekerja?> tahun</td>
                    <td><?php echo $karyawan->alamat?></td>
                    <td><?php echo $karyawan->kode_pos?></td>
                    
                      <?php if ($this->session->userdata('hak_akses') == 'Admin') {?>
                      <td>
                        <button type="submit" class="btn btn-primary" onclick="location.href='<?=base_url()?>karyawan/edit/<?php echo $karyawan->id; ?>'"><i class="fa fa-fw fa-edit"></i></button>
                        <button type="submit" class="btn btn-danger" onclick="if(confirm('Apakah anda yakin akan menghapus <?php echo $karyawan->FullName; ?>?')) window.location.href='<?=base_url()?>karyawan/hapus/<?php echo $karyawan->id; ?>';"><i class="fa fa-fw fa-trash-o"></i></button>
                        <!-- <button type="submit" class="btn btn-success" onclick="location.href='<?=base_url()?>karyawan/status/<?php echo $karyawan->FullName; ?>'"><i class="fa fa-fw fa-"></i></button> -->
                        <button type="submit" class="btn btn-success" onclick="location.href='<?=base_url()?>karyawan/detail/<?php echo $karyawan->id; ?>'"><i class="fa fa-fw fa-eye"></i></button>
                      </td>
                      <?php }elseif($this->session->userdata('hak_akses') == 'User'){ ?>
                      <td>
                      <button type="submit" class="btn btn-success" onclick="location.href='<?=base_url()?>karyawan/detail/<?php echo $karyawan->id; ?>'"><i class="fa fa-fw fa-eye"></i></button>
                      </td>
                      <?php } ?>
                    </tr>
                <?php
                  $id; }
                ?> 
                </tbody>
                <!-- <tfoot>
                <tr>
                 <th>No.</th>
                  <th>Nama</th>
                  <th>No. KTP</th>
                </tr>
                </tfoot> -->
              </table>
             
            </div>
            </div>
            <!-- /.box-body -->
          </div>
          
<script src="<?=base_url()?>assets/plugins/datatables/jquery-3.5.1.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables/jquery-1.10.22.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables/dataTables-buttons.1.6.4.min.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables/dataTables-1.6.4-buttons.print.min.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables/dataTables-buttons-colVis.min.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables/dataTables-buttons.flash.min.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables/ajax-3.1.3-jszip.min.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables/ajax-0.1.53-pdfmake.min.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables/ajax-01.53-vfs_fonts.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables/dataTables-buttons.html5.min.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables/dataTables-buttons.print.min.js"></script>
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap-3.4.1.min.js" ></script>


<script>
$(document).ready(function() {
    $('#example1').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [ 0, ':visible' ]
                }
            },
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 5 ]
                }
            },
            {
                extend: 'print',
                exportOptions: {
                    columns: ':visible'
                }
            },
            'colvis',
            {
                        text: 'Filter',
                        action: function (e, node, config){
                        $('#filter_modal').modal('show')
                        }
              },
            

        ]
    } );
} );
</script>

<script src="<?=base_url()?>assets/plugins/select2/js/select2.full.min.js"></script>
<script>

$(document).ready(function() {
    $('.select2').select2();
});

</script>
