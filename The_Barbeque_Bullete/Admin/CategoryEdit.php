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
        $sql="SELECT * FROM `category` WHERE id=$id";
        $ResultData=mysqli_query($connection,$sql);
        while($row=mysqli_fetch_array($ResultData)){
            $category=$row['category'];
        }
        ?>
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-9 col-md-9 col-lg-9" style="margin:auto;">
                <div class="card">
                  <form action="CategoryUpdate.php" method="POST">
                  <div class="card-header">
                    <h4>Custom Forms</h4>
                  </div>
                  <div class="card-body">
                  <div class="form-group">
                    <label>Id</label>
                      <input type="text" value="<?php echo $id ?>" class="form-control" id="id" name="id" readonly>
                    </div>   
                  <div class="form-group">
                    <label>Category</label>
                      <input type="text" value="<?php echo $category ?>" class="form-control" id="category" name="category">
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