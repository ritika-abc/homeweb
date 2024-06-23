<?php include_once "header.php"; ?>

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

    <?php
    include "config.php";
    $sub_id = $_GET['sub_id'];
    $select = "SELECT * from `inner_cat` where `sub_id`='$sub_id' ";
    $qu = mysqli_query($con, $select);
    $s_no = 1;
    while ($row = mysqli_fetch_array($qu)) {
        // $sub_id = $row['sub_id'];
        $inner_cat_id = $row['inner_cat_id'];

    ?>
        <div class="container shadow-lg   border-3 border-dark my-5 p-3 border rounded bg-white">
            <h5><?php echo $row['inner_cat_name'] ?></h5>
            <div class="row">
                <?php
                include "config.php";
                // $inner_cat_id = $_GET['inner_cat_id'];
                $select1 = "SELECT * from `micro` where `inner_cat_id`='$inner_cat_id' ";
                $qu1 = mysqli_query($con, $select1);

                while ($row1 = mysqli_fetch_array($qu1)) {
                    $micro_cat_image = $row1['micro_cat_image'];

                ?>
                    <div class="col-6 col-md-4 col-lg-2 my-2">
                        <a href="micro-category.php?micro_id=<?php echo $row1['micro_id'] ?>" class="text-decoration-none text-dark border   d-block p-2 rounded">
                            <div class="text-center ">
                                <div class=" ">
                                    <img src="./admin/<?php echo $row1['micro_cat_image'] ?>" class="rounded " height="auto" style="object-fit:cover" width="55%" alt="">
                                    <p><?php echo $row1['micro_name'] ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php } ?>




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
                        items: 7
                    }
                }
            })
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>