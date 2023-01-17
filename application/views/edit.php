<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application - Update View</title>
    <link rel="stylesheet" href="<?php echo base_url().'asset/css/bootstrap.min.css';?>">
</head>
<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">CRUD Application</a>
        </div>
    </div>
    <div class="container" style="padding-top: 10px" >
        <div class="row">
            <div class="col-md-12">
                <?php
                $success = $this->session->flashdata('success');
                if($success != ""){
                ?>
                <div class="alert alert-success"><?php echo $success;?></div>
                <?php }?>
            </div>
        </div>
        <h3>Update User</h3>
        <hr class="col-md-6">
        <div class="row">
            <form method="post" name="createUser" action="<?php echo base_url().'index.php/user/edit/'.$user['user_id'];?>">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" value="<?php echo set_value('name',$user['name']);?>" class="form-control" placeholder="Enter your name" >
                        <?php echo form_error('name');?>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" value="<?php echo set_value('email',$user['email']);?>" class="form-control" placeholder="Enter your email">
                        <?php echo form_error('email');?>
                    </div>
                    <div class="form-group" style="padding-top: 10px">
                        <button class="btn btn-primary">Update</button>
                        <a href="<?php echo base_url().'index.php/user/index/'; ?>" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </form> 
        </div>
    </div>
</body>
</html>