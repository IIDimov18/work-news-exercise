<?php if(!class_exists('raintpl')){exit;}?><!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3 bg-dark">
                    <div class="row pt-4">
                        <div class="col text-center">
                            <p class="fs-1 text-white">Admin panel</p>
                        </div>
                    </div>
                    <hr class="bg-light">
                    <div class="row p-4 ">
                        <a class="col text-center bg-light rounded text-decoration-none" href="blog.php">
                            <i class="bi-lg bi-table fs-2 text-dark"></i>
                            <span class="fs-2 text-dark">Show all news</span>
                        </a>
                    </div>
                    <div class="row p-4 ">
                        <a class="col text-center bg-light rounded text-decoration-none" href="blog_ae.php">
                            <i class="bi bi-plus-square fs-2 text-dark"></i>
                            <span class="fs-2 text-dark">Create new news</span>
                        </a>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>    
                </div>

                <div class="col">
                    <p class="fs-1 fw-bold text-center">Add a news</p>
                    <div class="container w-100 rounded bg-light border border-dark">
                    <form action="blog_ae.php?act=create&id=-1" method="post" enctype="multipart/form-data">
                       <div class="row mt-4 justify-content-center">
                           <div class="col-md-10 col-lg-4">
                               <label for="title" class="form-label">Title</label>
                               <input type="text" class="form-control" id="title" name="title">
                           </div>
  
                       </div>
  
                      <div class="row justify-content-center">
                          <div class="col-md-10 col-lg-4">
                              <label for="description" class="form-label">Description</label>
                              <textarea id="description" name="description" rows="4" cols="50"></textarea>
                          </div>
  
                      </div>
                      <div class="row justify-content-center">
                          <div class="col-md-10 col-lg-4">
                              <label for="img" class="form-label">Image</label>
                              <input type="file" class="form-control" id="img" name="img" accept="image/*">
                          </div>
  
                      </div>
                        <div class="row justify-content-center pt-3 pb-5">
                            <div class="col-4 d-grid">
                                <button type="submit" name="submit" class="btn btn-primary btn-block">Save</button>
                            </div>
  
                        </div>
                        
  
                    </form>
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