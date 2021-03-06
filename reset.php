<?php
require 'header.php';
if(isset($_SESSION['testID'])) {
    unset($_SESSION['testID']);
    unset($_SESSION['qNum']);
    unset($_SESSION['qEx']);
    unset($_SESSION['correctAns']);
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSPrep | Reset</title>
    <link rel="stylesheet" href="styles/log.css">
</head>

<body class="log">
    <div class="sign-container">
        <div class="text">
            <h1 class="sign-header">Reset Password</h1>
            <h3 class="other">Enter new password.</a></h3>
        </div>
        <form id="log" action="./includes/reset.inc.php?token=<?php echo $_GET['token'];?>" method="post">
            <input type="password" name="p" class="activator" autocomplete="current-password" required />
            <p>Password</p>
            <input type="password" name="p2" autocomplete="off" class="activator" autocomplete="current-password" required />
            <p>Repeat Password</p>
            <button class="button register" name="res-submit" href="#">Log in</button>
            <p class="message error">
                <?php
                if (isset($_GET['error'])) {
                    echo "&#9888&nbsp;Error: ";
                    if ($_GET['error'] == 'emptyfields')
                        echo "One or more fields are empty.";
                    else if ($_GET['error'] == 'nouser')
                        echo "This user doesn't exist.";
                    else if ($_GET['error'] == 'wrong')
                        echo "Wrong username or password.";
                    else if ($_GET['error'] == 'sql')
                        echo "SQL Error";
                }
                ?>
            </p>
            <p class="message success">
                <?php
                if (isset($_GET['success'])) {
                    echo "Success! Your password has been reset.";
                }
                ?>
            </p>
        </form>
        <!-- <h3 class="other"><a class="other-link" href="forgot.php">Forgot your password? Reset it.</a></h3> -->
    </div>
    <a href="index.php"><img class="logo-large" src="media/header/logo.png" /></a>
</body>