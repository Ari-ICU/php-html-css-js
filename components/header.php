<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        @keyframes slideIn {
            from {
                transform: translateX(-100%);
            }

            to {
                transform: translateX(0);
            }
        }

        .slide-in {
            animation: slideIn 0.5s ease-out;
        }

        .active {
            border-color: black;
        }

        .active a {
            color: #3b82f6;
            /* Tailwind's text-blue-500 */
        }
    </style>
</head>

<body>

    <!-- Open Header -->
    <header class="bg-gray-200 p-4 w-full">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <a href="index.php"
                    class="<?php echo ($_SERVER['PHP_SELF'] == '/index.php' || $_SERVER['PHP_SELF'] == '/') ? 'active' : ''; ?>">
                    <img src="" alt="logo">
                    <span class="hidden">logo</span>
                </a>
            </div>
            <!-- PHP Part -->
            <nav class="hidden md:block">
                <ul class="flex space-x-4" id="nav-links">
                    <li
                        class="border-b hover:border-black rounded-md py-2 px-3 hover:shadow-2xl <?php echo ($_SERVER['PHP_SELF'] == '/index.php' || $_SERVER['PHP_SELF'] == '/') ? 'active' : ''; ?>">
                        <a href="index.php">Home</a>
                    </li>
                    <li
                        class="border-b hover:border-black rounded-md py-2 px-3 hover:shadow-2xl <?php echo ($_SERVER['PHP_SELF'] == '/products.php') ? 'active' : ''; ?>">
                        <a href="products.php">Products</a>
                    </li>
                    <li
                        class="border-b hover:border-black rounded-md py-2 px-3 hover:shadow-2xl <?php echo ($_SERVER['PHP_SELF'] == '/cart.php') ? 'active' : ''; ?>">
                        <a href="cart.php">Cart</a>
                    </li>
                    <li
                        class="border-b hover:border-black rounded-md py-2 px-3 hover:shadow-2xl <?php echo ($_SERVER['PHP_SELF'] == '/contact.php') ? 'active' : ''; ?>">
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </nav>

            <div class="hidden md:block items-center space-x-4">
                <div class="flex items-center space-x-2 cursor-pointer">
                    <!-- Check if the user is logged in and show the profile or login button -->
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <!-- Show profile icon when logged in -->
                        <button class="flex items-center space-x-2" onclick="window.location.href='profile.php'">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4m0 0l2-2m-2 2l-2-2m5-4h-7a4 4 0 00-4 4v4a4 4 0 004 4h7M16 12l4 4m0 0l-4 4m4-4H5" />
                            </svg>
                            <span>Profile</span>
                        </button>
                    <?php else: ?>
                        <!-- Login Button -->
                        <button class="flex items-center space-x-2" onclick="window.location.href='log_in.php'">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4m0 0l2-2m-2 2l-2-2m5-4h-7a4 4 0 00-4 4v4a4 4 0 004 4h7M16 12l4 4m0 0l-4 4m4-4H5" />
                            </svg>
                            <span>Login</span>
                        </button>

                        <!-- Register Button -->
                        <button class="flex items-center space-x-2" onclick="window.location.href='register.php'">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 3h4a2 2 0 012 2v14a2 2 0 01-2 2h-4M5 3h4a2 2 0 012 2v14a2 2 0 01-2 2H5M10 12h4m-2-2v4" />
                            </svg>
                            <span>Register</span>
                        </button>
                    <?php endif; ?>
                </div>
            </div>

            <div class="md:hidden block">
                <button id="menuToggle" class="text-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="lg:hidden h-screen fixed inset-0 bg-gray-800 bg-opacity-90 z-10 hidden">
        <div class="bg-white p-4 slide-in w-full h-full">
            <ul class="space-y-4 py-5">
                <li class="border-b hover:border-black rounded-md py-2 px-3 hover:shadow-2xl">
                    <a href="index.php">Home</a>
                </li>
                <li class="border-b hover:border-black rounded-md py-2 px-3 hover:shadow-2xl">
                    <a href="products.php">Products</a>
                </li>
                <li class="border-b hover:border-black rounded-md py-2 px-3 hover:shadow-2xl">
                    <a href="cart.php">Cart</a>
                </li>
                <li class="border-b hover:border-black rounded-md py-2 px-3 hover:shadow-2xl">
                    <a href="contact.php">Contact</a>
                </li>
            </ul>
            <div class="items-center space-x-4">
                <div class="flex items-center justify-center space-x-2 cursor-pointer">
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <!-- Show profile icon in mobile menu when logged in -->
                        <button class="flex items-center space-x-2" onclick="window.location.href='profile.php'">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4m0 0l2-2m-2 2l-2-2m5-4h-7a4 4 0 00-4 4v4a4 4 0 004 4h7M16 12l4 4m0 0l-4 4m4-4H5" />
                            </svg>
                            <span>Profile</span>
                        </button>
                    <?php else: ?>
                        <!-- Show login and register buttons when not logged in -->
                        <button class="flex items-center space-x-2" onclick="window.location.href='log_in.php'">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4m0 0l2-2m-2 2l-2-2m5-4h-7a4 4 0 00-4 4v4a4 4 0 004 4h7M16 12l4 4m0 0l-4 4m4-4H5" />
                            </svg>
                            <span>Login</span>
                        </button>

                        <button class="flex items-center space-x-2" onclick="window.location.href='register.php'">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 3h4a2 2 0 012 2v14a2 2 0 01-2 2h-4M5 3h4a2 2 0 012 2v14a2 2 0 01-2 2H5M10 12h4m-2-2v4" />
                            </svg>
                            <span>Register</span>
                        </button>
                    <?php endif; ?>
                </div>
            </div>
            <button id="closeMenu" class="text-xl mt-4 absolute top-0 right-4">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M20.7457 3.32851C20.3552 2.93798 19.722 2.93798 19.3315 3.32851L12.0371 10.6229L4.74275 3.32851C4.35223 2.93798 3.71906 2.93798 3.32854 3.32851C2.93801 3.71903 2.93801 4.3522 3.32854 4.74272L10.6229 12.0371L3.32856 19.3314C2.93803 19.722 2.93803 20.3552 3.32856 20.7457C3.71909 21.1362 4.35226 21.1362 4.74278 20.7457L12.0371 13.4513L19.3315 20.7457C19.722 21.1362 20.3552 21.1362 20.7457 20.7457C21.1362 20.3552 21.1362 19.722 20.7457 19.3314L13.4513 12.0371L20.7457 4.74272C21.1362 4.3522 21.1362 3.71903 20.7457 3.32851Z"
                        fill="currentColor" />
                </svg>
            </button>
        </div>
    </div>

    <!-- JavaScript for Mobile Menu -->
    <script>
        document.getElementById('menuToggle').addEventListener('click', function () {
            document.getElementById('mobileMenu').classList.toggle('hidden');
        });

        document.getElementById('closeMenu').addEventListener('click', function () {
            document.getElementById('mobileMenu').classList.add('hidden');
        });
    </script>
</body>

</html>