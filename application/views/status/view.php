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

<div class="modal fade " id="filter_mutasi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Filter</h4>
        
      </div>
      <form method="post" action="<?php echo base_url('status');?>">
      <div class="modal-body">    
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
        <label for="formGroupExampleInput">Perubahan Status</label>
        
          <select class="form-control  select2" name="perubahan_status[]" multiple>
           <option value="Promosi">Promosi<option>
           <option value="Mutasi">Mutasi<option>
           <option value="Demosi">Demosi<option>
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
<div class="box">
            <div class="box-header">
              <h3 class="box-title">History Perubahan Status</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

            <?php if($this->session->flashdata('info')) { ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo $this->session->flashdata('info'); ?>
              </div>
            <?php } ?>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <!-- <th>ID</th> -->
                  <th>Nama Lengkap</th>
                  <th>Status</th>
                  <th>Perubahan Status</th>
                  <th>Divisi</th>
                  <th>Jabatan</th>
                  <th>Tanggal Perubahan Status</th>
                  <th>Tanggal Perubahan Gaji</th>
                  <?php if ($this->session->userdata('hak_akses') == 'Admin') {?>
                  <th>Action</th>
                  <?php } ?>
                </tr>
                </thead>
                <tbody>
                
                <?php
                  $id= 1;
                  foreach($mutasi_log as $log) {
                  ?>         
                    <tr>
                      <!-- <td><?php echo $id++; ?></td> -->
                      <td><?php echo $log->FullName; ?></td>
                      <td><?php echo $log->status_karyawan; ?></td>
                      <td><?php echo $log->perubahan_status; ?></td>
                      <td><?php echo $log->divisi; ?></td>
                      <td><?php echo $log->jabatan; ?></td>
                      <td><?php echo $log->tanggal_status; ?></td>
                      <td><?php echo $log->tanggal_gaji; ?></td>
                      <?php if ($this->session->userdata('hak_akses') == 'Admin') {?>
                      <td>
                        <button type="submit" class="btn btn-primary" onclick="location.href='<?=base_url()?>status/edit/<?php echo $log->id; ?>'"><i class="fa fa-fw fa-edit"></i></button>
                        <!-- <button type="submit" class="btn btn-danger" onclick="if(confirm('Apakah anda yakin akan menghapus <?php echo $log->FullName; ?>?')) window.location.href='<?=base_url()?>mobil/hapus/<?php echo $log->id_mutasi; ?>';"><i class="fa fa-fw fa-trash-o"></i></button> -->
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
                        $('#filter_mutasi').modal('show')
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
