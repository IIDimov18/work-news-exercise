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
                    <div class="row">
                        <div class="col-4 m-3">
                            <form name="search" action="blog.php" method="get" class="form-inline">
                                <div class="input-group">
                                    <input type="text"class="form-control " placeholder="Search" name="query">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                      </div>
                                </div>


                            </form>
                        </div>
                    </div>
                    <table class="table table-dark table-hover rounded">
                        <thead>
                            <th scope="col">Id</th>
                            <th scope="col">Pic</th>
                            <th scope="col">Title</th>
                            <th scope="col">Date</th>
                            <th scope="col">Act</th>
                        </thead>
                        <tbody>
                            <?php $counter1=-1; if( isset($news) && is_array($news) && sizeof($news) ) foreach( $news as $key1 => $value1 ){ $counter1++; ?>
                            <tr>
                            <th scope="row"><?php echo $value1["Id"];?></th>
                            <td>
                                <img src="img/<?php echo $value1["Thumbnail"];?>" width="50">
                            </td>
                            <td><?php echo $value1["Title"];?></td>
                            <td><?php echo $value1["Date"];?></td>
                            <td>
                                <a href="blog_ae.php?act=edit&id=<?php echo $value1["Id"];?>" class="me-3">
                                <i class="bi bi-pencil-square text-white"></i>
                                </a>
                                <a href="blog_ae.php?act=delete&id=<?php echo $value1["Id"];?>"  onclick="return confirm('Are you sure?')">
                                <i class="bi bi-trash text-white"></i>
                                </a>
                            </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                </table>
                    <?php if( $totalPages>1 ){ ?>

                    <a class="btn border border-primary" href="blog.php?page=<?php echo $page-1;?>" role="button">&lt</a>
                    <?php $counter1=-1; if( isset($pages) && is_array($pages) && sizeof($pages) ) foreach( $pages as $key1 => $value1 ){ $counter1++; ?>
                    <a class="btn border border-primary <?php if( $counter1+1==$page ){ ?> btn-primary <?php } ?>" href="blog.php?page=<?php echo $value1;?>" role="button"><?php echo $value1;?></a>
                    <?php } ?>
                    <a class="btn border border-primary" href="blog.php?page=<?php echo $page+1;?>" role="button">&gt</a>
                    <?php } ?>
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
