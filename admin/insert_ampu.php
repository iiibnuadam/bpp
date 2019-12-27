
<form method="POST" action="../backend/process.php?op=insertAmpu">
    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Dosen</label>
    <div class="col-sm-10">
    <select name="nip" class="custom-select">
    <?php
        $sql = "SELECT * FROM `dosen`";
        $result = $connect->query($sql);
        if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo '<option value='.$row['nip'].'>'.$row['name'].'</option>';
          }
        }
    ?>
    </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Mata Kuliah</label>
    <div class="col-sm-10">
    <select name="id_mk" class="custom-select">
    <?php
        $sql = "SELECT * FROM `matkul`";
        $result = $connect->query($sql);
        if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo '<option value='.$row['id'].'>'.$row['name'].'</option>';
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

