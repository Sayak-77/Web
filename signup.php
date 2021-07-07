<!DOCTYPE html>
    <html>
    <head>
        <meta charset = "utf-8" />
        <title></title>
        <link rel="stylesheet" type="text/css" href="signstyle.css">
        <link href="https://fonts.googleapis.com/css2?family=Ma+Shan+Zheng&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a2dee345c3.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container background-Orange">
            <header class="row" id="main">
              <div class="large-2 column">
              <div class="brand">
                <hi><a href="#"></a></hi>
              </div>
              <div class="brand1">
                <hi><a href="#"></a></hi>
              </div>
              </div>
              </div>
              <nav id="main" class="large-8">
                <ul>
                    <a class="tot">devǝlopersHu𐐒.io</a>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="scope.php">Scope</a></li>
                    <li><a href="login.php"><button class="btn btn-smg" style="position:relative;left:28.92pc;">Login</button></a></li>
                    <div class="search-box">
                      <input class="search-txt" type="text" placeholder="Search">
                      <a href="#" class="search search-btn"><i class="fab fa-searchengin"></i></a>
                    </div>
                </ul>
              </nav>
        </header>
        <div class="omg"></div>
     <form action="signupcheck.php" method="post">
     	<h2>REGISTER</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Full Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>School / College / University</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="edu" 
                      placeholder="Stockholm University"
                      value="<?php echo $_GET['edu']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="edu" 
                      placeholder="Stockholm University"><br>
          <?php }?>

          <label>Email</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="e-mail" 
                      placeholder="example@gmail.com"
                      value="<?php echo $_GET['e-mail']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="e-mail" 
                      placeholder="example@gmail.com"><br>
          <?php }?>

          <label>Contact_Number</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="phone" 
                      placeholder="Mobile"
                      value="<?php echo $_GET['phone']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="phone" 
                      placeholder="Mobile"><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Confirm Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re-Enter_Password"><br>

     	<button type="submit"><a style="position:relative;bottom:4px;">Register</a></button>
          <a href="login.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>