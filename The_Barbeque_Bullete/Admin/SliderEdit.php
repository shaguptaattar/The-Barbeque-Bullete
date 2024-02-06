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
        $sql="SELECT * FROM `slider_forms` WHERE id=$id";
        $ResultData=mysqli_query($connection,$sql);
        while($row=mysqli_fetch_array($ResultData)){
            $Banner_Title=$row['Banner_Title'];
            $Banner_Image=$row['Banner_Image'];
            $Banner_Description=$row['Banner_Description'];
        }
        ?>
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-9 col-md-9 col-lg-9" style="margin:auto;">
                <div class="card">
                  <div class="card-header">
                    <h4>Slider Forms</h4>
                  </div>
                  <div class="card-body">
                    <form action="SliderUpdate.php" method="POST">
                    <div class="form-group">
                      <label>Id</label>
                      <input type="text" class="form-control" value="<?php echo $id ?>" id="id" name="id" readonly>
                    </div>
                    <div class="form-group">
                      <label>Banner Title</label>
                      <input type="text" class="form-control" value="<?php echo $Banner_Title ?>" id="Banner_Title" name="Banner_Title">
                    </div>
                    <div class="form-group">
                    <label>Banner Image</label>
                      <input type="file" class="form-control" value="<?php echo $Banner_Image ?>" id="Banner_Image" name="Banner_Image">
                    </div>
                    <div class="form-group">
                      <label>Banner Description</label>
                      <input type="text" class="form-control" value="<?php echo $Banner_Description ?>" id="Banner_Description" name="Banner_Description">
                    </div>
                    <center><button type="submit" class="btn btn-primary">Submit</button></center>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

   
<?php include 'footer.php'; ?>