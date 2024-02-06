<?php include 'Header.php'; ?>

<!--Main Contain Start-->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6">
                <img width="98%" height="100%"
                    src="img/about-1.jpg" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen >
                
            </div>
            <div class="col-md-6">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <form action="Admin/ReviewMaster.php" method="post">
                        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                            <h4 class="section-title ff-secondary text-center text-primary fw-normal m-5">Registration
                            </h4>
                        </div>
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="form-floating">
                                    <input class="form-control" placeholder="Leave a message here" id="reviews_name"
                                        name="reviews_name">
                                    <label for="message">Enter First Name</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input class="form-control" placeholder="Leave a message here" id="reviews_name"
                                        name="reviews_name">
                                    <label for="message">Enter Last Name</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input class="form-control" placeholder="Leave a message here" id="reviews_name"
                                        name="reviews_name">
                                    <label for="message">Enter Phone No.</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input class="form-control" placeholder="Leave a message here" id="reviews_name"
                                        name="reviews_name">
                                    <label for="message">Enter Email Id</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input class="form-control" placeholder="Leave a message here" style="height:150"
                                        id="reviews_name" name="reviews_name">
                                    <label for="message">Enter Address</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input class="form-control" placeholder="Leave a message here" style="height:150"
                                        id="reviews_name" name="reviews_name">
                                    <label for="message">Enter Pin Code</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input class="form-control" placeholder="Leave a message here" style="height:150"
                                        id="reviews_name" name="reviews_name">
                                    <label for="message">Enter Password</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input class="form-control" placeholder="Leave a message here" style="height:150"
                                        id="reviews_name" name="reviews_name">
                                    <label for="message">Enter Confirm Password</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <center><button class="btn btn-primary" type="submit">Register</button></center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Main Contain End-->

<?php include 'Footer.php'; ?>