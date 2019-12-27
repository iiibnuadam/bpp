<form method="POST" action="../backend/process.php?op=insertBaDsn" class="m-3">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" placeholder="Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Pembuat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="author" placeholder="Pembuat">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="jenis" placeholder="Jenis">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Tahun</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="tahun" placeholder="Tahun">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">File Link</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="file" placeholder="File Link">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Mata Kuliah</label>
    <div class="col-sm-10">
      <select name="id_mk" class="custom-select">
        <?php
        $nip = $_SESSION['nip'];
        $sql = "SELECT DISTINCT mk.`id` AS `a`, mk.`name` AS `b` FROM mengampu AS m
             JOIN matkul AS mk ON m.`id_mk` = mk.`id`
             JOIN dosen AS dsn ON m.`nip` = dsn.`nip`
             LEFT JOIN mengambil AS am ON mk.`id` = am.`id_mk`
             JOIN mahasiswa AS mhs ON am.`nim` = mhs.`nim`
             LEFT JOIN prodi AS p ON mhs.`id_pr` = p.`id`
             WHERE dsn.`nip` = '$nip'";
        $result = $connect->query($sql);
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo '<option value=' . $row['a'] . '>' . $row['b'] . '</option>';
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