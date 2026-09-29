<?php

include 'db.php';

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="products.csv"');

$output = fopen("php://output", "w");

fputcsv($output, array(
    "Product ID",
    "Product Name",
    "Category",
    "Price",
));

$result = $conn->query("SELECT * FROM products");

while ($row = $result->fetch_assoc()) {
    fputcsv($output,$row);
}

?>
