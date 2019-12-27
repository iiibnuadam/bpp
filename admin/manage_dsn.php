<table class="table table-hover table-bordered">
    <thead align="center" class="thead-dark">
        <tr>
            <th scope=" col">No</th>
            <th scope="col">NIP</th>
            <th scope="col">Name</th>
            <th scope="col">Gender</th>
            <th scope="col">ID Jurusan</th>
            <th scope="col">Password</th>
            <th scope="col">Act</th>
        </tr>
    </thead>
    <tbody align="center">
        <?php

        $sql = "SELECT * FROM `dosen`";
        $result = $connect->query($sql);

        if ($result->num_rows > 0) {
            $its;
            $no = 1;
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $row['nip'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['id_jur'] . "</td>";
                echo "<td>" . str_repeat('*', strlen($row['pass'])) . "</td>";
                $nip = $row['nip'];
                echo "<td><a href=\"index.php?page=edit_dsn&nip=$nip\" class=\"text-info\"><i class=\"fas fa-edit\"></i></a><span> | </span> <a href=\"../backend/process.php?op=deleteDsn&nip=$nip\" class=\"text-danger\"><i class=\"fas fa-times\"></i></a></td>";
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