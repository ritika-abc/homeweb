<?php
if (isset($_POST['search'])) {
        // Retrieve the search query
        $search_query = $_POST["search_query"];

        // Connect to your database (replace these variables with your actual database credentials)
        include "config.php";
}
?>

<?php include_once "header.php"; ?>
        <section class="browse-cat-sec">
                <div class="fw">
                        <div class="browse-cat fo">
                                <aside class="sidebar">
                                        <div>
                                                <div class="bcs-header">
                                                        <img src="" width="22" height="13" title="Browse Category" loading="lazy" decoding="async" fetchpriority="low" />Browse Categories
                                                </div>
                                                <!-- cat start here  -->
                                                <?php

                                                include "config.php"; // Assuming this file connects to your database ($con)

                                                // Check if connection to database was successful
                                                if (!$con) {
                                                        die("Connection failed: " . mysqli_connect_error());
                                                }

                                                $select = "SELECT 
            c.cat_name, c.cat_id,
            s.sub_id, s.sub_cat_name, s.sub_cat_image,
            GROUP_CONCAT(CONCAT_WS(':', i.inner_cat_id, i.inner_cat_name) SEPARATOR '|') AS inner_categories
        FROM 
            category c
        LEFT JOIN 
            sub_cat s ON c.cat_id = s.cat_id
        LEFT JOIN 
            inner_cat i ON s.sub_id = i.sub_id
        GROUP BY 
            c.cat_id, s.sub_id";

                                                $result = mysqli_query($con, $select);

                                                if (!$result) {
                                                        die("Query failed: " . mysqli_error($con));
                                                }

                                                $categories = array(); // Array to store categories and their subcategories

                                                while ($row = mysqli_fetch_array($result)) {
                                                        $cat_name = $row['cat_name'];
                                                        $cat_id = $row['cat_id'];
                                                        $sub_id = $row['sub_id'];
                                                        $sub_cat_name = $row['sub_cat_name'];
                                                        $sub_cat_image = $row['sub_cat_image']; // Fetch sub_cat_image
                                                        $inner_categories_raw = explode('|', $row['inner_categories']); // Convert string to array

                                                        $inner_categories = array();
                                                        foreach ($inner_categories_raw as $inner_cat_string) {
                                                                list($inner_cat_id, $inner_cat_name) = explode(':', $inner_cat_string);
                                                                $inner_categories[] = array(
                                                                        'inner_cat_id' => $inner_cat_id,
                                                                        'inner_cat_name' => $inner_cat_name
                                                                );
                                                        }

                                                        // Store subcategories and inner categories grouped by categories and subcategories
                                                        if (!isset($categories[$cat_name])) {
                                                                $categories[$cat_name] = array();
                                                        }

                                                        $categories[$cat_name][] = array(
                                                                'cat_id' => $cat_id,
                                                                'sub_id' => $sub_id,
                                                                'sub_cat_name' => $sub_cat_name,
                                                                'sub_cat_image' => $sub_cat_image,
                                                                'inner_categories' => $inner_categories
                                                        );
                                                }
                                                // foreach
                                                foreach ($categories as $category => $subcategories) {
                                                ?>
                                                        <ul class="mc-list">

                                                                <li class="mcl-iteam">
                                                                        <a href="category.php?cat_id=<?php echo $subcategories[0]['cat_id'] ?>"><img src=" " class="svg_icon" alt="HomeSupplies" width="22" height="22" loading="lazy" decoding="async" fetchpriority="low" /><?php echo $category ?></a>
                                                                        <ul class="mcsc" id="sub_cat_11948">
                                                                                <!-- sub cat start here  -->
                                                                                <?php
                                                                                foreach ($subcategories as $subcategory) {
                                                                                ?>
                                                                                        <li class="mcsc-iteam">
                                                                                                <p class="mcsc-heading"><a href="sub-cat.php?sub_id=<?php echo $subcategory['sub_id'] ?>"><?php echo $subcategory['sub_cat_name'] ?></a></p>
                                                                                                <!-- inner cat start here -->
                                                                                                <ul class="mcsc-list">
                                                                                                        <?php
                                                                                                        foreach ($subcategory['inner_categories'] as $innercategory) {
                                                                                                        ?>
                                                                                                                <li><a href="product.php?inner_cat_id=<?php echo $innercategory['inner_cat_id'] ?>"><?php echo $innercategory['inner_cat_name'] ?></a>
                                                                                                                </li>
                                                                                                        <?php } ?>

                                                                                                </ul>
                                                                                                <!--  -->
                                                                                        </li>
                                                                                <?php } ?>
                                                                                <!--  -->

                                                                        </ul>
                                                                </li>
                                                        </ul>
                                                <?php } ?>
                                                <!--  -->
                                                <div class="all-cl">
                                                        <a href="all-category.php" class="all-cl-iteam">
                                                                <img class="all-cl-img" src=" " alt="All Categories" width="22" height="22" decoding="async" fetchpriority="low">
                                                                All Categories
                                                        </a>
                                                </div>
                                        </div>
                                </aside>
                                <div class="banner">
                                        <div id="carouselExample" class="carousel slide">
                                                <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                                <img src="image/banner/banner.jpg" height="" class="d-block w-100" alt="...">
                                                        </div>
                                                        <div class="carousel-item">
                                                                <img src="image/banner/banner.jpg" height="" class="d-block w-100" alt="...">
                                                        </div>
                                                        <div class="carousel-item">
                                                                <img src="image/banner/banner.jpg" height="" class="d-block w-100" alt="...">
                                                        </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                </button>
                                        </div>
                                </div>


                        </div>
                </div>
        </section>
        <!-- lg nav bar end here -->

        <!-- Trending Categories -->
        <div class="container-fluid margin">
                <div class="row">
                        <div class="col-12 ">
                                <div class="py-4 px-3  bg-white shadow-lg rounded">
                                        <h5 class="mb-3">Trending Categories</h5>
                                        <!-- owl carousel -->
                                        <div class="owl-carousel owl-theme bg-white">
                                                <?php
                                                include "config.php";
                                                $select1 = "SELECT * from `category`";
                                                $qu1 = mysqli_query($con, $select1);
                                                $s_no = 1;
                                                while ($row1 = mysqli_fetch_array($qu1)) {
                                                        // $micro_id = $row1['micro_id'];
                                                ?>
                                                        <a href="category.php?cat_id=<?php echo $row1['cat_id'] ?>">
                                                                <div class="item border rounded shadow-sm">
                                                                        <div class="cat_box">
                                                                                <div class="w-75 m-auto p-2">
                                                                                        <img src="./admin/<?php echo $row1['cat_image'] ?>" height="auto" width="70%" alt="category image">
                                                                                        <div class="px-2 pt-2 border-top  text-center">
                                                                                                <p><?php echo $row1['cat_name'] ?></p>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </a>
                                                <?php } ?>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>

        <!--  -->


        <!-- cat  name -->
        <?php
        foreach ($categories as $category => $subcategories) {
        ?>
                <div class="container-fluid margin m-auto my-5 " style="width: 98%;">
                        <div class="row cat_container ">
                                <div class="col-12 border py-3 px-3  bg-white rounded shadow-lg">
                                        <a href="category.php?cat_id=<?php echo $subcategories[0]['cat_id'] ?>">
                                                <h4 class=""><?php echo $category ?></h4>
                                        </a>
                                        <div class="row mt-3">
                                                <div class="col-12 col-md-12">
                                                        <div class="row">
                                                                <!-- sub cat -->
                                                                <?php foreach ($subcategories as $subcategory) { ?>
                                                                        <div class="col-12 col-md-6 col-lg-3 my-3">
                                                                                <div class="card p-3">
                                                                                        <a href="sub-cat.php?sub_id=<?php echo  $subcategory['sub_id'] ?>" class="text-decoration-none" style="color: black !important;">
                                                                                                <p class="pb-0 fs-6   w-100 overflow-hidden" ><?php echo $subcategory['sub_cat_name'] ?></p>
                                                                                        </a>
                                                                                        <div class="row">
                                                                                                <div class="col-7">
                                                                                                        <!-- inner cat -->
                                                                                                        <?php
                                                                                                        foreach ($subcategory['inner_categories'] as $innercategory) {
                                                                                                        ?>
                                                                                                                <p class=" p-0 m-0 d-block"><a href="product.php?inner_cat_id=<?php echo $innercategory['inner_cat_id'] ?>" class="text-decoration-none p-0 m-0">
                                                                                                                                <?php echo $innercategory['inner_cat_name'] ?></a></p>
                                                                                                                <!-- end -->
                                                                                                        <?php } ?>

                                                                                                </div>
                                                                                                <div class="col-5 align-self-end ">
                                                                                                        <img src="./admin/extra_image/316170-1.jpg" class="rounded" height="auto" width="100%" alt="">
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                <?php } ?>
                                                                <!-- sub cat end -->
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        <?php } ?>

        <div class="container margin alert alert-primary">
                <div class="row">
                        <div class="col-12">
                                <div class="owl-carousel owl-theme">
                                        <div class="item">
                                                <img src="image/brand/images.webp" height="auto" width="100%" style="object-fit: cover;" alt="">
                                        </div>
                                        <div class="item">
                                                <img src="image/brand/download.webp" height="auto" width="100%" style="object-fit: cover;" alt="">
                                        </div>
                                        <div class="item">
                                                <img src="image/brand/elixer-jeans-logo.webp" height="auto" width="100%" style="object-fit: cover;" alt="">
                                        </div>
                                        <div class="item">
                                                <img src="image/brand/plasto.jpg" height="auto" width="100%" style="object-fit: cover;" alt="">
                                        </div>
                                        <div class="item">
                                                <img src="image/brand/UNIQUE.webp" height="auto" width="100%" style="object-fit: cover;" alt="">
                                        </div>


                                </div>
                        </div>
                </div>
        </div>
        <script>
                $(document).ready(function() {
                        $('.owl-carousel').owlCarousel({
                                loop: true,
                                margin: 10,
                                responsive: {
                                        0: {
                                                items: 1
                                        },
                                        600: {
                                                items: 3
                                        },
                                        1000: {
                                                items: 6
                                        }
                                }
                        })
                })
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>