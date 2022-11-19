<?php

// Include database file
include 'database.php';

$customerObj = new database();

// Insert Record in customer table
if(isset($_POST['submit'])) {
  $customerObj->insertData($_POST);
}
else{
  echo "Failed";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD With PDO | Add Record</title>
  <meta name="description" content="This week we will be building a CREATE and READ CRUD system with PDO">
  <meta name="robots" content="noindex, nofollow">
  <!--  Add our Google fonts  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
  <!--  Add our Bootstrap  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!--  Add our custom CSS  -->
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    1    <script src="./js/header.js"></script>
        <script src="./js/footer.js"></script>
</head>
<body>
 <header id="gHeader"></header>
  <section class="container">
    <div class="row">
      <div class="col-md-4 mx-auto">
        <div class="card">
          <div class="card-footer bg-dark text-white">
            <h2>Update record</h2>
          </div>
          <div class="card-body bg-light">
            <form method="POST">
              <div class="form-group">
                <label for="name">FullName:</label>
                <input type="text" class="form-control" name="name" placeholder="Enter name" required="">
              </div>
              <div class="form-group">
                <label for="Bio">Bio</label>
                <input type="Bio" class="form-control" name="Bio" placeholder="Enter bio" required="">
              </div>
              <div class="form-group">
                <label for="Email">Email</label>
                <input type="text" class="form-control" name="Email" placeholder="Enter Email" required="">
              </div>
              <input type="submit" name="submit" class="btn btn-secondary light" style="float:left;" value="Add it">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
          <!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container my-5">

<footer id="gFooter"></footer>

</div>
<!-- End of .container -->
</body>
</html>