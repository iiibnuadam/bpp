<form class="form-inline" method="post" action="">
    <div class="input-group mb-2">
        <div class="input-group-prepend">
            <div class="input-group-text">Matkul</div>
        </div>
        <select class="custom-select mr-sm-3" id="inlineFormCustomSelect" name="matkul">
            <?php
            $nip = $_SESSION['nip'];
            $sql = "SELECT DISTINCT mk.`id` AS `i`,mk.`name` AS `a` FROM mengampu AS m
             JOIN matkul AS mk ON m.`id_mk` = mk.`id`
             JOIN dosen AS dsn ON m.`nip` = dsn.`nip`
             LEFT JOIN mengambil AS am ON mk.`id` = am.`id_mk`
             JOIN mahasiswa AS mhs ON am.`nim` = mhs.`nim`
             LEFT JOIN prodi AS p ON mhs.`id_pr` = p.`id`
             WHERE dsn.`nip` = '$nip'";
            $result = $connect->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<option value=' . $row['i'] . '>' . $row['a'] . '</option>';
                }
            }
            ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary mb-2"><i class="fas fa-angle-right"></i></button>
</form>
<table class="table table-hover table-bordered">
    <thead align="center" class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">NIM</th>
            <th scope="col">Name</th>
            <th scope="col">Prodi</th>
            <th scope="col">Act</th>
        </tr>
    </thead>
    <tbody align="center">
        <?php
        if (!isset($_POST['matkul'])) {
            $sql = "SELECT DISTINCT mhs.`nim` AS `a`, mhs.`name` AS `b`, p.`name` AS `c`, am.`id` AS `i` FROM mengampu AS m
             JOIN matkul AS mk ON m.`id_mk` = mk.`id`
             JOIN dosen AS dsn ON m.`nip` = dsn.`nip`
             LEFT JOIN mengambil AS am ON mk.`id` = am.`id_mk`
             JOIN mahasiswa AS mhs ON am.`nim` = mhs.`nim`
             LEFT JOIN prodi AS p ON mhs.`id_pr` = p.`id`
             WHERE (dsn.`nip` = '$nip') GROUP BY mhs.`nim` ORDER BY mhs.`nim`";
        } else {
            $mk = $_POST['matkul'];
            $sql = "SELECT DISTINCT mhs.`nim` AS `a`, mhs.`name` AS `b`, p.`name` AS `c`, am.`id` AS `i` FROM mengampu AS m
            JOIN matkul AS mk ON m.`id_mk` = mk.`id`
            JOIN dosen AS dsn ON m.`nip` = dsn.`nip`
            LEFT JOIN mengambil AS am ON mk.`id` = am.`id_mk`
            JOIN mahasiswa AS mhs ON am.`nim` = mhs.`nim`
            LEFT JOIN prodi AS p ON mhs.`id_pr` = p.`id`
            WHERE (dsn.`nip` = '$nip' and mk.`id` = '$mk') GROUP BY mhs.`nim` ORDER BY mhs.`nim`";
        }
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
                $id = $row['i'];
                echo "<td><a href=\"../backend/process.php?op=deleteAmbilDsn&id=$id\" class=\"text-danger\"><i class=\"fas fa-times\"></i></a></td>";
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