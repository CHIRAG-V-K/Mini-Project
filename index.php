<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lobster&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="style.css" />
    <title>Project 1</title>
  </head>
  <body>
    <!-- navigation page or main or landing page-->
    <main>
      <section class="landing">
        <nav>
          <h1 id="logo">Project Logo</h1>
          <ul class="nav-links">
            <li><a href="index.php">HOME</a></li>
            <li><a target="_blank" href="about.php">ABOUT</a></li>
            <li><a target="_blank" href="signup.php">SIGN UP</a></li>
            <li><a href="login.php">LOGIN</a></li>
          </ul>
        </nav>
        <h2 class="big-text">Theme Name</h2>
      </section>
    </main>
    <!-- introduction page -->
    <div class="intro">
      <div class="intro-text">
        <h1 class="hide">
          <span class="text">WELCOME</span>
        </h1>
        <h1 class="hide">
          <span class="text">Everyone</span>
        </h1>
      </div>
    </div>
    <!-- slider effect div -->
    <div class="slider"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    </script>
    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"
      integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ=="
      crossorigin="anonymous"
    ></script>
    <script src="home.js"></script>
  </body>
</html>
