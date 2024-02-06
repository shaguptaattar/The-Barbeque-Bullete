<?php include 'Header.php'; ?>
<style>
    .card {
            background-color: #0F172B;
            color: white;
        }

        .card-title {
            color: white;
        }

        .proming{
        width: 80%;
    }
</style>
<!--Main Container Start-->
<!-- banjara kabab  Start -->
<div class="container">
        <h3>
            <br><br><br>
            <section class="text-gray-600 body-font">
                <div class="container mx-auto flex px-5  md:flex-row flex-col items-center">
                    <div class="row">
                    <?php
                        include 'Admin/connection.php';
                        $id = $_GET['id'];
 
                        $sql="SELECT * FROM `product_detail` WHERE id=$id";
                        $ResultData=mysqli_query($connection,$sql);

                        $row=mysqli_fetch_assoc($ResultData);
                          $id=$row['id'];
                          $ProductImage=$row['ProductImage'];
                          $ProductName=$row['ProductName'];
                          $details=$row['details'];


                        echo "
                        <div class='lg:max-w-lg lg:w-100 md:w-1/2 w-5/6 mb-10 md:mb-0 col-md-6'>
                            <img class='proming' alt='Product Image'
                                src='img/menu/$ProductImage'>
                        </div>
                        <div
                            class='col-md-6 lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left'>
                            <h1 class='section-title ff-secondary text-center text-primary fw-normal mb-5 ml-20'>$ProductName</h1>
                            <p style='font-size: 18px;'>$details</p>
                            <div class='contbox' style='margin-left: 5%;'>
                                <p style='font-size: 14px;'><i class='fa-solid fa-circle-check text-danger'></i> It is
                                    irresistible for their rich taste. </p>
                                <p style='font-size: 14px;'><i class='fa-solid fa-circle-check text-danger'></i> Once
                                    you try it, you will love it.</p>
                                <p style='font-size: 14px;'><i class='fa-solid fa-circle-check text-danger'></i> Fun.
                                    Fast. Tasty. Delicious.</p>
                                <p style='font-size: 14px;'><i class='fa-solid fa-circle-check text-danger'></i> Food to
                                    put you in a good mood.</p>
                            </div>
                            <center>
                                <div class='flex justify-center'>
                                    <a class='btn btn-primary py-3 px-5 mt-2' href='contact.html'
                                        style='margin: 0px 5px 0px 5px;'>Order Now</a>
                                    <a class='btn btn-success py-3 px-5 mt-2'
                                        href='https://wa.me/9860524412?text=Dishes-($ProductName), Enter Address:- '
                                        style='margin: 0px 5px 0px 5px;'><i class='fa-brands fa-whatsapp '></i> Send
                                        Message</a>
                                </div>
                            </center>
                        </div>
                        ";
                        ?>
                    </div>
                </div>
            </section>
        </h3>
    </div>
    <!-- banjara kabab End -->


    <!--Add Extra Menu start-->
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

                                            $id = $_GET['id'];

                                            $sql="SELECT * FROM `product_detail` WHERE  category='VEG KEBAB' ORDER BY RAND()";
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
    <!--Add Extra Menu End-->

<!--Main Container End-->

<?php include 'Footer.php'; ?>