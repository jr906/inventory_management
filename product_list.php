<?php
include 'db.php';

$sql = "SELECT * FROM product";
$result = $connection->query($sql);

$products = $result->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        td, th{
            border: 1px solid black;
            padding: 12px ;
            font-size: 20px;
        }
    </style>
</head>
<body>
<h1 class="text-center text-4xl my-5"> Product List</h1>
    <table class="mx-auto border p-5">
        <thead class="py-2 bg-blue-500 text-white font-medium">
            <tr >
                <th >Product ID</th>
                <th >Product Name</th>
                <th >Description</th>
                <th >Price</th>
                <th >Quantity</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($products as $product): ?>
                <tr>
                    <td><?= $product['product_id']; ?></td>
                    <td><?= $product['product_name']; ?></td>
                    <td><?= $product['description']; ?></td>
                    <td><?= $product['price']; ?></td>
                    <td><?= $product['quantity']; ?></td>
                    <td>
                        <a href="update.php?id=<?= $product['price']; ?>"><i class="fa-solid fa-pen-to-square border p-1.5 bg-blue-500 rounded-md text-white"></i></a>
                        <a href="delete.php?id=<?= $product['price']; ?>"><i class="fa-solid fa-trash border p-1.5 bg-red-500 rounded-md text-white"></i></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>