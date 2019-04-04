<html>
    <head>
        <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/bootstrap.css"/>
    </head>
    <body >
        <div class="container-fluid ">
            <div class="row">
                <div class="col-12 h-50  p-0">
                    <img src="<?php echo base_url(); ?>static/img/mumbai_dest.jpg" class="w-100 h-100"/>
                </div>
                <div class="col px-5">
                    <div class="col-12 border ">
                        <p class="font-weight-bold text-uppercase mt-5 h4">What We Love</p>
                        <p class="font-weight-normal text-justify   "><?php
                            foreach ($destination as $row) {
                                print_r($row->description);
                            }
                            ?></p>
                    </div>
                    <div class="col-12 border ">
                        <p class="font-weight-bold text-uppercase h4 mt-5">Popular Activities In <?php
                            foreach ($destination as $row) {
                                print_r($row->dest);
                            }
                            ?></p>
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
                                    <img src="<?php echo base_url(); ?>static/uploads/<?php print_r($image); ?> " class="w-100 h-100"/>
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
                        <p class = "font-weight-bold text-uppercase h4 mt-5">Things To Do In <?php
                            foreach ($destination as $row) {
                                print_r($row->dest);
                            }
                            ?></p>
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
                    <div class = "col-12 border bg-light  p-5">
                        <div class="col p-0 ">
                            <?php
                            foreach ($destination as $row) {
                                ?><p class="font-weight-bold h5 text-capitalize">About <?php print_r($row->dest); ?></p>
                                <p class="font-weight-normal my-3 text-justify"><?php print_r($row->description); ?></p>
                                <?php
                            }
                            ?>
                            <hr>

                            <p class="font-weight-bold h5 text-capitalize">Local Weather <i class="fa fa-thermometer-half"></i></p>
                        </div>
                        <div class="col">
                            <div class="row my-3">
                                <?php foreach ($destination as $row) { ?>



                                    <div class="col-12 col-sm-6 my-2 col-md-3">
                                        <p class="font-weight-bold h6">DEC-FEB</p>
                                        <span class="font-weight-bold"><?php print_r($row->december); ?></span>
                                    </div>
                                    <div class="col-12 my-2 col-sm-6 col-md-3">
                                        <p class="font-weight-bold h6">MAR-MAY</p>
                                        <span class="font-weight-bold"><?php print_r($row->march); ?></span>
                                    </div>
                                    <div class="col-12 my-2 col-sm-6 col-md-3">
                                        <p class="font-weight-bold h6">JUN-AUG</p>
                                        <span class="font-weight-bold"><?php print_r($row->june); ?></span>
                                    </div>
                                    <div class="col-12 my-2 col-sm-6 col-md-3">
                                        <p class="font-weight-bold h6">SEP-NOV</p>
                                        <span class="font-weight-bold"><?php print_r($row->september); ?></span>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <hr>
                        <div class="col p-0">
                            <p class="font-weight-bold h5 text-capitalize">General Information</p>
                            <div class="row p-3">
                                <div class="col-6 col-sm-4 col-md-3">
                                    <p class="font-weight-bold h6">Time Zone</p>
                                    <p class="font-weight-normal text-secondary h6">GMT +05:30</p>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3">
                                    <p class="font-weight-bold h6">Currency</p>
                                    <p class="font-weight-normal text-secondary h6">Indian Rupee</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class = "col-12 border">
                        <p class = "font-weight-bold text-uppercase h4 mt-5">Nearby Destinations</p>
                    </div>
                    <div class = "row border m-0 justify-content-around">
                        <?php
                        $count = 0;
                        foreach ($nearby as $value) {
                            $dest_name = $value->dest;
                            $dest_image = $value->picture;
                            $count++;
                            ?>
                            <div class = "col-lg-2 col-5 h-25 my-2 p-0">
                                <img src="<?php echo base_url(); ?>static/uploads/<?php print_r($dest_image); ?> " class="w-100 h-100"/>

                            </div>
                            <?php
                            if ($count == 5) {
                            break;    
                            }
                        }
                        ?>

                    </div>
                    <div class = "col-12 border pt-4 pb-5 d-flex justify-content-center">
                        <button type = "button" class = "btn btn-outline-warning ">Explore All Destinations</button>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>                                    