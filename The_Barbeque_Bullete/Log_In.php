<?php include 'Header.php'; ?>

<!--Main Contain Start-->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4 d-flex align-items-center justify-content-center">
            <div class="col-md-6">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <form action="Admin/login.php" method="post">
                        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                            <h4 class="section-title ff-secondary text-center text-primary fw-normal m-5">Admin Log In</h4>
                        </div>
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" placeholder="Leave a message here" id="Email_Id"
                                        name="Email_Id">
                                    <label for="message">Email Id</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control" placeholder="Leave a message here" style="height:150"
                                        id="Password" name="Password">
                                    <label for="message">Password</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <center><button class="btn btn-primary" type="submit">Log In</button></center>
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