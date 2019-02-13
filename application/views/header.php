<html>
    <head>
        
        <link rel="stylesheet" href="/static/css/bootstrap.css"/>
        <link rel="stylesheet" href="/static/css/style_header.css"/>

    </head>
    <body >
        <div class="container-fluid p-0">
            <div class="col-12 p-0 bg-white top">
                <nav class="navbar navbar-expand-lg navbar-light p-0 ">
                    <a class="navbar-brand ml-3" href="../../welcome/home"><img src="/static/img/direction.jpg" class="height_logo"/><span class="text-danger font-weight-bold m-0 text-uppercase logo_name">Direction</span></a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon "></span>
                    </button>
                    <div class=" navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
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
                                    <a class="nav-link dropdown-toggle font-weight-bold text-danger h6" id="dropdownMenuLink" data-toggle="dropdown" href="#menu" aria-haspopup="true" aria-expanded="false">Login/Register</a>


                                    <div id="menu" class="dropdown-menu dropdown-menu-right rounded" aria-labelledby="dropdownMenuLink">
                                        <form method="POST" action="../../registration/signin_submit" class="px-3 py-3">
                                            <div>
                                                <p class="font-weight-bold">Login Here!!!</p>
                                            </div>
                                            <div class="form-group m-0 mb-2">
                                                
                                                <input type="email" name="e-mail" class="col-12 form-control form-control-sm" placeholder="Email  ">
                                            </div>
                                            <div class="form-group m-0 ">
                                                
                                                <input type="password" name="pass" class="col-12 rounded form-control form-control-sm" placeholder="Password">
                                            </div>
                                            <div class="form-check mb-2 mt-1">
                                                <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                                <label class="form-check-label" for="dropdownCheck">
                                                    Remember me
                                                </label>
                                            </div>
                                            
                                            <button type="submit" class="btn btn-block btn-success">Sign in</button>
                                        </form>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="../registration/signup">New around here? Sign up</a>
                                        <a class="dropdown-item" href="#">Forgot password?</a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <script type="text/javascript" src="/static/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="/static/js/bootstrap.js"></script>
        <script type="text/javascript" src="/static/js/bootstrap.min.js"></script>
    </body>
</html>