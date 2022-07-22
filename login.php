<html>
    <head>
        <title>User Login and Registration</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    </head>
    <body>

    <div class ="container">
        <div class="log-in-box">
        <div class= "row">
        <div class= "col-md-6 login-left">
            <h3> Login </h3>
            <form action = "validation.php" method = "post">
                <div class="form-group">
                    <label> Username </label>
                    <input type="text" name="user" class="form-control" required>

                    </div>
                
                <div class="form-group">
                    <label> Password </label>
                    <input type="password" name="password" class="form-control" required>

                    </div>
                <button type="submit" class= "btn btn-primary">Login</button>
            </form>
    </div>


        <div class= "col-md-6 login-right">
            <h3> Register </h3>
            <form action = "registration.php" method = "post">
                <div class="form-group">
                    <label> Name </label>
                    <input type="text" name="user" class="form-control" required>

                    </div>
                
                <div class="form-group">
                    <label> Age </label>
                    <input type="number" name="age" class="form-control" required>

                    </div>

                    <div class="form-group">
                    <label> Email </label>
                    <input type="text" name="email" class="form-control" required>

                    </div>

                    <div class="form-group">
                    <label> Password </label>
                    <input type="password" name="password" class="form-control" required>

                    </div>
                <button type="submit" class= "btn btn-primary">Sign up</button>
            </form>

        </div>
    </div>
    </div>

    </body>
</html>