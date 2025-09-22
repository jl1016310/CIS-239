<!--
step 1	Show a welcome message with a link to signup.php-->

<!doctype html>
<html lang="en">        
<head>
    <meta charset="utf-8">
    <title>Movie Club</title>
    <?php require __DIR__ . '/includes/bootstrap.php'; ?>
</head>

<body>
    <h1>Welcome to the Movie Club!</h1>
    <p><a href="signup.php">Sign up</a> to add your favorite movies.</p>

    <!--step 2. Add a “VIP Area” link pointing to welcome.php?member=false
    -->
    <p><a href="welcome.php?member=false">VIP Area</a></p>
 

</body>