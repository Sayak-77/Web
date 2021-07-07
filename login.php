<!DOCTYPE html>
    <html>
    <head>
        <meta charset = "utf-8" />
        <title></title>
        <link rel="stylesheet" type="text/css" href="style.css">
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
                    <div class="search-box">
                      <input class="search-txt" type="text" placeholder="Search">
                      <a href="#" class="search search-btn"><i class="fab fa-searchengin"></i></a>
                    </div>
                </ul>
              </nav>
        </header>
        <div class="omg"></div>
        <form action="logincheck.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit"><a style="position:relative;bottom:4px">Login</a></button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
        </body>
        </html>