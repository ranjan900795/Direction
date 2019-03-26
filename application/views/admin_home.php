<html>
    <head>

        <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/bootstrap.css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/admin.css"/>

    </head>
    <body>
        <div class="container-fluid">
            <div class="row p-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-white flex-column p-0">
                    <a class="navbar-brand " href="../admin/home"><img src="<?php echo base_url(); ?>static/img/direction.jpg" class="img"/></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>


                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  flex-column justify-content-around ">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Dashboard<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Disabled</a>
                            </li>
                        </ul>

                    </div>
                </nav>

                <div class="col h-100 bg-dark border">
                    1
                </div>
            </div>
        </div>
    </body>
</html>