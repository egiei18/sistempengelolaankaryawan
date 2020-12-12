<link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables/dataTables.bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">

<div class="box">
            <div class="box-header">
              <h3 class="box-title">History Penilaian Kinerja Karyawan</h3>
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
                  <th>ID</th>
                  <th>Nama Lengkap</th>
                  <th>Nilai Upraisal</th>
                  <th>Angka</th>
                  <th>Tanggal Penilaian</th>
                  <?php if ($this->session->userdata('username') == 'Admin') {?>
                  <th>Action</th>
                  <?php } ?>
                </tr>
                </thead>
                <tbody>
                <?php
                  $id= 1;
                  foreach($upraisal_log as $riwayat) {
                  ?>         
                    <tr>
                      <td><?php echo $id++; ?></td>
                      <td><?php echo $riwayat->FullName; ?></td>
                      <td><?php echo $riwayat->abjad; ?></td>
                      <td><?php echo $riwayat->angka; ?></td>
                      <td><?php echo $riwayat->tanggal_penilaian; ?></td>
                      <?php if ($this->session->userdata('username') == 'Admin') {?>
                      <td>
                        <button type="submit" class="btn btn-primary" onclick="location.href='<?=base_url()?>riwayat/edit/<?php echo $riwayat->id; ?>'"><i class="fa fa-fw fa-edit"></i></button>
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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
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
            'colvis'
        ]
    } );
} );
</script>
