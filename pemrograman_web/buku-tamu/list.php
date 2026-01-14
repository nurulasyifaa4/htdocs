<h2>List Data Buku Tamu</h2>
    <a href="index.php?p=create" class="btn btn-primary">Isi buku tamu</a><br><br>
    <table class="table table-bordered table-striped">
        <thead class="table-primary">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Komentar</th>
                <th scope="col">Timestamp</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("koneksi.php");
            $tampil = $koneksi->query("SELECT * FROM tamu");
            $no = 1;
            $data = [];
            //while($row = $tampil->fetch_assoc()){
                //$data[]= $row;
            //}
            $data = $tampil->fetch_all(MYSQLI_ASSOC);
            foreach ($data as $row) :
                $time = $row['date_created']; 
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['komentar']; ?></td>
                    <td><?= date('d M Y H:i:s', strtotime($time)); ?></td>
                    <td>
                        <a href="index.php?key=<?= $row['id'] ?>&p=edit" class="btn btn-warning btn-sm">Edit</a>
                       <a onclick="return confirm('Apakah anda yakin?')" href="proses.php?id=<?= $row['id'] ?>&aksi=hapus" class="btn btn-danger btn-sm">Hapus</a>

                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>