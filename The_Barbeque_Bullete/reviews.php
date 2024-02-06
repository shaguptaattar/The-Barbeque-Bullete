<?php include 'Header.php'; ?>
    <!-- Navbar & Hero End -->

    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
          <h1 class="display-3 text-white mb-3 animated slideInDown">Reviews</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
              <li style="color: red;" class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">Reviews</li>
            </ol>
          </nav>
        </div>
      </div>

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
        </div>
        <!-- Testimonial End -->

    <!--Add Review start-->
    <div class="container-xxl py-5 bg-light">
      <div class="container">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
              <h5 class="section-title ff-secondary text-center text-primary fw-normal">Add Review</h5>
              <h1 class="mb-5">Say, what you want</h1>
          </div>
          <div class="row g-4 d-flex align-items-center justify-content-center">              
              <div class="col-md-6">
                  <div class="wow fadeInUp" data-wow-delay="0.2s">
                      <form action="Admin/ReviewMaster.php" method="post">
                          <div class="row g-3">
                            <div class="col-12">
                              <div class="form-floating">
                                  <input class="form-control" placeholder="Leave a message here" id= "reviews_name" name="reviews_name">
                                  <label for="message">Enter your Name</label>
                              </div>
                          </div>
                              <div class="col-12">
                                  <div class="form-floating">
                                      <textarea class="form-control" placeholder="Leave a message here" id="Add_Review" name="Add_Review" style="height: 150px"></textarea>
                                      <label for="message">Add Review</label>
                                  </div>
                              </div>
                              <div class="col-12">
                                  <button class="btn btn-primary w-100 py-3" type="submit">Send</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
    <!--Add Review End-->

  <?php include 'Footer.php'; ?>