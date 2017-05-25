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
    .isi {
      margin-top: 50px;
      margin-left: 70px;
    }

    .nomor_resi {
      font-weight: bolder;
      font-style: italic;
      background-color: #404040; 
    }

    table {
      margin-top:50px;
      background-color: white;
      font-size: 20px;
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
      <h2>Data User</h2>
      <form class="form-inline" method="post" action="<?php echo base_url().'adm-delete-user' ?>">
        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail3">Username</label>
          <input type="text" class="form-control" id="exampleInputEmail3" placeholder="username" name="username">
        </div>
        <button type="submit" class="btn btn-default">Unactive</button>
      </form>
      <form class="form-inline" method="post" action="<?php echo base_url().'adm-undelete-user' ?>">
        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail3">Username</label>
          <input type="text" class="form-control" id="exampleInputEmail3" placeholder="username" name="username">
        </div>
        <button type="submit" class="btn btn-default">Activate</button>
      </form>
      <table class="table table-hover">
        <tr style="font-weight:bold">
            <td>Priv</td>
            <td>Nama</td>
            <td>Username</td>
            <td>Email</td>
            <td>No Hp</td>
            <td>Jenis Kelamin</td>
            <td>Tanggal Lahir</td>
            <td>Status</td>
        </tr>
        <?php foreach ($data as $x) { ?>
          <tr>
            <td><?= $x['privileges'] ?></td>
            <td><?= $x['nama'] ?></td>
            <td><?= $x['username'] ?></td>
            <td><?= $x['email'] ?></td>
            <td><?= $x['no_hp'] ?></td>
            <td><?= $x['jenis_kelamin'] ?></td>
            <td><?= $x['tanggal_lahir'] ?></td>
            <td><?= $x['status'] ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    </div>
    
    <footer class="container-fluid text-center">
      <p>Footer Text</p>
    </footer>
  </body>
</html>
