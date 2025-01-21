<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles.css">
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
    </style>
</head>

<body>

    <!-- Open Header -->
    <header class="bg-gray-200 p-4 w-full">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <a href="index.php"
                    class="<?php echo ($_SERVER['PHP_SELF'] == '/index.php' || $_SERVER['PHP_SELF'] == '/') ? 'text-blue-500' : ''; ?>">
                    <img src="" alt="logo">
                    <span class="hidden">logo</span>
                </a>
            </div>
            <nav class="hidden md:block">
                <ul class="flex space-x-4">
                    <li><a href="index.php"
                            class="<?php echo ($_SERVER['PHP_SELF'] == '/index.php' || $_SERVER['PHP_SELF'] == '/') ? 'text-blue-500' : ''; ?>">Home</a>
                    </li>
                    <li><a href="products.php"
                            class="<?php echo ($_SERVER['PHP_SELF'] == '/products.php') ? 'text-blue-500' : ''; ?>">Products</a>
                    </li>
                    <li><a href="cart.php"
                            class="<?php echo ($_SERVER['PHP_SELF'] == '/cart.php') ? 'text-blue-500' : ''; ?>">Cart</a>
                    </li>
                    <li><a href="contact.php"
                            class="<?php echo ($_SERVER['PHP_SELF'] == '/contact.php') ? 'text-blue-500' : ''; ?>">Contact</a>
                    </li>
                </ul>
            </nav>
            <div class=" hidden md:block items-center space-x-4">
                <div class=" flex items-center space-x-2 cursor-pointer">
                    <!-- Login Button -->
                    <button class="flex items-center space-x-2"
                        onclick="window.location.href='<?php echo (isset($_SESSION['user_id'])) ? 'profile.php' : 'log_in.php'; ?>'">
                        <!-- Login SVG Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4m0 0l2-2m-2 2l-2-2m5-4h-7a4 4 0 00-4 4v4a4 4 0 004 4h7M16 12l4 4m0 0l-4 4m4-4H5" />
                        </svg>
                        <span>Login</span>
                    </button>

                    <!-- Register Button -->
                    <button class="flex items-center space-x-2" onclick="window.location.href='register.php'">
                        <!-- Register SVG Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 3h4a2 2 0 012 2v14a2 2 0 01-2 2h-4M5 3h4a2 2 0 012 2v14a2 2 0 01-2 2H5M10 12h4m-2-2v4" />
                        </svg>
                        <span>Register</span>
                    </button>

                </div>
            </div>

            <div class="md:hidden block">
                <button id="menuToggle" class="text-xl">
                    <!-- Hamburger SVG -->
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
                <li><a href="index.php"
                        class="<?php echo ($_SERVER['PHP_SELF'] == '/index.php' || $_SERVER['PHP_SELF'] == '/') ? 'text-blue-500' : ''; ?>">Home</a>
                </li>
                <li><a href="products.php"
                        class="<?php echo ($_SERVER['PHP_SELF'] == '/products.php') ? 'text-blue-500' : ''; ?>">Products</a>
                </li>
                <li><a href="cart.php"
                        class="<?php echo ($_SERVER['PHP_SELF'] == '/cart.php') ? 'text-blue-500' : ''; ?>">Cart</a>
                </li>
                <li><a href="contact.php"
                        class="<?php echo ($_SERVER['PHP_SELF'] == '/contact.php') ? 'text-blue-500' : ''; ?>">Contact</a>
                </li>
            </ul>
            <div class="items-center space-x-4">
                <div class=" flex items-center justify-center space-x-2 cursor-pointer">
                    <!-- Login Button -->
                    <button class="flex items-center space-x-2"
                        onclick="window.location.href='<?php echo (isset($_SESSION['user_id'])) ? 'profile.php' : 'log_in.php'; ?>'">
                        <!-- Login SVG Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4m0 0l2-2m-2 2l-2-2m5-4h-7a4 4 0 00-4 4v4a4 4 0 004 4h7M16 12l4 4m0 0l-4 4m4-4H5" />
                        </svg>
                        <span>Login</span>
                    </button>

                    <!-- Register Button -->
                    <button class="flex items-center space-x-2" onclick="window.location.href='register.php'">
                        <!-- Register SVG Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 3h4a2 2 0 012 2v14a2 2 0 01-2 2h-4M5 3h4a2 2 0 012 2v14a2 2 0 01-2 2H5M10 12h4m-2-2v4" />
                        </svg>
                        <span>Register</span>
                    </button>

                </div>
            </div>
            <button id="closeMenu" class="text-xl mt-4 absolute top-0 right-4">
                <!-- Close SVG Icon -->
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M20.7457 3.32851C20.3552 2.93798 19.722 2.93798 19.3315 3.32851L12.0371 10.6229L4.74275 3.32851C4.35223 2.93798 3.71906 2.93798 3.32854 3.32851C2.93801 3.71903 2.93801 4.3522 3.32854 4.74272L10.6229 12.0371L3.32856 19.3314C2.93803 19.722 2.93803 20.3551 3.32856 20.7457C3.71908 21.1362 4.35225 21.1362 4.74277 20.7457L12.0371 13.4513L19.3315 20.7457C19.722 21.1362 20.3552 21.1362 20.7457 20.7457C21.1362 20.3551 21.1362 19.722 20.7457 19.3315L13.4513 12.0371L20.7457 4.74272C21.1362 4.3522 21.1362 3.71903 20.7457 3.32851Z"
                        fill="#0F0F0F" />
                </svg>
            </button>
        </div>
    </div>


    <script>
        const menuToggle = document.getElementById("menuToggle");
        const mobileMenu = document.getElementById("mobileMenu");
        const closeMenu = document.getElementById("closeMenu");

        menuToggle.addEventListener("click", () => {
            mobileMenu.classList.remove("hidden");
        });

        closeMenu.addEventListener("click", () => {
            mobileMenu.classList.add("hidden");
        });
    </script>

</body>

</html>