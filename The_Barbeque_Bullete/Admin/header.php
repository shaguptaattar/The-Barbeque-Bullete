<!DOCTYPE html>
<html lang="en">

<!-- basic-form.html  21 Nov 2019 03:54:41 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Admin - The Barbeque Bullete</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/App.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.png' />
  <!--Font Awsome link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
  .main-sidebar .sidebar-menu li a span{
    color:white;
  }
  .main-sidebar .sidebar-menu li a{
    color:white;
  }
  .main-sidebar .sidebar-menu li a:hover{
    background: red;
  }
  a img{
    width: 70%;
    padding:10px;
  }
  .light-sidebar.sidebar-mini .main-sidebar .sidebar-menu li ul.dropdown-menu li a{
    color:black;
  }
  a li{
    list-style:none;
  }
</style>
<body>
      <?php
        include 'connection.php';

        //$id=$_GET['id'];
        $sql="SELECT * FROM `admin`";
        $ResultData=mysqli_query($connection,$sql);
        $row=mysqli_fetch_array($ResultData);
        $id=$row['id'];
        $Admin_Name=$row['Admin_Name'];
        $Admin_Image=$row['Admin_Image'];
      ?>


  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline">
          <ul class="navbar-nav mr-3 ">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a>
            </li>
          </ul>
        </div>
        <ul class="nav row">
        <figure class="avatar mr-2"><?php
            echo "<img src='assets/img/admin/$id/$Admin_Image' alt='Admin Image'>";?>
        </figure>
          
        </ul>
        <a class="text-danger ml-3" href="index.php"><li><?php echo $Admin_Name ?></li></a>
        <a class="text-danger ml-3" href="LogOut.php"><li> Log out  <i class="fa-solid fa-arrow-right-from-bracket"></i></li></a>
      </nav>
      <div class="main-sidebar sidebar-style-2" style="background:#0F172B !important;">
        <aside id="" style="background:#0F172B !important;">
          <div class="sidebar-brand">
            <a href="index.php"><?php echo "<img src='assets/img/admin/$id/$Admin_Image' style='width:90%;' alt='Admin Image'>";?><span></span> </a>
          </div>
          <ul class="sidebar-menu" style="background:#0F172B !important; height:100%">
            <li class="dropdown">
              <a href="index.php" class="nav-link"><i class="fa-solid fa-chart-line"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fa-solid fa-user-tie"></i><span>Admin Master</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="AdminMaster.php">Admin Form</a></li>
                <li><a class="nav-link" href="AdminList.php">Admin List</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="BookingList.php" class=" nav-link"><i class="fa-solid fa-utensils"></i><span>Booking Master</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fa-solid fa-code"></i><span>Slider Master</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="SliderMaster.php">Slider Form</a></li>
                <li><a class="nav-link" href="SliderList.php">Slider List</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fa-solid fa-circle-info"></i><span>Product Details</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="ProductDetailMaster.php">Product Detail Form</a></li>
                <li><a class="nav-link" href="ProductDetailList.php">Product Detail List</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fa-brands fa-slack"></i><span>Category Master</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="CategoryMaster.php">Category Form</a></li>
                <li><a class="nav-link" href="CategoryList.php">Category List</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="ReviewsList.php" class=" nav-link"><i class="fa-solid fa-star"></i><span>Reviews Master</span></a>
            </li>
          </ul>
        </aside>
      </div>