<table class="table table-hover table-bordered">
    <thead align="center" class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Kode</th>
            <th scope="col">Name</th>
            <th scope="col">SKS</th>
            <th scope="col">Semester</th>
            <th scope="col">Jenis</th>
            <th scope="col">Act</th>
        </tr>
    </thead>
    <tbody align="center">
        <?php

        $sql = "SELECT * FROM `matkul`";
        $result = $connect->query($sql);

        if ($result->num_rows > 0) {
            $its;
            $no = 1;
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['sks'] . "</td>";
                echo "<td>" . $row['semester'] . "</td>";
                echo "<td>" . $row['jenis'] . "</td>";
                $id = $row['id'];
                echo "<td><a href=\"index.php?page=edit_mk&id=$id\" class=\"text-info\"><i class=\"fas fa-edit\"></i></a><span> | </span> <a href=\"../backend/process.php?op=deleteMk&id=$id\" class=\"text-danger\"><i class=\"fas fa-times\"></i></a></td>";
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