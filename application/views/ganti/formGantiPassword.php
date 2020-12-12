<div class="login-box-body" style="width:50%">
<!-- <div class="row justify-content-center"> -->
    <div class="col-6 style="width:50%">
        <h3><?php echo $title ?></h3>
        <?php echo form_open('site/changePassword', array('id' => 'passwordForm'))?>
        <!-- <div class="form-group">
            <input type="password" name="oldpass" id="oldpass" class="form-control" placeholder="Password Lama"/>
            <?php echo form_error('oldpass','<div class="error">','</div>')?>
        </div> -->
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Masukkan Password Lama..." name="oldpass" id="oldpass">
            <span class="glyphicon glyphicon-eye-open form-control-feedback"></span>
            <?php echo form_error('oldpass','<div class="error">','</div>')?>
      </div>
        <!-- <div class="form-group">
            <input type="password" name="newpass" id="newpass" class="form-control" placeholder="Password Baru"/>
            <?php echo form_error('newpass','<div class="error">','</div>')?>
        </div> -->
        <div class="form-group has-feedback">
            <input  type="password" class="form-control" placeholder="Harap Masukkan Password Baru ya.." name="newpass" id="newpass">
            <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
            <?php echo form_error('newpass','<div class="error">','</div>')?>
      </div>
        <!-- <div class="form-group">
            <input type="password" name="passconf" id="passconf" class="form-control" placeholder="Hmm.. Konfirmasikan Password barumu"/>
            <?php echo form_error('passconf','<div class="error">','</div>')?>
        </div> -->
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Ulangi Password Barumu oke.." name="passconf" id="passconf">
            <span class="glyphicon glyphicon-repeat form-control-feedback"></span>
            <?php echo form_error('passconf','<div class="error">','</div>')?>
      </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success"><i class="fa fa-key"></i>  Change Password</button>
        </div>
        <?php echo form_close();?>
    </div>
</div>
</div>
<!-- <div class="container-fluid">
<div class="login-box-body">
<div class="row">

<div class="col-lg-6">
    <?=$this->session->flashdata('message');?>
<form action="<?=base_url('site/changePassword');?>" method="post">
    <div class="form-group">
        <label for="current_password"> Current Password </label>
        <input type = "password" class="form-control" id="current_password" name="current_password" placeholder="Current Password">
        <?php echo form_error('current_password','<small class="text-danger pl-3">','</small>');?>
    </div>
    <div class="form-group">
        <label for="new_password1">New Password</label>
        <input type="password" class="form-control" id="new_password1" name="new_password1" placeholder="New Password">
        <?php echo form_error('new_password1','<small class="text-danger pl-3">','</small>');?>
    </div>
    <div class="form-group">
        <label for="new_password2">Repeat Password</label>
        <input type="password" class="form-control" id="new_password2" name="new_password2" placeholder="Confirm New Password">
        <?php echo form_error('new_password2','<small class="text-danger pl-3">','</small>');?>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Change Password</button>
    </div>
</form>
</div>

</div>
</div>
</div>

<h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1> -->


<!-- <div class="panel panel-green">
    <div class="panel-heading">
        <i class="fa fa-key"></i>Change Password
    </div>
    <div class="panel-body">
        <?php echo form_open()?>
            <div class="row">
                <div class="form-group">
                    <label>Old Password</label>
                    <input type="password" name="old_pass" value="<?php set_value('old_pass')?>" class="form-control" placeholder="Enter Old Password">
                    <?php echo form_error('old_pass')?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label>New Password</label>
                    <input type="password" name="new_pass" value="<?php set_value('new_pass')?>" class="form-control" placeholder="Enter New Password">
                    <?php echo form_error('new_pass')?>
                </div>
                <div class="col-lg-4">
                <div class="form-group">
                    <label>Repeat New Password</label>
                    <input type="password" name="rep_new_pass" value="<?php set_value('rep_new_pass')?>" class="form-control" placeholder="Repeat New Password">
                    <?php echo form_error('rep_new_pass')?>
                </div>
            </div>
    </div>
</div> -->
<!-- <div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <div class="card" style="width:50%">
        <div class="login-box-body">
            <form method="POST" action="<?php echo base_url('site/changePassword') ?>">
                <div class="form-group">
                    <label>Password Baru</label>
                    <input type="password" name="passBaru" class="form-control">
                    <?php echo form_error('passBaru','<div class="text-small text-danger"></div>')?>
                </div>
                <div class="form-group">
                    <label>Ulangi Password</label>
                    <input type="password" name="ulangiPass" class="form-control">
                    <?php echo form_error('passBaru','<div class="text-small text-danger"></div>')?>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>
</div> -->