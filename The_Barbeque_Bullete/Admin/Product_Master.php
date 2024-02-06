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
          <div class="section-body">
            <div class="row">
              <div class="col-9 col-md-9 col-lg-9" style="margin:auto;">
                <div class="card">
                  <div class="card-header">
                    <h4>Custom Forms</h4>
                  </div>
                  <div class="card-body">
                  <div class="form-group">
                    <label>Product Image</label>
                      <input type="file" class="form-control" id="Product_Image" name="Product_Image">
                    </div>  

                    <div class="form-group">
                      <label>Product Title</label>
                      <input type="text" class="form-control" id="Product_Title" name="Product_Title" autocomplete="off">
                    </div>
                   <center><button class="btn btn-primary" type="submit">Submit</button></center>
                    
                  </div>
                </div>
            </div>
        </div>
    </div>
      <!--Main Content End-->
<?php include 'footer.php'; ?>