window.onload = function(){
    const sidebar = document.querySelector(".sidebar");
    const closeBtn = document.querySelector("#btn");
    const searchBtn = document.querySelector(".bx-search")
    const logoutBtn = document.querySelector("#log_out");

    closeBtn.addEventListener("click",function(){
        sidebar.classList.toggle("open")
        menuBtnChange()
    })

    searchBtn.addEventListener("click",function(){
        sidebar.classList.toggle("open")
        menuBtnChange()
    })

    function menuBtnChange(){
        if(sidebar.classList.contains("open")){
            closeBtn.classList.replace("bx-menu","bx-menu-alt-right")
        }else{
            closeBtn.classList.replace("bx-menu-alt-right","bx-menu")
        }
    }

    // Menangani logout
    logoutBtn.addEventListener("click", function() {
        // Redirect ke halaman login
        window.location.href = "{{ route('login') }}";
    });
}
// Fungsi untuk menampilkan modal tambah data kategori
function tambahKategori() {
    document.getElementById("modalTambahKategori").style.display = "block";
}

// Fungsi untuk menyembunyikan modal tambah data kategori
function batalTambahKategori() {
    document.getElementById("modalTambahKategori").style.display = "none";
}

// Menangani event saat judul tabel "Nama" di-klik
document.querySelector(".Nama").addEventListener("click", function() {
    tambahKategori();
});

// Menangani event saat judul tabel "Alamat" di-klik
document.querySelector(".alamat").addEventListener("click", function() {
    tambahKategori();
});

// Menangani event saat judul tabel "Jenis Kelamin" di-klik
document.querySelector(".jenisKelamin").addEventListener("click", function() {
    tambahKategori();
});

// Menangani event saat judul tabel "Email" di-klik
document.querySelector(".email").addEventListener("click", function() {
    tambahKategori();
});

// Menangani event saat judul tabel "Aksi" di-klik
document.querySelector(".aksi").addEventListener("click", function() {
    tambahKategori();
});
