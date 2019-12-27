<?php
session_start();
require "config.php";



//Operation nya
$op = isset($_GET['op']) ? $_GET['op'] : null;

if ($op == "insertAdmin") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `admin` (`username`, `pass`) 
    VALUES ( '" . $username . "','" . $pass . "');";

    $result = $connect->query($sql);
    if ($result) {

        echo "<script>window.location.href='../admin/index.php?page=manage_admin'; alert('Berhasil ditambahkan !');</script>";
    } else {
        echo "ERROR: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

if ($op == "editAdmin") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "UPDATE `admin` SET `pass` = '$password' WHERE `admin`.`username` = '$username'";

    $result = $connect->query($sql);
    if ($result) {

        echo "<script>window.location.href='../admin/index.php?page=manage_admin'; alert('Edited Success!');</script>";
    } else {
        echo "ERROR: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

if ($op == "deleteAdmin") {
    $username = $_GET['username'];

    $sql = "DELETE FROM `admin` WHERE `admin`.`username`='$username'";
    if ($connect->query($sql) === TRUE) {
        echo "<script>window.location.href='../admin/index.php?page=manage_admin'; alert('Deleted Success!');</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $connect->close();
}

if ($op == "insertFak") {
    $name = $_POST['name'];

    $sql = "INSERT INTO `fakultas` (`id`, `name`)
    VALUES ( NULL,'" . $name . "');";

    $result = $connect->query($sql);
    if ($result) {

        echo "<script>window.location.href='../admin/index.php?page=manage_fak'; alert('Berhasil ditambahkan !');</script>";
    } else {
        echo "ERROR: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

if ($op == "editFak") {
    $id = $_POST['id'];
    $name = $_POST['name'];

    $sql = "UPDATE `fakultas` SET `name` = '$name' WHERE `fakultas`.`id` = '$id'";

    $result = $connect->query($sql);
    if ($result) {

        echo "<script>window.location.href='../admin/index.php?page=manage_fak'; alert('Edited Success!');</script>";
    } else {
        echo "ERROR: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

if ($op == "deleteFak") {
    $id = $_GET['id'];

    $sql = "DELETE FROM `fakultas` WHERE `fakultas`.`id`='$id'";
    if ($connect->query($sql) === TRUE) {
        echo "<script>window.location.href='../admin/index.php?page=manage_fak'; alert('Deleted Success!');</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $connect->close();
}

if ($op == "insertJur") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $id_fak = $_POST['id_fak'];

    $sql = "INSERT INTO `jurusan` (`id`, `name`, `id_fak`) 
    VALUES ( '" . $id . "','" . $name . "','" . $id_fak . "');";

    $result = $connect->query($sql);
    if ($result) {

        echo "<script>window.location.href='../admin/index.php?page=manage_jur'; alert('Berhasil ditambahkan !');</script>";
    } else {
        echo "ERROR: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

if ($op == "editJur") {
    $id = $_POST['id'];
    $name = $_POST['name'];

    $sql = "UPDATE `jurusan` SET `name` = '$name' WHERE `jurusan`.`id` = '$id'";

    $result = $connect->query($sql);
    if ($result) {

        echo "<script>window.location.href='../admin/index.php?page=manage_jur'; alert('Edited Success!');</script>";
    } else {
        echo "ERROR: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

if ($op == "deleteJur") {
    $id = $_GET['id'];

    $sql = "DELETE FROM `jurusan` WHERE `jurusan`.`id`='$id'";
    if ($connect->query($sql) === TRUE) {
        echo "<script>window.location.href='../admin/index.php?page=manage_jur'; alert('Deleted Success!');</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $connect->close();
}

if ($op == "insertPr") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $jenjang = $_POST['jenjang'];
    $id_jur = $_POST['id_jur'];

    $sql = "INSERT INTO `prodi` (`id`, `name`,`jenjang`, `id_jur`) 
    VALUES ( '" . $id . "','" . $name . "','" . $jenjang . "','" . $id_jur . "');";

    $result = $connect->query($sql);
    if ($result) {

        echo "<script>window.location.href='../admin/index.php?page=manage_pr'; alert('Berhasil ditambahkan !');</script>";
    } else {
        echo "ERROR: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

if ($op == "editPr") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $jenjang = $_POST['jenjang'];

    $sql = "UPDATE `prodi` SET `name` = '$name', `jenjang` = '$jenjang' WHERE `prodi`.`id` = '$id'";

    $result = $connect->query($sql);
    if ($result) {

        echo "<script>window.location.href='../admin/index.php?page=manage_pr'; alert('Edited Success!');</script>";
    } else {
        echo "ERROR: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

if ($op == "deletePr") {
    $id = $_GET['id'];

    $sql = "DELETE FROM `prodi` WHERE `prodi`.`id`='$id'";
    if ($connect->query($sql) === TRUE) {
        echo "<script>window.location.href='../admin/index.php?page=manage_pr'; alert('Deleted Success!');</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $connect->close();
}

if ($op == "insertMhs") {
    $nim = $_POST['nim'];
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $id_pr = $_POST['id_pr'];

    $sql = "INSERT INTO `mahasiswa` (`nim`, `name`, `id_pr`, `pass`) 
    VALUES ( '" . $nim . "','" . $name . "','" . $id_pr . "','" . $pass . "');";

    $result = $connect->query($sql);
    if ($result) {

        echo "<script>window.location.href='../admin/index.php?page=manage_mhs'; alert('Berhasil ditambahkan !');</script>";
    } else {
        echo "ERROR: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

if ($op == "editMhs") {
    $nim = $_POST['nim'];
    $name = $_POST['name'];
    $pass = $_POST['pass'];

    $sql = "UPDATE `mahasiswa` SET `name` = '$name', `pass` = '$pass' WHERE `mahasiswa`.`nim` = '$nim'";

    $result = $connect->query($sql);
    if ($result) {

        echo "<script>window.location.href='../admin/index.php?page=manage_mhs'; alert('Edited Success!');</script>";
    } else {
        echo "ERROR: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

if ($op == "deleteMhs") {
    $nim = $_GET['nim'];

    $sql = "DELETE FROM `mahasiswa` WHERE `mahasiswa`.`nim`='$nim'";
    if ($connect->query($sql) === TRUE) {
        echo "<script>window.location.href='../admin/index.php?page=manage_mhs'; alert('Deleted Success!');</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $connect->close();
}

if ($op == "insertDsn") {
    $nip = $_POST['nip'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $pass = $_POST['pass'];
    $id_jur = $_POST['id_jur'];

    $sql = "INSERT INTO `dosen` (`nip`, `name`,`gender`, `id_jur`, `pass`) 
    VALUES ( '" . $nip . "','" . $name . "','" . $gender . "','" . $id_jur . "','" . $pass . "');";

    $result = $connect->query($sql);
    if ($result) {

        echo "<script>window.location.href='../admin/index.php?page=manage_dsn'; alert('Berhasil ditambahkan !');</script>";
    } else {
        echo "ERROR: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

if ($op == "editDsn") {
    $nip = $_POST['nip'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $pass = $_POST['pass'];

    $sql = "UPDATE `dosen` SET `name` = '$name', `gender` = '$gender', `pass` = '$pass' WHERE `dosen`.`nip` = '$nip'";

    $result = $connect->query($sql);
    if ($result) {

        echo "<script>window.location.href='../admin/index.php?page=manage_dsn'; alert('Edited Success!');</script>";
    } else {
        echo "ERROR: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

if ($op == "deleteDsn") {
    $nip = $_GET['nip'];

    $sql = "DELETE FROM `dosen` WHERE `dosen`.`nip`='$nip'";
    if ($connect->query($sql) === TRUE) {
        echo "<script>window.location.href='../admin/index.php?page=manage_dsn'; alert('Deleted Success!');</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $connect->close();
}

if ($op == "insertKur") {
    $id_pr = $_POST['id_pr'];
    $id_mk = $_POST['id_mk'];

    $sql = "INSERT INTO `kurikulum` (`id`, `id_pr`,`id_mk`)
    VALUES ( NULL,'" . $id_pr . "','" . $id_mk . "');";

    $result = $connect->query($sql);
    if ($result) {

        echo "<script>window.location.href='../admin/index.php?page=manage_kur'; alert('Berhasil ditambahkan !');</script>";
    } else {
        echo "ERROR: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

if ($op == "deleteKur") {
    $id = $_GET['id'];

    $sql = "DELETE FROM `kurikulum` WHERE `kurikulum`.`id`='$id'";
    if ($connect->query($sql) === TRUE) {
        echo "<script>window.location.href='../admin/index.php?page=manage_kur'; alert('Deleted Success!');</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $connect->close();
}

if ($op == "insertMk") {
    $kode = $_POST['kode'];
    $name = $_POST['name'];
    $sks = $_POST['sks'];
    $semester = $_POST['semester'];
    $jenis = $_POST['jenis'];

    $sql = "INSERT INTO `matkul` (`id`, `name`,`sks`, `semester`,`jenis`) 
    VALUES ( '" . $kode . "','" . $name . "','" . $sks . "','" . $semester . "','" . $jenis . "');";

    $result = $connect->query($sql);
    if ($result) {

        echo "<script>window.location.href='../admin/index.php?page=manage_mk'; alert('Berhasil ditambahkan !');</script>";
    } else {
        echo "ERROR: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

if ($op == "editMk") {
    $id = $_POST['kode'];
    $name = $_POST['name'];
    $sks = $_POST['sks'];
    $semester = $_POST['semester'];
    $jenis = $_POST['jenis'];

    $sql = "UPDATE `matkul` SET `name` = '$name', `sks` = '$sks', `semester` = '$semester', `jenis` = '$jenis' WHERE `matkul`.`id` = '$id'";

    $result = $connect->query($sql);
    if ($result) {

        echo "<script>window.location.href='../admin/index.php?page=manage_mk'; alert('Edited Success!');</script>";
    } else {
        echo "ERROR: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

if ($op == "deleteMk") {
    $id = $_GET['id'];

    $sql = "DELETE FROM `matkul` WHERE `matkul`.`id`='$id'";
    if ($connect->query($sql) === TRUE) {
        echo "<script>window.location.href='../admin/index.php?page=manage_mk'; alert('Deleted Success!');</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $connect->close();
}

if ($op == "insertSil") {
    $name = $_POST['name'];
    $isi = $_POST['isi'];
    $id_mk = $_POST['id_mk'];

    $sql = "INSERT INTO `silabus` (`id`, `name`,`isi`, `id_mk`) 
    VALUES ( NULL ,'" . $name . "','" . $isi . "','" . $id_mk . "');";

    $result = $connect->query($sql);
    if ($result) {

        echo "<script>window.location.href='../admin/index.php?page=manage_sil'; alert('Berhasil ditambahkan !');</script>";
    } else {
        echo "ERROR: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

if ($op == "editSil") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $isi = $_POST['isi'];

    $sql = "UPDATE `silabus` SET `name` = '$name', `isi` = '$isi' WHERE `silabus`.`id` = '$id'";

    $result = $connect->query($sql);
    if ($result) {

        echo "<script>window.location.href='../admin/index.php?page=manage_sil'; alert('Edited Success!');</script>";
    } else {
        echo "ERROR: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

if ($op == "deleteSil") {
    $id = $_GET['id'];

    $sql = "DELETE FROM `silabus` WHERE `silabus`.`id`='$id'";
    if ($connect->query($sql) === TRUE) {
        echo "<script>window.location.href='../admin/index.php?page=manage_sil'; alert('Deleted Success!');</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $connect->close();
}

if ($op == "insertBa") {
    $name = $_POST['name'];
    $author = $_POST['author'];
    $tahun = $_POST['tahun'];
    $jenis = $_POST['jenis'];
    $file = $_POST['file'];
    $id_mk = $_POST['id_mk'];

    $sql = "INSERT INTO `bahan_ajar` (`id`, `name`, `jenis` ,`author`,`tahun`, `file_link`, `id_mk`) 
    VALUES ( NULL ,'" . $name . "','" . $jenis . "','" . $author . "','" . $tahun . "','" . $file . "','" . $id_mk . "');";

    $result = $connect->query($sql);
    if ($result) {

        echo "<script>window.location.href='../admin/index.php?page=manage_ba'; alert('Berhasil ditambahkan !');</script>";
    } else {
        echo "ERROR: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

if ($op == "editBa") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $author = $_POST['author'];
    $jenis = $_POST['jenis'];
    $file = $_POST['file'];
    $tahun = $_POST['tahun'];

    $sql = "UPDATE `bahan_ajar` SET `name` = '$name', `author` = '$author',`jenis` = '$jenis', `tahun` = '$tahun', `file_link` = '$file' WHERE `bahan_ajar`.`id` = '$id'";

    $result = $connect->query($sql);
    if ($result) {

        echo "<script>window.location.href='../admin/index.php?page=manage_ba'; alert('Edited Success!');</script>";
    } else {
        echo "ERROR: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

if ($op == "deleteBa") {
    $id = $_GET['id'];

    $sql = "DELETE FROM `bahan_ajar` WHERE `bahan_ajar`.`id`='$id'";
    if ($connect->query($sql) === TRUE) {
        echo "<script>window.location.href='../admin/index.php?page=manage_ba'; alert('Deleted Success!');</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $connect->close();
}

if ($op == "insertMedia") {
    $name = $_POST['name'];
    $jenis = $_POST['jenis'];
    $file = $_POST['file'];
    $id_ba = $_POST['id_ba'];

    $sql = "INSERT INTO `media` (`id`, `name`, `jenis`, `file_link`, `id_ba`) 
    VALUES ( NULL ,'" . $name . "','" . $jenis . "','" . $file . "','" . $id_ba . "');";

    $result = $connect->query($sql);
    if ($result) {

        echo "<script>window.location.href='../admin/index.php?page=manage_media'; alert('Berhasil ditambahkan !');</script>";
    } else {
        echo "ERROR: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

if ($op == "editMedia") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $jenis = $_POST['jenis'];
    $file = $_POST['file'];
    $sql = "UPDATE `media` SET `name` = '$name',`jenis` = '$jenis', `file_link` = '$file' WHERE `media`.`id` = '$id'";

    $result = $connect->query($sql);
    if ($result) {

        echo "<script>window.location.href='../admin/index.php?page=manage_media'; alert('Edited Success!');</script>";
    } else {
        echo "ERROR: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

if ($op == "deleteMedia") {
    $id = $_GET['id'];

    $sql = "DELETE FROM `media` WHERE `media`.`id`='$id'";
    if ($connect->query($sql) === TRUE) {
        echo "<script>window.location.href='../admin/index.php?page=manage_media'; alert('Deleted Success!');</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $connect->close();
}


if ($op == "insertTgs") {
    $name = $_POST['name'];
    $jenis = $_POST['jenis'];
    $desc = $_POST['desc'];
    $id_mk = $_POST['id_mk'];

    $sql = "INSERT INTO `tugas` (`id`, `name`, `jenis` ,`desc`, `id_mk`) 
    VALUES ( NULL ,'" . $name . "','" . $jenis . "','" . $desc . "','" . $id_mk . "');";

    $result = $connect->query($sql);
    if ($result) {

        echo "<script>window.location.href='../admin/index.php?page=manage_tgs'; alert('Berhasil ditambahkan !');</script>";
    } else {
        echo "ERROR: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

if ($op == "editTgs") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $jenis = $_POST['jenis'];
    $desc = $_POST['desc'];

    $sql = "UPDATE `tugas` SET `name` = '$name', `jenis` = '$jenis',`desc` = '$desc' WHERE `tugas`.`id` = '$id'";

    $result = $connect->query($sql);
    if ($result) {

        echo "<script>window.location.href='../admin/index.php?page=manage_tgs'; alert('Edited Success!');</script>";
    } else {
        echo "ERROR: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

if ($op == "deleteTgs") {
    $id = $_GET['id'];

    $sql = "DELETE FROM `tugas` WHERE `tugas`.`id`='$id'";
    if ($connect->query($sql) === TRUE) {
        echo "<script>window.location.href='../admin/index.php?page=manage_tgs'; alert('Deleted Success!');</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $connect->close();
}

if ($op == "insertPen") {
    $nilai = $_POST['nilai'];
    $id_tgs = $_POST['id_tgs'];
    $nim = $_POST['nim'];

    $sql = "INSERT INTO `penilaian` (`id`, `nilai`, `id_tgs` ,`nim`) 
    VALUES ( NULL ,'" . $nilai . "','" . $id_tgs . "','" . $nim . "');";

    $result = $connect->query($sql);
    if ($result) {

        echo "<script>window.location.href='../admin/index.php?page=manage_pen'; alert('Berhasil ditambahkan !');</script>";
    } else {
        echo "ERROR: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

if ($op == "deletePen") {
    $id = $_GET['id'];

    $sql = "DELETE FROM `penilaian` WHERE `penilaian`.`id`='$id'";
    if ($connect->query($sql) === TRUE) {
        echo "<script>window.location.href='../admin/index.php?page=manage_pen'; alert('Deleted Success!');</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $connect->close();
}

if ($op == "insertAmbil") {
    $nim = $_POST['nim'];
    $id_mk = $_POST['id_mk'];

    $sql = "INSERT INTO `mengambil` (`id`, `nim`, `id_mk`) 
    VALUES ( NULL ,'" . $nim . "','" . $id_mk . "');";

    $result = $connect->query($sql);
    if ($result) {

        echo "<script>window.location.href='../admin/index.php?page=manage_ambil'; alert('Berhasil ditambahkan !');</script>";
    } else {
        echo "ERROR: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

if ($op == "deleteAmbil") {
    $id = $_GET['id'];

    $sql = "DELETE FROM `mengambil` WHERE `mengambil`.`id`='$id'";
    if ($connect->query($sql) === TRUE) {
        echo "<script>window.location.href='../admin/index.php?page=manage_ambil'; alert('Deleted Success!');</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $connect->close();
}

if ($op == "insertAmpu") {
    $nip = $_POST['nip'];
    $id_mk = $_POST['id_mk'];

    $sql = "INSERT INTO `mengampu` (`id`, `nip`, `id_mk`) 
    VALUES ( NULL ,'" . $nip . "','" . $id_mk . "');";

    $result = $connect->query($sql);
    if ($result) {

        echo "<script>window.location.href='../admin/index.php?page=manage_ampu'; alert('Berhasil ditambahkan !');</script>";
    } else {
        echo "ERROR: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

if ($op == "deleteAmpu") {
    $id = $_GET['id'];

    $sql = "DELETE FROM `mengampu` WHERE `mengampu`.`id`='$id'";
    if ($connect->query($sql) === TRUE) {
        echo "<script>window.location.href='../admin/index.php?page=manage_ampu'; alert('Deleted Success!');</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $connect->close();
}


// DOSEN

if ($op == "editProfileDosen") {
    $nip = $_POST['nip'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $pass = $_POST['password'];

    $sql = "UPDATE `dosen` SET `name` = '$name', `gender` = '$gender', `pass` = '$pass' WHERE `dosen`.`nip` = '$nip'";

    $result = $connect->query($sql);
    if ($result) {

        echo "<script>window.location.href='../dosen/index.php?page=manage_profile'; alert('Edited Success!');</script>";
    } else {
        echo "ERROR: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

if ($op == "insertAmpuDsn") {
    $nip = $_POST['nip'];
    $id_mk = $_POST['id_mk'];

    $sql = "INSERT INTO `mengampu` (`id`, `nip`, `id_mk`) 
    VALUES ( NULL ,'" . $nip . "','" . $id_mk . "');";

    $result = $connect->query($sql);
    if ($result) {

        echo "<script>window.location.href='../dosen/index.php?page=manage_ampu'; alert('Berhasil ditambahkan !');</script>";
    } else {
        echo "ERROR: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

if ($op == "deleteAmpuDsn") {
    $id = $_GET['id'];

    $sql = "DELETE FROM `mengampu` WHERE `mengampu`.`id`='$id'";
    if ($connect->query($sql) === TRUE) {
        echo "<script>window.location.href='../dosen/index.php?page=manage_ampu'; alert('Deleted Success!');</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $connect->close();
}

if ($op == "deleteAmbilDsn") {
    $id = $_GET['id'];

    $sql = "DELETE FROM `mengambil` WHERE `mengambil`.`id`='$id'";
    if ($connect->query($sql) === TRUE) {
        echo "<script>window.location.href='../dosen/index.php?page=manage_ambil'; alert('Deleted Success!');</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $connect->close();
}

if ($op == "insertBaDsn") {
    $name = $_POST['name'];
    $author = $_POST['author'];
    $tahun = $_POST['tahun'];
    $jenis = $_POST['jenis'];
    $file = $_POST['file'];
    $id_mk = $_POST['id_mk'];

    $sql = "INSERT INTO `bahan_ajar` (`id`, `name`, `jenis` ,`author`,`tahun`, `file_link`, `id_mk`) 
    VALUES ( NULL ,'" . $name . "','" . $jenis . "','" . $author . "','" . $tahun . "','" . $file . "','" . $id_mk . "');";

    $result = $connect->query($sql);
    if ($result) {

        echo "<script>window.location.href='../dosen/index.php?page=manage_ba'; alert('Berhasil ditambahkan !');</script>";
    } else {
        echo "ERROR: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

if ($op == "deleteBaDsn") {
    $id = $_GET['id'];

    $sql = "DELETE FROM `bahan_ajar` WHERE `bahan_ajar`.`id`='$id'";
    if ($connect->query($sql) === TRUE) {
        echo "<script>window.location.href='../dosen/index.php?page=manage_ba'; alert('Deleted Success!');</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $connect->close();
}

if ($op == "insertMediaDsn") {
    $name = $_POST['name'];
    $jenis = $_POST['jenis'];
    $file = $_POST['file'];
    $id_ba = $_POST['id_ba'];

    $sql = "INSERT INTO `media` (`id`, `name`, `jenis` , `file_link`, `id_ba`) 
    VALUES ( NULL ,'" . $name . "','" . $jenis . "','" . $file . "','" . $id_ba . "');";

    $result = $connect->query($sql);
    if ($result) {

        echo "<script>window.location.href='../dosen/index.php?page=manage_media'; alert('Berhasil ditambahkan !');</script>";
    } else {
        echo "ERROR: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

if ($op == "deleteMediaDsn") {
    $id = $_GET['id'];

    $sql = "DELETE FROM `media` WHERE `media`.`id`='$id'";
    if ($connect->query($sql) === TRUE) {
        echo "<script>window.location.href='../dosen/index.php?page=manage_media'; alert('Deleted Success!');</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $connect->close();
}

if ($op == "insertTgsDsn") {
    $name = $_POST['name'];
    $jenis = $_POST['jenis'];
    $desc = $_POST['desc'];
    $id_mk = $_POST['id_mk'];

    $sql = "INSERT INTO `tugas` (`id`, `name`, `jenis` ,`desc`, `id_mk`) 
    VALUES ( NULL ,'" . $name . "','" . $jenis . "','" . $desc . "','" . $id_mk . "');";

    $result = $connect->query($sql);
    if ($result) {

        echo "<script>window.location.href='../dosen/index.php?page=manage_tgs'; alert('Berhasil ditambahkan !');</script>";
    } else {
        echo "ERROR: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

if ($op == "deleteTgsDsn") {
    $id = $_GET['id'];

    $sql = "DELETE FROM `tugas` WHERE `tugas`.`id`='$id'";
    if ($connect->query($sql) === TRUE) {
        echo "<script>window.location.href='../dosen/index.php?page=manage_tgs'; alert('Deleted Success!');</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $connect->close();
}

if ($op == "insertPenDsn") {
    $nilai = $_POST['nilai'];
    $id_tgs = $_POST['id_tgs'];
    $nim = $_POST['nim'];

    $sql = "INSERT INTO `penilaian` (`id`, `nilai`, `id_tgs` ,`nim`) 
    VALUES ( NULL ,'" . $nilai . "','" . $id_tgs . "','" . $nim . "');";

    $result = $connect->query($sql);
    if ($result) {

        echo "<script>window.location.href='../dosen/index.php?page=manage_pen'; alert('Berhasil ditambahkan !');</script>";
    } else {
        echo "ERROR: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

if ($op == "deletePenDsn") {
    $id = $_GET['id'];

    $sql = "DELETE FROM `penilaian` WHERE `penilaian`.`id`='$id'";
    if ($connect->query($sql) === TRUE) {
        echo "<script>window.location.href='../dosen/index.php?page=manage_pen'; alert('Deleted Success!');</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $connect->close();
}

if ($op == "insertPresDsn") {
    $id_mk = $_POST['id_mk'];
    $nim = $_POST['nim'];
    $tgl = $_POST['hari'];
    $gedung = $_POST['gedung'];
    $materi = $_POST['materi'];
    $ket = $_POST['ket'];
    $jml = $_POST['sum'];



    $sql = "INSERT INTO `presensi` (`id`, `id_mk` ,`nim`, `tgl`, `gedung`, `materi`, `ket`) 
    VALUES ( NULL ,'" . $id_mk . "','" . $nim . "','" . $tgl . "','" . $gedung . "','" . $materi . "','" . $ket . "');";

    $result = $connect->query($sql);
    if ($result) {
        echo print_r($_POST);
        //echo "<script>window.location.href='../dosen/index.php?page=manage_pres'; alert('Berhasil ditambahkan !');</script>";
    } else {
        echo "ERROR: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}

// Mahasiswa

if ($op == "editProfileMhs") {
    $nim = $_POST['nim'];
    $name = $_POST['name'];
    $pass = $_POST['password'];

    $sql = "UPDATE `mahasiswa` SET `name` = '$name', `pass` = '$pass' WHERE `mahasiswa`.`nim` = '$nim'";

    $result = $connect->query($sql);
    if ($result) {

        echo "<script>window.location.href='../mahasiswa/index.php?page=manage_profile'; alert('Edited Success!');</script>";
    } else {
        echo "ERROR: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}
