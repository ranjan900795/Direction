<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/bootstrap.css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/admin.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
                                        <div class="dropdown-menu border-danger">
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
                <div class="col-11  bg-dark p-0 ">
                    <div class="col bg-white">
                        <div class="row">
                            <div class="col-4 p-2 ">
                                <p class="font-weight-bold h3 text-center text-danger">ADD VENUE</p>
                            </div>
                            <div class="col-8 d-flex justify-content-end align-items-center">
                                <div class="dropdown">
                                    <a class=" dropdown-toggle text-danger font-weight-bold" href=""  id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Welcome Admin
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right border-danger" aria-labelledby="dropdownMenu2">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col p-0">
                        <form method="POST" action="../admin/places_upload" enctype="multipart/form-data" class="p-3 ">

                            <div class="form-group row m-0 my-3">
                                <label class="text-white font-weight-bold">Venue Name</label> 
                                <div class="col">
                                    <input type="name" name="destination" class="col-12 form-control form-control-sm rounded-0 ">
                                </div> 
                            </div>
                            <div class="form-group row m-0 my-3">
                                <label for="exampleFormControlTextarea1" class="text-white font-weight-bold">Description</label>
                                <div class="col">
                                    <textarea name="description" class="form-control col-12 form-control form-control-sm rounded-0" id="exampleFormControlTextarea1" rows="5"></textarea>
                                </div>
                            </div>
                            <p class="text-white font-weight-bold h5 ">Local Weather:</p>
                            <div class="form-group row m-0 my-3">
                                <ul class="text-white">
                                    <li >
                                        <label for="formControlRange" class="text-white font-weight-bold">Dec-Feb</label>
                                        <div class="col ">

                                            <input type="range" class="form-control-range custom-range " id="formControlRange" min="0" max="100" step="1  " name="dec"> 
                                        </div>
                                    </li> 
                                    <li>
                                        <label for="formControlRange" class="text-white font-weight-bold">Mar-May</label>
                                        <div class="col">

                                            <input type="range" class="form-control-range custom-range" id="formControlRange" min="0" max="100" step="1 " name="mar">
                                        </div>
                                    </li>
                                    <li>
                                        <label for="formControlRange" class="text-white font-weight-bold">Jun-Aug</label>
                                        <div class="col">
                                            <input type="range" class="form-control-range custom-range" id="formControlRange" min="0" max="100" step="1  " name="jun">
                                        </div>
                                    </li>
                                    <li>
                                        <label for="formControlRange" class="text-white font-weight-bold">Sep-Nov</label>
                                        <div class="col">
                                            <input type="range" class="form-control-range custom-range" id="formControlRange" min="0" max="100" step="1  " name="sep">
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="form-group row m-0 my-3"> 
                                <label for="file" class="text-white font-weight-bold">Image</label>
                                <div class="col">
                                    <input type="file" name="file" class="form-control-file col-12 form-control form-control-sm rounded-0" id="file">
                                </div>
                            </div>
                            <div class="form-group row col-md-4 m-0 p-0 my-3">
                                <label class="text-white font-weight-bold">Database Selection</label>
                                <div class="col">
                                    <select id="inputState" class="form-control" name="part">
                                        <option selected>choose indian part</option>
                                        <option>south</option>
                                        <option>north</option>
                                        <option>east</option>
                                        <option>west</option>
                                        <option>central</option>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-block btn-success">Upload</button>
                        </form>
                        
                    </div>

                </div>
            </div>
        </div>
        <script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>static/js/bootstrap.min.js"></script>
    </body>
</html>

