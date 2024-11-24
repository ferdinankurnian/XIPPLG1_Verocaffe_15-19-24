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
