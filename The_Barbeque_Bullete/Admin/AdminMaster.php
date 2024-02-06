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
            <form action="AdminBackEnd.php" method="POST" enctype="multipart/form-data">
              <div class="card-header">
                <h4>Admin Forms</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Admin Name</label>
                  <input type="text" class="form-control" id="Admin_Name" name="Admin_Name" pattern="[A-Za-z /s]" required>
                </div>

                <div class="form-group">
                  <label>Admin Image</label>
                  <input type="file" class="form-control" id="Admin_Image" name="Admin_Image">
                </div>

                <div class="form-group">
                  <label>Restaurant Address</label>
                  <input type="text" class="form-control" id="Restaurant_Address" name="Restaurant_Address">
                </div>

                <div class="form-group">
                  <label>Restaurant Email Id</label>
                  <input type="email" class="form-control" id="Restaurant_Email_Id" name="Restaurant_Email_Id" autocomplete="off" pattern="[^ @]*@[^ @]*">
                </div>
                <div class="form-group">
                  <label>Restaurant Phone No.</label>
                  <input type="tel" class="form-control" id="Restaurant_Phone" name="Restaurant_Phone" autocomplete="off" pattern="[7-9]{1}[0-9]{9}" required>
                </div>
                <div class="form-group">
                  <label>Restaurant Alternate Phone No.</label>
                  <input type="tel" class="form-control" id="Alternate_Phone" name="Alternate_Phone" autocomplete="off" pattern="[7-9]{1}[0-9]{9}" required>
                </div>
                <div class="form-group">
                  <label>Restaurant Opening Day</label>
                  <input type="text" class="form-control" id="Opening_Day" name="Opening_Day" autocomplete="off" require>
                </div>
                <div class="form-group">
                  <label>Restaurant Opening Time</label>
                  <input type="text" class="form-control" id="Opening_Time" name="Opening_Time" autocomplete="off" require>
                </div>
                <div class="form-group">
                  <label>Restaurant Last Day</label>
                  <input type="text" class="form-control" id="Last_Day" name="Last_Day" autocomplete="off" require>
                </div>
                <div class="form-group">
                  <label>Restaurant Last Opening Time</label>
                  <input type="text" class="form-control" id="Last_Opening_Time" name="Last_Opening_Time" autocomplete="off" require>
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