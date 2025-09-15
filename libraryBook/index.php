<!--Joshua Lee-->
<?php
// index.php
require_once "functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Library Book Due Checker</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <!-- Main Container -->
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">📚 OTC Library Book Return Checker</h2>
                <p class="text-center">Enter the return date and due date to check the book status.</p>

                <?php
                // using the form
                include "form.php";

                // Process form when submitted
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $returnDate = $_POST['return_date'];
                    $dueDate    = $_POST['due_date'];
                    // Validate and check status
                    if (!empty($returnDate) && !empty($dueDate)) {
                        echo "<div class='mt-4'>";
                        echo "<h5>Result:</h5>";
                        echo "<div class='alert alert-info'>";
                        echo checkBookStatus($returnDate, $dueDate);
                        echo "</div>";
                        echo "</div>";
                    }
                }
                ?>
</body>

</html>