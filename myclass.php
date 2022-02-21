<?php

class MyClass {
  public $host;
  public $username;
  public $password;
  public $db;
  public $con;

  function __construct($host,$username, $password,$db){
    $this->host = $host;
    $this->username = $username;
    $this->password = $password;
    $this->db = $db;
    $this->con = mysqli_connect($this->host,$this->username,$this->password,$this->db);
  }

  function login($email,$password){
    
    $q = mysqli_query($this->con,"SELECT * FROM users where email='$email' and password='$password'");
    if(mysqli_num_rows($q) != 0){
      session_start();
      $_SESSION['myemail'] = $email;
      header("location:dashboard/index.php");
    } else {
      echo "Invalid Login";
    }
 
 
  }




}

