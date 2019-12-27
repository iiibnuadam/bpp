<?php
        $id = trim(strval($_GET['id']));
        $sql = "SELECT * FROM `tugas` WHERE `tugas`.`id`= '$id'";
        $result = $connect->query($sql);
        if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
?>
        
<form method="POST" action="../backend/process.php?op=editTgs">
   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="hidden" class="form-control" name="id" value="<?= $row['id'];?>">
      <input type="text" class="form-control" name="name" value="<?= $row['name'];?>">
    </div>
  </div>
   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Jenis</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="jenis" value="<?= $row['jenis'];?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Keterangan</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="3"><?= $row['desc'];?></textarea>
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
             echo "<script>window.location.href='index.php?page=manage_sil'; alert('Tidak ada data!');</script>";
        }
        ?>
