<?php include 'Header.php'; ?>

        <!--Slider code start-->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
            <div class='item active'>
                    <img src='img/banner.png' alt='Slider Image' style='width:100%;'>
                    <div class='banner-text'>
                        <h1 class='section-title ff-secondary text-center text-primary fw-normal'>The Barbeque Bullete</h1>
                        <p>Come and experiance Delicious BBQ grill. The Barbeque Bullete @Tarabai park, Kolhapur Enjoy
                            the delicious BBQ meal. Visit our nearest the Barbeque Bullete and enjoy the fun side today!
                        </p>
                        <p><i class='fa-solid fa-envelope'></i> bbqbullete7@gmail.com</p>
                        <p><i class='fa-solid fa-phone-volume'></i> +91 9577221009</p>
                    </div>+
                </div>
                <?php
                include 'Admin/connection.php';

                $sql="SELECT * FROM `slider_forms` ";
                $ResultData=mysqli_query($connection,$sql);
                
                while($row=mysqli_fetch_assoc($ResultData)){
                $slider_id=$row['id'];
                $Banner_Title=$row['Banner_Title'];
                $Banner_Image=$row['Banner_Image'];
                $Banner_Description	=$row['Banner_Description'];
                echo "
                <div class='item'>
                    <img src='img/$Banner_Image' alt='Slider Image' style='width:100%;'>
                    <div class='banner-text'>
                        <h1>$Banner_Title</h1>
                        <p>$Banner_Description</p>
                        <p><i class='fa-solid fa-square-check text-danger'></i> Complete Oil Free Food.</p>
                        <p><i class='fa-solid fa-square-check text-danger'></i> Best Quality Chicken & Spices.</p>
                    </div>
                </div>
                ";
                }
                ?>

                <div class="item">
                    <img src="img/banner2.png" alt="Slider Image" style="width:100%;">
                    <div class="banner-text">
                        <h1>Food & beverage</h1>
                        <p>Celebrate the season of sparkle with your family. Party time is just a click away. We are all
                            set to embrace. Spend Year End time with your loved ones.
                            welcome with your family and friends. and GET MORE DISCOUNTS. hURRY nOW!
                            Why THE BARBEQUE BULLETE</p>
                        <p><i class="fa-solid fa-square-check text-danger"></i> Complete Oil Free Food.</p>
                        <p><i class="fa-solid fa-square-check text-danger"></i> Best Quality Chicken & Spices.</p>
                    </div>
                </div>

                <div class="item">
                    <img src="img/banner3.png" alt="Slider Image" style="width:100%;">
                    <div class="banner-text col-md-6">
                        <h1>Welcome to Barbeque</h1>
                        <p>We are happy to announce you that we have launched new diet recipe. Its really jucy &
                            delicious but rather than this its more super healthy with affordable price. Its Good start
                            for your diet plan.</p>
                            <p><i class="fa-solid fa-square-check text-danger"></i> More Healthy & Tasty.</p>
                        <p><i class="fa-solid fa-square-check text-danger"></i> Prefrable for Diet.</p>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--Slider code end-->
        
        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">                    
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                                <h5>Master Chefs</h5>
                                <p>Our master chefs create amazing dishes that combine creativity, innovation, and
                                    quality.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                                <h5>Quality Food</h5>
                                <p>Come and taste the best quality food at our restaurant, where we serve you with
                                    passion and care.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                                <h5>Online Order</h5>
                                <p>You can order food from our restaurant anytime, anywhere, and get it delivered to
                                    your door. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                                <h5>24/7 Service</h5>
                                <p>We have 24/7 services of food, so you can indulge in our delectable food whenever you
                                    feel like it.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s"
                                    src="img/pro1.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-90 wow zoomIn" data-wow-delay="0.3s" src="img/pro2.jpg"
                                    style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-90 wow zoomIn" data-wow-delay="0.5s" src="img/pro3.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"
                                    src="img/pro4.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                        <h1 class="mb-4">Welcome to Barbeque</h1>
                        <p class="mb-4">Come and experiance Delicious BBQ grill.
                            The Barbeque Bullete @Tarabai park, Kolhapur</p>
                        <p class="mb-4">Enjoy the delicious BBQ meal.
                            Visit our nearest the Barbeque Bullete and enjoy the fun side today!</p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">15
                                    </h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Years of</p>
                                        <h6 class="text-uppercase mb-0">Experience</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">50
                                    </h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Popular</p>
                                        <h6 class="text-uppercase mb-0">Master Chefs</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


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

                                            $sql="SELECT * FROM `product_detail` WHERE category='CHINESE FOOD' ";
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


        <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container my-5 py-1">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h1 class="display-3 text-white animated slideInLeft">Enjoy Our<br>Delicious Kebab</h1>
                        <p class="text-white animated slideInLeft mb-4 pb-2">we are known for serving the best and
                            the widest variety of dishes.to have a fulfilling experience at The Barbeque Bullete
                            Come and discover the real taste.</p>
                        <a href="about.html" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Know
                            More</a>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                        <img class="img-fluid" src="img/hero.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- Reservation Start -->
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <iframe width="98%" height="100%"
                        src="https://www.youtube.com/embed/xf_nMZZRWbU?si=_PQcOaXDkfrNt3XC" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                        <h1 class="text-white mb-4">Book A Table Online</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" id="datetime"
                                            placeholder="Date & Time" data-target="#date3"
                                            data-toggle="datetimepicker" />
                                        <label for="datetime">Date & Time</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="people"
                                            placeholder="No.of people">
                                        <label for="number">No.of People</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control" id="phone" placeholder="Your phone No.">
                                        <label for="tel">Phone No.</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Special Request" id="message"
                                            style="height: 100px"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                                allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservation Start -->


        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
                    <h1 class="mb-5">Our Master Chefs</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/team-1.jpg" alt="Team Member Image">
                            </div>
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                        <br>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/team-2.jpg" alt="Team Member Image">
                            </div>
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/team-3.jpg" alt="Team Member Image">
                            </div>
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/team-4.jpg" alt="Team Member Image">
                            </div>
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <!-- <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5> -->
                    <h1 class="mb-5">Our Clients Say!!!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                <?php
                    include 'Admin/connection.php';

                    $sql="SELECT * FROM `reviews` ";
                    $ResultData=mysqli_query($connection,$sql);
          
                    while($row=mysqli_fetch_assoc($ResultData)){
                        $slider_id=$row['id'];
                        $reviews_name=$row['reviews_name'];
                        $Add_Review=$row['Add_Review'];

                        echo "
                    <div class='testimonial-item bg-transparent border rounded p-4'>
                        <i class='fa fa-quote-left fa-2x text-primary mb-3'></i>
                        <p>$Add_Review</p>
                        <div class='d-flex align-items-center'>
                            <img class='img-fluid flex-shrink-0 rounded-circle'
                                src='img/whatsappdp.png'
                                style='width: 50px; height: 50px;' alt='Client Image'>
                            <div class='ps-3'>
                                <h5 class='mb-1'>$reviews_name</h5>
                            </div>
                        </div>
                    </div>";
                    }
                    ?>
                </div>
            </div>
            <center><a href="reviews.php" class="btn btn-primary py-sm-3 px-sm-5 me-3 mt-5 animated">Add Reviews</a></center>
        </div>
        <!-- Testimonial End -->


   <?php include 'Footer.php'; ?>