<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Register</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/all.min.css">
</head>
<body>
    <div class="container">

        <?php if(isset($_GET['incorrect'])): ?>
            <div class="alert alert-warning">
                Incorrect email or password
            </div>
        <?php endif ?>
        
        <div class="card mt-5 ">
            <div class="card-body">
                <form action="login.php" method="post">
                    <div class="">
                        <span class="h3">Register</span>
                    <a href="#" class="btn btn-primary float-end mb-3">Sign In</a>
                    </div>
                    <input type="text" class="form-control mb-3" placeholder="Username" name="username" required>
                    <input type="email" class="form-control mb-3" placeholder="Email" name="email" required>
                    <input type="password" class="form-control mb-3" placeholder="Password" name ="password" required>
                    <button class="btn btn-success">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>