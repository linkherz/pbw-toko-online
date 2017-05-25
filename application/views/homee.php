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
    </style>
  </head>
  <body>

    <?php include 'header.php'; ?>

    <div class="col-md-4" id="tas-cewe">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
          </ol>
          <!-- Wrapper for slides
          <div class="carousel-inner" role="listbox">
            <?php foreach ($data as $x) { ?>
            <div class="item active">

              <img src="<?php echo 'http://127.0.0.1/PBW_FP/img/'.$x['file_gambar']; ?>" id="imgtas"></a>
              <div class="carousel-caption">
                <h3>Tas Cewe 1</h3><p>Money Money.</p>
              </div>      
              <?php } ?>
            </div> --><!--
            <div class="item">
              <a href="<?php echo base_url().'tas_populer' ?>"><img src="http://127.0.0.1/PBW_FP/img/2.jpg" alt="Image"></a>
              <div class="carousel-caption">
                <h3>Tas Cewe 2</h3><p>Lorem ipsum...</p>
              </div>      
            </div>
          </div> -->
          
          <!-- Left and right controls 
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>-->
      </div>
    </div>
     
    <div class="col-md-4" id="tas-korea">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="http://127.0.0.1/PBW_FP/img/3.jpg" alt="Image">
              <div class="carousel-caption">
                <h3>Tas Korea 1</h3> <p>Money Money.</p>
              </div>      
            </div>
            <div class="item">
              <img src="http://127.0.0.1/PBW_FP/img/1.jpg" alt="Image">
              <div class="carousel-caption">
                <h3>Tas Korea 2</h3> <p>Lorem ipsum...</p>
              </div>      
            </div>
          </div>
          <!-- Left and right controls
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a> -->
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
    </div>

    <div class="col-md-4" id="tas-make-up">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="http://127.0.0.1/PBW_FP/img/2.jpg" alt="Image">
              <div class="carousel-caption">
                <h3>Tas Make Up 1</h3> <p>Money Money.</p>
              </div>      
            </div>
            <div class="item">
              <img src="http://127.0.0.1/PBW_FP/img/3.jpg" alt="Image">
              <div class="carousel-caption">
                <h3>Tas Make Up 2</h3> <p>Lorem ipsum...</p>
              </div>      
            </div>
          </div>
          <!-- Left and right controls
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a> -->
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
    </div>

    <div class="col-md-4" id="tas-cowo">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="http://127.0.0.1/PBW_FP/img/3.jpg" alt="Image">
              <div class="carousel-caption">
                <h3>Tas Cowo 1</h3><p>Money Money.</p>
              </div>      
            </div>
            <div class="item">
              <img src="http://127.0.0.1/PBW_FP/img/2.jpg" alt="Image">
              <div class="carousel-caption">
                <h3>Tas Cowo 2</h3><p>Lorem ipsum...</p>
              </div>      
            </div>
          </div>
          <!-- Left and right controls
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a> -->
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
    </div>
     
    <div class="col-md-4" id="tas-ransel">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="http://127.0.0.1/PBW_FP/img/1.jpg" alt="Image">
              <div class="carousel-caption">
                <h3>Tas Ransel 1</h3> <p>Money Money.</p>
              </div>      
            </div>
            <div class="item">
              <img src="http://127.0.0.1/PBW_FP/img/3.jpg" alt="Image">
              <div class="carousel-caption">
                <h3>Tas Ransel 2</h3> <p>Lorem ipsum...</p>
              </div>      
            </div>
          </div>
          <!-- Left and right controls
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a> -->
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
    </div>

    <div class="col-md-4" id="tas-anak">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="http://127.0.0.1/PBW_FP/img/2.jpg" alt="Image">
              <div class="carousel-caption">
                <h3>Tas Anak 1</h3> <p>Money Money.</p>
              </div>      
            </div>
            <div class="item">
              <img src="http://127.0.0.1/PBW_FP/img/1.jpg" alt="Image">
              <div class="carousel-caption">
                <h3>Tas Anak 2</h3> <p>Lorem ipsum...</p>
              </div>      
            </div>
          </div>
          <!-- Left and right controls
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a> -->
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
    </div>

    <footer class="container-fluid text-center">
      <p>Footer Text</p>
    </footer>
  </body>
</html>
