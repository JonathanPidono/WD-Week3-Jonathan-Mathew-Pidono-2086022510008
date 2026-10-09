<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Bootstrap demo</title>
</head>

<body>
    <div class="container p-3">
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active"href="viewAdd.php">Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view.php">Office</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view.php">Office-Employees</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h1>Tambah Karyawan</h1>
                <form method="POST" action="controller.php" class="w-75 mx-auto">
                    <div class="mb-3">
                        <label for="inputNama" class="form-label">Nama</label>
                        <input type="nama" class="form-control" name="inputNama">
                    </div>
                    <div class="mb-3">
                        <label for="inputJabatan" class="form-label">Jabatan</label>
                        <input type="jabatan" class="form-control" name="inputJabatan">
                    </div>
                    <div class="mb-3">
                        <label for="inputUsia" class="form-label">Usia</label>
                        <input type="usia" class="form-control" name="inputUsia">
                    </div>
                    <button name="button_submit" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>