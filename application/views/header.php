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
      /* Remove the navbar's default margin-bottom and rounded borders */ 
      body {
        width: 100%;
        height: 100%;
      }
      .navbar {
        margin-bottom: 0;
        border-radius: 0;
        background-color: black;
        font-size: 16px;
      }
      
    /* Add a gray background color and some padding to the footer */
      footer {
        background-color: #f2f2f2;
        padding: 25px;
      }
      
    .carousel-inner img {
        width: 100%; /* Set width to 100% */
        margin: auto;
        min-height: 300px;
        max-height :300px;
    }

    .input[type=text] {
        width: 200px;
        -webkit-transition: width 0.2s ease-in-out;
        transition: width 0.2s ease-in-out;
      }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption { display: none; }
    }

    #carii{
      margin-top: 10px;
      width: 300px;
    }

    .dropbtn { /* Dropdown Button */
        background-color: black;
        color: grey;
        padding: 16px;
        border: none;
        cursor: pointer;
    }

    .dropdown { /* The container <div> - needed to position the dropdown content */
        position: relative;
        display: inline-block;
    }

    .dropdown-content { /* Dropdown Content (Hidden by Default) */
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {    /* Links inside the dropdown */
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .navbar li:hover {
      background-color: #262626;
    }

    .kanan {
      float: right;
      margin-right: 10px;
      margin-top: 10px;
    }
    /* Change color of dropdown links on hover */ .dropdown-content a:hover {background-color: #f1f1f1;}
    /* Show the dropdown menu on hover */ .dropdown:hover .dropdown-content {display: block;}
    /* Change the bg color of the dropdown button when content is shown */ .dropdown:hover .dropbtn { background-color: #262626; color:white; }
    </style>
  </head>
  <body>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li class="home"><a href="<?php echo base_url() ?>">Home</a></li>
              <li class="kategori_header"><div class="dropdown">
                <button class="dropbtn">Kategori</button>
                <div class="dropdown-content">
                  <a href="<?php echo base_url().'tas_semua' ?>">Semua</a>
                  <a href="<?php echo base_url().'tas_promo' ?>">Promo</a>
                  <a href="<?php echo base_url().'tas_wanita' ?>">Tas Wanita</a>
                  <a href="<?php echo base_url().'tas_pria' ?>">Tas Pria</a>
                  <a href="<?php echo base_url().'tas_anak' ?>">Tas Anak</a>
                  <a href="<?php echo base_url().'tas_make_up' ?>">Tas Make Up</a>
                </div>
              </div> </li>
              <li class="cara_pesan"><a href="<?php echo base_url().'cara_pesan' ?>">Cara Pesan</a></li>
              <li class="faq"><a href="<?php echo base_url().'faq' ?>">FAQ</a></li>
            <?php if($this->session->userdata('username')) { ?>
              <li class="konfirm_bayar"><a href="<?php echo base_url().'konfirm_bayar' ?>">Konfirmasi Pembayaran</a></li>
              <li class="log_transaksi"><a href="<?php echo base_url().'log_transaksi' ?>">Log Transaksi</a></li>
            <?php } ?>
            </ul>
          <div class="kanan">
            <!--<input id="carii" type="text" name="search" placeholder="Search..">-->
          <?php if($this->session->userdata('username') == null) { ?>
            <a class="btn btn-primary" role="button" href="<?php echo base_url().'signin' ?>">Log In</a>
            <a class="btn btn-primary" role="button" href="<?php echo base_url().'signup' ?>">Register</a>
          <?php } ?>
          <?php if($this->session->userdata('username')) { ?>
            <div style="color:white; display:inline">
              <img src="<?php echo 'http://127.0.0.1/PBW_FP/img/user.png' ?>" class="img-circle" style="width:5%">
                <?php echo $this->session->userdata('username')?>
              <a class="btn btn-success" role="button" href="<?php echo base_url().'keranjang' ?>">Keranjang
                <span style="color:black"><?php echo $this->cart->total_items() ?></span>
              </a>
              <a class="btn btn-danger" role="button" href="<?php echo base_url().'logout' ?>">Log out</a>
            </div>
          <?php } ?>
          </div>
        </div>
      </div>
    </nav>
    
  </body>
</html>
