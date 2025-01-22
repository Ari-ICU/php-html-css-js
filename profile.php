<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h1>User Profile</h1>
        <?php
        // Assuming you have a session started and user data stored in session
        session_start();
        if (isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
            echo "<p>Name: " . htmlspecialchars($user['name']) . "</p>";
            echo "<p>Email: " . htmlspecialchars($user['email']) . "</p>";
            // Add more user details as needed
        } else {
            echo "<p>No user information available. Please log in.</p>";
        }
        ?>
    </div>
</body>

</html>