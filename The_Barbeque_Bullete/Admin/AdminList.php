<?php 
session_start();
if(!$_SESSION['Email_Id'])
{
    header('Location:../Log_In.php');
}
?>
<?php include 'header.php'; ?>
<!--Database value in Table-->
<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                <div class="card-header">
                <div class="form-inline mr-auto w-100">
                  <ul class="navbar-nav mr-3">
                    <h4 class="card-header">Product Details</h4>
                  </ul>
                    <form class="form-inline my-2 my-lg-0 ml-auto">
                      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
              </div>
                  <div class="card-body" style="overflow-x:auto;">
                    <table class="table table-striped">
                      <thead>
                    <tr>
                      <th scope="col">Action</th>
                      <th scope="col">Id</th>
                      <th scope="col">Admin Name</th>
                      <th scope="col">Admin_Image</th>
                      <th scope="col">Restaurant_Address</th>
                      <th scope="col">Restaurant_Email_Id</th>
                      <th scope="col">Restaurant_Phone</th>
                      <th scope="col">Alternate_Phone</th>
                      <th scope="col">Opening_Day</th>
                      <th scope="col">Opening_Time</th>
                      <th scope="col">Last_Day</th>
                      <th scope="col">Last_Opening_Time</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    include 'AdminListBackEnd.php';

                    while($row=mysqli_fetch_array($ResultData)){
                    echo "<tr style='background-color:white;'>";
                    echo '<td class="border-bottom">
                    <a href="AdminEdit.php?id='.$row['id'].'"><button class="btn btn-success m-2"><i class="fa-solid fa-pencil m-1"></i> Edit</button></a>
                    <a href="AdminDeleteBackEnd.php?id='.$row['id'].'"><button class="btn btn-danger m-2"><i class="fa-solid fa-trash m-1"></i>Delete</button></a>
                    </th>';
                    echo "<th scope='row' class='border-bottom'>$row[id]</th>";
                    echo "<td class='border-bottom'>$row[Admin_Name]</td>";
                    echo "<td class='border-bottom'><img style='width:50px;' src='assets/img/admin/$row[id]/$row[Admin_Image]' alt='Admin Image'></td>";
                    echo "<td class='border-bottom'>$row[Restaurant_Address]</td>";
                    echo "<td class='border-bottom'>$row[Restaurant_Email_Id]</td>";
                    echo "<td class='border-bottom'>$row[Restaurant_Phone]</td>";
                    echo "<td class='border-bottom'>$row[Alternate_Phone]</td>";
                    echo "<td class='border-bottom'>$row[Opening_Day]</td>";
                    echo "<td class='border-bottom'>$row[Opening_Time]</td>";
                    echo "<td class='border-bottom'>$row[Last_Day]</td>";
                    echo "<td class='border-bottom'>$row[Last_Opening_Time]</td>";
                    
                     echo "</tr>";
                  }
                  ?>
                  </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>    
</div>
      <!--Main Content End-->
<?php include 'footer.php'; ?>