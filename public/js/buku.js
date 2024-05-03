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

const modalData = document.getElementById('modalData');
const btnTambah = document.getElementById('btnTambah');
const btnBatal = document.getElementById('btnBatal');
const formBuku = document.getElementById('formBuku');
const tbodyData = document.getElementById('tbodyData');

let dataBuku = []; // Simpan data buku

// Tampilkan modal tambah data
btnTambah.addEventListener('click', () => {
modalData.style.display = 'block';
document.getElementById('modalTitle').textContent = 'Tambah Data Buku';
formBuku.reset();
});

// Tutup modal ketika tombol Batal ditekan
btnBatal.addEventListener('click', () => {
modalData.style.display = 'none';
});

// Tampilkan data buku
function tampilkanData() {
tbodyData.innerHTML = '';
dataBuku.forEach((item, index) => {
const tr = document.createElement('tr');
tr.innerHTML = `
  <td>${index + 1}</td>
  <td>${item.judul}</td>
  <td>${item.deskripsi}</td>
  <td>${item.jumlah}</td>
  <td>
    <button class="btn btn-primary btnEdit" data-index="${index}">Edit</button>
    <button class="btn btn-danger btnHapus" data-index="${index}">Hapus</button>
  </td>
`;
tbodyData.appendChild(tr);
});
}

// Tambah data buku
formBuku.addEventListener('submit', (e) => {
e.preventDefault();
const judul = document.getElementById('judul').value;
const kategori = document.getElementById('kategori').value;
const deskripsi = document.getElementById('deskripsi').value;
const jumlah = document.getElementById('jumlah').value;

// Validasi data
if (judul.trim() !== '' && kategori.trim() !== '' && deskripsi.trim() !== '' && jumlah.trim() !== '') {
const buku = { judul, kategori, deskripsi, jumlah };
dataBuku.push(buku);
tampilkanData();
modalData.style.display = 'none';
}
});

// Edit data buku
tbodyData.addEventListener('click', (e) => {
if (e.target.classList.contains('btnEdit')) {
const index = e.target.getAttribute('data-index');
const buku = dataBuku[index];
document.getElementById('judul').value = buku.judul;
document.getElementById('kategori').value = buku.kategori;
document.getElementById('deskripsi').value = buku.deskripsi;
document.getElementById('jumlah').value = buku.jumlah;
document.getElementById('modalTitle').textContent = 'Edit Data Buku';
modalData.style.display = 'block';

}
});

// Hapus data buku
tbodyData.addEventListener('click', (e) => {
if (e.target.classList.contains('btnHapus')) {
const index = e.target.getAttribute('data-index');
dataBuku.splice(index, 1);
tampilkanData();
}
});
