<?php include "head.php"?>

<section class="p-5 mt-5">
    <div class="container d-flex justify-content-center">
        <div class="card bg-light bg-opacity-50" style="width: 30rem;">
            <div class="card-body">
                <h1 class="card-title text-center">To do list</h1>
                <hr class="clearfix text-light opacity-25">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="text-center">
                            <a href="login.php"><button
                                    class="btn btn-secondary opacity-75 mt-3 w-100">Login</button></a>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="text-center">
                            <a href="signup.php"><button class="btn btn-dark opacity-75 mt-3 w-100">Sign
                                    up</button></a>
                        </div>
                    </div>
                </div>

                <p class="text-light opacity-50 text-center">Please enter your login and password</p>

                <form action="" method="post">

                    <div class="form-group ms-2">
                        <label for="username">Username</label>
                        <input type="text" name="" id="" class="form-control"
                            style="background: none; border:1px solid #333;">
                    </div>

                    <div class="form-group ms-2">
                        <label for="email">Email</label>
                        <input type="email" name="" id="" class="form-control"
                            style="background: none; border:1px solid #333;">
                    </div>

                    <div class="form-group ms-2">
                        <label for="password">Password</label>
                        <input type="password" name="" id="" class="form-control"
                            style="background: none; border:1px solid #333;">
                    </div>

                    <div class="form-group ms-2 mt-3">
                        <input type="submit" value="Submit" class="btn btn-secondary opacity-50 w-100 mb-4">
                    </div>
                </form>

            </div>

        </div>
    </div>
</section>