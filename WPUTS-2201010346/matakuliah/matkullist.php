<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nama_matkul</th>
                <th scope="col">Dosen Pengajar</th>
                <th scope="col">SKS</th>
                <th scope="col">Semester</th>
                <th scope="col">Ruangan</th>
                <th scope="col"><a href="datamatakuliah.php?aksi=new" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i>&nbsp;Tambah</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT tu.nama_matkul, tu.dosen, tu.sks, tu.semester, tu.ruangan ,tu.idmatkul FROM tbmatkul tu ORDER BY tu.nama_matkul;";
            $hasil = mysqli_query($cnn, $sql);
            $cx = 0;
            while ($h = mysqli_fetch_assoc($hasil)) {
                $cx++;
            ?>
                <tr>
                    <th scope="row"><?= $cx ?></th>
                    <td><?= $h["nama_matkul"] ?></td>
                    <td><?= $h["dosen"] ?></td>
                    <td><?= $h["sks"] ?></td>
                    <td><?= $h["semester"] ?></td>
                    <td><?= $h["ruangan"] ?></td>
                    <td>
                        <a href="datamatakuliah.php?aksi=edit&p1=<?= $h["idmatkul"] ?>" class="btn btn-warning"><i class="fa-solid fa-user-pen"></i>&nbsp;Edit</a>
                        <a href="datamatakuliah.php?aksi=del&p1=<?= $h["idmatkul"] ?>" class="btn btn-danger"><i class="fa-solid fa-user-xmark"></i>&nbsp;Del</a>

                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>