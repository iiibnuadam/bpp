<form class="form-inline" method="post" action="">
    <div class="input-group mb-2">
        <div class="input-group-prepend">
            <div class="input-group-text">Semester</div>
        </div>
        <select class="custom-select mr-sm-3" id="inlineFormCustomSelect" name="semester">
            <option>Chose</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary mb-2"><i class="fas fa-angle-right"></i></button>
</form>
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
        $pr = $_SESSION['prodi'];

        if (!isset($_POST['semester'])) {
            $sem = 1;
        } else {
            $sem = $_POST['semester'];
        }

        $sql = "SELECT DISTINCT mk.name AS a, mk.`jenis` AS b, mk.`sks` AS c, mk.`semester` AS d FROM kurikulum AS k
                    JOIN prodi AS p ON k.`id_pr` = p.`id`
                    JOIN matkul AS mk ON k.`id_mk` = mk.`id`
                    JOIN mengambil AS m ON mk.`id` = m.`id_mk`
                    LEFT JOIN mahasiswa AS mhs ON m.`nim` = mhs.`nim`
                    WHERE (k.`id_pr` = 1011 AND mk.`semester` = '$sem%') ORDER BY mk.`semester`, mk.`name`";
        $result = $connect->query($sql);
        if ($result->num_rows > 0) {
            $no = 1;
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $row['a'] . "</td>";
                echo "<td>" . $row['c'] . "</td>";
                echo "<td>" . $row['d'] . "</td>";
                echo "<td>" . $row['b'] . "</td>";
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