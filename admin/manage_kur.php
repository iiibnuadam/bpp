<table class="table table-hover table-bordered" class="thead-dark">
    <thead align="center">
        <tr>
            <th scope=" col">No</th>
            <th scope="col">ID PRODI</th>
            <th scope="col">ID MK</th>
            <th scope="col">Act</th>
        </tr>
    </thead>
    <tbody align="center">
        <?php

        $sql = "SELECT * FROM `kurikulum`";
        $result = $connect->query($sql);

        if ($result->num_rows > 0) {
            $its;
            $no = 1;
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $row['id_pr'] . "</td>";
                echo "<td>" . $row['id_mk'] . "</td>";
                $id = $row['id'];
                echo "<td><a href=\"../backend/process.php?op=deleteKur&id=$id\" class=\"text-danger\"><i class=\"fas fa-times\"></i></a></td>";
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