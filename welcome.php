<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Welcome to the club</title>
  </head>
  <body>

  <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand">PHP Activity</a>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </nav>

      <br><br><br><br><br><br><br><br><br><br>
  <center>
  <h1>Welcome <?php echo $_POST["firstname"]?> &nbsp;<?php  echo $_POST['lastname']; ?> <br>
Welcome to <?php echo $_POST["game"]; ?> club!
<br>
You are belong to TNC Esports!
</h1> 
<br><br>
<a href="index.php"> <button type="button" class="btn btn-primary">Back</button></a>
</center>
  

    
  
  </body>
</html>