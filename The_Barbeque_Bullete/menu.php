<?php include 'Header.php'; ?>

        <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Menu</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
                        </ol>
                    </nav>
                </div>
            </div>

        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                    <h1 class="mb-5">Most Popular Items</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill"
                                href="#tab-1">
                               <img class="img-logo" src="img/veg.png" alt="">
                                <div class="ps-3">
                                    <small class="text-body">Popular</small>
                                    <h6 class="mt-n1 mb-0">VEG KEBAB/व्हेज कबाब</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill"
                                href="#tab-2">
                                <img class="img-logo" src="img/non veg.png" alt="">
                                <div class="ps-3">
                                    <small class="text-body">Special</small>
                                    <h6 class="mt-n1 mb-0">NON-VEG/नाॉन व्हेज</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill"
                                href="#tab-3">
                                <img class="img-logo" src="img/tandu.png" alt="">
                                <div class="ps-3">
                                    <small class="text-body">Lovely</small>
                                    <h6 class="mt-n1 mb-0">SPECIAL TANDURI/स्पेशल तंदुरी</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill"
                                href="#tab-4">
                                <img class="img-logo" src="img/chin.png" alt="" >
                                <div class="ps-3">
                                    <small class="text-body">Spicy</small>
                                    <h6 class="mt-n1 mb-0">CHINESE/चायनीज</h6>
                                </div>
                            </a>
                        </li>

                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <!-- Team Start -->
                                <div class="container-xxl pt-5 pb-3">
                                    <div class="container">
                                        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                            <h5
                                                class="section-title ff-secondary text-center text-primary fw-normal mb-5">
                                                VEG KEBAB/व्हेज कबाब</h5>
                                            <!-- <h1 class="mb-5">VEG KEBAB/व्हेज कबाब</h1> -->
                                        </div>
                                        <!--VEG KEBAB/व्हेज कबाब menu start -->
                                        <div class="row g-4">
                                        <?php
                                            include 'Admin/connection.php';

                                            $sql="SELECT * FROM `product_detail` WHERE category='VEG KEBAB' ";
                                            $ResultData=mysqli_query($connection,$sql);

                                            while($row=mysqli_fetch_assoc($ResultData)){
                                              $id=$row['id'];
                                              $ProductImage=$row['ProductImage'];
                                              $ProductName=$row['ProductName'];

                                              echo "
                                              <div class='col-lg-3 col-md-6 wow fadeInUp' data-wow-delay='0.1s'>
                                                <div class='team-item text-center rounded overflow-hidden'>
                                                    <div class='overflow-hidden m-4'>
                                                        <a href='ProductDetail.php?id=$row[id]'><img class='img-fluid' src='img/menu/$ProductImage'
                                                                alt='Product Image'></a>
                                                    </div>
                                                    <a href='ProductDetail.php?id=$row[id]'>
                                                        <h5 class='mb-0'>$ProductName</h5>
                                                    </a>
                                                    </a>
                                                   
                                                    <div class='d-flex justify-content-center mt-3 col-md-12'>
                                                        <a class='btn btn-square btn-primary mx-1' target=”_blank”
                                                            href='https://wa.me/9860524412?text=Dishes-($ProductName), Enter Address:- '><i
                                                                class='bi bi-whatsapp'></i></a>
                                                        <a class='btn btn-square btn-primary mx-1'
                                                            href='tel: 9860524412' target=”_blank”><i
                                                                class='fa fa-phone'></i></a>
                                                        <a class='btn btn-square btn-primary mx-1'
                                                            href='mailto: surajjankar211@gmail.com' target=”_blank”><i
                                                                class='bi bi-envelope'></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                              ";
                                            }
                                            ?>
                                        </div>
                                        <!--VEG KEBAB/व्हेज कबाब menu End -->
                                    </div>
                                </div>
                                <!-- Team End -->
                            </div>
                        </div>


                        
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <!--menu secound start-->
                            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                <h5
                                    class="section-title ff-secondary text-center text-primary fw-normal mb-5">
                                    NON-VEG/नाॉन व्हेज</h5>
                                <!-- <h1 class="mb-5">VEG KEBAB/व्हेज कबाब</h1> -->
                            </div>
                            <!--VEG KEBAB/व्हेज कबाब menu start -->
                            <div class="row g-4">
                                <?php
                                    include 'Admin/connection.php';

                                    $sql="SELECT * FROM `product_detail` WHERE category='NON-VEG' ";
                                    $ResultData=mysqli_query($connection,$sql);

                                    while($row=mysqli_fetch_assoc($ResultData)){
                                      $id=$row['id'];
                                      $ProductImage=$row['ProductImage'];
                                      $ProductName=$row['ProductName'];

                                      echo "
                                      <div class='col-lg-3 col-md-6 wow fadeInUp' data-wow-delay='0.1s'>
                                    <div class='team-item text-center rounded overflow-hidden'>
                                        <div class='overflow-hidden m-4'>
                                            <a href='ProductDetail.php?id=$row[id]'><img class='img-fluid' src='img/menu/$ProductImage'
                                                    alt=''></a>
                                        </div>
                                        <a href='ProductDetail.php?id=$row[id]'>
                                            <h5 class='mb-0'>$ProductName</h5>
                                        </a>
                                   
                                        <div class='d-flex justify-content-center mt-3 col-md-12'>
                                            <a class='btn btn-square btn-primary mx-1' target=”_blank”
                                                href='https://wa.me/9860524412?text=Dishes-($ProductName), Enter Address:- '><i
                                                    class='bi bi-whatsapp'></i></a>
                                            <a class='btn btn-square btn-primary mx-1'
                                                href='tel: 9860524412' target=”_blank”><i
                                                    class='fa fa-phone'></i></a>
                                            <a class='btn btn-square btn-primary mx-1'
                                                href='mailto: surajjankar211@gmail.com' target=”_blank”><i
                                                    class='bi bi-envelope'></i></a>
                                        </div>
                                    </div>
                                </div>
                                ";
                                }
                                ?>
                            </div>
                            <!--menu secound End-->
                            
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <!-- Team Start -->
                                <div class="container-xxl pt-5 pb-3">
                                    <div class="container">
                                        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                            <h5
                                                class="section-title ff-secondary text-center text-primary fw-normal mb-5">
                                                SPECIAL TANDURI/स्पेशल तंदुरी</h5>
                                            <!-- <h1 class="mb-5">VEG KEBAB/व्हेज कबाब</h1> -->
                                        </div>
                                        <div class="row g-4">
                                        <?php
                                            include 'Admin/connection.php';

                                            $sql="SELECT * FROM `product_detail` WHERE category='SPECIAL TANDURI' ";
                                            $ResultData=mysqli_query($connection,$sql);

                                            while($row=mysqli_fetch_assoc($ResultData)){
                                              $id=$row['id'];
                                              $ProductImage=$row['ProductImage'];
                                              $ProductName=$row['ProductName'];
                                              echo "
                                              <div class='col-md-3 wow fadeInUp' data-wow-delay='0.1s'>
                                                <div class='team-item text-center rounded overflow-hidden'>
                                                    <div class='overflow-hidden m-4'>
                                                        <a href='ProductDetail.php?id=$row[id]'><img class='img-fluid' src='img/menu/$ProductImage'
                                                                alt='Product Image'></a>
                                                    </div>
                                                    <a href='ProductDetail.php?id=$row[id]'>
                                                        <h5 class='mb-0'>$ProductName</h5>
                                                    </a>
                                                    
                                                    <div class='d-flex justify-content-center mt-3 col-md-12'>
                                                        <a class='btn btn-square btn-primary mx-1' target=”_blank”
                                                            href='https://wa.me/9860524412?text=Dishes-($ProductName), Enter Address:- '><i
                                                                class='bi bi-whatsapp'></i></a>
                                                        <a class='btn btn-square btn-primary mx-1'
                                                            href='tel: 9860524412' target=”_blank”><i
                                                                class='fa fa-phone'></i></a>
                                                        <a class='btn btn-square btn-primary mx-1'
                                                            href='mailto: surajjankar211@gmail.com' target=”_blank”><i
                                                                class='bi bi-envelope'></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                              ";
                                            }
                                            ?>
                                            
                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-4" class="tab-pane fade show p-0">
                                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                        <h5
                                            class="section-title ff-secondary text-center text-primary fw-normal mb-5">
                                           CHINESE FOOD/चायनीज फूड</h5>
                                        <!-- <h1 class="mb-5">VEG KEBAB/व्हेज कबाब</h1> -->
                                    </div>
                                    <div class="row">
                                    <?php
                                            include 'Admin/connection.php';

                                            $sql="SELECT * FROM `product_detail` WHERE category='CHINESE' ";
                                            $ResultData=mysqli_query($connection,$sql);

                                            while($row=mysqli_fetch_assoc($ResultData)){
                                              $id=$row['id'];
                                              $ProductImage=$row['ProductImage'];
                                              $ProductName=$row['ProductName'];

                                              echo "
                                              <div class='col-lg-3 col-md-6 wow fadeInUp' data-wow-delay='0.1s'>
                                              <div class='team-item text-center rounded overflow-hidden'>
                                                  <div class='overflow-hidden m-4'>
                                                      <a href='ProductDetail.php?id=$row[id]'><img class='img-fluid' src='img/menu/$ProductImage'
                                                              alt=''></a>
                                                  </div>
                                                  <a href='ProductDetail.php?id=$row[id]'>
                                                      <h5 class='mb-0'>$ProductName</h5>
                                                  </a>
                                                  
                                                  <div class='d-flex justify-content-center mt-3 col-md-12'>
                                                      <a class='btn btn-square btn-primary mx-1' target=”_blank”
                                                          href='https://wa.me/9860524412?text=Dishes-($ProductName), Enter Address:- '><i
                                                              class='bi bi-whatsapp'></i></a>
                                                      <a class='btn btn-square btn-primary mx-1'
                                                          href='tel: 9860524412' target=”_blank”><i
                                                              class='fa fa-phone'></i></a>
                                                      <a class='btn btn-square btn-primary mx-1'
                                                          href='mailto: surajjankar211@gmail.com' target=”_blank”><i
                                                              class='bi bi-envelope'></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                              ";
                                            }
                                            ?>

                                    </div>
                                    
                                <!-- Team End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->


<?php include 'Footer.php'; ?>