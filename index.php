<?php
session_start();
if(isset($_SESSION['level'])) {
  if($_SESSION['level']=="2") {
    header("location:petugas/index.php");
  } else if ($_SESSION['level']=="1") {
    header("location:administrator/index.php");
  }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UKK KASIR</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="content ">
      <div class="card mt-5">
        <div class="row">
          <div class="col-6">
            <div class="card-body">
              <p class="text-center mt-5">Silahkan Masukkan username dan password</p>
              <?php
              if(isset($_GET['pesan'])){
                if($_GET['pesan']=="gagal"){
                  echo "<div class='alert'>username dan password tidak sesuai!</div>";
                }
              }
              ?>
              <form action="cek_login.php" method="post">
                <div class="form-group">
                  <label>username</label>
                  <input type="text" class="form-control" name="username">
                </div>
                <div class="form-group">
                  <label>password</label>
                  <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group mt-3">
                  <button type="submit" class="btn btn-primary form-control">login</button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-6">
            <div class="card-body">
            <img src="img\login.png" width="500">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>