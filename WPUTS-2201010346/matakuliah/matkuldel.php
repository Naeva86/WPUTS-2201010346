<?php
$idmatkul = $_GET["p1"];
$sql = "SELECT tu.nama_matkul, tu.dosen, tu.sks, tu.semester, tu.ruangan FROM tbmatkul tu WHERE tu.idmatkul='$idmatkul';";
$hasil = mysqli_query($cnn, $sql);
if (mysqli_num_rows($hasil) > 0) {
    $h = mysqli_fetch_assoc($hasil);
?>
    <h3>Hapus Data Matakuliah <?= $h["nama_matkul"] ?></h3>
    <form method="POST" action="datamatkul.php">
        <input type="hidden" name="act" value="destroy">
        <input type="hidden" name="idmatkul" value="<?= $idmatkul ?>">
        <div class="form-floating mb-3">
            <input type="text" name="txNAMA_MATKUL" class="form-control" id="floatingInput" placeholder="Masukan Nama Matakuliah" value="<?= $h["nama_matkul"] ?>">
            <label for="floatingInput">Nama Matakuliah</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="txNAMA_MATKUL" class="form-control" id="floatingInput" placeholder="Masukan Nama Dosen Pengajar" value="<?= $h["dosen"] ?>">
            <label for="floatingInput">Dosen Pengajar</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" name="txSKS" class="form-control" id="floatingInput" placeholder="Masukan Jumlah SKS" value="<?= $h["sks"] ?>">
            <label for="floatingInput">SKS</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="txSEMESTER" class="form-control" id="floatingInput" placeholder="Masukan Semester" value="<?= $h["semester"] ?>">
            <label for="floatingInput">Semester</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="txRUANGAN" class="form-control" id="floatingInput" placeholder="Masukan Ruangan" value="<?= $h["ruangan"] ?>">
            <label for="floatingInput">Ruangan</label>
        </div>

        <div class="form-floating mb-3">
            &nbsp;
        </div>
        <button type="submit" class="btn btn-danger"> Hapus Data Matakuliah </button>
        <a href="datamatkul.php" class="btn btn-secondary"> Batal </a>
    </form>
<?php
} else {
    echo "<script>window.location.href='datamatkul.php';</script>";
}
?>