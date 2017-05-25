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

      table{
        font-size: 20px;
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
      <h1 style="text-align:center">Data Cara Pesan</h3>
        <form class="form-horizontal" method="post" action="<?php echo base_url('WelcomeAdm/insert_cara_pesan') ?>" style="margin: 70px 20px 30px 60px;">
          <div class="form-group">
            <label for="judul" class="col-sm-2 control-label">Judul</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" placeholder="judul" name="judul" required>
            </div>
          </div>
          <div class="form-group">
            <label for="isi" class="col-sm-2 control-label">Isi</label>
            <div class="col-sm-8">
              <textarea class="form-control" rows="3" name="isi" placeholder="isi" required></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-info">Tambah</button>
            </div>
          </div>
        </form>
        <div style="margin:80px">
          <div>
            <table class="table table-hover">
              <?php foreach ($data as $x) { ?>
                <tr style="border-bottom : 1px solid #ddd">
                  <td><?= $x['no'] ?></td>
                  <td><?= $x['judul'] ?></td>
                  <td><?= $x['isi'] ?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table> 
          </div>
        </div>
    </div>
    
    <footer class="container-fluid text-center">
      <p>Footer Text</p>
    </footer>
  </body>
</html>

