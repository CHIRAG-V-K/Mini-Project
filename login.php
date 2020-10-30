<!-- login page -->
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
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Login</title>
  </head>
  <body>
    <!-- login page-->
    <main>
      <section class="landing">
        <nav>
          <h1 id="logo">Project Logo</h1>
          <ul class="nav-links">
            <li><a href="index.php">HOME</a></li>
            <li><a target="_blank" href="about.php">ABOUT</a></li>
            <li><a target="_blank" href="signup.php">SIGN UP</a></li>
          </ul>
        </nav>

        <!-- login-form -->
        <section class="my-5">
          <div>
            <form method="post" action="connection.php">
              <div class="form-group">
                <label> First Name : </label>
                <input
                  name="firstname"
                  type="text"
                  class="form-control"
                  placeholder="First name"
                />
              </div>

              <div class="form-group">
                <label>Last Name : </label>
                <input
                  name="lastname"
                  type="text"
                  class="form-control"
                  placeholder="Last name"
                />
              </div>

              <div class="form-group">
                <label for="#Email">Email:</label>
                <input
                  name="email"
                  type="text"
                  class="form-control"
                  placeholder="E-mail"
                />
              </div>

              <div class="form-group">
                <label>Password: </label>
                <input
                  name="password"
                  type="text"
                  class="form-control"
                  placeholder="Password"
                />
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-success">Login</button>
              </div>
            </form>
          </div>
        </section>
      </section>
    </main>
  </body>
</html>
