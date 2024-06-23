<?php include_once "header.php"; ?>

    <style>
        body {
            /* background-color: #f0f1f2 !important; */
            font-family: "Roboto", sans-serif;
        }

        @media screen and (max-width:992px) {
            .classified {
                background: #fff;
                border: 1px solid #d9d9d9;
                box-shadow: 1px 4px 5px rgba(0, 0, 0, 0.06);
                border-radius: 10px;
                display: block !important;

            }

            .prd-content table {
                width: 100%;
            }

            .cinfo {
                width: 100%;
            }

            .prd-content {
                padding-left: 17px;
                font-size: 14px;
                position: relative;
                width: 100%;
            }
        }
    </style>
    <!-- breadcrumb start here -->
    <div class="container-fluid my-2">
        <div class="row">
            <div class="col-12">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- members -->
    <!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-7">
            <marquee behavior="" direction="">
                <a href="" target="_blank"><img src="image/categoryimage/cement.jpg" height="auto" width="25%" class="m-3" alt=""></a>
                <a href="" target="_blank"><img src="image/categoryimage/cement.jpg" height="auto" width="25%" class="m-3" alt=""></a>
                <a href="" target="_blank"><img src="image/categoryimage/cement.jpg" height="auto" width="25%" class="m-3" alt=""></a>
                <a href="" target="_blank"><img src="image/categoryimage/cement.jpg" height="auto" width="25%" class="m-3" alt=""></a>
                <a href="" target="_blank"><img src="image/categoryimage/cement.jpg" height="auto" width="25%" class="m-3" alt=""></a>
                <a href="" target="_blank"><img src="image/categoryimage/cement.jpg" height="auto" width="25%" class="m-3" alt=""></a>
                <a href="" target="_blank"><img src="image/categoryimage/cement.jpg" height="auto" width="25%" class="m-3" alt=""></a>
            </marquee>
        </div>
    </div>
  </div> -->

    <!-- view products -->
    <div class=" float-start p-3 position-sticky shadow-sm  border-end   rounded " style="top: 0%; width: 15%;">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button p-2 " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Category
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show " data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul class="navbar-nav">
                            <?php
                            include "config.php";
                            $inner_cat_id = $_GET['inner_cat_id'];

                            $select = "SELECT * from `micro`  where `inner_cat_id`='$inner_cat_id'";
                            $qu = mysqli_query($con, $select);
                            $s_no = 1;
                            while ($row = mysqli_fetch_array($qu)) {


                            ?>
                                <li class="nav-item"><a href="micro-category.php?micro_id=<?php echo $row['micro_id'] ?>" class="nav-link pt-0"><?php echo $row['micro_name'] ?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion mt-3" id="box2">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button p-2" type="button" data-bs-toggle="collapse" data-bs-target="#box" aria-expanded="true" aria-controls="collapseOne">
                        business type
                    </button>
                </h2>
                <div id="box" class="accordion-collapse collapse  show" data-bs-parent="#box2">
                    <div class="accordion-body">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="" class="nav-link pt-0">text</a></li>
                            <li class="nav-item"><a href="" class="nav-link pt-0">text</a></li>
                            <li class="nav-item"><a href="" class="nav-link pt-0">text</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="  float-end p-3  rounded" style="width: 80%;">
            <!-- search city -->
            <div class="container-fluid">
                <!-- top search bar -->
                <!-- <div class="row">
                    <div class="col-4">
                        <form action="" class="d-flex">
                            <input type="text" placeholder="Country Name" class="form-control">
                            <input type="submit" value="Search" class=" btn btn-sm btn-danger">
                        </form>
                    </div>
                    <div class="col-8">
                        <ul class="nav nav_buttons  overflow-x-auto" style="width: 100%;flex-wrap: nowrap;">
                            <a href="" class=" px-2"><button class="" id="btn_active">nawada</button></a>
                            <a href="" class=" px-2"><button>nawada</button></a>
                            <a href="" class=" px-2"><button>nawada</button></a>
                            <a href="" class=" px-2"><button>nawada</button></a>
                            <a href="" class=" px-2"><button>nawada</button></a>
                            <a href="" class=" px-2"><button>nawada</button></a>
                            <a href="" class=" px-2"><button>nawada</button></a>
                            <a href="" class=" px-2"><button>nawada</button></a>
                            <a href="" class=" px-2"><button>nawada</button></a>
                            <a href="" class=" px-2"><button>nawada</button></a>
                            <a href="" class=" px-2"><button>nawada</button></a>
                        </ul>
                    </div>
                </div> -->
                <!-- end here -->
            </div>
            <!-- category here -->
            <!-- <div class="border-top border-danger border-3 mt-2"></div> -->

            <!-- <div class="owl-carousel shadow-lg  alert alert-success my-5   p-3 rounded">
                ?php
                include "config.php";


                $select = "SELECT * from `micro` ";
                $qu = mysqli_query($con, $select);
                $s_no = 1;
                while ($row = mysqli_fetch_array($qu)) {
                    // $sub_id = $row['sub_id'];


                ?>
                    
                        <div class="item text-center ">
                        <a href="product.php?inner_cat_id=?php echo $row['inner_cat_id'] ?>" class="text-decoration-none">
                            <div class="  text-capitalize">
                                <div class="category_image border border-dark border-2   ">
                                    <img src=".admin/?php echo $row['micro_cat_image'] ?>" class="" style="object-fit: cover;" alt="No Image">
                                </div>
                                <p>?php echo $row['micro_name'] ?></p>
                            </div>
                    </a>

                        </div>
                ?php  } ?>
            </div> -->
            <!-- owl category end here -->

            <!-- products grid start here -->
            <!-- <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            ?php
                            include "config.php";
                            $inner_cat_id = $_GET['inner_cat_id'];
                            $select = "SELECT * from `product` where `inner_cat_id`='$inner_cat_id' ";
                            $qu = mysqli_query($con, $select);
                            $s_no = 1;
                            while ($row = mysqli_fetch_array($qu)) {
                                // $sub_id = $row['sub_id'];
                                $inner_cat_id = $row['inner_cat_id'];

                            ?>

                                <div class="col-6 border">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="product_card border-end px-3">
                                                <img src="./admin/extra_image/316170-1.jpg" class="border rounded border-dark border-3" height="200px" width="100%" style="object-fit: cover;" alt="">

                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <h4>title</h4>
                                        </div>
                                    </div>
                                </div>
                            ?php } ?>
                        </div>
                    </div>
                </div>
                
            </div> -->
            <!-- <div class="container">
                <div class="row">
                    <div class="col-4 border align-items-center rounded">
                        <div class=" h-100 d-flex align-items-center rounded">
                            <img src="./admin/extra_image/316170-1.jpg" class="rounded border " height="200px" width="100%" style="object-fit: cover;" alt="">
                        </div>
                    </div>
                    <div class="col-4 border-end">
                        <div class="cards_box mx-2">
                            <h5>Coir Fibers</h5>
                            <button>&34234</button>
                            <a href="" class="d-block">read details</a>
                            <ul class="list-unstyled">
                                <li><a href="">short details</a></li>
                                <li><a href="">short details</a></li>
                                <li><a href="">short details</a></li>
                                <li><a href="">short details</a></li>
                            </ul>
                            <p>Coir Fibers Our Company are the leading wholesale suppliers of Coir Fibers Obtained from the taresues present in seeds of the coconut palm the provided fibers are highly ap... Full Details</p>
                        </div>
                    </div>
                </div>
            </div> -->
            <ul class="classfied-wrap list-unstyled mt-5 d-none s-sm-none d-lg-block">
                <?php
                include "config.php";
                $inner_cat_id = $_GET['inner_cat_id'];
                $select = "SELECT * from `product` where `inner_cat_id`='$inner_cat_id' ";
                $qu = mysqli_query($con, $select);
                $s_no = 1;
                while ($row = mysqli_fetch_array($qu)) {
                    // $sub_id = $row['sub_id'];
                    $inner_cat_id = $row['inner_cat_id'];

                ?>
                    <li>
                        <div class="classified  ">
                            <div class="prd-info  ">
                                <div class="prd-box">
                                    <img src="https://www.dial4trade.com/uploaded_files/product_images/coir-fibers-1051911.jpg" height="auto" width="100%" alt="">
                                    <div class="prd-content">
                                        <a href="" class="d-inline-block text-decoration-none" target="_blank">
                                            <h3 class="title text-capitalize"><?php echo $row['product_name'] ?></h3>
                                        </a>
                                        <p class="price">
                                            <span class="glp modal-btn" data-modal="contact_supplier_popup" data-mid="455762" data-pid="1712233" data-pname="Coir Fibers" data-price="" data-address="Pollachi, Tamil Nadu, India" data-img=" " data-cname=" ">₹ <?php echo $row['price'] ?></span>
                                        </p>
                                        <!-- <p class="moq"><b>Min. Order Quantity:</b> 100 Kilogram</p> -->
                                        <div class="title2">Product Specifications</div>
                                        <table>
                                            <tr>
                                                <td><span>MOQ:</span> Raw</td>
                                                <td><span>Product Life:</span> Dusting Wiper, Mats</td>
                                            </tr>
                                            <tr>
                                                <td><span>Feature:</span> Creamy, Dark Brown, Light Brow</td>
                                        </table>
                                        <p class="desc overflow-auto" style="height: 100px;"> <?php echo $row['product_description'] ?>
                                        </p>
                                        <hr>
                                        <a href="" class="btn btn-danger">Product Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="cinfo">
                                <div class=" ">
                                    <div class=" ">
                                        <!-- <a href=" " class="text-decoration-none" target="_blank">
                                            <h4 class="title">Eco Green Coirs And Exports</h4>
                                        </a>
                                        <small>hgjhgjjh vihar</small>
                                        <h4 class="title text-danger">Ram sharma</h4>

                                        <p class="cloc tooltip ellipsis"> Pollachi, Tamil Nadu, India <span class="tooltiptext">S. S. R
                                                Thottam, Singarampalayam Post Office - Kinathukadavu, Tk, Pollachi,
                                                Tamil Nadu, India</span></p> -->
                                        <table class="table table-bordered w-100   ">
                                            <tr>
                                                <th> <small>Company Name</small> </th>
                                                <td> <small><?php echo $row['company_name'] ?></small> </td>
                                            </tr>
                                            <tr>
                                                <th> <small>Client Name</small> </th>
                                                <td> <small><?php echo $row['name'] ?></small> </td>
                                            </tr>
                                            <tr>
                                                <th> <small>IEC Code</small> </th>
                                                <td> <small><?php echo $row['iec'] ?></small> </td>
                                            </tr>
                                            <tr>
                                                <th> <small>GST Number</small> </th>
                                                <td> <small><small><?php echo $row['gst'] ?></small></small> </td>
                                            </tr>
                                            <tr>
                                                <th> <small>Experience</small> </th>
                                                <td> <small><small><?php echo $row['exp'] ?></small></small> </td>
                                            </tr>
                                            <tr>
                                                <th> <small>website Link</small> </th>
                                                <td> <small><small><?php echo $row['website'] ?></small></small> </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <!-- <div class="cboxe">
                                        <div class="rbox">
                                            <div class="rbox-content">
                                                <div class="rbox-title">Very Good</div>
                                                <div class="rbox-desc">11 reviews</div>
                                            </div>
                                            <div class="rbox-rate">4.2</div>
                                        </div>
                                    </div> -->
                                </div>
                                <!-- <div class="caddit bor der  row">
                                    <div class="col-12">IEC code : <strong>dfjghdjfghkdfjghdf7gd7fg</strong></div>
                                    <div class="col-12">GST number : <strong>dfjghdjfghkdfjghdf7gd7fg</strong></div>

                                </div> -->
                                <div class="caction">
                                    <div class="row">

                                        <div class="col-6 right">
                                            <p class="btn btn-secondary w-100 modal-btn">Enquiry</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
            <div class="container d-block s-sm-block d-lg-none">
                <div class="row">
                    <div class="col-12 col-md-6 my-3">
                        <img src="./admin/extra_image/316170-1.jpg" height="auto" class="border border-3 border-dark text-capitalize rounded" width="100%" alt="no image">
                       <div class="p-2">
                       <h5>text</h5>
                        <small class="text-danger">price : </small>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos, obcaecati.</p>
                         <a href="" class="btn btn-danger w-100 my-3">Read More</a>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- dont remove   this pera -->





    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 20,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 7
                    }
                }
            })
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>