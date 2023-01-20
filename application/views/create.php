<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application - Create View</title>
    <link rel="stylesheet" href="<?php echo base_url().'asset/css/bootstrap.min.css';?>">

</head>
<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">CRUD Application</a>
        </div>
    </div>
    <div class="container" style="padding-top: 10px" >
        <h3>Create User</h3>
        <hr class="col-md-6">
        <div class="row">
            <form method="post" name="createUser" id="form" >
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input id='name' type="text" name="name" value="<?php echo set_value('name');?>" class="form-control" placeholder="Enter your name" >
                        <?php echo form_error('name');?>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" id='email' name="email" value="<?php echo set_value('email');?>" class="form-control" placeholder="Enter your email">
                        <?php echo form_error('email');?>
                    </div>
                    <div class="form-group" style="padding-top: 10px">
                        <button type="button" class="btn btn-primary" id="create_btn" >Create</button>
                        <a href="<?php echo base_url().'index.php/user/index/'; ?>" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </form> 
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script>
        
        $("#create_btn").click(function() {
            var base_url = '<?php echo base_url() ?>';
            var post_url = base_url + "index.php/User/insertUser";
       
            var data = {
                'name': $('#name').val(),
                'email': $('#email').val(),
            };
            $.ajax({
                url: post_url,
                type: 'POST',
                data: data,
                success: function(data){
                    window.location.href=base_url+"index.php/User/index";
                },
                error: function(){
                    console.log("Not done");
                }
            })
        })
    </script>
</html>