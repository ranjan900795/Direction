<html>
    <head>  
        <title>
            Direction Account
        </title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/bootstrap.css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/admin.css"/>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row h-100 bg-dark">
                <div class="col-4 border border-dark m-auto bg-white px-5 py-5 center ">
                    <div class="col d-flex p-0 align-items-center ">
                        <img src="<?php echo base_url(); ?>static/img/direction.jpg" class="img"/><span class="text-danger font-weight-bold  text-uppercase h1">Direction</span> 
                     </div>
                    <div class="col my-4">
                       <p class="font-weight-normal h5 text-center mt-2 sign">Welcome, Please sign in </p>  
                    </div>
                    <div class="col m-auto">
                        <form method="POST" action="../admin/login_submit">
                            <div class="form-group">
                                <label for="username" class="font-weight-bold">User Name</label>
                                <input type="name" name="name" class="form-control border-dark rounded-0" id="username" >
                             
                            </div>
                            <div class="form-group ">
                                <label for="password" class="font-weight-bold">Password</label>
                                <input type="password" name="password" class="form-control border-dark rounded-0" id="password">
                            </div>
                            
                            <button type="submit" class="btn btn-success btn-lg mt-3 rounded-0 font-weight-bold ">Submit</button>
                        </form>
                    </div>
                </div>
            </div> 
        </div>
    </body>