<h3>Tambah Data Matakuliah</h3>
<form method="POST" action="datamatkul.php">
    <input type="hidden" name="act" value="store">
    <div class="form-floating mb-3">
        <input type="text" name="txNAMA_MATKUL" class="form-control" id="floatingInput" placeholder="Masukan Nama Matakuliah">
        <label for="floatingInput">Nama Matakuliah</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txDOSEN" class="form-control" id="floatingInput" placeholder="Masukan Nama Dosen Pengajar">
        <label for="floatingInput">Dosen Pengajar</label>
    </div>
    <div class="form-floating mb-3">
        <input type="number" name="txSKS" class="form-control" id="floatingInput" placeholder="Masukan Jumlah SKS">
        <label for="floatingInput">SKS</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txSEMESTER" class="form-control" id="floatingInput" placeholder="Masukan Semester">
        <label for="floatingInput">Semester</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txRUANGAN" class="form-control" id="floatingInput" placeholder="Masukan Ruangan">
        <label for="floatingInput">Ruangan</label>
    </div>

    <div class="form-floating mb-3">
        &nbsp;
    </div>
    <button type="submit" class="btn btn-primary"> Buat Data Mahasiswa </button>
    <a href="datamatkul.php" class="btn btn-secondary"> Batal </a>
</form>