<table class="table table-hover table-bordered">
    <thead align="center" class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Mata Kuliah</th>
            <th scope="col">Prodi</th>
            <th scope="col">Act</th>
        </tr>
    </thead>
    <tbody align="center">
        <?php
        $nip = $_SESSION['nip'];
        $sql = "SELECT DISTINCT m.`id` AS `i`, mk.`name` AS `a`, p.`name` AS `b` FROM mengampu AS m
             JOIN matkul AS mk ON m.`id_mk` = mk.`id`
             JOIN dosen AS dsn ON m.`nip` = dsn.`nip`
             LEFT JOIN mengambil AS am ON mk.`id` = am.`id_mk`
             JOIN mahasiswa AS mhs ON am.`nim` = mhs.`nim`
             LEFT JOIN prodi AS p ON mhs.`id_pr` = p.`id`
             WHERE dsn.`nip` = '$nip'";
        $result = $connect->query($sql);

        if ($result->num_rows > 0) {
            $its;
            $no = 1;
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $row['a'] . "</td>";
                echo "<td>" . $row['b'] . "</td>";
                $id = $row['i'];
                echo "<td><a href=\"../backend/process.php?op=deleteAmpuDsn&id=$id\" class=\"text-danger\"><i class=\"fas fa-times\"></i></a></td>";
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