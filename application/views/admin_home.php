<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/bootstrap.css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/admin.css"/>

    </head>
    <body>
        <div class="container-fluid">
            <div class="row ">
                <div class="col-1  p-0">
                    <nav class="h-100 navbar navbar-expand-lg navbar-light bg-white flex-column p-0">
                        <a class="navbar-brand p-0 m-0" href="../admin/home"><img src="<?php echo base_url(); ?>static/img/direction.jpg" class="w-100  "/></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>


                        <div class="collapse navbar-collapse " id="navbarSupportedContent">
                            <ul class="navbar-nav nav-tabs d-flex flex-column align-items-center ">
                                <li class="nav-item active">
                                    <a class="nav-link font-weight-bold text-dark my-3"  href="../admin/home">Dashboard<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item ">
                                    <div class=" dropright">
                                        <a  class=" dropdown-toggle nav-link font-weight-bold text-dark my-3" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Venue
                                        </a>
                                        <div class="dropdown-menu">
                                            <a href="../admin/venue"><button class="dropdown-item" type="button">All Venue</button></a>
                                            <a href="../admin/add_venue"><button class="dropdown-item" type="button">Add Venue</button></a>
                                        </div>
                                    </div>
                                </li>

                                <li class="nav-item ">
                                    <div class=" dropright">
                                        <a  class=" dropdown-toggle nav-link font-weight-bold text-dark my-3" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Activities
                                        </a>
                                        <div class="dropdown-menu border-danger">
                                            <a href="../admin/activity"><button class="dropdown-item" type="button">All Activity</button></a>
                                            <a href="../admin/add_activities"><button class="dropdown-item" type="button">Add Activities</button></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </nav>
                </div>
                <div class="col-11 h-100 bg-dark ">

                    1

                </div>
            </div>
        </div>
        <script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>static/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>static/js/bootstrap.min.js"></script>
    </body>
</html>