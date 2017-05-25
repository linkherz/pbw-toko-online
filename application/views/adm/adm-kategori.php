<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
     #kategori {
      list-style-type: none;
      margin: 0;
      padding: 0;
      padding-top: 20px;
      width: 200px;
      background-color: #f1f1f1;
      font-size: 20px;
    }

    #kategori a {
      display: block;
      color: #000;
      padding: 8px 16px;
      text-decoration: none;
    }

    /* Change the link color on hover */
    #kategori a:hover {
      background-color: #555;
      color: white;
    }

    #tas{
        border-bottom: 1px solid #ddd;
        font-size: 18px;
    }
    </style>
  </head>
  <body>
      <h3 style="font-weight:bold; margin-top:-20px;">Akun</h3>
        <li id="kategori"><a href="<?php echo base_url().'adm-ganti-pwd' ?>">Ganti Password</a></li>
        <li id="kategori"><a href="<?php echo base_url().'adm-data-user' ?>">Data User</a></li>
      <h3 style="font-weight:bold;">Tas</h3>
        <li id="kategori"><a href="<?php echo base_url().'adm-data-tas-promo' ?>">Data Tas Promo</a></li>
        <li id="kategori"><a href="<?php echo base_url().'adm-data-tas-wanita' ?>">Data Tas Wanita</a></li>
        <li id="kategori"><a href="<?php echo base_url().'adm-data-tas-pria' ?>">Data Tas Pria</a></li>
        <li id="kategori"><a href="<?php echo base_url().'adm-data-tas-anak' ?>">Data Tas Anak</a></li>
        <li id="kategori"><a href="<?php echo base_url().'adm-data-tas-make-up' ?>">Data Tas Make Up</a></li>
      <h3 style="font-weight:bold;">Penjualan</h3>
        <!--
        <li id="kategori"><a href="<?php echo base_url().'adm-statis-penjualan' ?>">Statistik</a></li>
        <li id="kategori"><a href="<?php echo base_url().'adm-statis-penjualan' ?>">Statistik</a></li>
        <li id="kategori"><a href="<?php echo base_url().'adm-no-resi' ?>">No Resi</a></li>
      -->
        <li id="kategori"><a href="<?php echo base_url().'adm-cara-pesan' ?>">Cara Pesan</a></li>
        <li id="kategori"><a href="<?php echo base_url().'adm-faq' ?>">FAQ</a></li>
        <li id="kategori" style="font-size:15px;"><a href="<?php echo base_url().'adm-konfirm' ?>">Konfirmasi Pembayaran</a></li>
  </body>
</html>