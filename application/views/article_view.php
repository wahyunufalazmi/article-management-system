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
      <form class="d-flex" role="search" action="<?= base_url('search/index') ?>" method="get">
        <input class="form-control me-2" type="search" placeholder="Cari berdasarkan ID..." aria-label="Search" name="id">
        <button class="btn btn-secondary" type="submit">Search</button>
      </form>
     &nbsp;&nbsp;&nbsp;
      <button class="btn btn-warning" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Tab</button>&nbsp;&nbsp;&nbsp; 
    </div>
  </div>
</nav><br>

<div class="offcanvas offcanvas-start bg-dark" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasScrollingLabel"><font color="white">Tab</font></h5>
    <button type="button" class="btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close">Close</button>
  </div>
  <div class="offcanvas-body">
    <a href="<?= base_url('article/published') ?>"><font color="white">Published</font></a><hr>
    <a href="<?= base_url('article/drafts') ?>"><font color="white">Drafts</font></a><hr>
    <a href="<?= base_url('article/trashed') ?>"><font color="white">Trashed</font></a>
  </div>
</div>  
    
    <div class="container">

    <center><h1>All Posts</h1></center>

    <?php if(empty($id)){ ?>
      
        <table class="table">
        <thead>
          <tr>
                <th scope="col">ID</th>
                <th scope="col">tilte</th>
                <th scope="col">content</th>
                <th scope="col">category</th>
                <th scope="col">created</th>
                <th scope="col">updated</th>
                <th scope="col">status</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data->result() as $row) { ?>
          <tr>
            <td><?php echo $row->id;?></td>
            <td><?php echo $row->title;?></td>
            <td><?php echo $row->content;?></td>
            <td><?php echo $row->category;?></td>
            <td><?php echo $row->created_date;?></td>
            <td>

              <?php 
                $updated = $row->updated_date;
                if ($updated == "0000-00-00 00:00:00") {
                  echo "Not edited yet";
                }else{
                  echo $updated;
                }
              ?>

            </td>
            <td><?php echo $row->status;?></td>
          <?php }?>
        </tbody>
      </table>

    <?php }  else{ ?>


      <p style="color:orange"><b>Menampilkan article yang dicari, ID : "<?= $id; ?>"</b></p>

      <table class="table">
        <thead>
          <tr>
                <th scope="col">ID</th>
                <th scope="col">tilte</th>
                <th scope="col">content</th>
                <th scope="col">category</th>
                <th scope="col">created</th>
                <th scope="col">updated</th>
                <th scope="col">status</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data->result() as $row) { ?>
          <tr>
            <td><?php echo $row->id;?></td>
            <td><?php echo $row->title;?></td>
            <td><?php echo $row->content;?></td>
            <td><?php echo $row->category;?></td>
            <td><?php echo $row->created_date;?></td>
            <td>

              <?php 
                $updated = $row->updated_date;
                if ($updated == "0000-00-00 00:00:00") {
                  echo "Not edited yet";
                }else{
                  echo $updated;
                }
              ?>

            </td>
            <td><?php echo $row->status;?></td>
          <?php }?>
        </tbody>
      </table>

    <?php  } ?>

  </div>
</body><br>