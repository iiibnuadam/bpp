<table class="table table-hover table-bordered">
    <thead align="center" class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Jenis</th>
            <th scope="col">Desc</th>
            <th scope="col">Matkul</th>
            <th scope="col">Act</th>
        </tr>
    </thead>
    <tbody align="center">
        <?php
        $nip = $_SESSION['nip'];
        $sql = "SELECT DISTINCT tgs.id AS `i`,tgs.name AS `n`, tgs.jenis AS `j`, tgs.desc AS `k`, mk.name AS `m` FROM mengampu AS a
                JOIN matkul AS mk ON a.`id_mk` = mk.`id`
                LEFT JOIN tugas AS tgs ON mk.`id` = tgs.`id_mk`
                JOIN dosen AS dsn ON a.`nip` = dsn.`nip`
                WHERE dsn.`nip` = '$nip'";
        $result = $connect->query($sql);

        if ($result->num_rows > 0) {
            $its;
            $no = 1;
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $row['n'] . "</td>";
                echo "<td>" . $row['j'] . "</td>";
                echo "<td>" . $row['k'] . "</td>";
                echo "<td>" . $row['m'] . "</td>";
                $id = $row['i'];
                echo "<td><a href=\"../backend/process.php?op=deleteTgsDsn&id=$id\" class=\"text-danger\"><i class=\"fas fa-times\"></i></a></td>";
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