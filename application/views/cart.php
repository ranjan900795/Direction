<html>
    <head>

        <link rel="stylesheet" href="/static/css/bootstrap.css"/>
    </head>
    <body>
        <div class="container-fluid bg-light">
            <div class="row border pt-5">
                <div class="bg-white col-11 mx-auto mb-4">
                    <p class="my-1"><a href="../welcome/home" class="text-success">Home </a>/<a href="../cart/shopping_cart" class="text-muted"> Shopping Cart</a></p>
                </div>
                <div class="col-11 m-auto bg-white p-0 ">
                    <div class="col-12  ">
                        <p class="font-weight-bold h4 mt-3">Shopping cart</p>
                        <p class="font-weight-normal h6 text-muted">You currently have 3 item(s) in your cart.</p>
                    </div>
                    <div class="col-12 ">
                        <div class="row mx-1 mt-5 border border-left-0 border-right-0 py-2 bg-light">
                            <div class="col-4 p-0">
                                <p class="ml-5">Product</p>
                            </div>
                            <div class="col-1 p-0">
                                <p class="text-center">Quantity</p>
                            </div>
                            <div class="col-2 p-0">
                                <p  class="text-center">Unit Price</p>
                            </div>
                            <div class="col-2 p-0">
                                <p class="text-center"> Discount</p> 
                            </div>
                            <div class="col-2 p-0 ">
                                <p class="text-center">Total</p>
                            </div>
                            <div class="col-1 p-0">

                            </div>
                        </div>
                        <?php
                        foreach ($item as $row) {
                            $name = $row->name;
                            $qty = $row->qty;
                            $unit_price = $row->price;
                            $total = $row->total_price;
                            $id = $row->id;
                            ?>
                            <div class="row mx-1 my-4  bg-light ">

                                <div class="col-4  ">
                                    <div class="row ">
                                        <div class="col-5 h-25 ">
                                            1
                                        </div>
                                        <div class="col-7 d-flex justify-content-center align-items-center ">
                                            <?php
                                            print_r($name);
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1  d-flex justify-content-center align-items-center p-0">
                                    <a href="../cart/update/<?php echo $id; ?>/0" class="font-weight-bold text-dark " ><button type="button" class="" id="dec" disabled>-</button></a>
                                    <p class="font-weight-bold m-auto" >
                                    <?php 
                                    print_r($qty);
                                    ?>
                                    </p>
                                    <a href="../cart/update/<?php echo $id; ?>/1" class="font-weight-bold text-dark"><button type="button"> +</button></a>
                                </div>
                                <div class="col-2 d-flex justify-content-center align-items-center p-0">
                                    <i class="fa fa-inr" aria-hidden="true"></i> <?php
                                    print_r($unit_price);
                                    ?>
                                </div>
                                <div class="col-2 d-flex justify-content-center align-items-center p-0">
                                    1 
                                </div>
                                <div class="col-2  d-flex justify-content-center align-items-center p-0">
                                    <i class="fa fa-inr" aria-hidden="true"></i> <?php
                                    print_r($total);
                                    ?>
                                </div>
                                <div class="col-1  d-flex justify-content-center align-items-center p-0">
                                    <a href="../cart/delete/<?php echo $id; ?>"><i class="fa fa-trash text-dark" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="row my-5  mx-1">
                            <div class="col-12  ">
                                <div class="row">
                                    <div class="col-2 mx-3 border p-0 ">
                                        <button class="btn btn-danger w-100 font-weight-bold rounded-0"><i class="fa fa-arrow-left" aria-hidden="true"></i> Continue Shopping</button>
                                    </div>
                                    <div class="col-2 mx-3 border p-0">
                                        <button class="btn btn-success w-100 font-weight-bold rounded-0">Checkout <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="/static/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="/static/js/bootstrap.js"></script>
        <script type="text/javascript" src="/static/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/static/js/cart.js"></script>
    </body>
</html>