<section class="content-header">
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap-3.4.1.min.js" ></script>
    <h1>
    Detail Data Pribadi <strong>TAB</strong>
    <small>Preview</small>
    </h1>
    
</section>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="<?php echo base_url('pribadi/print/'); ?><?php echo $detail->id;?>">
<i class="fa fa-print"></i> Print
</a>
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
                    <img src="<?php echo base_url();?>assets/foto-pribadi/<?php echo $detail->foto; ?>"
                    width="140" height="150">   
                </td>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><?php echo $detail->FullName ?></td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>:</td>
                    <td><?php echo $detail->NIK ?></td>
                </tr>
                <tr>
                    <td>No. Kartu Keluarga</td>
                    <td>:</td>
                    <td><?php echo $detail->noKK ?></td>
                </tr>
                <tr>
                    <td>No.BPJS Kesehatan</td>
                    <td>:</td>
                    <td><?php echo $detail->noBPJSkesehatan ?></td>
                </tr>
                <tr>
                    <td>No.BPJS Ketenagakerjaan</td>
                    <td>:</td>
                    <td><?php echo $detail->noBPJSketenagakerjaan ?></td>
                </tr>
                <tr>
                    <td>NPWP</td>
                    <td>:</td>
                    <td><?php echo $detail->noNPWP ?></td>
                </tr>
               
               
            </table>
        </div>
        </div>
    </div>
    </div>
</section>