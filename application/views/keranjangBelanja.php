<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>

    </style>
  </head>
  <body>

    <?php include 'header.php'; ?>
    <div class="col-md-2" style="padding-top: 50px; padding-left:70px;">
      <?php include 'kategori.php'; ?>
    </div>
    
    <div class="col-md-10">
      <h1 style="text-align:center">Keranjang Belanja</h3>
       <table class="table table-bordered table-striped table-hover">
        <thead>
         <tr>
          <th>#</th>
          <th>Barang</th>
          <th>Harga</th>
         </tr>
        </thead>
        <tbody>
         <?php 
          $i=0;
          foreach ($this->cart->contents() as $items) : 
          $i++;
         ?>
         <tr>

          <td><?php echo $i ?></td>
          <td><?php echo $items['name'] ?></td>
          <td align="right"><?php echo number_format($items['price'],0,',','.') ?></td>
         </tr>
         <?php endforeach; ?>
         </tbody>
        <tfoot>
         <tr>
          <td align="right" colspan="2">Total </td>
          <td align="right"><?php echo number_format($this->cart->total(),0,',','.'); ?></td>
         </tr>
        </tfoot>
       </table>
        <div align="center">
          <a class="btn btn-danger" role="button" href="<?php echo base_url().'clear_cart' ?>">Hapus Keranjang</a>
          <a class="btn btn-primary" role="button" href="<?php echo base_url() ?>">Lanjutkan Belanja</a>
          <a class="btn btn-success" role="button" href="<?php echo base_url().'checkout' ?>">Selesai Belanja</a>
        </div>
    </div>
  
    <footer class="container-fluid text-center">
      <p>Footer Text</p>
    </footer>
  </body>
</html>
