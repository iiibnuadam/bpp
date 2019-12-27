<form method="POST" action="../backend/process.php?op=insertMk">
   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Kode</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="kode" placeholder="Kode">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" placeholder="Nama">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Banyak SKS</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="sks" placeholder="Banyak SKS">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Semester</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="semester" placeholder="Semester">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis</label>
    <div class="col-sm-10">
    <select class="custom-select" name="jenis">
    <option selected>Choose...</option>
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

