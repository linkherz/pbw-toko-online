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
      
      .kanan {
        float: right;
        margin-right: 10px;
        margin-top: 10px;
      }
    </style>
  </head>
  <body>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li><h2 style="color:white">TOKO TAS</h2></li>
            </ul>
            <div class="kanan">
            <?php if($this->session->userdata('username') == null) { ?>
              <a class="btn btn-primary" role="button" href="<?php echo base_url().'signin' ?>">Log In</a>
              <a class="btn btn-primary" role="button" href="<?php echo base_url().'signup' ?>">Register</a>
            <?php } ?>
            <?php if($this->session->userdata('username')) { ?>
              <div style="color:white; display:inline">
                <img src="<?php echo 'http://127.0.0.1/PBW_FP/img/user.png' ?>" class="img-circle" style="width:5%">
                  <?php echo $this->session->userdata('username')?>
                <a class="btn btn-danger" role="button" href="<?php echo base_url().'logout' ?>">Log out</a>
              </div>
            <?php } ?>
            </div>
          </div>
        </div>
    </nav>
    
  </body>
</html>
