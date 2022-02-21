<?php include "header.php"; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Coupon</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Coupon</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
         <form action="" method="post" enctype="multipart/form-data">
            <label>Coupon Code </lable>
              <input type="text" name="coupon_code" class="form-control" ></br>
            <label>Discount </lable>
              <input type="text" name="discount" class="form-control" ></br>
            <input type="submit" name="submit" value="Submit" class ="btn btn-primary">
          </form>
         
         <?php
                if($_POST){
                  $couponcode = htmlspecialchars($_POST['coupon_code']);
                  $coupondiscount = htmlspecialchars($_POST['discount']);

                  include "dashboardclass.php";


                  $obj = new DashboardClass("yourhost","un","pw","db_name");
                  $obj->add_coupon($couponcode,$coupondiscount);

                  echo "</br>";
                  echo "<p class='alert alert-success'> Coupon has been saved. </p>";
                }
          ?>


      </div>
        
        
    </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
        
  </div>
  <?php include "footer.php"; ?>
