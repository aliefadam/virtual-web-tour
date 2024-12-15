<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Tour</title>

    {{-- Poppins --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>

    @vite('resources/css/app.css')
</head>

<body class="bg-slate-800 text-white">
    <header class="bg-slate-800 text-white py-4 shadow-lg">
        <div class="container mx-auto lg:px-10 px-4 flex justify-between items-center">
            <h1 class="lg:text-2xl text-xl font-bold">Virtual Tour</h1>
            <nav>
                <ul class="flex lg:space-x-6 space-x-4">
                    <li><a href="#about" class="hover:underline lg:text-base text-sm">About</a></li>
                    <li><a href="#gallery" class="hover:underline lg:text-base text-sm">Gallery</a></li>
                    <li><a href="#contact" class="hover:underline lg:text-base text-sm">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="bg-slate-800 text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold mb-6">Explore the World Virtually</h2>
            <p class="text-lg mb-8">Experience immersive virtual tours from the comfort of your home. Discover stunning
                destinations, cultural landmarks, and more.</p>
            <a href="{{ route('virtual-tour') }}"
                class="bg-white text-slate-800 font-bold py-3 px-6 rounded shadow hover:bg-gray-100">Start
                Virtual Tour</a>
        </div>
    </section>

    <section id="about" class="bg-white text-slate-800 py-16">
        <div class="container mx-auto px-4 text-center">
            <h3 class="text-3xl font-bold mb-6">About Us</h3>
            <p class="text-lg mb-8">We bring the world closer to you through high-quality virtual tours. Explore
                breathtaking destinations, learn about different cultures, and travel the globe without leaving your
                home.</p>
            <img src="{{ asset('imgs/about-us.png') }}" alt="Placeholder image"
                class="mx-auto lg:w-[60%] w-full rounded shadow-lg">
        </div>
    </section>

    <section id="gallery" class="bg-navy text-white py-16">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-center">Virtual Tour Gallery</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 mt-10">
                <div class="text-center">
                    <img src="{{ asset('imgs/gambar-1.jpg') }}" alt="Gallery 1"
                        class="mx-auto size-[300px] object-cover mb-4 rounded shadow">
                    <h4 class="text-xl font-bold mb-2">Gallery Title 1</h4>
                </div>
                <div class="text-center">
                    <img src="{{ asset('imgs/gambar-2.jpg') }}" alt="Gallery 2"
                        class="mx-auto mb-4 size-[300px] object-cover rounded shadow">
                    <h4 class="text-xl font-bold mb-2">Gallery Title 2</h4>
                </div>
                <div class="text-center">
                    <img src="{{ asset('imgs/gambar-3.jpg') }}" alt="Gallery 3"
                        class="mx-auto mb-4 size-[300px] object-cover rounded shadow">
                    <h4 class="text-xl font-bold mb-2">Gallery Title 3</h4>
                </div>
                <div class="text-center">
                    <img src="{{ asset('imgs/gambar-4.jpg') }}" alt="Gallery 4"
                        class="mx-auto mb-4 size-[300px] object-cover rounded shadow">
                    <h4 class="text-xl font-bold mb-2">Gallery Title 4</h4>
                </div>
                <div class="text-center">
                    <img src="{{ asset('imgs/gambar-5.jpg') }}" alt="Gallery 5"
                        class="mx-auto mb-4 size-[300px] object-cover rounded shadow">
                    <h4 class="text-xl font-bold mb-2">Gallery Title 5</h4>
                </div>
                <div class="text-center">
                    <img src="{{ asset('imgs/gambar-6.jpg') }}" alt="Gallery 6"
                        class="mx-auto mb-4 size-[300px] object-cover rounded shadow">
                    <h4 class="text-xl font-bold mb-2">Gallery Title 6</h4>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="bg-white text-slate-800 py-16">
        <div class="container mx-auto px-4 text-center">
            <h3 class="text-3xl font-bold mb-6">Contact Us</h3>
            <p class="text-lg mb-8">Have questions? Reach out to us at <a href="mailto:info@virtualtour.com"
                    class="text-blue-600 hover:underline">info@virtualtour.com</a>.</p>
        </div>
    </section>

    <footer class="bg-slate-800 text-white py-6">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2024 Virtual Tour. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
