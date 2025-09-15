<!--Joshua Lee-->
<?php
// functions.php

function checkBookStatus($returnDate, $dueDate)
{

    $dReturn = date_create($returnDate);
    $dDue    = date_create($dueDate);
    //check if returned on the due date
    if ($dReturn == $dDue) {
        return "<div class='alert alert-warning'>The book is due today.<br>
                <strong>Return Date:</strong> $returnDate<br>
                <strong>Due Date:</strong> $dueDate</div>";
    }
    //calculate the difference between return date and due date
    $diff = date_diff($dReturn, $dDue);
    //check if overdue or not
    if ($dReturn > $dDue) {
        // Overdue
        $message = "The book is overdue by " . $diff->y . " years, " . $diff->m . " months, and " . $diff->d . " days.";
        $class   = "alert-danger";
    } else {
        // Not yet due
        $message = "The book is not yet due. Time left: " . $diff->y . " years, " . $diff->m . " months, and " . $diff->d . " days.";
        $class   = "alert-success";
    }

    return "<div class='alert $class'>$message<br>
        Return Date: $returnDate<br>
        Due Date: $dueDate</div>";
}
?>