// Navbar Position Control
window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 15 || document.documentElement.scrollTop > 15) {
        document.getElementById("nav").classList.remove('absolute');
        document.getElementById("nav").classList.add('fixed', 'top-2');
    } else {
        document.getElementById("nav").classList.remove('fixed', 'top-2');
        document.getElementById("nav").classList.add('absolute');
    }
} 

// Ambil elemen modal dan tombol
const modal = document.getElementById("modal");
const openModalButton = document.getElementById("open-modal");
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
                        <a role="button" id="open-modal" class="bg-white shadow rounded-lg text-center">
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