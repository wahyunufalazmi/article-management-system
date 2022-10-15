<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <!-- load bootstrap css file (v5.2)-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
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
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h4>Posts</h4></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url('article') ?>">All Posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url('article/add_new') ?>">Add New</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url('article/preview') ?>">Preview</a>
        </li>
      </ul>
    </div>
  </div>
</nav><br>
    
    <div class="container">

    <center><h1>Preview</h1></center>
      
        <?php
          foreach ($data->result() as $row) :

          $status = $row->status;
          if($status == "publish"){
        ?>

        <h4><?php echo $row->title;?></h4> Category: <?php echo $row->category;?> || Status: <?php echo $row->status;?><br><hr>
        <article>Content:<br><?php echo $row->content;?></article><br><hr>
        Created at: <?php echo $row->created_date;?><br>
        Updated at: 
        <?php 
          $updated = $row->updated_date;
          if ($updated == "0000-00-00 00:00:00") {
            echo "Not edited yet";
          }else{
            echo $updated;
          }
        ?><br><br>

        <div class="row">
          <div class="col">
              <!--Tampilkan pagination-->
              <?php echo $pagination; ?>
          </div>
       </div>

        <?php }

          else{ ?>
        <br><br>
        <div class="row">
          <div class="col">
              <!--Tampilkan pagination-->
              <?php echo $pagination; ?>
          </div>
       </div> 

        <?php  } ?>
        <?php endforeach;?>

      
  </div>
</body><br>