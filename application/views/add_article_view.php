<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New</title>
    <!-- load bootstrap css file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  </head>
  <body>
    <style type="text/css">
        @media screen and (max-width:680px){

          #maincontent{
            width: auto;
            float: none;
          }
          #sidebar{
            width: auto;
            float: none;
          }
        }
    </style>
    <div class="container"><br><br>
          <h1>Write a New Article</h1>
          <form action="<?php echo site_url('article/save');?>" method="post">
          <input class="form-control" type="text" placeholder="input title article..." name="title" required><br>
          <textarea class="form-control" placeholder="Write content" name="content" required></textarea><br>
          <input class="form-control" type="text" placeholder="input category..." name="category" required><br>
          <button type="submit" class="btn btn-primary" name="publish">Publish <i class='far fa-paper-plane'></i></button>
          <button type="submit" class="btn btn-success" name="draft">Draft <i class='far fa-file-alt'></i></button>
        </form>
    </div>
  </body>
</html>