<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>The Barbeque Bullete</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Favicon -->
    <link href="img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/Style.css" rel="stylesheet">

    <!--Font awwsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    .img-logo {
        height: 40px;
    }
</style>

<body>

<?php
        include 'Admin/connection.php';

        //$id=$_GET['id'];
        $sql="SELECT * FROM `admin` ";
        $ResultData=mysqli_query($connection,$sql);
        $row=mysqli_fetch_array($ResultData);
        $id=$row['id'];
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
    <!--Enquery icon code start-->
    <section>
        <a href="tel: <?php echo $Restaurant_Phone ?>" target=”_blank” class="whatsapp-btn3">
            <i class="fa fa-phone"></i>
        </a>
    </section>
    <section>
        <a href="https://wa.me/<?php echo $Restaurant_Phone ?>?text=hello" target=”_blank” class="whatsapp-btn">
            <i class="bi bi-whatsapp"></i>
        </a>
    </section>
    <section>
        <a href="mailto: <?php echo $Restaurant_Email_Id ?>" target=”_blank” class="whatsapp-btn2">
            <i class="bi bi-envelope"></i>
        </a>
    </section>
    <!--Enquery icon code end-->

    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-7 py-lg-0"
                style="background: var(--dark) !important;">
                <a href="index.html" class="navbar-brand p-0">
                    <?php echo "<img src='Admin/assets/img/admin/$id/$Admin_Image' class='navlogo' style='margin: -65px; margin-left: 5px;' alt='Logo Image' />" ;?> 
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="menu.php" class="nav-item nav-link">Menu</a>
                        <a href="reviews.php" class="nav-item nav-link">Reviews</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                        <a href="Log_In.php" class="nav-item nav-link">Admin Panel</a>
                    </div>
                    <a href="booking.php" class="btn btn-primary py-2 px-4">Book A Table</a>
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->