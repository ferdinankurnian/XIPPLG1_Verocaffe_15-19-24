// Navbar Position Control
window.onscroll = function () {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 1 || document.documentElement.scrollTop > 1) {
        document.getElementById("nav").classList.remove('absolute');
        document.getElementById("nav").classList.add('fixed', 'top-2');
    } else {
        document.getElementById("nav").classList.remove('fixed', 'top-2');
        document.getElementById("nav").classList.add('absolute');
    }
}

// Ambil elemen modal dan tombol
const modal = document.getElementById("tentangverocafe");
const openModalButton = document.getElementById("open-tentangverocafe");
const closeModalButton = document.getElementById("close-modal");

// Fungsi untuk membuka modal
function openModal() {
    modal.classList.remove("hidden");
}

// Fungsi untuk menutup modal
function closeModal() {
    modal.classList.add("hidden");
}

// Event listener untuk tombol buka modal
openModalButton.addEventListener("click", openModal);

// Event listener untuk tombol tutup modal
closeModalButton.addEventListener("click", closeModal);

// Menutup modal jika klik di luar modal
modal.addEventListener("click", (e) => {
    if (e.target === modal) {
        closeModal();
    }
});


const categoryItems = document.querySelectorAll('.category-item');

categoryItems.forEach(item => {
    item.addEventListener('click', function () {
        // Hapus warna aktif dari semua kategori
        categoryItems.forEach(cat => cat.classList.remove('bg-[#a1d2ac]'));
        categoryItems.forEach(cat => cat.classList.add('bg-white'));

        // Tambahkan warna aktif ke kategori yang diklik
        this.classList.remove('bg-white');
        this.classList.add('bg-[#a1d2ac]');

        // Fetch menus for the selected category (example logic)
        const categoryId = this.getAttribute('data-category-id');
        fetch(`/menus/filter/${categoryId}`)
            .then(response => response.json())
            .then(data => {
                const menuGrid = document.getElementById('menu-grid');
                menuGrid.innerHTML = ''; // Clear existing menus
                data.forEach(menu => {
                    menuGrid.innerHTML += `
                        <a role="button" id="open-modal" class="bg-white shadow rounded-lg text-center" data-id="${menu.id}">
                            <img src="/storage/${menu.cover}" alt="${menu.title}" class="w-full object-cover rounded-t-lg">
                            <div class="p-4">
                                <h3 class="text-lg font-bold">${menu.title}</h3>
                                <p class="text-gray-600">${menu.price}</p>
                            </div>
                        </a>
                    `;
                });
            })
            .catch(error => console.error('Error fetching menus:', error));
    });
});


const slides = document.querySelectorAll('.carousel-item');
const prev = document.getElementById('prev');
const next = document.getElementById('next');
const indicators = document.querySelectorAll('.indicator');
const totalSlides = slides.length;
let currentIndex = 0;
let autoSlideInterval;

// Fungsi untuk memperbarui indikator
function updateIndicators(index) {
    indicators.forEach((indicator, i) => {
        if (i === index) {
            indicator.classList.remove('bg-gray-300');
            indicator.classList.add('bg-red-500');
        } else {
            indicator.classList.remove('bg-red-500');
            indicator.classList.add('bg-gray-300');
        }
    });
}

// Fungsi untuk menampilkan slide
function showSlide(index) {
    const container = document.querySelector('.overflow-hidden');
    container.scrollTo({
        left: index * container.offsetWidth,
        behavior: 'smooth',
    });
    updateIndicators(index);
}

// Event untuk tombol "prev"
prev.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    showSlide(currentIndex);
    resetAutoSlide();
});

// Event untuk tombol "next"
next.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % totalSlides;
    showSlide(currentIndex);
    resetAutoSlide();
});

// Event untuk klik pada indikator
indicators.forEach((indicator) => {
    indicator.addEventListener('click', (e) => {
        const index = parseInt(e.target.getAttribute('data-index'));
        currentIndex = index;
        showSlide(currentIndex);
        resetAutoSlide();
    });
});

// Fungsi untuk memulai auto-slide
function startAutoSlide() {
    autoSlideInterval = setInterval(() => {
        currentIndex = (currentIndex + 1) % totalSlides;
        showSlide(currentIndex);
    }, 5000); // Ganti '5000' dengan durasi dalam milidetik (5 detik dalam contoh ini)
}

// Fungsi untuk mereset auto-slide
function resetAutoSlide() {
    clearInterval(autoSlideInterval); // Hentikan interval saat ini
    startAutoSlide(); // Mulai interval baru
}

// Inisialisasi slide pertama dan auto-slide
showSlide(currentIndex);
startAutoSlide();


