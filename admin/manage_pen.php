<table class="table table-hover table-bordered">
    <thead align="center" class="thead-dark">
        <tr>
            <th scope=" col">No</th>
            <th scope="col">Nilai</th>
            <th scope="col">ID Tugas</th>
            <th scope="col">NIM</th>
            <th scope="col">Act</th>
        </tr>
    </thead>
    <tbody align="center">
        <?php

        $sql = "SELECT * FROM `penilaian`";
        $result = $connect->query($sql);

        if ($result->num_rows > 0) {
            $its;
            $no = 1;
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $row['nilai'] . "</td>";
                echo "<td>" . $row['id_tgs'] . "</td>";
                echo "<td>" . $row['nim'] . "</td>";
                $id = $row['id'];
                echo "<td><a href=\"../backend/process.php?op=deletePen&id=$id\" class=\"text-danger\"><i class=\"fas fa-times\"></i></a></td>";
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