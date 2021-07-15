<?php if(!class_exists('raintpl')){exit;}?><!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/about.html">About</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    
    
          <div class="row ">
              <div class="col">
                  <p class="fs-1 fw-bold text-center">Welcome to the best news platform</p>
              </div>
          </div>
          <div class="row mb-5">
            <div class="col">
              <p class="fs-5 fw-light text-center">The easiest way to know what is happening in the world</p>
            </div>
          </div>
          <?php $counter1=-1; if( isset($news) && is_array($news) && sizeof($news) ) foreach( $news as $key1 => $value1 ){ $counter1++; ?>

          <div class="row rounded bg-light border border-dark mb-4">
            <div class="col-md-4 p-0 " > 
                <a href="viewPage.php?id=<?php echo $value1["Id"];?>">
                  <img src="img/<?php echo $value1["Thumbnail"];?>" class="w-100 h-100">
                </a>
              </div>
              <div class="col-md-8">
                <a href="viewPage.php?id=<?php echo $value1["Id"];?>" class="fs-4 text-decoration-none text-reset"><?php echo $value1["Title"];?></a>
                <br></br>
                <span class="fs-6 "><?php echo $value1["Description"];?></span>
                <br></br>
                <p class="text-end"><?php echo $value1["Date"];?></p>
              </div>
            </div>

          <?php } ?>
          <div class="row mb-5">
            <div class="col text-center">
          <?php if( $totalPages>1 ){ ?>
          
          <a class="btn border border-primary" href="index.php?page=<?php echo $page-1;?>" role="button">&lt</a>
          <?php $counter1=-1; if( isset($pages) && is_array($pages) && sizeof($pages) ) foreach( $pages as $key1 => $value1 ){ $counter1++; ?>
          <a class="btn border border-primary <?php if( $counter1+1==$page ){ ?> btn-primary <?php } ?>" href="index.php?page=<?php echo $value1;?>" role="button"><?php echo $value1;?></a>
          <?php } ?>
          <a class="btn border border-primary" href="index.php?page=<?php echo $page+1;?>" role="button">&gt</a>
          <?php } ?>
        </div>
        </div>
        </div>
        </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>