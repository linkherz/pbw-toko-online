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

      .col-md-4 {
        padding: 10px;  
      }

      .home {
        font-weight: bolder;
        font-style: italic;
        background-color: #404040; 
      }

      #imgtas {
        width: 500px;
        height: 500px;
        display: block;
      }
    </style>
  </head>
  <body>

    <?php include 'header.php'; ?>
    <?php foreach ($data as $x) { ?>
    <div class="col-md-4" id="tas-cewe">
      <img src="<?php echo 'http://127.0.0.1/PBW_FP/img/'.$x['file_gambar']; ?>" id="imgtas">
      <h4><?php echo $x['kode_barang']." ".$x['nama_barang']; ?></h4>
    </div>
    <?php } ?>
    <footer class="container-fluid text-center">
      <p>Footer Text</p>
    </footer>
  </body>
</html>
