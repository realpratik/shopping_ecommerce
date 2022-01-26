<?php

class DashboardClass {
  public $host;
  public $username;
  public $password;
  public $db;
  public $con;

  function __construct($host, $username, $password, $db){
    $this->host = $host;
    $this->username = $username;
    $this->password = $password;
    $this->db = $db;
    $this->con = mysqli_connect($this->host,$this->username,$this->password,$this->db);
  }

  function add_category($category_name){
    //insert query
    mysqli_query($this->con, "INSERT into categories(categoryname) VALUES('$category_name')");

  }
 
  function category_list(){
    $query = mysqli_query($this->con,"SELECT * FROM categories");
?>
    <table class="table">
      <tr>
        <th>Id</th>
        <th>Category Name </th>
        <th></th>
      </tr>  
      <?php
        while($k = mysqli_fetch_array($query)){
          echo "<tr>";
            echo "<td>";
              echo $k['id'];
            echo "</td>";
            echo "<td>";
              echo $k['categoryname'];
            echo "</td>";
            echo "<td>";
              echo '<a href="#" class="btn btn-danger">Delete</a>';
            echo "</td>";
          echo "</tr>";
        }

      ?>
    </table>
<?php
  }


    function add_product($category_name,$product_name,$price,$details,$merge){
      mysqli_query($this->con, "INSERT into products(categoryname, productname, price, details, image1) VALUES ('$category_name','$product_name','$price','$details','$merge')");
    }

    function product_list(){
      $query = mysqli_query($this->con,"SELECT * FROM products");
  ?>
      <table class="table">
        <tr>
          <th>Product Image</th>
          <th>Product Name</th>
          <th>Category Name</th>
          <th>price</th>
          <th></th>
        </tr>
  <?php
          while($k=mysqli_fetch_array($query)){
            echo "<tr>";
              echo "<td>";
  ?>
                <img src="<?php echo $k['image']?>"/>
  <?php      
                echo "</td>";
              echo "<td>";
                echo $k['productname'];
              echo "</td>";
              echo "<td>";
                echo $k['categoryname'];
              echo "</td>";
              echo "<td>";
                echo $k['price'];
              echo "</td>";  
              echo "<td>";
                echo $k['price'];
              echo "</td>";  
            echo "</tr>";
          }
  ?>
      </table>
  <?php
  
    }

    function add_coupon($couponcode,$coupondiscount){
      mysqli_query($this->con, "INSERT INTO coupons(coupon_code,discount) VALUES ('$couponcode','$coupondiscount')");
    }

    function show_coupon(){
      
      $query = mysqli_query($this->con, "SELECT * FROM coupons");
      ?>
          <table class="table">
            <tr>
              <th>Coupon Code</th>
              <th>Discount</th>
            </tr>
      <?php
          
          while($k=mysqli_fetch_array($query)){
            echo "<tr>";
              echo "<td>";
                echo $k['coupon_code'];
              echo "</td>";
              echo "<td>";
                echo $k['discount'];
              echo "</td>";   
            echo "</tr>";
          }
      ?>
          </table>
      <?php 
    }

    function show_users(){
        $query = mysqli_query($this->con,"SELECT * FROM users");

?>
        <table class="table">
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Mobile</th>
            <th>Country</th>
            <th>State</th>
            <th>City</th>
            <th>User Type</th>
          </tr>
<?php
          while($k = mysqli_fetch_array($query)){
            echo "<tr>";
              echo "<td>";
                echo $k['name'];
              echo "</td>";
              echo "<td>";
                echo $k['email'];
              echo "</td>";
              echo "<td>";
                echo $k['password'];
              echo "</td>";
              echo "<td>";
                echo $k['mobile'];
              echo "</td>";
          
              echo "<td>";
                echo $k['country'];
              echo "</td>";
          
              echo "<td>";
                echo $k['state'];
              echo "</td>";
            
              echo "<td>";
                echo $k['city'];
              echo "</td>";
            
              echo "<td>";
                echo $k['usertype'];
              echo "</td>";
            echo "</tr>";
          }

?>
        </table>

<?php


    }

}

