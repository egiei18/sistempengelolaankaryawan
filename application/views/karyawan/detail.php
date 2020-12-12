<!-- <div class="content-wrapper">
<section class="content">
    <div class="col-md-6">
    <h4><strong>DETAIL DATA KARYAWAN (TAB)</strong></h4>
    <h2><strong>Transtama Antar Buana</strong></h2><br><br><br>
    <table class="table">
        <tr>
            <th>NIP</th>
            <td><?php echo $detail->NIP ?></td>
        </tr>
        <tr>
            <th>Nama Lengkap</th>
            <td><?php echo $detail->FullName ?></td>
        </tr>
        <tr>
            <th>Agama</th>
            <td><?php echo $detail->agama ?></td>
        </tr>
        <tr>
            <th>Usia</th>
            <td><?php echo $detail->usia ?></td>
        </tr>
        <tr>
            <th>Status</th>
            <td><?php echo $detail->status ?></td>
        </tr>
        <tr>
            <th>Tempat Lahir</th>
            <td><?php echo $detail->tempat_lahir ?></td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td><?php echo $detail->tanggal_lahir ?></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td><?php echo $detail->gender ?></td>
        </tr>
        <tr>
            <th>Divisi</th>
            <td><?php echo $detail->divisi ?></td>
        </tr>
        <tr>
            <th>Jabatan</th>
            <td><?php echo $detail->Jabatan ?></td>
        </tr>
        <tr>
            <th>No. Handphone</th>
            <td><?php echo $detail->MobileNo ?></td>
        </tr>
        <tr>
            <th>Alamat Email</th>
            <td><?php echo $detail->EmailAddress ?></td>
        </tr>
        <tr>
            <th>Tanggal Masuk</th>
            <td><?php echo $detail->tanggal_masuk ?></td>
        </tr>
        <tr>
            <th>Lama Bekerja</th>
            <td><?php echo $detail->lama_bekerja ?></td>
        </tr>
        <tr>
            <th>Alamat Rumah</th>
            <td><?php echo $detail->alamat ?></td>
        </tr>
        <tr>
            <th>Kode Pos</th>
            <td><?php echo $detail->kode_pos ?></td>
        </tr>
    </table>
</section>
    </div>
    
</div> -->
<section class="content-header">
    <h1>
    Detail Karyawan <strong>TAB</strong>
    <small>Preview</small>
    </h1>
</section>
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap-3.4.1.min.js" ></script><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="<?php echo base_url('karyawan/print/'); ?><?php echo $detail->id;?>">
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
                    <img src="<?php echo base_url();?>assets/foto/<?php echo $detail->foto; ?>"
                    width="140" height="150">
                </td>
                <tr>
                    <td>NIP</td>
                    <td>:</td>
                    <td><?php echo $detail->NIP ?></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><?php echo $detail->FullName ?></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?php echo $detail->agama ?></td>
                </tr>
                <tr>
                    <td>Usia</td>
                    <td>:</td>
                    <td><?php echo $detail->usia ?> tahun</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td><?php echo $detail->status ?></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><?php echo $detail->tempat_lahir ?></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><?php echo $detail->tanggal_lahir ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?php echo $detail->gender ?></td>
                </tr>
                <tr>
                    <td>Divisi</td>
                    <td>:</td>
                    <td><?php echo $detail->divisi ?></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td><?php echo $detail->Jabatan ?></td>
                </tr>
                <tr>
                    <td>No. Handphone</td>
                    <td>:</td>
                    <td><?php echo $detail->MobileNo ?></td>
                </tr>
                <tr>
                    <td>Alamat Email</td>
                    <td>:</td>
                    <td><?php echo $detail->EmailAddress ?></td>
                </tr>
                <tr>
                    <td>Tanggal Masuk</td>
                    <td>:</td>
                    <td><?php echo $detail->tanggal_masuk ?></td>
                </tr>
                <tr>
                    <td>Lama Bekerja</td>
                    <td>:</td>
                    <td><?php echo $detail->lama_bekerja ?> tahun</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?php echo $detail->alamat ?></td>
                </tr>
                <tr>
                    <td>Kode Pos</td>
                    <td>:</td>
                    <td><?php echo $detail->kode_pos ?></td>
                </tr>
               <tr>
                
               </tr>
            </table>
        </div>
        </div>
    </div>
    </div>
</section>