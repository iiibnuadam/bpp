<table class="table table-hover table-bordered">
    <thead align="center" class="thead-dark">
        <tr>
            <th scope=" col">No</th>
            <th scope="col">Nilai</th>
            <th scope="col">Tugas</th>
            <th scope="col">Mahasiswa</th>
            <th scope="col">Act</th>
        </tr>
    </thead>
    <tbody align="center">
        <?php
        $nip = $_SESSION['nip'];
        $sql = "SELECT DISTINCT pen.`id` AS i, pen.`nilai` AS p, tgs.`name` AS a, mhs.`name` AS b FROM penilaian AS pen
		LEFT JOIN mahasiswa AS mhs ON pen.`nim` = mhs.`nim`
		JOIN tugas AS tgs ON pen.`id_tgs` = tgs.`id`
		JOIN matkul AS mk ON tgs.`id_mk` = mk.`id`
		JOIN mengampu AS me ON mk.`id` = me.`id_mk`
		JOIN dosen AS dsn ON me.`nip` = dsn.`nip`
		WHERE dsn.`nip` = '$nip'";
        $result = $connect->query($sql);

        if ($result->num_rows > 0) {
            $its;
            $no = 1;
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $row['p'] . "</td>";
                echo "<td>" . $row['a'] . "</td>";
                echo "<td>" . $row['b'] . "</td>";
                $id = $row['i'];
                echo "<td><a href=\"../backend/process.php?op=deletePenDsn&id=$id\" class=\"text-danger\"><i class=\"fas fa-times\"></i></a></td>";
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