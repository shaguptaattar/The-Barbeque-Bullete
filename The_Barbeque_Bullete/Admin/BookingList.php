<?php 
session_start();
if(!$_SESSION['Email_Id'])
{
    header('Location:../Log_In.php');
}
?>
<?php include 'header.php'; ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                <div class="card-header">
                <div class="form-inline mr-auto w-100">
                  <ul class="navbar-nav mr-3">
                    <h4 class="card-header">Category Details</h4>
                  </ul>
                    <form class="form-inline my-2 my-lg-0 ml-auto" role="search" action="" method="get">
                      <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search_data" aria-label="Search" autocomplete="off">
                      <button class="btn btn-outline-success my-2 my-sm-0" name="search_data_products" type="submit">Search</button>
                    </form>
                </div>
              </div>

                <table class="table">
                
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col-md-3">booling_name</th>
                      <th scope="col-md-3">data_and_time</th>
                      <th scope="col-md-3">No_people</th>
                      <th scope="col-md-3">booking_phone</th>
                      <th scope="col-md-3">message</th>
                      <th scope="col-md-3">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    include 'BookingListBackend.php';

                    while($row=mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>$row[id]</td>";
                    echo "<td>$row[booling_name]</td>";
                    echo "<td>$row[data_and_time]</td>";
                    echo "<td>$row[No_people]</td>";
                    echo "<td>$row[booking_phone]</td>";
                    echo "<td>$row[message]</td>";
                    echo '<td>
                    <a href="BookingEdit.php?id='.$row['id'].'"><button class="btn btn-success m-2"><i class="fa-solid fa-pencil m-1"></i> Edit</button></a>
                    <a href="BookingDeleteBackEnd.php?id='.$row['id'].'"><button class="btn btn-danger m-2"><i class="fa-solid fa-trash m-1"></i>Delete</button></a>
                     </th>';
                     echo "</tr>";
                  }
                  ?>
                  </tbody>
                </table>
                </div>
            </div>
        </div>
    </div> 
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
<?php include 'footer.php'; ?>