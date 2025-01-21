<?php include 'components/header.php'; ?>
<?php
// Sample array of products
$products = [
    ["id" => 1, "name" => "Product 1", "price" => 10.00],
    ["id" => 2, "name" => "Product 2", "price" => 20.00],
    ["id" => 3, "name" => "Product 3", "price" => 30.00],
];

// Function to display products
function displayProducts($products)
{
    echo "<h1 class='text-2xl font-bold mb-4'>Product List</h1>";
    echo "<div class='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4'>";
    foreach ($products as $product) {
        echo "<div class='border p-4 rounded-lg shadow-md'>";
        echo "<h2 class='text-xl font-semibold mb-2'>" . $product['name'] . "</h2>";
        echo "<p><span class='font-semibold'>ID:</span> " . $product['id'] . "</p>";
        echo "<p><span class='font-semibold'>Price:</span> $" . number_format($product['price'], 2) . "</p>";
        echo "</div>";
    }
    echo "</div>";
}

// Call the function to display products
displayProducts($products);
?>

<?php include 'components/footer.php'; ?>