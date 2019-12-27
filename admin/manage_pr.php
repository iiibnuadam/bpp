<table class="table table-hover table-bordered">
    <thead align="center" class="thead-dark">
        <tr>
            <th scope=" col">No</th>
            <th scope="col">ID Prodi</th>
            <th scope="col">Name</th>
            <th scope="col">Jenjang</th>
            <th scope="col">ID Jurusan</th>
            <th scope="col">Act</th>
        </tr>
    </thead>
    <tbody align="center">
        <?php

        $sql = "SELECT * FROM `prodi`";
        $result = $connect->query($sql);

        if ($result->num_rows > 0) {
            $no = 1;
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['jenjang'] . "</td>";
                echo "<td>" . $row['id_jur'] . "</td>";
                $idpr = $row['id'];
                echo "<td><a href=\"index.php?page=edit_pr&id=$idpr\" class=\"text-info\"><i class=\"fas fa-edit\"></i></a><span> | </span> <a href=\"../backend/process.php?op=deletePr&id=$idpr\" class=\"text-danger\"><i class=\"fas fa-times\"></i></td>";
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