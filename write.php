<?php
require_once('conn.php');
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="http://localhost:81/bootstrap-4.0.0-beta-dist/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">

    <title>Practice2</title>
  </head>
  <body id="body" class="">
    <header>
      <h1><a href="index.php">생활코딩</a></h1>
    </header>
    <nav>
      <ul class="list-group">
  <?php
  $sql = "SELECT * FROM `topic`";
  $result = mysqli_query($conn,$sql);
  while($row = mysqli_fetch_assoc($result)){
  echo '<li class="list-gruop-item active"><a href="index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>';
  }
  ?>
      </ul>
    </nav>
    <div class="btn">
      <input type="button" name="name" class="btn btn-light btn-lg" value="White" onclick="document.getElementById('body').className=''">
      <input type="button" name="name" class="btn btn-dark btn-lg" value="Black" onclick="document.getElementById('body').className='black'">
    </div>
    <article>
      <form action="process.php" method="post">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Write the Title.">
          </div>
          <div class="form-group col-md-6">
            <label for="author">Author</label>
            <input type="text" class="form-control" name="author" placeholder="Write your Name.">
          </div>
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <input type="text" class="form-control" name="description" rows="6">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </article>
    <div class="btn">
      <a href="write.php"><input type="button" name="write" class="btn btn-outline-primary" value="+ADD"></a>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://localhost:81/bootstrap-4.0.0-beta-dist/js/bootstrap.js"></script>
  </body>
</html>
