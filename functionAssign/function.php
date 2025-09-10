<?php

declare(strict_types=1);
$books = [

    'To Kill a Mockingbird' => ['author' => 'Harper Lee',     'price' => 12.99, 'stock' => 8],
    'The Lord of the Rings'   => ['author' => 'J.R.R. Tolkien',  'price' => 10.50, 'stock' => 15],
    'The Great Gatsby'      => ['author' => 'F. Scott Fitzgerald', 'price' => 11.25, 'stock' => 4],
];

$tax = 20;

function get_reorder_message(int $stock): string
{
    return ($stock < 10) ? 'Yes'    : 'No';
}

function get_total_value(float $price, int $quantity): float
{
    return $price * $quantity;
}

function get_tax_due(float $price, int $quantity, int $tax): float
{
    return ($price * $quantity)  * ($tax / 100);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore Inventory</title>
</head>

<body>
    <h1>Bookstore Inventory</h1>

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: lightgray;
        }
    </style>
    <table>
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Stock</th>
        <th>Reorder?</th>
        <th>Inventory Value</th>
        <th>Tax Due</th>
    </tr>
    <?php foreach ($books as $title => $data): ?>
        <tr>
            <td><?= $title ?></td>
            <td><?= $data['author'] ?></td>
            <td><?= $data['stock'] ?></td>
            <td><?= get_reorder_message($data['stock']) ?></td>
            <td><?= number_format(get_total_value($data['price'], $data['stock']), 2) ?></td>
            <td><?= number_format(get_tax_due($data['price'], $data['stock'], $tax), 2) ?></td>
        </tr>
    <?php endforeach; ?>
    </table>

</body>

</html>