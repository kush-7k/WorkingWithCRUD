<!doctype html>

    <html lang="en">
    <head>
        <!--Head containing the meta data and the links to CSS and JS files-->
        <meta charset="utf-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        <title>Assignment-3</title>
        <meta name="description" content="These is Assignment3 of the PHP">
        <meta name="robots" content="no index, no follow">
        <!--CSS file-->
        <link rel="stylesheet" href="./css/style.css">
        <!--Our JS file-->
        <script src="./js/header.js"></script>
        <script src="./js/footer.js"></script>
</head>
<body>
    <!--Global header called using id-->
    <header id="gHeader"></header>
    <section>
        <!--Section containing seperate divs and profile-->
        <div id="profilecard">
            <h1>Kush Patel</h1>
            <div class="image-crop">
                <!--Image-->
                <img id="avatar" src="./img/my.jpg" alt="My image">
            </div>
            <div id="aboutme">
                <!--BIO-->
                <p>Hello, my name is Kush! I am a coder, having knowledge about languages like Java, HTML/CSS, JavaScript, C, C++. I like front-end as well as back-end development and have keen interest in knowing in-depth about Python, Java, Node and many more. </p>
            </div>
            <div id="email">
                <!--Email-->
                <p>test123@yahoo.com</p>
            </div>
            <!--Some additional information making website more attractive-->
            <div id="fly">
                <div class="col">
                    <p class="fly1">89</p>
                    <p class="label">Comments</p>
                </div>
                        <div class="col">
                    <p class="fly1">61</p>
                    <p class="label">Codes</p>
                </div>
                        <div class="col">
                    <p class="fly1">9</p>
                    <p class="label">Projects</p>
                </div>
            </div>
            <div id="buttons">
                <button>Follow</button>
                <button id="msg">Message</button>
            </div>
        </div>
        <div>
            <!--Message displaying and asking to create user profile-->
            <p class="t1">Do you want to create your profile card as well?</p>
            <p class="t1">If yes then click on "Create Profile" in header</p>
        </div>
                <!--CRUD-->
        <?php
                if (isset($_GET['msg1']) == "insert") {
                echo "<div class='alert alert-success alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert'>×</button>
                        Your Profile create successfully
                      </div>";
                }
                if (isset($_GET['msg2']) == "update") {
                  echo "<div class='alert alert-success alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert'>×</button>
                        Your Profile updated successfully
                      </div>";
                }
                if (isset($_GET['msg3']) == "delete") {
                 echo "<div class='alert alert-success alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert'>×</button>
                        Profile deleted successfully
                      </div>";
                }
              ?>
              </section>
              <section>
                <h2>Profile view
                </h2>
                  <?php
                  $Information = $InformObj->displayData();
                  foreach ($Information as $Info) {
                    ?>
                <!--Displaying user's profile on the same page-->
                    <div id="profilecard">
                    <h1><?php echo $Info['name'] ?></h1>
                    <div id="aboutme">
                    <p><?php echo $Info['bio'] ?></p>
                  </div>
                  <div id="email">
                <p><?php echo $Info['email'] ?></p>
                <div id="fly">
                <div class="col">
                    <p class="fly1">89</p>
                    <p class="label">Comments</p>
                </div>
                        <div class="col">
                    <p class="fly1">61</p>
                    <p class="label">Codes</p>
                </div>
                        <div class="col">
                    <p class="fly1">9</p>
                    <p class="label">Projects</p>
                </div>
            </div>
            </div>
                  </div>
                      
                        <button class="btn btn-secondary mr-3"><a href="edit.php?editId=<?php echo $Info['name'] ?>">
                            <i class="fa fa-pencil text-black" aria-hidden="true"></i></a></button>
                        <button class="btn btn-danger"><a href="index.php?deleteId=<?php echo $Info['name'] ?>" onclick="confirm('Are you sure want to delete this Profile?')">
                            <i class="fa fa-trash text-black" aria-hidden="true"></i>
                          </a></button>
                    
                    
                  <?php } ?>
                  <!--End of PHP-->

    </section>
                    <!--Global footer called using id-->
    <footer id="gFooter"></footer>
</body>
</html>