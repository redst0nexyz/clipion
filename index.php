<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("meta.php"); ?>
  </head>

  <body>

  <?php include("topbar.php"); ?>

    <div class="container">

      <div class="content">
        <div class="page-header">
          <h1>Home <small><?php echo date("F d, Y"); ?></small></h1>
        </div>
        <div class="row">
          <div class="span10">
            <h2>Featured Videos</h2>
          </div>
          <div class="span4">
            <h3>Login</h3>
            <form action="login.php">
            <input class="input-small span3" style="margin-bottom: 2px;" type="text" placeholder="Username">
            <br>
            <input class="input-small span3" style="margin-bottom: 2px;" type="password" placeholder="Password">
            <br>
            <button class="btn" style="margin-bottom: 2px;" type="submit">Login</button>
            <span class="help-block">No account? <a href="signup.php">Create one now</a>.</span>
          </form>
          </div>
        </div>
      </div>

      <?php include ("footer.php"); ?>

    </div> <!-- /container -->

  </body>
</html>
