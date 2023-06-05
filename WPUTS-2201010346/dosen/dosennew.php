<h3>Tambah Data Dosen</h3>
<form method="POST" action="datadosen.php">
    <input type="hidden" name="act" value="store">
    <div class="form-floating mb-3">
        <input type="text" name="txNAMA" class="form-control" id="floatingInput" placeholder="Masukkan Nama Dosen">
        <label for="floatingInput">Nama Dosen</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txNIDN" class="form-control" id="floatingInput" placeholder="Masukkan NIDN">
        <label for="floatingInput">NIDN</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txGELAR" class="form-control" id="floatingInput" placeholder="Masukan Gelar">
        <label for="floatingInput">Gelar</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txDAPARTEMEN" class="form-control" id="floatingInput" placeholder="Masukan Dapartemen">
        <label for="floatingInput">Dapartemen</label>
    </div>
    <div class="form-floating mb-3">
        &nbsp;
    </div>
    <button type="submit" class="btn btn-primary"> Buat Data Dosen </button>
    <a href="datadosen.php" class="btn btn-secondary"> Batal </a>
</form>