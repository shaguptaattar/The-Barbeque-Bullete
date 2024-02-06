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
      <?php
        include 'connection.php';
        $id=$_GET['id'];
        $sql="SELECT * FROM `product` WHERE id=$id";
        $ResultData=mysqli_query($connection,$sql);
        while($row=mysqli_fetch_array($ResultData)){
            $Product_Image=$row['Product_Image'];
            $Product_Title=$row['Product_Title'];
        }
        ?>
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-9 col-md-9 col-lg-9" style="margin:auto;">
                <div class="card">
                  <form action="ProductUpdate.php" method="POST">
                  <div class="card-header">
                    <h4>Custom Forms</h4>
                  </div>
                  <div class="card-body">
                  <div class="form-group">
                    <label>Id</label>
                      <input type="text" value="<?php echo $id ?>" class="form-control" id="id" name="id" readonly>
                    </div>  
                  <div class="form-group">
                    <label>Product Image</label>
                      <input type="file" value="<?php echo $Product_Image ?>" class="form-control" id="Product_Image" name="Product_Image">
                    </div>  

                    <div class="form-group">
                      <label>Product Title</label>
                      <input type="text" value="<?php echo $Product_Title ?>" class="form-control" id="Product_Title" name="Product_Title">
                    </div>
                   <center><button class="btn btn-primary" type="submit">Submit</button></center>
                    
                  </div>
                </div>
                </form>
            </div>
        </div>
    </div>
      <!--Main Content End-->
<?php include 'footer.php'; ?>