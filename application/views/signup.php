<html>
    <head>  
        <title>
            Direction Account
        </title>
        <link rel="stylesheet" href="/static/css/bootstrap.css"/>
        <link rel="stylesheet" href="/static/css/style1.css"/>
    </head>
    <body class="bg-light">
        <div class="container-fluid">
            
            <div class="row py-4">
                <div class="col-12 m-auto">
                    <p class="text-center m-auto font-weight-bold h5">Welcome to Direction!!!</p>
                </div>
                <div class="col-12 m-auto">
                    <p class="text-center m-auto text-black-50">Please enter your Email ID to proceed......</p>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-11 col-sm-9 col-md-7 bg-white  m-auto main">
                    <div class="row">
                        <div class="col-sm-5 col-12 p-0 pt-2">
                            <div class="col-7 col-sm-9 m-auto  h-25 ">
                                <img src="/static/img/user.png" class="h-100 w-100"/>
                            </div>
                            <div class="col ">                               
                                <form method="POST" id="register_form" class="mb-0">
                                    <label for="exampleFormControlInput1" class="mt-1 font-weight-bold text-muted">Full Name</label>
                                    <input type="text" name="Name" class="form-control mb-1 email text-muted" id="exampleFormControlInput1" placeholder="Enter your FullName">
                                    
                                    <label for="exampleFormControlInput1" class="mt-1 font-weight-bold text-muted">Email</label>
                                    <input type="email" name="e-mail" class="form-control mb-1 email text-muted" id="exampleFormControlInput1" placeholder="name@example.com">
                                    <label for="exampleFormControlInput1" class="mt-1 font-weight-bold text-muted">Password</label>
                                    <input type="password" name="pass" class="form-control mb-0 email text-muted" id="exampleFormControlInput1" placeholder="********">
                                    <small id="passwordHelpInline" class="text-muted ">
                                    Must be 8-20 characters long.
                                    </small>
                                    
                                    <button type="submit" name="register" id="submit" class="btn btn-danger btn-block font-weight-bold mt-3 mb-0 continue">Continue</button></br>
                                </form>
                                <p class=" terms">By proceeding, you agree with our Terms of Service & Privacy Policy</p>
                            </div>
                        </div>
                        <div class="col-sm-7 col-12  d-flex py-2">
                            <div class="col-11 m-auto height d-flex align-items-center p-0 ">
                                <img src="/static/img/buddha.jpeg" class="w-100 h-100 img"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="/static/js/loginscript.js"></script>
        <script type="text/javascript" src="/static/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="/static/js/register.js"></script>
    </body>
</html>