<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>


    <div class="container mx-auto p-4">
        <div class="flex items-center">
            <a href="index.php"
                class="<?php echo ($_SERVER['PHP_SELF'] == '/index.php' || $_SERVER['PHP_SELF'] == '/') ? 'text-blue-500' : ''; ?>">
                <img src="" alt="logo">
                <span class="hidden">logo</span>
            </a>
        </div>
    </div>
    <div class="flex justify-center items-center h-screen">

        <div class="bg-white p-8 rounded-lg shadow-lg w-96 ">
            <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $email = $_POST['email'];
                $password = $_POST['password'];

                // Dummy credentials for demonstration purposes
                $valid_email = "user@example.com";
                $valid_password = "password123";

                if ($email == $valid_email && $password == $valid_password) {
                    echo '<p class="text-green-500 text-center">Login successful!</p>';
                } else {
                    echo '<p class="text-red-500 text-center">Invalid email or password. Please register below.</p>';
                }
            }
            ?>
            <form action="" method="POST">
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password" id="password" name="password"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                </div>
                <button type="submit"
                    class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Login</button>
            </form>

            <p class="mt-8 text-center">Don't have an account? <a href="register.php" class="text-blue-500">Register</a>
            </p>
        </div>
    </div>

</body>

</html>