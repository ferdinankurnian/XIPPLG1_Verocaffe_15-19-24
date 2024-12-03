<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VeroCaffe</title>
    <link rel="shortcut icon" href="assets/verocafesimple.svg" type="image/x-icon">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <style>
    /* Smooth scrolling behavior */
    html {
        scroll-behavior: smooth;
    }
    </style>
</head>

<body class="font-sans bg-[#F2E8A7] text-gray-800">
    <div id="tentangverocafe" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-50">
        <div class="relative flex justify-center w-[72rem] h-[30rem] p-16 m-auto bg-white shadow-2xl rounded-lg">
            <span id="close-modal"
                class="absolute top-0 right-0 block w-10 h-5 -mt-2 -mr-4 text-xs text-center text-gray-600 transform rotate-45 bg-white rounded shadow-md cursor-pointer hover:bg-gray-100">
                close
            </span>
            <div class="w-1/2 ml-4 bg-cover rounded"
                style="background-image: url('https://i.pinimg.com/736x/01/d8/96/01d896763a3691d910737afdd1356562.jpg')">
            </div>
            <div class="flex flex-col justify-center w-1/2 px-4 ps-12 space-y-16">
                <div>
                    <h1 class="mb-2 text-2xl font-bold leading-tight">
                        Selamat Datang di VeroCaffè!
                    </h1>
                    <div class="h-[20rem] overflow-auto">
                        <p class="text-sm text-gray-700 text-justify">
                            Di VeroCaffè, kami menghidupkan kembali esensi sejati dari kafe Italia. Terletak di jantung
                            kota, kafe kami menawarkan pengalaman kuliner yang autentik dengan sentuhan modern. Kami
                            bangga menyajikan kopi berkualitas tinggi yang diseduh dengan penuh cinta dan keahlian,
                            menggunakan biji kopi pilihan dari perkebunan terbaik di Italia.
                        </p>
                        <br>
                        <p class="text-sm text-gray-700 text-justify">
                            Misi kami adalah menghadirkan cita rasa Italia yang otentik ke setiap cangkir kopi yang kami
                            sajikan. Kami percaya bahwa setiap tegukan kopi harus menjadi pengalaman yang memanjakan
                            indera, membawa Anda seolah-olah berada di kafe-kafe klasik di Italia. Dengan suasana yang
                            hangat dan ramah, kami berkomitmen untuk menciptakan tempat di mana setiap tamu merasa
                            seperti di rumah sendiri.
                        </p>
                        <br>
                        <p class="text-sm text-gray-700 text-justify">
                            Kualitas dan Keahlian
                            Di VeroCaffè, kualitas adalah prioritas utama kami. Setiap biji kopi dipilih dengan cermat
                            dan diproses dengan metode tradisional untuk memastikan rasa yang kaya dan aroma yang
                            menggoda. Barista kami adalah ahli dalam seni menyeduh kopi, selalu siap untuk menyajikan
                            minuman yang sempurna sesuai dengan preferensi Anda.
                        </p>
                        <br>
                        <p class="text-sm text-gray-700 text-justify">
                            Lebih dari Sekadar Kopi
                            Selain kopi, kami juga menawarkan berbagai pilihan makanan ringan dan hidangan penutup yang
                            lezat, semuanya dibuat dengan bahan-bahan segar dan resep otentik. Dari croissant yang
                            renyah hingga cinnamon yang manis, setiap gigitan di VeroCaffè adalah perjalanan kuliner
                            yang tak terlupakan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-50">
        <div class="relative flex justify-center w-[62rem] h-[35rem] p-8 m-auto bg-white shadow-2xl rounded-lg">
            <span id="close-modal-dyn"
                class="absolute top-0 right-0 block w-10 h-5 -mt-2 -mr-4 text-xs text-center text-gray-600 transform rotate-45 bg-white rounded shadow-md cursor-pointer hover:bg-gray-100">
                close
            </span>
            <div id="modal-image" class="w-1/2 bg-cover rounded" style="background-image: url('')">
            </div>
            <div class="flex flex-col justify-center w-1/2 px-4 ps-8 space-y-16">
                <div>
                    <h1 id="modal-title" class="mb-1 text-2xl font-bold leading-tight">
                        Judul
                    </h1>
                    <h2 id="modal-price" class="mb-2 text-xl">
                        Rp. 13.000
                    </h2>
                    <div class="overflow-auto">
                        <p id="modal-description" class="text-sm text-gray-700 text-justify">
                            Deskripsi
                        </p>
                    </div>
                    <div class="my-6">
                        <h2 class="font-semibold mb-2">Promo dengan item ini</h2>
                        <div class="overflow-x-auto">
                            <div id="promo-list" class="flex space-x-4">
                                <!-- Promo akan diisi dengan JavaScript -->
                            </div>
                        </div>
                    </div>

                    <button
                        class="bg-gray-800 text-white py-2 px-5 rounded-full flex items-center justify-center w-fit">
                        Dapatkan Sekarang! <span class="material-symbols-outlined">double_arrow</span>
                    </button>
                </div>
            </div>
        </div>
    </div>



    <!-- Header -->
    <header class="bg-[#F2E8A7]">
        <div id="top-side" class="flex flex-row justify-between p-7 px-10 h-[100px]">
            <img src="assets/verocafelogo.svg" width="125" alt="Verocaffe Logo">
            <div id="nav"
                class="absolute left-1/2 transform -translate-x-1/2 bg-[#F6F5F0] shadow-lg z-10 px-6 py-3 rounded-lg">
                <nav class="text-white">
                    <ul class="flex space-x-6">
                        <li><a href="#" class="text-[#6B4F3A] hover:text-[#34261B]">Home</a></li>
                        <li><a href="#tentangkami" class="text-[#6B4F3A] hover:text-[#34261B]">Tentang Kami</a></li>
                        <li><a href="#menu" class="text-[#6B4F3A] hover:text-[#34261B]">Menu</a></li>
                        <li><a href="#kontakkami" class="text-[#6B4F3A] hover:text-[#34261B]">Kontak Kami</a></li>
                    </ul>
                </nav>
            </div>
            <a href="<?php echo e(route('login')); ?>" class="bg-[#3A5340] text-white px-4 py-2 rounded-lg hover:bg-[#2F4334]">
                Be a member!
            </a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-[#F2E8A7] py-16">
        <div class="relative w-full px-32 mx-auto">
            <!-- Carousel Container -->
            <div class="flex overflow-hidden">
                <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div
                    class="carousel-item w-full flex-shrink-0 container mx-auto px-40 flex flex-row justify-between items-center">
                    <div>
                        <h1 class="text-5xl mb-2 font-bold"><?php echo e($slide->title); ?></h1>
                        <p class="text-lg font-medium text-slate-600 mt-2"><?php echo e($slide->description); ?></p>
                        <button onclick="openInNewTab('https://maps.app.goo.gl/nvE6A3NEtqA4Fymy5')"
                            class="mt-4 px-6 py-3 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600">Visit
                            VeroCaffè</button>
                    </div>
                    <div class="w-[500px] h-[500px] flex flex-col items-center justify-center">
                        <img src="<?php echo e(Storage::url($slide->image)); ?>" alt="<?php echo e($slide->title); ?>">
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <!-- Navigasi -->
            <div class="absolute top-1/2 left-8 transform -translate-y-1/2 cursor-pointer">
                <button id="prev" class="text-2xl"><span class="material-symbols-outlined">chevron_left</span></button>
            </div>
            <div class="absolute top-1/2 right-8 transform -translate-y-1/2 cursor-pointer">
                <button id="next" class="text-2xl"><span class="material-symbols-outlined">chevron_right</span></button>
            </div>

            <!-- Indikator -->
            <div class="flex justify-center mt-4 space-x-2">
                <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="w-3 h-3 <?php echo e($index === 0 ? 'bg-red-500' : 'bg-gray-300'); ?> rounded-full indicator"
                    data-index="<?php echo e($index); ?>">
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <!-- Introduction -->
    <section id="tentangkami" class="bg-white py-28">
        <div class="container mx-auto px-40 grid grid-cols-2 gap-20 items-center">
            <div class="flex flex-col items-center justify-center">
                <img src="assets/about.png" alt="Coffee Shop" class="rounded-lg">
            </div>
            <div class="flex flex-col">
                <h2 class="text-5xl font-bold">Nikmati hari mu dengan VeroCaffe</h2>
                <p class="mt-4 text-gray-700">From 2020, VeroCaffe is a coffee startup aiming to brew high-quality
                    coffee.</p>
                <a role="button" id="open-tentangverocafe"
                    class="mt-8 px-6 py-3 bg-yellow-500 text-white rounded hover:bg-yellow-600 w-fit">Read More</a>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="bg-gray-100 py-16">
        <div class="container mx-auto px-40">
            <h2 class="text-3xl mt-5 font-bold text-center">Menu</h2>
            <div class="flex justify-center mt-4 gap-4">
                <div class="bg-[#a1d2ac] rounded-lg p-4 flex flex-col items-center w-24 shadow cursor-pointer category-item"
                    data-category-id="0">
                    <img src="assets/viewall.svg" alt="View All Items" class="mb-2">
                    <p class="font-medium text-sm">Semua</p>
                    <p class="text-xs text-gray-500"><?php echo e($menus->count()); ?> Items</p>
                </div>

                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-white rounded-lg p-4 flex flex-col items-center w-24 shadow cursor-pointer category-item"
                    data-category-id="<?php echo e($category->id); ?>">
                    <img src="<?php echo e(Storage::url($category->icon)); ?>" alt="<?php echo e($category->name); ?>" class="mb-2">
                    <p class="font-medium text-sm"><?php echo e($category->name); ?></p>
                    <p class="text-xs text-gray-500"><?php echo e($category->menus_count); ?> Items</p>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="grid grid-cols-4 gap-8 mt-8" id="menu-grid">
                <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a role="button" id="open-modal" class="bg-white shadow rounded-lg text-center"
                    data-id="<?php echo e($menu->id); ?>">
                    <img src="<?php echo e(Storage::url($menu->cover)); ?>" alt="<?php echo e($menu->title); ?>"
                        class="w-full object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-bold"><?php echo e($menu->title); ?></h3>
                        <p class="text-gray-600"><?php echo e($menu->price); ?></p>
                    </div>
                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>
    </section>

    <!-- Contact Form -->
    <section id="kontakkami" class="py-16 px-32">
        <div class="bg-white w-fit mx-auto shadow rounded-lg">
            <div class="mx-auto grid grid-cols-2 gap-5">
                <iframe style="height: 100%;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15825.475156525223!2d109.22019149428851!3d-7.424376243881278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655e63847ad525%3A0x1094a0176a4f7eec!2sAlun%20Alun%20Kota%20Purwokerto!5e0!3m2!1sid!2sid!4v1726617185462!5m2!1sid!2sid"
                    width="500" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <form action="<?php echo e(route('contact.store')); ?>" method="POST" class="p-8">
                    <?php echo csrf_field(); ?>
                    <h2 class="text-2xl font-bold">Contact Us</h2>
                    <p class="mb-4">Beritahu kami jika kamu punya kritik atau saran.</p>
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">Your Name</label>
                        <input type="text" id="name" name="name"
                            class="w-full px-4 py-2 border rounded focus:outline-none focus:ring" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Your Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full px-4 py-2 border rounded focus:outline-none focus:ring" required>
                    </div>
                    <div class="mb-4">
                        <label for="subject" class="block text-gray-700">Subject</label>
                        <input type="text" id="subject" name="subject"
                            class="w-full px-4 py-2 border rounded focus:outline-none focus:ring" required>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-gray-700">Message</label>
                        <textarea id="message" name="message" rows="4"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring"
                            required></textarea>
                    </div>
                    <button type="submit" class="px-6 py-3 bg-yellow-500 text-white rounded hover:bg-yellow-600">Send
                        Message</button>
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
    <script>
    function openInNewTab(url) {
        window.open(url, '_blank');
    }
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('modal');
        const modalImage = document.getElementById('modal-image');
        const modalTitle = document.getElementById('modal-title');
        const modalDescription = document.getElementById('modal-description');
        const promoList = document.getElementById('promo-list');
        const closeModal = document.getElementById('close-modal-dyn');
        const menuGrid = document.getElementById('menu-grid'); // Grid menu

        // Open modal
        menuGrid.addEventListener('click', async (e) => {
            if (e.target.closest('[id="open-modal"]')) {
                const menuId = e.target.closest('[id="open-modal"]').getAttribute('data-id');

                // Fetch menu data
                const response = await fetch(`/menu/${menuId}`);
                const menu = await response.json();

                // Update modal content
                modal.querySelector('h1').textContent = menu.title;
                modal.querySelector('p').textContent = menu.description;
                modal.querySelector('#modal-price').textContent = `${menu.price}`;
                modal.querySelector('.bg-cover').style.backgroundImage =
                    `url(storage/${menu.cover})`;

                // Clear previous promos
                const promoContainer = modal.querySelector('.flex.space-x-4');
                promoContainer.innerHTML = '';

                // Add promos
                if (menu.promo.length > 0) {
                    menu.promo.forEach((promo) => {
                        const promoDiv = document.createElement('div');
                        promoDiv.className = 'bg-gray-200 p-4 rounded-lg shrink-0';
                        promoDiv.innerHTML = `
                    <p class="font-semibold">${promo.buy}</p>
                    <p>${promo.get}</p>
                `;
                        promoContainer.appendChild(promoDiv);
                    });
                } else {
                    promoContainer.innerHTML = `
                <div class="bg-gray-200 p-4 rounded-lg shrink-0">
                    <p class="font-semibold text-gray-500">No promo available for this menu.</p>
                </div>
            `;
                }

                // Show modal
                modal.classList.remove('hidden');
            }
        });



        // Close modal
        closeModal.addEventListener('click', () => {
            modal.classList.add('hidden');
        });
    });
    </script>

</body>

</html><?php /**PATH /home/iydheko/Projects/XIPPLG1_Verocaffe_15-19-24-main/resources/views/index.blade.php ENDPATH**/ ?>