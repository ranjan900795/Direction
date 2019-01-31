<html>
    <head>
        <title>Direction-Visit North India</title>
        <link rel="stylesheet" href="/static/css/bootstrap.css"/>
        <link rel="stylesheet" href="/static/css/compass_style.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row h-75 part d-flex align-items-end px-4 ">
                <div class="col-12 ">
                    <div class="col-sm-6 col-8 bg-quote rounded">
                        <p class=" text-dark"><i class="fa fa-4x fa-quote-left text-danger"></i><span class="h2 mx-1 font-weight-bold text-white show1">We travel not to escape life, but for life not to escape us.</span><i class="fa fa-4x fa-quote-right text-danger"></i></p>
                    </div>

                </div>
                <div class="col-lg-6 col-md-8 col-12 bg-white ">
                    <div class="row">
                        <div class="col-3 btn py-3 rounded-0 flights bg-danger" id="999">
                            <p class="text-white m-0 text-center font-weight-normal" id="998">Flights</p>
                        </div>
                        <div class="col-3 btn py-3 rounded-0 trains" id="997">
                            <p class="text-danger m-0 text-center font-weight-normal" id="996">Trains</p>
                        </div>
                        <div class="col-3 btn py-3 rounded-0 rentals" id="995">
                            <p class="text-danger m-0 text-center font-weight-normal" id="994">Rentals</p>
                        </div>
                        <div class="col-3 btn py-3 rounded-0 hotels" id="993">
                            <p class="text-danger m-0 text-center font-weight-normal" id="992">Hotels</p>
                        </div>         
                    </div>
                </div>               
            </div>
            <div class="row py-4 bg-danger">
                <form class="form-inline">

                    <input type="text" class="form-control my-2 mb-sm-2 mx-2 " id="inlineFormInputName2" placeholder="From">


                    <div class="input-group my-2 mb-sm-2 mx-2">

                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="To">
                    </div>
                    <div class="input-group my-2 mb-sm-2 mx-2">
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Adult(>16)">
                    </div>
                    <div class="input-group my-2 mb-sm-2 mx-2">
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="child(<16)">
                    </div>
                    <div class="input-group my-2 mb-sm-2 mx-2">
                        <div class='input-group date' id='datetimepicker3'>
                            <input type='text' class="form-control" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-time"></span>
                            </span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mx-2 mx-sm-0 px-5 my-2 rounded-0">Search</button>
                </form>
            </div>
            <div class="row">
                <div class="col-12 ">
                    <p class="text-center text-uppercase m-0 font-weight-bold h2 mt-5">Trending Venue</p>
                    <p class="text-center font-weight-normal m-0 text-muted">The most searched places in india</p>
                </div>
                <div class="col-12 pl-5">
                    <div class="col-11 m-auto">
                        <div class="row mt-4">
                            <?php foreach ($part as $row) { ?>
                                <div class="col-md-4 col-12 mb-4">                                
                                    <div class="row ">
                                        <div class="col-4 rounded-left border field_height">
                                            1
                                        </div>
                                        <div class="col-7 rounded-right border field_height">
                                            <p class="font-weight-bold text-uppercase font_style"><?php
                                                $dest = $row->destination;
                                                print_r($dest);
                                                ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                            ?>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row mt-5  ">
                <div class="col-12 ">
                    <div class="col-1 m-auto border border-danger">                        
                    </div>
                    <p class="text-center text-uppercase m-0 font-weight-bold h2 mt-2">Open Your World</p>
                    <p class="text-center font-weight-normal m-0 text-muted">Get Inspired, Find the Best deals and start an unforgetable Journey</p>
                </div>
                <div class="col-11 m-auto">
                    <div class="row my-5">
                        <div class="col-md-5 col-11 m-auto h-50 p-0">
                            <img src="/static/img/hotel.jpeg" class="w-100 h-100 rounded"/>
                            <div class="carousel-caption">
                                <p class="text-center text-white font-weight-bold m-0 h4 img-fluid">Discover your dream Hotel</p>
                                <p class="text-center text-white font-weight-bold m-0 h5">Find the best Deals.</p>
                            </div>
                        </div>
                        <div class="col-md-5 col-11 m-auto h-50 p-0">
                            <img src="/static/img/cars.jpg" class="w-100 h-100 rounded"/>
                            <div class="carousel-caption">
                                <p class="text-center text-white font-weight-bold m-0 h4 img-fluid">Rent your dream Cars</p>
                                <p class="text-center text-white font-weight-bold m-0 h5">Drive cars which u always want to drive.</p>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="row ">
                <div class="col-12 ">
                    <div class="col-1 m-auto border border-danger">                        
                    </div>
                    <p class="text-center text-uppercase m-0 font-weight-bold h2 mt-2">September Deals</p>
                    <p class="text-center font-weight-normal m-0 text-muted">Plan your escape to Our Hottest deals</p>
                </div>
                <div class="col-9 col-md-11 m-auto ">
                    <div class="row mt-4">
                        <div class="col-md-4 col-12 mb-2 mb-md-0 h-25 p-0">
                            <img src="/static/img/september_1.jpg" class="w-100 h-100 rounded-left"/>
                            <div class="carousel-caption p-0 ">
                                <p class="text-center text-danger font-weight-bold h4 m-0 img-fluid">Spiti valley: 2D/3N</p>
                                <p class="text-center text-white font-weight-bold m-0 ">Exclusive price of Rs.2999</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mb-2 mb-md-0 h-25 p-0">
                            <img src="/static/img/september_2.jpg" class="w-100 h-100"/>
                            <div class="carousel-caption p-0">
                                <p class="text-center text-danger font-weight-bold m-0 h4 img-fluid">Amritsar: 2D/3N</p>
                                <p class="text-center text-white font-weight-bold m-0 h5">Exclusive price of Rs. 2499</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mb-2 mb-md-0 h-25 p-0">
                            <img src="/static/img/september_3.jpg" class="w-100 h-100 rounded-right"/>
                            <div class="carousel-caption p-0">
                                <p class="text-center text-danger font-weight-bold m-0 h4 img-fluid">Srinagar: 2D/3N</p>
                                <p class="text-center text-white font-weight-bold m-0 h5">Exclusive price of Rs.3599</p>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="row my-5 py-5">
                <div class="col-md-7 col-11 m-auto ">
                    <p class="text-center font-weight-normal text-dark h4"><i class="fa fa-2x fa-quote-left text-danger"></i><span class="font_design mx-1">Direction is by far one of the best travel websites for sourcing travel deals</span><i class="fa fa-2x fa-quote-right text-danger"></i></p>
                </div>
            </div>           
        </div>
        <script type="text/javascript" src="/static/js/compass.js"></script>
    </body>
</html>
