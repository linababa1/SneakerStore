<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NikeStore</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Login</header>
            <form action="#">
                <div class="error-txt"></div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" name="email" placeholder="Enter your email">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="text" name="password" placeholder="Enter your password">
                </div>
                
                <div class="field button">
                    <input type="submit" value="Continue">
                </div>
            </form>
            <div class="link">Not yet signed up? <a href="index.php">signup now</a></div>
        </section>
    </div>
    <script src="javascript/login.js"></script>
</body>
</html>