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
      font-size: 16px;
    }

    .log_transaksi {
      font-weight: bolder;
      font-style: italic;
      background-color: #404040; 
    }

    table {
        border-collapse: collapse;
    }
    </style>
  </head>
  <body>

    <div><?php validation_errors()?></div>
    <div><?php $this->session->flashdata('error')?></div>

    <?php include 'header.php'; ?>
    <div class="col-md-2" style="padding-top: 50px; padding-left:70px;">
      <?php include 'kategori.php'; ?>
    </div>
    
    <div class="col-md-10">
      <div class="isi">
      <h2 style="margin-bottom:50px">Log Transaksi :</h2>
      <?php if($history != false) : ?>
      <?= $this->session->flashdata('message')?>    
      <table class="table table-bordered table-striped table-hover">
      <thead>
        <tr>
          <th>Kode Transaksi</th>
          <th>Tanggal Transaksi</th>
          <th>Batas Pembayaran</th>
          <th>Total harga</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          foreach ($history as $row) : 
        ?>
        <tr>
          <td><?= $row->kode_invoice ?></td>
          <td><?= $row->tanggal ?></td>
          <td><?= $row->deadline ?></td>
          <td><?= $row->total?></td>
          <td><?= $row->status ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
        <?php else : ?>
            <p align="center">Anda Belum melakukan transaksi?></p>
        <?php endif; ?>
      </div>
    </div>
    
    <footer class="container-fluid text-center">
      <p>Footer Text</p>
    </footer>
  </body>
</html>

