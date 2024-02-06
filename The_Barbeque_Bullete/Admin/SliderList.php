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
                    <h4 class="card-header">Slider Details</h4>
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
                      <th scope="col">Banner Title</th>
                      <th scope="col">Banner Image</th>
                      <th scope="col">Banner Description</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    include 'SliderListBackend.php';

                    while($row=mysqli_fetch_array($ResultData)){
                    echo "<tr style='background-color:white;'>";
                    echo "<td class='border-bottom'>$row[id]</td>";
                    echo "<td class='border-bottom'>$row[Banner_Title]</td>";
                    echo "<td class='border-bottom'>$row[Banner_Image]</td>";
                    echo "<td class='col-3 border-bottom'>$row[Banner_Description]</td>";
                    echo '<td class="border-bottom">
                    <a href="SliderEdit.php?id='.$row['id'].'"><button class="btn btn-success m-2"><i class="fa-solid fa-pencil m-1"></i> Edit</button></a>
                    <a href="SliderDeleteBackEnd.php?id='.$row['id'].'"><button class="btn btn-danger m-2"><i class="fa-solid fa-trash m-1"></i>Delete</button></a>
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