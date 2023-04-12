<?php
    include_once('login-form.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login page</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
</head>

<body>
    <div class="header">
        <nav class="navbar">
            <div class="logo">
                <img src="logo-no-background.png" alt="image" style="width:60px;">
            </div>
            <ul class="list">
                <li class="list-items"><a class="active" href="#"><span class="material-symbols-rounded"
                            style="vertical-align: -6px;font-size:30px;">Home</span>&nbspHome</a></li>
                <li class="list-items"><a href="#"><span class="material-symbols-rounded"
                            style="vertical-align: -6px;font-size:30px;">search</span>&nbspSearch</a></li>
                <li class="list-items"><a href="#"><span class="material-symbols-rounded"
                            style="vertical-align: -6px;font-size:30px;">call</span>&nbspContact</a></li>
                <li class="list-items"><a href="#"><span class="material-symbols-rounded"
                            style="vertical-align: -6px;font-size:30px;">person</span>&nbspProfile</a></li>
            </ul>
            <div class="menu"><a href="#"><span class="material-symbols-rounded"
                        style="vertical-align: -6px;font-size:30px;">menu</span></a></div>
        </nav>
    </div>
    <div class="body">
        <div class="wrapper">
            <div class="left">
                <div class="overlay">
                    <h1>Welcome!</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et est sed felis aliquet
                        sollicitudin</p>
                    <br>
                    <div class="alternate">
                        <h4>Login using</h4>
                        <a href="#"><img src="facebook.svg" alt="image"></a>
                        <a href="#"><img src="google-g-2015.svg" alt="image"></a>
                        <a href="#"><img src="Twitter-logo.svg.webp" alt="image"></a>
                    </div>
                </div>
            </div>
            <div class="right">
                <h1>Login</h1>
                <div class="form">
                    <form method="post" action="login-form.php">
                        <div class="in">
                            <div class="both">
                                <div class="in1">
                                    <label for="username"><span class="material-symbols-rounded"
                                            style="vertical-align:-6px;font-size:27px;">account_circle</span></label>
                                    <input type="text" class="a input" placeholder="Enter Username" name="uname"
                                        required>
                                    <br>
                                </div>
                                <span class="focus-border"></span>
                                <div class="in2">
                                    <label for="password"><span class="material-symbols-rounded"
                                            style="vertical-align:-6px;font-size:27px;">lock</span></label>
                                    <input type="password" class="b input" placeholder="Enter Password" name="password"
                                        required>
                                    <span class="focus-border"></span>
                                    <br>
                                </div>
                                <span class="focus-border"></span>
                            </div>
                            <div class="bottom">
                                <label><input type="checkbox" checked="checked" id="remember">&nbspRemember me</label>
                                <a href="xml_php" class="forgot">Forgot Password?</a>
                            </div>
                            <?php
                            if (isset($_SESSION['message'])) {
                                ?>
                                <div class="alert alert-info text-center" style="margin-bottom:15px;">
                                    <?php echo $_SESSION['message']; ?>
                                </div>
                                <?php
                                unset($_SESSION['message']);
                            } ?>
                            <button type="submit" name="login" class="btn btn-primary"><span
                                    class="glyphicon glyphicon-floppy-disk"></span><strong>LOGIN</strong></button>
                        </div>
                    </form>
                    <h5 class="reg">Don't have an account? <a href="xml_php">Create One!</a></h5>
                </div>
            </div>
        </div>
    </div>
</body>

</html>