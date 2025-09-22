<!--If $_GET['member'] === 'false', redirect to signup.php.
-->
<?php 
    $member = $_GET['member'] ?? null;
    if ($member === 'false')
    {
        header('Location: signup.php');
        exit;
    }

	/*Otherwise show “Welcome, Movie Club member!”
    */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to the Movie Club</title>
    <?php require __DIR__ . '/includes/bootstrapcdnlinks.php'; ?>
</head>
<body>
    <h2>Welcome, Movie Club member!</h2>

</body>
</html>
