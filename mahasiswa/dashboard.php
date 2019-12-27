<?php
$nim = trim(strval($_SESSION['nim']));
$sql = "SELECT mhs.`name` AS a, mhs.`nim` AS b, p.`name` AS pname, f.`name` AS fname FROM mahasiswa AS mhs
LEFT JOIN prodi AS p ON mhs.`id_pr` = p.`id`
LEFT JOIN jurusan AS j ON p.`id_jur` = j.`id`
LEFT JOIN fakultas AS f ON j.`id_fak` = f.`id`
WHERE mhs.`nim` = '$nim';";
$result = $connect->query($sql);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    ?>

    <div class="card">
      <h5 class="card-header bg-dark text-white">Identitas</h5>
      <div class="card-body">
        <table class="table table-borderless">
          <tbody>
            <tr>
              <th scope="row">Nama</th>
              <th>: <?= $row['a'] ?></th>
            </tr>
            <tr>
              <th scope="row">NIM</th>
              <td>: <?= $row['b'] ?></td>
            </tr>
            <tr>
              <th scope="row">Program Studi</th>
              <td>: <?= $row['pname'] ?></td>
            </tr>
            <tr>
              <th scope="row">Fakultas</th>
              <td>: <?= $row['fname'] ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
<?php
  }
}
?>