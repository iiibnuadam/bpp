<?php
        $nip = trim(strval($_GET['nip']));
        $sql = "SELECT * FROM `dosen` WHERE `dosen`.`nip`= '$nip'";
        $result = $connect->query($sql);
        if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
?>
        
<form method="POST" action="../backend/process.php?op=editDsn">
   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="hidden" class="form-control" name="nip" value="<?= $row['nip'];?>">
      <input type="text" class="form-control" name="name" value="<?= $row['name'];?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Jenjang</label>
    <div class="col-sm-10">
    <select class="custom-select" name="gender">
    <option selecte value="<?= $row['gender']?>"><?= $row['gender']?></option>
    <option value="Laki-laki">Laki-laki</option>
    <option value="Perempuan">Perempuan</option>
    </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="pass" value="<?= $row['pass'];?>">
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
        }else {
             echo "<script>window.location.href='index.php?page=manage_pr'; alert('Tidak ada data!');</script>";
        }
        ?>
