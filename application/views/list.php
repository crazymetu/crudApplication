<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application - List View</title>
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
            <div class="col-6"><h3>List Users</h3></div>
            <div class="col-6">
                <td>
                    <a href="<?php echo base_url().'index.php/user/create/'; ?>" class="btn btn-primary">Create</a>
                </td>
            </div>
        </div>
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
        <hr class="col-md-8">
        <div class="row">
            <div class="col-md-8">
                <table class="table table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <?php if(!empty($users)){ foreach($users as $user){ ?>
                    <tr>
                        <td><?php echo $user['user_id'] ?></td>
                        <td><?php echo $user['name'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                        <td>
                            <a href="<?php echo base_url().'index.php/user/edit/'.$user['user_id'] ?>" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <a href="<?php echo base_url().'index.php/user/delete/'.$user['user_id'] ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php }} else{ ?>
                        <tr>
                            <td colspan=5>Record not found</td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>