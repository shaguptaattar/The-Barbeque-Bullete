<?php 
session_start();
if(!$_SESSION['Email_Id'])
{
    header('Location:../Log_In.php');
}
?>
<?php include 'header.php';?>
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
                    <h4 class="card-header">Product Details List</h4>
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
                      <th scope="col-md-3">Action</th>
                      <th scope="col">Id</th>
                      <th scope="col-md-3">Product Image</th>
                      <th scope="col-md-3">Product Title</th>
                      <th scope="col-md-3">Product Category</th>
                      <th scope="col-md-3">Description</th>                      
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    include 'ProductDetailListBackend.php';

                    while($row=mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo '<td class="border-bottom">
                    <a href="ProductDetailEdit.php?id='.$row['id'].'"><button class="btn btn-success m-2"><i class="fa-solid fa-pencil m-1"></i> Edit</button></a>
                    <a href="ProductDetailDelete.php?id='.$row['id'].'"><button class="btn btn-danger m-2"><i class="fa-solid fa-trash m-1"></i>Delete</button></a>
                     </th>';
                    echo "<td class='border-bottom'>$row[id]</td>";
                    echo "<td class='border-bottom'><img style='width:70px; height:50px' src='../img/menu/$row[ProductImage]' alt='Product Image'></td>";
                    echo "<td class='border-bottom'>$row[ProductName]</td>";
                    echo "<td class='border-bottom'>$row[category]</td>";
                    echo "<td class='border-bottom'>$row[details]</td>";
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