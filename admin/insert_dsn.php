<form method="POST" action="../backend/process.php?op=insertDsn">
   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">NIP</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nip" placeholder="NIP">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" placeholder="Nama">
      <input type="hidden" class="form-control" name="pass" value="12345678">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Gender</label>
    <div class="col-sm-10">
    <select class="custom-select" name="gender">
    <option selected>Choose...</option>
    <option value="Laki-laki">Laki-laki</option>
    <option value="Perempuan">Perempuan</option>
    </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Prodi</label>
    <div class="col-sm-10">
    <select name="id_jur" class="custom-select">
       <?php
        $sql = "SELECT * FROM `jurusan` ";
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

