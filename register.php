<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
    <div class="bg-gray-100 flex items-center justify-center h-screen">
        <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
            <h2 class="text-2xl font-bold mb-6 text-center">Register</h2>
            <form action="register.php" method="post" class="space-y-4">
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">Username:</label>
                    <input type="text" id="username" name="username" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                    <input type="email" id="email" name="email" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
                    <input type="password" id="password" name="password" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div>
                    <input type="submit" value="Register"
                        class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                </div>
            </form>


            <p class="mt-8 text-center">if you have an account? <a href="log_in.php" class="text-blue-500">Login</a>


                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    // Here you would typically hash the password and save the user data to a database
                    // For demonstration purposes, we'll just display the data
                    echo "<h3 class='text-green-500 mt-4'>Registration Successful</h3>";
                    echo "<p>Username: " . htmlspecialchars($username) . "</p>";
                    echo "<p>Email: " . htmlspecialchars($email) . "</p>";
                }
                ?>
        </div>
    </div>
</body>

</html>