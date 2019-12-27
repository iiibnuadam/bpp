<table class="table table-hover table-bordered">
    <thead align="center" class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Jenis</th>
            <th scope="col">File</th>
            <th scope="col">ID Bahan Ajar</th>
            <th scope="col">Act</th>
        </tr>
    </thead>
    <tbody align="center">
        <?php
        $nip = $_SESSION['nip'];
        $sql = "SELECT DISTINCT ba.`id` AS i, ba.`name` AS a, ba.`jenis` AS b, ba.`file_link` AS c, med.`name` AS d FROM mengampu AS m
                JOIN matkul AS mk ON m.`id_mk` = mk.`id`
                JOIN bahan_ajar AS ba ON mk.`id` = ba.`id_mk`
                JOIN media AS med ON ba.`id` = med.`id_ba`
                JOIN dosen AS d ON m.`nip` = d.`nip`
                WHERE (d.`nip` = '$nip')";
        $result = $connect->query($sql);

        if ($result->num_rows > 0) {
            $its;
            $no = 1;
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $row['a'] . "</td>";
                echo "<td>" . $row['b'] . "</td>";
                echo "<td><a href=\"" . $row['c'] . "\" target=\"_blank\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i class=\"far fa-eye fa-sm text-white-50\"></i> Lihat</a></td>";
                echo "<td>" . $row['d'] . "</td>";
                $id = $row['i'];
                echo "<td><a href=\"../backend/process.php?op=deleteMediaDsn&id=$id\" class=\"text-danger\"><i class=\"fas fa-times\"></i></a></td>";
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