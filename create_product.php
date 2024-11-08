<?php
include 'db.php';

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $product_id=$_POST['product_id'];
        $product_name=$_POST['product_name'];
        $description=$_POST['description'];
        $price=$_POST['price'];
        $quantity=$_POST['quantity'];

        $sql="INSERT INTO product(product_id,product_name,description,price,quantity) VALUES('$product_id', '$product_name','$description','$price','$quantity')";
        
        if($connection->query($sql)==TRUE)
        {
            header("Location: product_list.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Inventory Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h1 class="text-center text-4xl my-5">Create Inventory Management</h1>
    <form action="create_product.php" method = "POST" class="w-1/2 mx-auto py-4 space-y-4">
        <input name="product_id" type="number" placeholder="Enter product id" class="w-full border border-blue-500 p-2 rounded-md">
        <input name ="product_name" type="text" placeholder="Enter product name" class="w-full border border-blue-500 p-2 rounded-md">
        <input name ="description" type="text" placeholder="Enter product description" class="w-full border border-blue-500 p-2 rounded-md">
        <input name ="price" type="number" placeholder="Enter product price" class="w-full border border-blue-500 p-2 rounded-md">
        <input name ="quantity" type="number" placeholder="Enter quantity" class="w-full border border-blue-500 p-2 rounded-md">
        <button class="w-full bg-blue-500 text-white border border-blue-500 p-2 rounded-md">Submit</button>
    </form>
    
</body>
</html>