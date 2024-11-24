<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VeroCaffe</title>
    <link rel="shortcut icon" href="assets/verocafesimple.svg" type="image/x-icon">
    @vite('resources/css/app.css')
</head>

<body class="font-sans bg-[#F2E8A7] text-gray-800">
    <div id="modal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-50">
        <div class="relative flex justify-center max-w-xl py-4 m-auto bg-white shadow-2xl rounded-lg">
            <span id="close-modal" class="absolute top-0 right-0 block w-10 h-5 -mt-2 -mr-4 text-xs text-center text-gray-600 transform rotate-45 bg-white rounded shadow-md cursor-pointer hover:bg-gray-100">
                close
            </span>
            <div class="w-1/2 ml-4 bg-cover rounded" style="background-image: url('https://images.unsplash.com/photo-1601805215126-9df64231459b?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&dl=mojtaba-mosayebzadeh-mR_fsL-KbEg-unsplash.jpg&w=640')">
            </div>
            <div class="flex flex-col justify-between w-1/2 px-4 space-y-16">
                <div>
                    <h1 class="mb-2 text-2xl font-bold leading-tight">
                        Ideas and UI components in your inbox
                    </h1>
                    <p class="text-sm text-gray-700">
                        Sign up to receive ideas, free components and free resources plus 15% on all of our pro UI kits.
                    </p>
                </div>
                <div>
                    <form>
                        <input class="w-full px-5 py-3 border rounded focus:border-blue-500 focus:outline-none" type="email" placeholder="Email address">
                        <button class="block w-full py-3 mt-3 text-white bg-blue-500 rounded shadow-lg hover:bg-blue-600" type="submit">Subscribe</button>
                    </form>
                    <ul class="flex justify-center mt-4 space-x-3 text-xs text-gray-700">
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-5 h-5 mr-1 text-green-500 fill-current">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <p>No spam</p>
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-5 h-5 mr-1 text-green-500 fill-current">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <p>No hassle</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Button to trigger modal -->
    <button id="open-modal" class="px-4 py-2 text-white bg-blue-500 rounded">Open Modal</button>


    <!-- Header -->
    <header class="bg-[#F2E8A7]">
        <div id="top-side" class="flex flex-row justify-between p-7 px-10 h-[100px]">
            <img src="assets/verocafelogo.svg" width="125" alt="Verocaffe Logo">
			<div id="nav" class="absolute left-1/2 transform -translate-x-1/2 bg-gray-800 shadow-md z-10 px-6 py-2 rounded-md">
				<nav class="text-white">
					<ul class="flex space-x-6">
						<li><a href="#" class="hover:text-gray-300">Home</a></li>
						<li><a href="#" class="hover:text-gray-300">Tentang Kami</a></li>
						<li><a href="#" class="hover:text-gray-300">Menu</a></li>
						<li><a href="#" class="hover:text-gray-300">Kontak Kami</a></li>
					</ul>
				</nav>
			</div>
            <button class="bg-[#3A5340] text-white px-4 py-2 rounded-lg hover:bg-[#2F4334]">
                Be a member!
            </button>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-[#F2E8A7] py-16">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl font-bold">Buy 1 Coffee Latte with Croissant</h1>
            <p class="text-lg mt-2">Free Waffle</p>
            <button class="mt-4 px-6 py-3 bg-yellow-500 text-white rounded hover:bg-yellow-600">Get Now!</button>
        </div>
    </section>

    <!-- Introduction -->
    <section class="bg-white py-16">
        <div class="container mx-auto grid grid-cols-2 gap-8 items-center">
            <img src="assets/about.png" alt="Coffee Shop" class="rounded-lg">
            <div>
                <h2 class="text-5xl font-bold">Nikmati hari mu dengan VeroCaffe</h2>
                <p class="mt-4 text-gray-700">From 2020, VeroCaffe is a coffee startup aiming to brew high-quality
                    coffee.</p>
                <button class="mt-4 px-6 py-3 bg-yellow-500 text-white rounded hover:bg-yellow-600">Read More</button>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="bg-gray-100 py-16">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold text-center">Categories</h2>
            <div class="flex justify-center mt-4 space-x-4">
                <button class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">All Menu</button>
                <button class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">Coffee</button>
                <button class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">Tea</button>
                <button class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">Bread</button>
            </div>

            <div class="grid grid-cols-4 gap-8 mt-8">
                <!-- Repeatable Card -->
                <div class="bg-white shadow rounded-lg p-4 text-center">
                    <img src="latte.jpg" alt="Coffee Latte" class="w-full h-40 object-cover rounded">
                    <h3 class="text-lg font-bold mt-2">Coffee Latte</h3>
                    <p class="text-gray-600">Rp. 25.000</p>
                </div>
                <!-- Add more items similarly -->
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section id="contact" class="py-16 px-32">
        <div class="bg-white w-fit mx-auto shadow rounded-lg">
            <div class="mx-auto grid grid-cols-2 gap-5">
                <iframe style="height: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15825.475156525223!2d109.22019149428851!3d-7.424376243881278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655e63847ad525%3A0x1094a0176a4f7eec!2sAlun%20Alun%20Kota%20Purwokerto!5e0!3m2!1sid!2sid!4v1726617185462!5m2!1sid!2sid" width="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <form class=" p-8">
                    <h2 class="text-2xl font-bold">Contact Us</h2>
                    <p class="mb-4">Beritahu kami jika kamu punya kritik atau saran.</p>
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">Your Name</label>
                        <input type="text" id="name" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Your Email</label>
                        <input type="email" id="email"
                        class="w-full px-4 py-2 border rounded focus:outline-none focus:ring">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Subject</label>
                        <input type="text" id="subject"
                        class="w-full px-4 py-2 border rounded focus:outline-none focus:ring">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-gray-700">Message</label>
                        <textarea id="message" rows="4"
                        class="w-full px-4 py-2 border rounded focus:outline-none focus:ring"></textarea>
                    </div>
                    <button class="px-6 py-3 bg-yellow-500 text-white rounded hover:bg-yellow-600">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2024, PT. VeroCaffè Indonesia. Created with ❤️ by our team.</p>
        </div>
    </footer>

	<script src="js/script.js"></script>
	
</body>

</html>