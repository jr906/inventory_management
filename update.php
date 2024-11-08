<?php
include 'db.php';

if(ISSET($_GET['price'])){
    $price = $_GET['price'];

    $sql = "SELECT * FROM product WHERE price=$price";

    $result = $connection->query($sql);
    
    $product = $result->fetch_assoc();
}

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $price=$_POST['price'];
        $product_id=$_POST['product_id'];
        $product_name=$_POST['product_name'];
        $description=$_POST['description'];
        $price=$_POST['price'];
        $quantity=$_POST['quantity'];

        $sql="UPDATE product SET product_id='$product_id', product_name= '$product_name', description='$description', price='$price', quantity='$quantity' WHERE price = $price";
        
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
    <h1 class="text-center text-4xl my-5">Update Product</h1>
    <form action="update.php" method = "POST" class="w-1/2 mx-auto py-4 space-y-4">
        <input name="price" type="hidden" value="<?= $product['price']; ?>" placeholder="Enter product price" class="w-full border border-blue-500 p-2 rounded-md">
        <input name="product_id" type="number" value="<?= $product['product_id']; ?>" placeholder="Enter product id" class="w-full border border-blue-500 p-2 rounded-md">
        <input name ="product_name" type="text" value="<?= $product['product_name']; ?>" placeholder="Enter product name" class="w-full border border-blue-500 p-2 rounded-md">
        <input name ="description" type="text" value="<?= $product['description']; ?>" placeholder="Enter product description" class="w-full border border-blue-500 p-2 rounded-md">
        <input name ="price" type="number" value="<?= $product['price']; ?>" placeholder="Enter product price" class="w-full border border-blue-500 p-2 rounded-md">
        <input name ="quantity" type="number" value="<?= $product['quantity']; ?>" placeholder="Enter quantity" class="w-full border border-blue-500 p-2 rounded-md">
        <button class="w-full bg-blue-500 text-white border border-blue-500 p-2 rounded-md">Submit</button>
    </form>
</body>
</html>