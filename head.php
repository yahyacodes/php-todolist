<?php ob_start() ?>
<?php include "db.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Document</title>
</head>

<body class="bg-dark">
    <nav class="navbar navbar-expand-lg bg-secondary bg-opacity-25">
        <div class="container">
            <h1 class="fs-1 text-light" style="cursor: pointer;">To Do List</h1>
            <div class="collapse navbar-collapse sm-auto justify-content-end" style="cursor: pointer;">
                <ul class="nav text-light">
                    <a href="login.php" class="text-decoration-none">
                        <li class="nav-item mx-5 text-light">
                            <i class="bi bi-person-fill text-light"></i>
                            Login
                        </li>
                    </a>
                    <a href="signup.php" class="text-decoration-none">
                        <li class="nav-item text-light">
                            <i class="bi bi-person-plus-fill text-light"></i>
                            Sign up
                        </li>
                    </a>
                </ul>
            </div>
        </div>
    </nav>


</body>

</html>