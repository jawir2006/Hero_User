<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http_equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MyApp | Login</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
</head>
<body>
    <div class="bg-dark">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-5"> <div class="card o-hidden border-1 my-5">
                    <div class="card-body p-0"> <div class="row"> <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center mb-4">
                                <h4>Welcome To MyApp</h4>
                                <form action="config.php" method="POST">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                        <input type="text" class="form-control" placeholder="Username" arial_label="Username" aria-describedy="basic-addon1" name="username">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                        <input type="password" class="form-control" placeholder="Password" arial_label="Password" aria-describedy="basic-addon1" name="password">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="submit" class="btn btn-primary" name="login" value="Login">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div></div></div>
                </div></div>
             </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootsrap.min.js"></script>
</body>
</html>