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
    }

    .nomor_resi {
      font-weight: bolder;
      font-style: italic;
      background-color: #404040; 
    }

    th, td {
        border-bottom: 1px solid #ddd;
        font-size: 18px;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    tr:nth-child(even) {
      background-color: white;
    }

    table{
      margin: 40px 0px;
    }
    </style>
  </head>
  <body>

    <?php include 'adm-header.php'; ?>
    <div class="col-md-2" style="padding-top: 50px; padding-left:70px;">
      <?php include 'adm-kategori.php'; ?>
    </div>
    
    <div class="col-md-10">
        <div style="margin:80px">
         <h2>Daftar Konfirmasi Bayar:</h2>
          <table id="myTable" class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>Kode Invoice</th>
              <th>Tanggal</th>
              <th>Deadline</th>
              <th>Status</th>
              <th>Detail</th>
            </tr>
          </thead>
          <tbody>
            <?php if(!$tt_invoice) echo "<h3 style='text-align:text-center'>Maaf tidak ada pesanan</h3>";
            else {
            ?>
            <?php foreach($tt_invoice as $invoice) : ?>
            <?php echo form_open(base_url('WelcomeAdm/detail_invoice')); ?>
            <tr>
              <td><?=$invoice->kode_invoice?></td>
              <td><?=$invoice->tanggal?></td>
              <td><?=$invoice->deadline?></td>
              <td><?=$invoice->status?></td>
              <input type="hidden" class="form-control" name="kode" value="<?php echo $invoice->kode_invoice ?>">
              <td> <input type="submit" class="btn btn-default">Detail</button> </td>
            </tr>
            <?php echo form_close(); ?>
            <?php endforeach; 
          }?>
          </tbody>
        </table>
        </div>
    </div>
    
    <footer class="container-fluid text-center">
      <p>Footer Text</p>
    </footer>
  </body>
</html>

