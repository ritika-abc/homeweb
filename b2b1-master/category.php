<?php include_once "header.php"; ?>
<style>
    
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


    <div class="container-fluid">
        <div class="row">
            <?php
            include "config.php";
            $cat_id = $_GET['cat_id'];
            $select = "SELECT * from `sub_cat` where `cat_id`='$cat_id' ";
            $qu = mysqli_query($con, $select);
            $s_no = 1;
            while ($row = mysqli_fetch_array($qu)) {
                $sub_id = $row['sub_id'];

            ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card p-3 mt-4">
                        <div class="d-flex">
                            <img src="./admin/<?php echo $row['sub_cat_image'] ?>" class="rounded" height="100px" style="object-fit:cover" width="100px" alt="">
                            <div class="cat_container   mx-1  " style="text-align:  ;">
                                <div class="mx-3">
                                    <p class="text-center m-0"><?php echo $row['sub_cat_name'] ?></p>
                                    <hr>
                                </div>
                                <ul>
                                    <?php
                                    include "config.php";
                                    $select1 = "SELECT * from `micro` where `sub_id`='$sub_id' limit 5";
                                    $qu1 = mysqli_query($con, $select1);
                                    $s_no = 1;
                                    while ($row1 = mysqli_fetch_array($qu1)) {
                                        $micro_id = $row1['micro_id'];
                                    ?>

                                        <li class="mt-1"><a href="micro-category.php?micro_id=<?php echo $row1['micro_id'] ?>" class="text-decoration-none"><?php echo $row1['micro_name'] ?></li>


                                    <?php } ?>
                                </ul>
                                <div class="text-end mt-2 " style="visibility: hidden;">
                                    <a href="" class="btn btn-sm btn-danger  w-100 py-2" style="color: white !important;"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
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
                        items: 7
                    }
                }
            })
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>