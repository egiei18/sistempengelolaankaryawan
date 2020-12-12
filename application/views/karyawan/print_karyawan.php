<section class="content-header">
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap-3.4.1.min.js" ></script>
    <h1>
    Detail Karyawan <strong>TAB</strong>
    <small>Preview</small>
    </h1>
</section>
<!-- <a class="btn btn-danger" href="<?php echo base_url('karyawan/print/') ?><?php echo $print_karyawan->id;?>">
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
                    <img src="<?php echo base_url();?>assets/foto/<?php echo $print_karyawan->foto; ?>"
                    width="140" height="150">
                </td>
                <tr>
                    <td>NIP</td>
                    <td>:</td>
                    <td><?php echo $print_karyawan->NIP ?></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><?php echo $print_karyawan->FullName ?></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?php echo $print_karyawan->agama ?></td>
                </tr>
                <tr>
                    <td>Usia</td>
                    <td>:</td>
                    <td><?php echo $print_karyawan->usia ?> tahun</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td><?php echo $print_karyawan->status ?></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><?php echo $print_karyawan->tempat_lahir ?></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><?php echo $print_karyawan->tanggal_lahir ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?php echo $print_karyawan->gender ?></td>
                </tr>
                <tr>
                    <td>Divisi</td>
                    <td>:</td>
                    <td><?php echo $print_karyawan->divisi ?></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td><?php echo $print_karyawan->Jabatan ?></td>
                </tr>
                <tr>
                    <td>No. Handphone</td>
                    <td>:</td>
                    <td><?php echo $print_karyawan->MobileNo ?></td>
                </tr>
                <tr>
                    <td>Alamat Email</td>
                    <td>:</td>
                    <td><?php echo $print_karyawan->EmailAddress ?></td>
                </tr>
                <tr>
                    <td>Tanggal Masuk</td>
                    <td>:</td>
                    <td><?php echo $print_karyawan->tanggal_masuk ?></td>
                </tr>
                <tr>
                    <td>Lama Bekerja</td>
                    <td>:</td>
                    <td><?php echo $print_karyawan->lama_bekerja ?> tahun</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?php echo $print_karyawan->alamat ?></td>
                </tr>
                <tr>
                    <td>Kode Pos</td>
                    <td>:</td>
                    <td><?php echo $print_karyawan->kode_pos ?></td>
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