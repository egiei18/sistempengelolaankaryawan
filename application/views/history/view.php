<link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables/dataTables.bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
<!-- DataTables -->


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
                  <th>ID</th>
                  <th>Nama Lengkap</th>
                  <th>Perubahan Status</th>
                  <th>Divisi</th>
                  <th>Jabatan</th>
                  <th>Tanggal Perubahan Status</th>
                  <th>Tanggal Perubahan Gaji</th>
                  <?php if ($this->session->userdata('username') == 'Admin') {?>
                  <th>Action</th>
                  <?php } ?>
                </tr>
                </thead>
                <tbody>
                <?php
                  $id = 1;
                  foreach($mutasi_log as $mutasi) {
                  ?>         
                    <tr>
                      <td><?php echo $id++; ?></td>
                      <td><?php echo $log->FullName; ?></td>
                      <td><?php echo $log->perubahan_status; ?></td>
                      <td><?php echo $log->divisi; ?></td>
                      <td><?php echo $log->jabatan; ?></td>
                      <td><?php echo $log->tanggal_status; ?></td>
                      <td><?php echo $log->tanggal_gaji; ?></td>
                      <?php if ($this->session->userdata('username') == 'kabeng') {?>
                      <td>
                        <button type="submit" class="btn btn-primary" onclick="location.href='<?=base_url()?>pegawai/edit/<?php echo $mutasi->id; ?>'"><i class="fa fa-fw fa-edit"></i></button>
                        <button type="submit" class="btn btn-danger" onclick="if(confirm('Apakah anda yakin akan menghapus <?php echo $mutasi->FullName; ?>?')) window.location.href='<?=base_url()?>mutasikaryawan/hapus/<?php echo $mutasi->id; ?>';"><i class="fa fa-fw fa-trash-o"></i></button>
                        <button type="submit" class="btn btn-success" onclick="location.href='<?=base_url()?>mutasikaryawan/detail/<?php echo $mutasi->id; ?>'"><i class="fa fa-fw fa-eye"></i></button>
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
<script src="<?=base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
<!-- page script -->
<script>
 $(document).ready(function() {
    $('#example1').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
