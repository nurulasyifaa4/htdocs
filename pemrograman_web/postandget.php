<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Form GET</h1>
        <form action="" method="GET">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama Anda</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
            </div>
            <div>
                <input type="submit" name="submit" value="Kirim" class="btn btn-primary">
            </div>
        </form>
    <?php
        //ambil data yang dikirim dari form
        //cek apakah form sudah disubmit
        if(isset($_GET['submit'])){
             $nama = $_GET["nama"];
              echo $nama;
        }
    ?>
    <hr>
    <h1>Form Post</h1>
    <form action="proses.php" method="post">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Anda</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
        </div>
        <div>
            <input type="submit" name="submit" value="Kirim" class="btn btn-primary">
        </div>
    </form>
    </div>
  </body>
</html>