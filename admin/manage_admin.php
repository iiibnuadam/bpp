<table class="table table-hover table-bordered">
    <thead align="center" class="thead-dark">
        <tr>
            <th scope=" col">No</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Act</th>
        </tr>
    </thead>
    <tbody align="center">
        <?php
        $sql = "SELECT * FROM `admin`";
        $result = $connect->query($sql);
        $no = 1;
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . str_repeat('*', strlen($row['pass'])) . "</td>";

                $usrname = trim($row['username']);
                echo "<td><a href=\"index.php?page=edit_admin&username=$usrname\" class=\"text-info\"><i class=\"fas fa-edit\"></i></a><span> | </span> <a href=\"../backend/process.php?op=deleteAdmin&username=$usrname\" class=\"text-danger\"><i class=\"fas fa-times\"></i></a></td>";
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