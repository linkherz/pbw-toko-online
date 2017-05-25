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

    th, td:nth-child(even) {
        border-bottom: 1px solid #ddd;
        font-size: 18px;
    }
    </style>
  </head>
  <body>
      <h3 style="font-weight:bold;">Kategori : </h3>
        <li class="all" id="kategori"><a href="<?php echo base_url().'tas_semua' ?>">Semua</a></li>
        <li class="prom" id="kategori"><a href="<?php echo base_url().'tas_promo' ?>">Promo</a></li>
        <li class="wan" id="kategori"><a href="<?php echo base_url().'tas_wanita' ?>">Tas Wanita</a></li>
        <li class="pria" id="kategori"><a href="<?php echo base_url().'tas_pria' ?>">Tas Pria</a></li>
        <li class="anak" id="kategori"><a href="<?php echo base_url().'tas_anak' ?>">Tas Anak</a></li>
        <li class="mu" id="kategori"><a href="<?php echo base_url().'tas_make_up' ?>">Tas Make Up</a></li>
  </body>
</html>