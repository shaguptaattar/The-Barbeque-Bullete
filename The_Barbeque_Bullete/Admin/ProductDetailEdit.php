<?php 
session_start();
if(!$_SESSION['Email_Id'])
{
    header('Location:../Log_In.php');
}
?>
<?php include 'header.php'; ?>
      <!-- Main Content Start-->
      <div class="main-content">
        
        <section class="section">
            <!-- php start -->
            <?php
                    include 'connection.php';
                    $id = $_GET['id'];
                    // echo $id;
                    $sql = "SELECT * FROM `product_detail` where id=$id";
                    // echo $sql;
                    $result = mysqli_query($connection,$sql);

                    while($row = mysqli_fetch_array($result)){
                        $ProductImage=$row['ProductImage'];
                        $ProductName=$row['ProductName'];
                        $CategoryDetails=$row['category'];
                        $details=$row['details'];  
                    }

                ?>

            <!-- php end -->
          <div class="section-body">
            <div class="row">
              <div class="col-9 col-md-9 col-lg-9" style="margin:auto;">
                <div class="card">
                  <div class="card-header">
                    <h4>Product Details Master</h4>
                  </div>
                  <div class="card-body">
                    <form action="ProductDetailUpdate.php" method="post">
                    <div class="form-group">
                     <label>Id</label>
                      <input type="text" class="form-control" id="id" name="id" value="<?php echo $id ?>" readonly>
                    </div> 

                    <div class="form-group">
                     <label> Product Image</label>
                      <input type="file" class="form-control" id="ProductImage" name="ProductImage" value="<?php echo $ProductImage ?>">
                    </div> 

                    <div class="form-group">
                     <label> Product Name</label>
                      <input type="text" class="form-control" id="ProductName" name="ProductName" value="<?php echo $ProductName ?>">
                    </div> 

                    <div class="form-group">
                      <label>Choose One Category</label>
                      <select class="custom-select" id="CategoryDetails" name="CategoryDetails" value="<?php echo $CategoryDetails ?>">
                      <option value="" >Select One Category...</option>
                      <?php
                      include 'connection.php';
                        $select_query="SELECT * from `category`";
                        $result_query=mysqli_query($connection,$select_query);
                        while($row=mysqli_fetch_assoc($result_query)){
                            $catagory_title=$row['category'];
                            echo "<option value='$catagory_title'>$catagory_title</option>";
                        }
                      ?>
                      </select>
                    </div>

                    <div class="form-group">
                     <label> Details</label>
                      <input type="text" class="form-control" id="details" name="details" value="<?php echo $details ?>">
                    </div> 

                    <center><button class="btn btn-primary" type="submit">Submit</button></center>
                    </form> 

                    <!-- <div class="form-group">
                      <label>Product Title</label>
                      <input type="text" class="form-control" id="Product_Title" name="Product_Title">
                    </div> -->
                   
                    
                  </div>

                </div>
            </div>
        </div>
    </div>
      <!--Main Content End-->
<?php include 'footer.php'; ?>