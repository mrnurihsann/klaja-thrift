<?php
session_start();
if(isset($_SESSION['username'])){
    header("Location: welcome.php");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>Welcome</title>
  </head>
  <body>
    <div class="container">
        <div class="login">
            <?php
            if(isset($_COOKIE["message"])){
                echo $_COOKIE["message"];
            }
            ?>
            <form action="login.php" method="post">
                <h2>Welcome</h2>
                <hr>
                <p>Login to Trifting Klaja</p>
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="username">
                <label for="username">Password</label>
                <input type="password" name="password" id="password" placeholder="Password">
                <button class="submit" name="submit" id="submit">Sign In</button>
                <p>
                    <a href="#" class="text-decoration-none text-center">Forgot Password?</a>
                </p>
            </form>
        </div>
        <div class="right">
            <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="Rectangle 6.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="Rectangle 7.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="Rectangle 8.png" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
     <script>
        // Check if the URL contains 'login=failed'
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('login') && urlParams.get('login') === 'failed') {
            alert("Login failed. Please check your username and password.");
        }
    </script>
  </body>
</html>

