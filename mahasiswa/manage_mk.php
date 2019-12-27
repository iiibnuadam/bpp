<table class="table table-hover table-bordered">
    <thead align="center" class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">SKS</th>
            <th scope="col">Semester</th>
            <th scope="col">Jenis</th>
        </tr>
    </thead>
    <tbody align="center">
        <?php
        $nim = $_SESSION['nim'];
        $sql = "SELECT * FROM mengambil AS m
                JOIN mahasiswa AS mhs ON m.`nim` = mhs.`nim`
                JOIN matkul AS mk ON m.`id_mk` = mk.`id`
                WHERE mhs.`nim` = '$nim'";
        $result = $connect->query($sql);

        if ($result->num_rows > 0) {
            $its;
            $no = 1;
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['sks'] . "</td>";
                echo "<td>" . $row['semester'] . "</td>";
                echo "<td>" . $row['jenis'] . "</td>";
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