<?php 
session_start();
if(!$_SESSION['username'])
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
        $sql="SELECT * FROM `admin` WHERE id=$id";
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
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-9 col-md-9 col-lg-9" style="margin:auto;">
                <div class="card">
                <form action="AdminUpdate.php" method="POST" enctype="multipart/form-data">
              <div class="card-header">
                <h4>Admin Forms</h4>
              </div>
              <div class="card-body">
              <div class="form-group">
                  <label>Admin id</label>
                  <input type="text" class="form-control" value="<?php echo $id ?>" id="id" name="id" readonly>
                </div>

                <div class="form-group">
                  <label>Admin Name</label>
                  <input type="text" class="form-control" value="<?php echo $Admin_Name ?>" id="Admin_Name" name="Admin_Name" pattern="[A-Za-z /s]" require>
                </div>

                <div class="form-group">
                  <label>Admin Image</label>
                  <input type="file" class="form-control" value="<?php echo $Admin_Image ?>" id="Admin_Image" name="Admin_Image">
                </div>

                <div class="form-group">
                  <label>Restaurant Address</label>
                  <input type="text" class="form-control" value="<?php echo $Restaurant_Address ?>" id="Restaurant_Address" name="Restaurant_Address">
                </div>

                <div class="form-group">
                  <label>Restaurant Email Id</label>
                  <input type="email" class="form-control" value="<?php echo $Restaurant_Email_Id ?>" id="Restaurant_Email_Id" name="Restaurant_Email_Id" autocomplete="off"  pattern="[^ @]*@[^ @]*" require>
                </div>
                <div class="form-group">
                  <label>Restaurant Phone No.</label>
                  <input type="tel" class="form-control" value="<?php echo $Restaurant_Phone ?>" id="Restaurant_Phone" name="Restaurant_Phone" pattern="[7-9]{1}[0-9]{9}" autocomplete="off">
                </div>
                <div class="form-group">
                  <label>Restaurant Alternate Phone No.</label>
                  <input type="tel" class="form-control" id="Alternate_Phone" value="<?php echo $Alternate_Phone ?>" name="Alternate_Phone" pattern="[7-9]{1}[0-9]{9}" autocomplete="off">
                </div>
                <div class="form-group">
                  <label>Restaurant Opening Day</label>
                  <input type="text" class="form-control" value="<?php echo $Opening_Day ?>" id="Opening_Day" name="Opening_Day" autocomplete="off">
                </div>
                <div class="form-group">
                  <label>Restaurant Opening Time</label>
                  <input type="text" class="form-control" value="<?php echo $Opening_Time ?>" id="Opening_Time" name="Opening_Time" autocomplete="off">
                </div>
                <div class="form-group">
                  <label>Restaurant Last Day</label>
                  <input type="text" class="form-control" value="<?php echo $Last_Day ?>" id="Last_Day" name="Last_Day" autocomplete="off">
                </div>
                <div class="form-group">
                  <label>Restaurant Last Opening Time</label>
                  <input type="text" class="form-control" value="<?php echo $Last_Opening_Time ?>" id="Last_Opening_Time" name="Last_Opening_Time" autocomplete="off">
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