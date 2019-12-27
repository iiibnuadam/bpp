<?php
        $id = trim(strval($_GET['id']));
        $sql = "SELECT * FROM `matkul` WHERE `matkul`.`id`= '$id'";
        $result = $connect->query($sql);
        if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
?>
<form method="POST" action="../backend/process.php?op=editMk">
   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Kode</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="kode"  value="<?= $row['id']; ?>" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" value="<?= $row['name']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Banyak SKS</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="sks" value="<?= $row['sks']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Semester</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="semester" value="<?= $row['semester']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis</label>
    <div class="col-sm-10">
    <select class="custom-select" name="jenis">
    <option selected value="<?= $row['jenis']; ?>"><?= $row['jenis']; ?></option>
    <option value="Teori">Teori</option>
    <option value="Praktik">Praktik</option>
    </select>
    </div>
  </div>
   <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-10">
     <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm left"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah</button>
    </div>
  </div>
  </form>
    <?php
        } 
        }else {
             echo "<script>window.location.href='index.php?page=manage_mk'; alert('Tidak ada data!');</script>";
        }
        ?>

