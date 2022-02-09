<?php include "header.php"; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Product</li>
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
            <label>Category Name </lable>
            <select name="category_name" class="form-control">
            <?php
              $obj = new DashboardClass("yourhost","un","pw","db_name");
              $query = mysqli_query($con,"select * from categories");
              while($k = mysqli_fetch_array($query))
              {
                ?>
                  <option value="<?php echo $k['categoryname']; ?>">
                    <?php echo $k['categoryname']; ?>
                  </option>
                <?php
              }
            ?>
            </select>
            <label>Product Name </lable>
            <input type="text" name="product_name" class="form-control" ></br>
            <label>Price </lable>
            <input type="text" name="price" class="form-control" ></br>
            <label>Details </lable>
            <textarea type="text" name="details" class="form-control" rows="4" cols="50" ></textarea></br>
            <label>Image </lable></br>
            <input type="file" name="f1" class="form-control"></br></br>    
            <input type="submit" name="submit" value="Submit" class ="btn btn-primary">
          </form>
          <?php
              if($_POST)
              {
                $categoryname = htmlspecialchars($_POST['category_name']);
                $productname = htmlspecialchars($_POST['product_name']);
                $prodprice = htmlspecialchars($_POST['price']);
                $proddetails = htmlspecialchars($_POST['details']);
                
                //db
                include "dashboardclass.php";
              
                $file_name = $_FILES['f1']['name'];
                $file_tmp = $_FILES['f1']['tmp_name'];
                $dir = "uploads/"; // directory to save image
                $prodimage = $dir.$file_name; // location and name of image
                move_uploaded_file($file_tmp, $prodimage);
                  
                  $obj = new DashboardClass("yourhost","un","pw","db_name");
                  $obj->add_product($categoryname,$productname,$prodprice,$proddetails,$prodimage);
                  
                  echo "<p class='alert alert-success'> Image uploaded successfully</p>";
              }
      ?>


      </div>
        
        
    </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
        
  </div>
  <?php include "footer.php"; ?>
