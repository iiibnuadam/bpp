<table class="table table-hover table-bordered">
    <thead align="center" class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Jenis</th>
            <th scope="col">Desc</th>
            <th scope="col">Matkul</th>
            <th scope="col">Nilai</th>
        </tr>
    </thead>
    <tbody align="center">
        <?php
        $nim = $_SESSION['nim'];
        $sql = "SELECT DISTINCT tgs.`name` AS a, tgs.`jenis` AS b, tgs.`desc` AS c, mk.`name` AS d, pen.`nilai` AS f FROM mengambil AS m
                JOIN mahasiswa AS mhs ON m.`nim` = mhs.`nim`
                JOIN matkul AS mk ON m.`id_mk` = mk.`id`
                JOIN tugas AS tgs ON mk.`id` = tgs.`id_mk`
                JOIN penilaian AS pen ON tgs.`id` = pen.`id_tgs`
                WHERE mhs.`nim` = '$nim'";
        $result = $connect->query($sql);

        if ($result->num_rows > 0) {
            $its;
            $no = 1;
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $row['a'] . "</td>";
                echo "<td>" . $row['b'] . "</td>";
                echo "<td>" . $row['c'] . "</td>";
                echo "<td>" . $row['d'] . "</td>";
                echo "<td>" . $row['f'] . "</td>";
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