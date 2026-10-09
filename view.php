<?php require("controller.php"); ?>

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
                        <a class="nav-link" href="viewAdd.php">Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="view.php">Office</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view.php">Office-Employees</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h1>Hello, world!</h1>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Usia</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $counter = -1;
                        $allEmployee = getAllEmployee();
                        foreach ($allEmployee as $index => $employee) {
                            $counter++;
                        ?>
                            <tr>
                                <th scope="row"><?=$counter?></th>
                                <td><?=$employee->nama?></td>
                                <td><?=$employee->jabatan?></td>
                                <td><?=$employee->usia?></td> 
                                <td>
                                    <a href="controller.php?deleteID=<?=$index?>">
                                        <button class="btn btn-danger">Delete</button>
                                    </a>        
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>