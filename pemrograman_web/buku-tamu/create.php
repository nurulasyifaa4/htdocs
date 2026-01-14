<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Buku Tamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>

    <h1 class='mb-4'>Input Buku Tamu</h1>
        <form action="proses.php" method="post">
            <form>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
               <div class="mb-3">
                    <label for="komentar" class="form-label">Komentar</label>
                    <textarea rows="5" class="form-control" id="komentar" name="komentar"></textarea>
                </div>
                <div>
                    <input type="submit" name="submit" value="Kirim" class="btn btn-primary">
                    <a href="index.php?p=bukutamu" class="btn btn-secondary">List buku tamu</a>
                </div>
        </form>
</html>