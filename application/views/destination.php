<html>
    <head>
        <link rel="stylesheet" href="<?php echo base_url();?>static/css/bootstrap.css"/>
    </head>
    <body >
        <div class="container-fluid ">
            <div class="row">
                <div class="col-12 h-50  p-0">
                    <img src="<?php echo base_url();?>static/img/mumbai_dest.jpg" class="w-100 h-100"/>
                </div>
                <div class="col px-5">
                    <div class="col-12 border ">
                        <p class="font-weight-bold text-uppercase mt-5 h4">What We Love</p>
                        <p class="font-weight-normal text-justify   ">Mumbai, previously called Bombay, is the most populated city in western India. This vibrant city is home to Bollywood, the world's largest tropical forest in an urban zone, and the country's fashion capital.


                            The city of Mumbai is home to not one, not two, but three UNESCO World Heritage Sites! Make sure to make a visit to the Elephant Caves and explore the incredibly carved caves at the site. Stop by Chhatrapati Shivaji, formerly known as Victoria Terminus, and see a railway station of stunning detail. Another set of popular structures would be the Victorian Gothic and Art Deco Ensembles of Mumbai, which includes the Rajabai Clock Tower, the Bombay High Court, and University of Mumbai.</p>
                    </div>
                    <div class="col-12 border ">
                        <p class="font-weight-bold text-uppercase h4 mt-5">Popular Activities In Mumbai</p>
                    </div>
                    <div class="row border m-0 justify-content-around">
                        <?php
                        foreach ($activity as $row) {
                            $name = $row->name;
                            $price = $row->price;
                            $id = $row->id;
                            $image = $row->picture;
                            ?>
                            <div class="col-lg-2 col-sm-5 col-9 my-2 mx-lg-5 border p-0">

                                <div class="col h-25 border p-0">
                                    <img src="<?php echo base_url();?>static/uploads/<?php print_r($image);?> " class="w-100 h-100"/>
                                </div>
                                <div class="col  border">
                                    <?php
                                    print_r($name);
                                    ?>
                                </div>
                                <div class="col  border">
                                    <div class="row p-0">
                                        <div class="col-6 border">
                                            <?php
                                            print_r($price);
                                            ?>
                                        </div>
                                        <div class="col-6 border p-0">
                                            <a href="../../cart/add/<?php echo $id; ?> "><button type = "button" class = "btn btn-warning w-100 border-0 rounded-0">Add To Cart</button></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        <?php }
                        ?>

                    </div>
                    <div class = "col-12 border">
                        <p class = "font-weight-bold text-uppercase h4 mt-5">Discover And Book the Best Activities</p>
                    </div>
                    <div class = "col-12 border h-75">
                        1
                    </div>
                    <div class = "col-12 border">
                        <p class = "font-weight-bold text-uppercase h4 mt-5">Things To Do In Mumbai</p>
                    </div>
                    <div class = "row border m-0 justify-content-around">
                        <div class = "col-lg-3 col-sm-5 col-9 h-25 my-2 border">
                            1
                        </div>
                        <div class = "col-lg-3 col-sm-5 col-9 h-25 my-2 border">
                            1
                        </div>
                        <div class = "col-lg-3 col-sm-5 col-9 h-25 my-2 border">
                            1
                        </div>
                    </div>
                    <div class = "col-12 border">
                        <p class = "font-weight-bold text-uppercase h4 mt-5 mb-3">Travel Tips</p>
                    </div>
                    <div class = "col-12 border bg-light h-75">
                        1
                    </div>
                    <div class = "col-12 border">
                        <p class = "font-weight-bold text-uppercase h4 mt-5">Nearby Destinations</p>
                    </div>
                    <div class = "row border m-0 justify-content-around">
                        <div class = "col-lg-2 col-5 h-25 my-2 border">
                            1
                        </div>
                        <div class = "col-lg-2 col-5 h-25 my-2 border">
                            1
                        </div>
                        <div class = "col-lg-2 col-5 h-25 my-2 border">
                            1
                        </div>
                        <div class = "col-lg-2 col-5 h-25 my-2 border">
                            1
                        </div>
                    </div>
                    <div class = "col-12 border pt-4 pb-5 d-flex justify-content-center">
                        <button type = "button" class = "btn btn-outline-warning ">Explore All Destinations</button>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>                                    