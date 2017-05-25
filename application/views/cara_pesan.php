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
      margin-left: 70px;
    }

    .cara_pesan{
      font-weight: bolder;
      font-style: italic;
      background-color: #404040; 
    }

    th, td {
        border-bottom: 1px solid #ddd;
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
      <h2>CARA PESAN:</h2>
      <table style="width: 100%;">
        <?php foreach ($data as $x) { ?>
          <tr>
            <td><?= "<br>".$x['no']."  ".$x['judul']."<br>".$x['isi'] ?></td>
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
