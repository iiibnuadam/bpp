<form method="POST" action="../backend/process.php?op=insertPenDsn" class="m-3">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nilai</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nilai" placeholder="Nilai">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Tugas</label>
    <div class="col-sm-10">
      <select name="id_tgs" class="custom-select">
        <?php
        $sql = "SELECT * FROM `tugas`";
        $result = $connect->query($sql);
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo '<option value=' . $row['id'] . '>' . $row['name'] . '</option>';
          }
        }
        ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Mahasiswa</label>
    <div class="col-sm-10">
      <select name="nim" class="custom-select">
        <?php
        $sql = "SELECT * FROM `mahasiswa`";
        $result = $connect->query($sql);
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo '<option value=' . $row['nim'] . '>' . $row['name'] . '</option>';
          }
        }
        ?>
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