<?php 
session_start();
if(!$_SESSION['Email_Id'])
{
    header('Location:../Log_In.php');
}
?>
<?php include 'Header.php'; ?>
      <!-- Main Content Start-->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-9 col-md-9 col-lg-9" style="margin:auto;">
                <div class="card">
                  <div class="card-header">
                    <h4>Slider Forms</h4>
                  </div>
                  <div class="card-body">
                    <form action="SliderBackEnd.php" method="POST">
                    <div class="form-group">
                      <label>Banner Title</label>
                      <input type="text" class="form-control" id="Banner_Title" name="Banner_Title" autocomplete="off">
                    </div>
                    <div class="form-group">
                    <label>Banner Image</label>
                      <input type="file" class="form-control" id="Banner_Image" name="Banner_Image">
                    </div>
                    <div class="form-group">
                      <label>Banner Description</label>
                      <input type="text" class="form-control" id="Banner_Description" name="Banner_Description" autocomplete="off">
                    </div>
                    <center><button type="submit" class="btn btn-primary">Submit</button></center>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

   
<?php include 'Footer.php'; ?>