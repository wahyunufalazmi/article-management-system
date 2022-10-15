<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit and Update</title>
    <!-- load bootstrap css file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  </head>
  <body>
  <style type="text/css">

          #maincontent{
            width: auto;
            float: none;
          }
          #sidebar{
            width: auto;
            float: none;
          }
  </style>
  <div class="container">
      <h1><center>Edit and Update</center></h1>
        
        <form action="<?php echo site_url('article/update');?>" method="post">
        <h4>Title</h4>
        <input class="form-control" type="text" name="title" placeholder="edit title" aria-label="title" value="<?php echo $title;?>"><br>
        <h4>Content</h4>
        <input class="form-control" type="text" name="content" placeholder="edit content" aria-label="content" value="<?php echo $content;?>"><br>
        <h4>Category</h4>
        <input class="form-control" type="text" name="category" placeholder="edit category" aria-label="category" value="<?php echo $category;?>"><br>
        <input type="hidden" name="id" value="<?php echo $id?>">
        <button type="submit" class="btn btn-primary" name="publish">Publish <i class='far fa-paper-plane'></i></button>
        <button type="submit" class="btn btn-success" name="draft">Draft <i class='far fa-file'></i></button>
        </form>
     
    </div>
   </body>
</html>