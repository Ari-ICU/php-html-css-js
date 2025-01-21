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

echo "Total items in cart: " . getTotalItems() . "<br>";
echo "Total price: $" . getTotalPrice($items) . "<br>";
?>


<?php include 'components/footer.php'; ?>