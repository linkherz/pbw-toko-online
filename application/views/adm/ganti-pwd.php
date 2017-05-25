<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
        margin-left: 70px;
        width: 70%;
      }

      th, td {
          font-size: 18px;
      }

    </style>
  </head>
  <body>

    <?php include 'adm-header.php'; ?>
    <div class="col-md-2" style="padding-top: 50px; padding-left:70px;">
      <?php include 'adm-kategori.php'; ?>
    </div>
    
    <div class="col-md-10">
      <div class="isi">
        <h2 style="margin-bottom:30px">Ganti Password</h2>
        <form class="form-horizontal" method="post" action="<?php echo base_url().'adm-ganti' ?>">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputEmail3" placeholder="username" name="username" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Password Lama</label>
          <div class="col-sm-4">
            <input type="password" class="form-control" id="inputPassword3" placeholder="password lama" name="passLama" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Password Baru</label>
          <div class="col-sm-4">
            <input type="password" class="form-control" id="inputPassword3" placeholder="password baru" name="passBaru" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Ganti</button>
          </div>
        </div>
      </form>
      </div>
    </div>
    
    <footer class="container-fluid text-center">
      <p>Footer Text</p>
    </footer>
  </body>
</html>

