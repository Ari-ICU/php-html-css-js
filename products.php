<?php include 'components/header.php'; ?>
<?php

$products = [
    ["id" => 1, "name" => "Product 1", "price" => 10.00],
    ["id" => 2, "name" => "Product 2", "price" => 20.00],
    ["id" => 3, "name" => "Product 3", "price" => 30.00],
    ["id" => 4, "name" => "Product 4", "price" => 40.00]
];

// Function to display products
function displayProducts($products)
{
    echo "<div class='container mx-auto py-10 px-2 place-content-center'>";
    echo "<h1 class='text-2xl font-bold mb-4'>Product List</h1>";
    echo "<div class='grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6 '>";
    foreach ($products as $product) {
        echo "<div class='border p-4 rounded-lg shadow-md justify-items-center'>";
        echo "<img src='path/to/image/" . htmlspecialchars($product['id']) . ".jpg' alt='" . htmlspecialchars($product['name']) . "' class='w-full h-auto mt-2'>";
        echo "<h2 class='text-xl font-semibold mb-2'>" . htmlspecialchars($product['name']) . "</h2>";
        echo "<p><span class='font-semibold'>ID:</span> " . htmlspecialchars($product['id']) . "</p>";
        echo "<p><span class='font-semibold'>Price:</span> $" . number_format($product['price'], 2) . "</p>";
        echo "</div>";
    }
    echo "</div>";
    echo "</div>";
}

// Call the function to display products
displayProducts($products);
?>

<?php include 'components/footer.php'; ?>