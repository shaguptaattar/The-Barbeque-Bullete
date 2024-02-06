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
                    <h4 class="card-header">Reviews Details</h4>
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
                      <th scope="col">Id</th>
                      <th scope="col">Name</th>
                      <th scope="col">Review</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    include 'ReviewsListBackEnd.php';

                    while($row=mysqli_fetch_array($ResultData)){
                    echo "<tr style='background-color:white;'>";
                    echo "<th scope='row' class='border-bottom'>$row[id]</th>";
                    echo "<td class='border-bottom'>$row[reviews_name]</td>";
                    echo "<td class='border-bottom w-50'>$row[Add_Review]</td>";
                    echo '<td class="border-bottom">
                    <a href="ReviewsEdit.php?id='.$row['id'].'"><button class="btn btn-success m-2"><i class="fa-solid fa-pencil m-1"></i> Edit</button></a>
                    <a href="ReviewsListDelete.php?id='.$row['id'].'"><button class="btn btn-danger m-2"><i class="fa-solid fa-trash m-1"></i>Delete</button></a>
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
</div>
      <!--Main Content End-->
<?php include 'footer.php'; ?>