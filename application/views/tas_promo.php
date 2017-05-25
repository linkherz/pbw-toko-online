<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    #tas {
      width: 300px;
      height: 300px;
      display: block;
    }

    #judul {
      font-weight: bold;
    }
    
    .prom {
      font-style: italic;
      font-weight: bold;
    }
    </style>
  </head>
  <body>

    <?php include 'header.php'; ?>
    <div class="col-md-2" style="padding-top: 50px; padding-left:70px;">
      <?php include 'kategori.php'; ?>
    </div>
    
    <div class="col-md-10">
      <h1 style="text-align:center">Tas Promo</h1>
      <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          Urutkan menurut Harga
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
          <li><a href="<?php echo base_url().'tas_promo_murah' ?>">Termurah</a></li>
          <li><a href="<?php echo base_url().'tas_promo_mahal' ?>">Termahal</a></li>
        </ul>
      </div>
      <table style="width: 100%;">
        <?php foreach ($data as $x) { ?>
          <tr>
            <td><br><img src="<?php echo 'http://127.0.0.1/PBW_FP/img/'.$x['file_gambar']; ?>" id="tas"></td>
            <td><h3 style="font-weight:bold;"><?php echo "<br>".$x['kode_barang']." ".$x['nama_barang'] ?></h3>
              <?php echo "<br>Rp ".number_format($x['harga_jual'],2,',','.')."<br>".'Bahan   : '.$x['bahan']
              ."<br>".'Berat   : '.$x['berat']." gr"
              ."<br>".'Panjang : '.$x['panjang']." cm"
              ."<br>".'Lebar   : '.$x['lebar']." cm"
              ."<br>".'Tebal   : '.$x['tebal']." cm"
              ."<br>".'Tali Panjang : '.$x['tali_panjang']
              ."<br>".'Bag Charm   : '.$x['bag_charm'] ?><br>
              <?php if($this->session->userdata('username')) { ?>
              <a role="button" class="btn btn-success" href="Cart/tambahCart?kd=<?php echo $x['kode_barang']; ?>">Beli</button>
              <?php } ?>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  
    <footer class="container-fluid text-center">
      <p>Footer Text</p>
    </footer>
  </body>
</html>
