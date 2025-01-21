<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Carousel</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Ensure the carousel images cover the container properly */
        .carousel-item {
            transition: opacity 0.5s ease-out;
        }

        /* Styling for carousel buttons */
        .prev,
        .next {
            width: 40px;
            height: 40px;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border-radius: 50%;
        }

        .prev svg,
        .next svg {
            width: 20px;
            height: 20px;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="carousel relative w-full h-[500px] overflow-hidden hidden md:block" aria-roledescription="carousel">
        <div class="carousel-inner relative w-full h-full" role="listbox">
            <!-- Carousel Item 1 -->
            <div class="carousel-item absolute top-0 left-0 w-full h-full opacity-100 transition-all duration-500 ease-out"
                role="group" aria-roledescription="slide" aria-label="Slide 1">
                <img src="https://images.ctfassets.net/xa93kvziwaye/esmvE05RFq0dcsuJwZ6Rz/b4899345f284783e83b5f08e808eefab/jb-au-20250101-computers-hp-ai-pc-carousel-mobile.jpg?fm=webp&f=top&fit=fill&w=1124&h=482"
                    alt="Random Image 1" class="w-full h-full object-cover">
            </div>
            <!-- Carousel Item 2 -->
            <div class="carousel-item absolute top-0 left-0 w-full h-full opacity-0 transition-all duration-500 ease-out"
                role="group" aria-roledescription="slide" aria-label="Slide 2" aria-hidden="true">
                <img src="https://cdn.outreachmediagroup.com/wp-content/uploads/2019/08/190912_FBCarouselAds_820.jpg"
                    alt="Random Image 2" class="w-full h-full object-cover">
            </div>
            <!-- Carousel Item 3 -->
            <div class="carousel-item absolute top-0 left-0 w-full h-full opacity-0 transition-all duration-500 ease-out"
                role="group" aria-roledescription="slide" aria-label="Slide 3" aria-hidden="true">
                <img src="https://st2.depositphotos.com/3591429/9542/i/450/depositphotos_95423090-stock-photo-business-woman-working.jpg"
                    alt="Random Image 3" class="w-full h-full object-cover">
            </div>
        </div>

        <!-- Prev/Next buttons -->
        <button
            class="prev text-white p-2 z-50 absolute left-4 top-1/2 transform -translate-y-1/2 appearance-none border-none bg-gray-300 bg-opacity-30 rounded-full focus:outline-none focus:ring-0"
            aria-label="Previous slide">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M15 18l-6-6 6-6" />
            </svg>
            <span class="sr-only">Previous Slide</span>
        </button>
        <button
            class="next text-white p-2 z-50 absolute right-4 top-1/2 transform -translate-y-1/2 appearance-none border-none bg-gray-300 bg-opacity-30 rounded-full focus:outline-none focus:ring-0"
            aria-label="Next slide">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M9 18l6-6-6-6" />
            </svg>
            <span class="sr-only">Next slide</span>
        </button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const items = document.querySelectorAll('.carousel-item');
            let currentItem = 0;

            const showItem = (index) => {
                items[currentItem].classList.remove('opacity-100');
                items[currentItem].classList.add('opacity-0');
                items[currentItem].setAttribute('aria-hidden', 'true');

                currentItem = (index + items.length) % items.length;

                items[currentItem].classList.remove('opacity-0');
                items[currentItem].classList.add('opacity-100');
                items[currentItem].removeAttribute('aria-hidden');
            };

            document.querySelector('.prev').addEventListener('click', () => {
                showItem(currentItem - 1);
            });

            document.querySelector('.next').addEventListener('click', () => {
                showItem(currentItem + 1);
            });

            document.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowLeft') {
                    showItem(currentItem - 1);
                } else if (e.key === 'ArrowRight') {
                    showItem(currentItem + 1);
                }
            });

            // Autoplay functionality
            setInterval(() => {
                showItem(currentItem + 1);
            }, 3000); // Change image every 3 seconds

            // Initialize first item
            items[currentItem].classList.add('opacity-100');
            items[currentItem].classList.remove('opacity-0');
            items[currentItem].removeAttribute('aria-hidden');
        });
    </script>
</body>

</html>