<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    #imgtas {
      width: 100px;
      height: 100px;
      display: block;
    }

    #judul {
      font-weight: bold;
    }

    input {
      padding: 5px;
    }
    </style>
  </head>
  <body>

    <?php include 'adm-header.php'; ?>
    <div class="col-md-2" style="padding-top: 50px; padding-left:70px;">
      <?php include 'adm-kategori.php'; ?>
    </div>
    
    <div class="col-md-10">
      <h1 style="text-align:center">Data Tas Pria</h3>
        <div>
          <?php echo form_open_multipart(base_url('tasAdm/insert_tas')); ?>
            <input type="text" name="kategori" placeholder="kode barang" value="Prom" readonly style="width:5%;">
            <input type="text" name="nama_barang" placeholder="nama barang" style="width:10%;">
            <input type="text" name="harga_modal" placeholder="harga beli" style="width:10%;">
            <input type="text" name="harga_jual" placeholder="harga jual" style="width:10%;">
            <input type="text" name="bahan" placeholder="bahan" style="width:10%;">
            <input type="text" name="berat" placeholder="berat" style="width:5%;">
            <input type="text" name="panjang" placeholder="panjang" style="width:5%;">
            <input type="text" name="lebar" placeholder="lebar" style="width:5%;">
            <input type="text" name="tebal" placeholder="tebal" style="width:5%;">
            <input type="text" name="tali_panjang" placeholder="tali panjang" style="width:10%;">
            <input type="text" name="bag_charm" placeholder="bag charm" style="width:10%;">
            <input type="hidden" name="is_submit" value="1">
            <input type="file" name="userfile" size="20">
            <input type="submit" name="submit" value="Submit">
          <?php echo form_close(); ?>
        </div>
        <div>
          <table style="width: 100%;">
            <form method="post" action="<?php echo base_url().'adm-delete-tas' ?>">
              <tr>
                <td><input type="submit" value="Delete" class="btn btn-danger" role="button"></td>
                <td>Gambar</td>
                <td style="width:25%">Kode+Nama</td>
                <td>Harga Beli</td>
                <td>Harga Jual</td>
                <td>Bahan</td>
                <td>Berat</td>
                <td>Panjang</td>
                <td>Lebar<td>
                <td>Tebal<td>
                <td>Tali Panjang<td>
                <td>Bag Charm</td>
              </tr>
              <tbody>
              <?php foreach ($data as $x) { ?>
                <tr id="tas">
                  <td><input type="checkbox" name="barang[]" value="<?php echo $x['kode_barang']?>"></td>
                  <td><br><img src="<?php echo 'http://127.0.0.1/PBW_FP/img/'.$x['file_gambar']; ?>" id="imgtas"></td>
                  <td><?php echo $x['kode_barang']." ".$x['nama_barang']."<br>(".$x['file_gambar'].")"; ?></td>
                  <td><?php echo "Rp ".$x['harga_modal'].",00" ?></td>
                  <td><?php echo "Rp ".$x['harga_jual'].",00" ?></td>
                  <td><?php echo $x['bahan'] ?></td>
                  <td><?php echo $x['berat']." gr" ?></td>
                  <td><?php echo $x['panjang']." cm" ?></td>
                  <td><?php echo $x['lebar']." cm" ?><td>
                  <td><?php echo $x['tebal']." cm" ?><td>
                  <td><?php echo $x['tali_panjang'] ?><td>
                  <td><?php echo $x['bag_charm'] ?></td>
                </tr>
              <?php } ?>
              </tbody>
            </form>
          </table>
        </div>
    </div>
  
    <footer class="container-fluid text-center">
      <p>Footer Text</p>
    </footer>
  </body>
</html>