
<form method="POST" action="../backend/process.php?op=insertPr">
   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Kode</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="id" placeholder="Kode">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" placeholder="Nama">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Jenjang</label>
    <div class="col-sm-10">
    <select class="custom-select" name="jenjang">
    <option selected>Choose...</option>
    <option value="S2">S2</option>
    <option value="S1">S1</option>
    <option value="D4">D4</option>
    <option value="D3">D3</option>
    </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Fakultas</label>
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

