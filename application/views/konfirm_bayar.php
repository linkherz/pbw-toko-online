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

    .konfirm_bayar {
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
      <h2 style="margin-bottom:50px">Konfirmasi Pembayaran :</h2>
      <form class="form-horizontal" method="post" action="<?php echo base_url().'isi_konfirm_bayar' ?>" style="margin: 70px 20px 30px 60px;">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Kode Invoice</label>
          <div class="col-sm-10"> 
            <input type="text" class="form-control" name="kode_invoice">
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Jumlah Pembayaran</label>
          <div class="col-sm-10"> <input type="text" class="form-control" name="jumlah" style="width:75%"></div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Konfirmasi Pembayaran</button>
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

