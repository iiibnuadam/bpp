<?php
$nim = trim(strval($_SESSION['nim']));
$sql = "SELECT * FROM `mahasiswa` WHERE `mahasiswa`.`nim`= '$nim'";
$result = $connect->query($sql);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    ?>

    <form method="POST" action="../backend/process.php?op=editProfileMhs">
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">NIM</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="nim" value="<?= $row['nim']; ?>" readonly>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="name" value="<?= $row['name']; ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="password" value="<?= $row['pass']; ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
          <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm left"><i class="fas fa-check fa-sm text-white-50"></i> Update</button>
        </div>
      </div>
    </form>
<?php
  }
}
?>