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
      <div class="isi">
      <h2>Statistik Penjualan</h2>
      
    </div>
    </div>
    
    <footer class="container-fluid text-center">
      <p>Footer Text</p>
    </footer>
  </body>
</html>
