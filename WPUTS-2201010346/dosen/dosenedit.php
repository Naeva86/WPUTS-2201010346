<?php
$iddosen = $_GET["p1"];
$sql = "SELECT tu.nama, tu.nidn, tu.gelar, tu.dapartemen FROM tbdosen tu WHERE tu.iddosen='$iddosen';";
$hasil = mysqli_query($cnn, $sql);
if (mysqli_num_rows($hasil) > 0) {
    $h = mysqli_fetch_assoc($hasil);
?>
    <h3>Ubah Data Dosen <?= $h["nama"] ?></h3>
    <form method="POST" action="datadosen.php">
        <input type="hidden" name="act" value="update">
        <input type="hidden" name="iddosen" value="<?= $iddosen ?>">
        <div class="form-floating mb-3">
            <input type="text" name="txNAMA" class="form-control" id="floatingInput" placeholder="Masukan Nama Dosen" value="<?= $h["nama"] ?>">
            <label for="floatingInput">Nama Dosen</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="txNIDN" class="form-control" id="floatingInput" placeholder="Masukan NIDN" value="<?= $h["nidn"] ?>">
            <label for="floatingInput">NIDN</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="txGELAR" class="form-control" id="floatingInput" placeholder="Masukan Gelar" value="<?= $h["gelar"] ?>">
            <label for="floatingInput">Gelar</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="txDAPARTEMEN" class="form-control" id="floatingInput" placeholder="Masukan Dapartemen" value="<?= $h["dapartemen"] ?>">
            <label for="floatingInput">Dapartemen</label>
        </div>

        <div class="form-floating mb-3">
            &nbsp;
        </div>
        <button type="submit" class="btn btn-primary"> Ubah Data Dosen </button>
        <a href="datadosen.php" class="btn btn-secondary"> Batal </a>
    </form>
<?php
} else {
    echo "<script>window.location.href='datadosen.php';</script>";
}
?>