<table class="table table-hover table-bordered">
    <thead align="center" class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Jenis</th>
            <th scope="col">File</th>
            <th scope="col">Bahan Ajar</th>
        </tr>
    </thead>
    <tbody align="center">
        <?php
        $nim = $_SESSION['nim'];
        $sql = "SELECT DISTINCT med.`id` AS i, med.`name` AS a, med.`jenis` AS b, ba.`name` AS c, med.`file_link` AS f FROM mengambil AS m
                JOIN mahasiswa AS mhs ON m.`nim` = mhs.`nim`
                JOIN matkul AS mk ON m.`id_mk` = mk.`id`
                JOIN bahan_ajar AS ba ON mk.`id` = ba.`id_mk`
                JOIN media AS med ON ba.`id` = med.`id_ba`
                WHERE (mhs.`nim` = '$nim')";
        $result = $connect->query($sql);

        if ($result->num_rows > 0) {
            $no = 1;
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $row['a'] . "</td>";
                echo "<td>" . $row['b'] . "</td>";
                echo "<td><a href=\"" . $row['f'] . "\" target=\"_blank\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i class=\"far fa-eye fa-sm text-white-50\"></i> Lihat</a></td>";
                echo "<td>" . $row['c'] . "</td>";
                $id = $row['i'];
                echo "</tr>";
                $no++;
            }
        } else {
            echo "<tr>";
            echo "<td colspan=\"9\"> No more data </td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>