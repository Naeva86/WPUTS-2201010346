<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">NIDN</th>
                <th scope="col">GELAR</th>
                <th scope="col">DAPARTEMEN</th>
                <th scope="col"><a href="datadosen.php?aksi=new" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i>&nbsp;Tambah</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT tu.nama, tu.nidn, tu.gelar, tu.dapartemen, tu.iddosen FROM tbdosen tu ORDER BY tu.nama;";
            $hasil = mysqli_query($cnn, $sql);
            $cx = 0;
            while ($h = mysqli_fetch_assoc($hasil)) {
                $cx++;
            ?>
                <tr>
                    <th scope="row"><?= $cx ?></th>
                    <td><?= $h["nama"] ?></td>
                    <td><?= $h["nidn"] ?></td>
                    <td><?= $h["gelar"] ?></td>
                    <td><?= $h["dapartemen"] ?></td>
                    <td>
                        <a href="datadosen.php?aksi=edit&p1=<?= $h["iddosen"] ?>" class="btn btn-warning"><i class="fa-solid fa-user-pen"></i>&nbsp;Edit</a>
                        <a href="datadosen.php?aksi=del&p1=<?= $h["iddosen"] ?>" class="btn btn-danger"><i class="fa-solid fa-user-xmark"></i>&nbsp;Del</a>

                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>