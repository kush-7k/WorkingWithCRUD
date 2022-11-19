<?php

  class database{
    private $servername = "172.31.22.43";
    private $username   = "Kush200517654";
    private $password   = "0iu9ZpQfcj";
    private $database   = "Kush200517654";
    public  $con;


    // Database Connection
    public function __construct()
    {
      $this->con = new mysqli($this->servername, $this->username,$this->password,$this->database);
      if(mysqli_connect_error()) {
        trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
      }else{
        echo "Success";
        return $this->con;
      }
    }

    // Insert customer data into customer table
    public function insertData($POST)
    {
      echo "In insert";
      $name = $this->con->real_escape_string($_POST['name']);
      // echo $name;
      $bio = $this->con->real_escape_string($_POST['Phoneno']);
      $email = $this->con->real_escape_string($_POST['email']);
     
      // echo $email;
      // echo $Phoneno;
      $query = "INSERT INTO Information('Fullname','bio','Email') VALUES('$name','$bio','$email')";
      echo $query;
      $sql = "INSERT INTO Information (name, email, Phoneno)
      VALUES ('John','Jon is a Software engineer at Microsoft','John11@hh.com')";
      if ($sql == true) {
       header("Location:index.php?msg1=insert");
        echo "Success";
      }else{
        echo "Registration failed try again!";
      }
    }

    // Fetch customer records for show listing
    public function displayData()
    {
      $query = "SELECT * FROM Information";
      $result = $this->con->query($query);
      if ($result->num_rows > 0) {
        $data = array();
        while ($row = $result->fetch_assoc()) {
          $data[] = $row;
        }
        
        return $data;
      }else{
        echo "No found Profile";
      }
    }

    // Fetch single data for edit from information table
    public function displayRecordById()
    {
      $query = "SELECT * FROM Information";
      $result = $this->con->query($query);
      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row;
      }else{
        echo "Profile not found";
      }
    }

    
    public function updateRecord($postData)
    {
      $name = $this->con->real_escape_string($_POST['uname']);
      
      $bio = $this->con->real_escape_string($_POST['ubio']);
      $email = $this->con->real_escape_string($_POST['uemail']);
      if (!empty($name) && !empty($postData)) {
        $query = "UPDATE Information SET name = '$name',bio = '$bio', email = '$email'";
        $sql = $this->con->query($query);
        if ($sql==true) {
          header("Location:index.php?msg2=update");
        }else{
          echo "Profile updation failed try again!";
        }
      }

    }
    // Delete customer data from customer table
    public function deleteRecord($id)
    {
      $query = "DELETE FROM Information WHERE name = '$name'";
      $sql = $this->con->query($query);
      if ($sql==true) {
        header("Location:index.php?msg3=delete");
      }else{
        echo "Profile does not delete try again";
      }
    }
  }