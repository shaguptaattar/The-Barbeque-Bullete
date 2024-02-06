     <!-- Footer Start -->
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

     <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                        <a class="btn btn-link" href="about.html">About Us</a>
                        <a class="btn btn-link" href="menu.html">Menu</a>
                        <a class="btn btn-link" href="reviews.html">Reviews</a>
                        <a class="btn btn-link" href="contact.html">Contact Us</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><?php echo $Restaurant_Address ?></p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 <?php echo $Restaurant_Phone ?></p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 <?php echo $Alternate_Phone ?></p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i><?php echo $Restaurant_Email_Id ?></p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                        <h5 class="text-light fw-normal"><?php echo $Opening_Day ?></h5>
                        <p><?php echo $Opening_Time ?></p>
                        <h5 class="text-light fw-normal"><?php echo $Last_Day ?></h5>
                        <p><?php echo $Last_Opening_Time ?></p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                        <p>It's now easier to email The Barbeque Bullete</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text"
                                placeholder="Your email">
                            <button type="button"
                                class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" pt-2 d-flex align-items-center justify-content-center">
                <a class="btn btn-outline-light btn-social" target="_blank" href=""><i
                        class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-social" target="_blank"
                    href="https://www.facebook.com/Officialbbqbullete"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-social" target="_blank"
                    href="https://www.youtube.com/@AdvMarkDanielDhanawade777"><i
                        class="fab fa-youtube"></i></a>
                <a class="btn btn-outline-light btn-social" target="_blank"
                    href="https://www.instagram.com/official_barbeque_bullete/"><i
                        class="fab fa-instagram"></i></a>
            </div><br>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a href="index.html">The Barbeque Bullete</a>, All Right
                            Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a target="_blank" href="https://wolfox.in/" style="color: #2D6CDF;">Wolfox
                                Services Pvt.Ltd</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="index.html">Home</a>
                                <a href="about.html">About</a>
                                <a href="menu.html">Menu</a>
                                <a href="contact.html">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>