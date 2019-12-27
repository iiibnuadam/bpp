<?php
session_start();
if ($_SESSION) {
  if ($_SESSION['role'] == 1) {
    header("Location: mahasiswa/index.php?page=dashboard");
  } else if ($_SESSION['role'] == 2) {
    header("Location: dosen/index.php?page=dashbpard");
  } else if ($_SESSION['role'] == 3) {
    header("Location: admin/index.php?page=manage_mahasiswa");
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="assets/vendors/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-10 mx-auto">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  <form class="user" method="post" name="loginForm" action="">
                    <div class="input-group mb-3">
                      <select class="custom-select" name="role">
                        <option selected>Choose...</option>
                        <option value="1">Mahasiswa</option>
                        <option value="2">Dosen</option>
                        <option value="3">Admin</option>
                      </select>
                      <div class="input-group-append">
                        <label class="input-group-text" for="inputGroupSelect02">Role</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Enter Usename...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" name="password" placeholder="Enter Password...">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <input type="submit" name="login" class="btn btn-primary btn-user btn-block" value="Log in">
                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="assets/vendors/jquery/jquery.min.js"></script>
  <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/vendors/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>
<?php
if (isset($_POST['login'])) {
  include("backend/config.php");

  $role = $_POST['role'];
  $username  = $_POST['username'];
  $password  = $_POST['password'];

  if ($role == 1) {
    $query = mysqli_query($connect, "SELECT * FROM `mahasiswa` WHERE `nim`='$username' AND `pass`='$password'");
    if (mysqli_num_rows($query) == 0) {
      echo '<div class="alert alert-danger">Upss...!!! Login gagal.</div>';
    } else {
      $row = mysqli_fetch_assoc($query);
      $_SESSION['name'] = $row['name'];
      $_SESSION['nim'] = $row['nim'];
      $_SESSION['prodi'] = $row['id_pr'];
      $_SESSION['role'] = $role;
      header("Location: mahasiswa/index.php?page=dashboard");
    }
  } else if ($role == 2) {
    $query = mysqli_query($connect, "SELECT * FROM `dosen` WHERE `nip`='$username' AND `pass`='$password'");
    if (mysqli_num_rows($query) == 0) {
      echo '<div class="alert alert-danger">Upss...!!! Login gagal.</div>';
    } else {
      $row = mysqli_fetch_assoc($query);
      $_SESSION['name'] = $row['name'];
      $_SESSION['nip'] = $row['nip'];
      $_SESSION['role'] = $role;
      header("Location: dosen/index.php?page=dashboard");
    }
  } else if ($role == 3) {
    $query = mysqli_query($connect, "SELECT * FROM `admin` WHERE `username`='$username' AND `pass`='$password'");
    if (mysqli_num_rows($query) == 0) {
      echo '<div class="alert alert-danger">Upss...!!! Login gagal.</div>';
    } else {
      $row = mysqli_fetch_assoc($query);
      $_SESSION['name'] = $row['username'];
      $_SESSION['role'] = $role;
      header("Location: admin/index.php?page=manage_admin");
    }
  } else {
    echo '<div class="alert alert-danger">Upss...!!! Login gagal. ~ Silahkan isikan rolenya :)</div>';
  }
}


?>