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
        $sql="SELECT * FROM `booking` WHERE id=$id";
        $ResultData=mysqli_query($connection,$sql);
        while($row=mysqli_fetch_array($ResultData)){
            $booling_name=$row['booling_name'];
            $booking_email=$row['booking_email'];
            $data_and_time=$row['data_and_time'];
            $No_people=$row['No_people'];
            $booking_phone=$row['booking_phone'];
            $message=$row['message'];
        }
        ?>
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-9 col-md-9 col-lg-9" style="margin:auto;">
                <div class="card">
                  <form action="BookingUpdate.php" method="POST">
                  <div class="card-header">
                    <h4>Booking Edit </h4>
                  </div>
                  <div class="card-body">
                  <div class="form-group">
                    <label>Id</label>
                      <input type="text" value="<?php echo $id ?>" class="form-control" id="id" name="id" readonly>
                    </div>   
                  <div class="form-group">
                    <label>booling_name</label>
                      <input type="text" value="<?php echo $booling_name ?>" class="form-control" id="booling_name" name="booling_name">
                    </div> 
                    
                    <div class="form-group">
                    <label>booking_email</label>
                      <input type="email" value="<?php echo $booking_email ?>" class="form-control" id="booking_email" name="booking_email">
                    </div> 

                    <div class="form-group">
                    <label>data_and_time</label>
                      <input type="text" value="<?php echo $data_and_time ?>" class="form-control" id="data_and_time" name="data_and_time">
                    </div> 

                    <div class="form-group">
                    <label>No_people</label>
                      <input type="text" value="<?php echo $No_people ?>" class="form-control" id="No_people" name="No_people">
                    </div> 

                    <div class="form-group">
                    <label>booking_phone</label>
                      <input type="text" value="<?php echo $booking_phone ?>" class="form-control" id="booking_phone" name="booking_phone">
                    </div> 

                    <div class="form-group">
                    <label>Special Requirement</label>
                      <input type="text" value="<?php echo $message ?>" class="form-control" id="message" name="message">
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