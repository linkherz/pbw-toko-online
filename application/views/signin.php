<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    /* Add a gray background color and some padding to the footer */
      footer {
        background-color: #f2f2f2;
        padding: 25px;
      }

    .isi {
      margin-top: 50px;
      margin-left: 10px;
      width: 30%;
    }

    th, td {
        font-size: 16px;
    }
    </style>
  </head>
  <body>

    <?php include 'header.php'; ?>
    <div class="col-md-2" style="padding-top: 50px; padding-left:70px;">
      <?php include 'kategori.php'; ?>
    </div>
    
    <div class="col-md-10">
      <div class="isi">
      <h2>Sign In:</h2>
      <form class="form-horizontal" method="post" action="<?php echo base_url().'login' ?>">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="username" name="username" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" placeholder="password" name="pass" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
              <label>
                <input type="checkbox"> Remember me
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Log in</button>
          </div>
        </div>
      </form>
      <!--
      <form method="post" action="<?php echo base_url().'login' ?>">
        <table>
          <tr>
            <td>Username</td>
            <td>: <input type="text" name="username" required></td>
          </tr>
          <tr>
            <td>Password</td>
            <td>: <input type="password" name="pass" required></td>
          </tr>
          <tr>
            <td></td>
            <td>: <input type="submit" value="LOGIN"></td>
          </tr>
        </table>
      </form>
    -->
      </div>
    </div>
    
    <footer class="container-fluid text-center">
      <p>Footer Text</p>
    </footer>
  </body>
</html>
