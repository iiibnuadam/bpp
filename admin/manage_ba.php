<table class="table table-hover table-bordered">
    <thead align="center" class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Jenis</th>
            <th scope="col">Pembuat</th>
            <th scope="col">Tahun</th>
            <th scope="col">File</th>
            <th scope="col">ID MK</th>
            <th scope="col">Act</th>
        </tr>
    </thead>
    <tbody align="center">
        <?php

        $sql = "SELECT * FROM `bahan_ajar`";
        $result = $connect->query($sql);

        if ($result->num_rows > 0) {
            $its;
            $no = 1;
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['jenis'] . "</td>";
                echo "<td>" . $row['author'] . "</td>";
                echo "<td>" . $row['tahun'] . "</td>";
                echo "<td><a href=\"" . $row['file_link'] . "\" target=\"_blank\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i class=\"far fa-eye fa-sm text-white-50\"></i> Lihat</a></td>";
                echo "<td>" . $row['id_mk'] . "</td>";
                $id = $row['id'];
                echo "<td><a href=\"index.php?page=edit_ba&id=$id\" class=\"btn btn-info\">Edit</a><span> | </span> <a href=\"../backend/process.php?op=deleteBa&id=$id\" class=\"text-danger\"><i class=\"fas fa-times\"></i></a></td>";
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