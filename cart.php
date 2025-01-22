<?php include 'components/header.php'; ?>

<?php


// Initialize the shopping cart if it doesn't exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Function to add an item to the cart
function addToCart($itemId, $quantity)
{
    if (isset($_SESSION['cart'][$itemId])) {
        $_SESSION['cart'][$itemId] += $quantity;
    } else {
        $_SESSION['cart'][$itemId] = $quantity;
    }
}

// Function to remove an item from the cart
function removeFromCart($itemId)
{
    if (isset($_SESSION['cart'][$itemId])) {
        unset($_SESSION['cart'][$itemId]);
    }
}

// Function to get the total number of items in the cart
function getTotalItems()
{
    $totalItems = 0;
    foreach ($_SESSION['cart'] as $quantity) {
        $totalItems += $quantity;
    }
    return $totalItems;
}

// Function to get the total price of the items in the cart
function getTotalPrice($items)
{
    $totalPrice = 0.0;
    foreach ($_SESSION['cart'] as $itemId => $quantity) {
        if (isset($items[$itemId])) {
            $totalPrice += $items[$itemId]['price'] * $quantity;
        }
    }
    return $totalPrice;
}

// Example items (in a real application, these would come from a database)
$items = array(
    1 => array('name' => 'Item 1', 'price' => 10.00),
    2 => array('name' => 'Item 2', 'price' => 20.00),
    3 => array('name' => 'Item 3', 'price' => 30.00),
);

// Example usage
addToCart(1, 2);
addToCart(2, 1);
removeFromCart(1);



echo '<div class="max-w-sm mx-auto p-4 bg-white shadow-lg rounded-lg overflow-hidden">';
echo '<img class="w-full" src="path/to/your/image.jpg" alt="Cart Image">';
echo '<div class="px-6 py-4">';
echo '<h2 class="text-xl font-bold mb-2">Cart Summary</h2>';
echo '<p class="text-gray-700 text-base">';
echo 'Total items in cart: ' . getTotalItems();
echo '</p>';
echo '<p class="text-gray-700 text-base">';
echo 'Total price: $' . getTotalPrice($items);
echo '</p>';
echo '</div>';
echo '</div>';
?>


<?php include 'components/footer.php'; ?>