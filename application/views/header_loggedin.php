<html>
    <head>
        
        <link rel="stylesheet" href="<?php echo base_url();?>static/css/bootstrap.css"/>
        <link rel="stylesheet" href="<?php echo base_url();?>static/css/style_header.css"/>
    </head>
    <body ">
        <div class="container-fluid p-0">
            <div class="col-12 p-0 bg-white top">
                <nav class="navbar navbar-expand-lg navbar-light p-0 ">
                    <a class="navbar-brand " href="../../welcome/home"><img src="<?php echo base_url();?>static/img/direction.jpg" class="height_logo"/><span class="text-danger font-weight-bold m-0 text-uppercase logo_name">Direction</span></a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon "></span>
                    </button>
                    <div class="navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item ml-4">
                                <a class="nav-link font-weight-bold text-danger h6" href="../welcome/support">24*7 Support<span class="sr-only">(current)</span></a>
                            </li>
                           <li class="nav-item ml-4">
                                <a class="nav-link font-weight-bold text-danger h6" href="../welcome/buisness">Direction For Buisness</a>
                            </li>
                            <li class="nav-item ml-4">
                                <a class="nav-link font-weight-bold text-danger h6" href="../../cart/shopping_cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a>
                            </li>

                            <li class="nav-item ml-4"> 
                                <div class="dropdown">
                                    <a class="nav-link dropdown-toggle font-weight-bold text-danger h6" id="dropdownMenuLink" data-toggle="dropdown" href="#menu" aria-haspopup="true" aria-expanded="false">My Account</a>


                                    <div id="menu" class="dropdown-menu dropdown-menu-right rounded" aria-labelledby="dropdownMenuLink">

                                        <a class="dropdown-item" href="#">Action</a>


                                        <a class="dropdown-item" href="#">Another action</a>


                                        <a class="dropdown-item" href="#">Something else here</a>

                                        <div class="dropdown-divider"></div>

                                        <a class="dropdown-item" href="../../registration/signout">Logout</a>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <script type="text/javascript" src="<?php echo base_url();?>static/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>static/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>static/js/bootstrap.min.js"></script>
    </body>
</html>