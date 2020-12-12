<section class="content-header">
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap-3.4.1.min.js" ></script>
    <h1>
    Detail Karyawan <strong>TAB</strong>
    <small>Preview</small>
    </h1>
</section>
<!-- <a class="btn btn-danger" href="<?php echo base_url('pribadi/print/') ?><?php echo $print_privasi->id;?>">
<i class="fa fa-print"></i> Print
</a> -->
<!--Main Content-->
<section class="content">
    <div class="row">
    <!--right column -->
    <div class="col-md-8">
        <div class="box">
        
        <!--Box Header-->
        <div class="box-body no-padding">
            <table class="table">
            <td>
                    <img src="<?php echo base_url();?>assets/foto/<?php echo $print_privasi->foto; ?>"
                    width="140" height="150">
                </td>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><?php echo $print_privasi->FullName ?></td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>:</td>
                    <td><?php echo $print_privasi->NIK ?></td>
                </tr>
                <tr>
                    <td>No.Kartu Keluarga</td>
                    <td>:</td>
                    <td><?php echo $print_privasi->noKK ?></td>
                </tr>
                <tr>
                    <td>No.BPJS Kesehatan</td>
                    <td>:</td>
                    <td><?php echo $print_privasi->noBPJSkesehatan ?></td>
                </tr>
                <tr>
                    <td>No.BPJS Ketenagakerjaan</td>
                    <td>:</td>
                    <td><?php echo $print_privasi->noBPJSketenagakerjaan ?></td>
                </tr>
                <tr>
                    <td>NPWP</td>
                    <td>:</td>
                    <td><?php echo $print_privasi->noNPWP ?></td>
                </tr>
                
               <tr>
                
               </tr>
            </table>
            <script type="text/javascript">
                window.print()
            </script>
        </div>
        </div>
    </div>
    </div>
</section>