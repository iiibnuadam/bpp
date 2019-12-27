<?php
$nip = trim(strval($_SESSION['nip']));
$sql = "SELECT DISTINCT d.`name` AS a, d.`nip` AS b, j.`name` AS jname, f.`name` AS fname FROM dosen AS d
        JOIN jurusan AS j ON d.`id_jur` = j.`id`
        JOIN fakultas AS f ON j.`id_fak` = f.`id`
        WHERE d.`nip` = '$nip'";
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
              <th scope="row">Jurusan</th>
              <td>: <?= $row['jname'] ?></td>
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