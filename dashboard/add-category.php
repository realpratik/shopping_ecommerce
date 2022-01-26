<?php include "header.php"; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add New Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Category</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <form action="" method="post">
          <label>Category Name</label>
          <input type="text" name="category_name" class="form-control" required placeholder="Category Name">
          </br>
          <input type="submit" name="submit" value="Add" class="btn btn-primary">
        </form>

        <?php
        if($_POST){
         
          $category_name = htmlspecialchars($_POST['category_name']);
          
          //db
          include "dashboardclass.php";

          $obj = new DashboardClass("localhost","root","root","ecommerce");
          //$obj = new DashboardClass("localhost","root","root","ecommerce");
          $obj->add_category($category_name);
          echo "</br>";
          echo "<p class='alert alert-success'> Category has been saved.</p>";

        }




        ?>

        <!-- commemnted after copying from index.php



        ****Small boxes (Stat box)**** 
        <div class="row">
          <div class="col-lg-3 col-6">
            **** small box*****
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Total Order</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          ***** ./col ****
          <div class="col-lg-3 col-6">
            **** small box ****
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Registered Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          *** ./col ****
          <div class="col-lg-3 col-6">
            **** small box *****
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>Total Products</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          *****./col ****
          <div class="col-lg-3 col-6">
            ****** small box *****
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Total Sales Today</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          *****./col ****
        </div>

-->   </div> 
    </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
        
  </div>
  <?php include "footer.php"; ?>