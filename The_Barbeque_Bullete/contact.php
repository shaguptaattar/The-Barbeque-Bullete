<?php include 'Header.php'; ?>
        <!-- Navbar & Hero End -->

        <?php
        include 'Admin/connection.php';

        //$id=$_GET['id'];
        $sql="SELECT * FROM `admin`";
        $ResultData=mysqli_query($connection,$sql);
        $row=mysqli_fetch_array($ResultData);
        $Admin_Name=$row['Admin_Name'];
        $Admin_Image=$row['Admin_Image'];
        $Restaurant_Address=$row['Restaurant_Address'];
        $Restaurant_Email_Id=$row['Restaurant_Email_Id'];
        $Restaurant_Phone=$row['Restaurant_Phone'];
        $Alternate_Phone=$row['Alternate_Phone'];
        $Opening_Day=$row['Opening_Day'];
        $Opening_Time=$row['Opening_Time'];
        $Last_Day=$row['Last_Day'];
        $Last_Opening_Time=$row['Last_Opening_Time'];
      ?>

        <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Contact Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Contact Us</h5>
                    <h1 class="mb-5">Contact For Any Query</h1>
                </div>
                <div class="row g-4">
                    <div class="col-md-12 text-center">
                        <div class="row gy-4">
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Address</h5>
                                <p><i class="fa-solid fa-location-dot text-primary me-2"></i><?php echo $Restaurant_Address ?></p>
                            </div>
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Email Id</h5>
                                <p><i class="fa-solid fa-envelope-open text-primary me-2"></i><?php echo $Restaurant_Email_Id ?></p>
                            </div>
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Phone No</h5>
                                <p><i class="fa-solid fa-phone text-primary me-2"></i>+91 <?php echo $Restaurant_Phone ?></p>
                                <p><i class="fa-solid fa-phone text-primary me-2"></i>+91 <?php echo $Alternate_Phone ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                        <iframe class="position-relative rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                            frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
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
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" placeholder="Subject">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


<?php include 'Footer.php'; ?>