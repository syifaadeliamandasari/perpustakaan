document.addEventListener("DOMContentLoaded", function () {
    const modalData = document.getElementById("modalData");
    const btnTambah = document.getElementById("btnTambah");
    const btnBatal = document.getElementById("btnBatal");
    const formAnggota = document.getElementById("formAnggota");
    const tbodyData = document.getElementById("tbodyData");


    // Fungsi untuk menampilkan data anggota ke dalam tabel
    function tampilkanData() {
        tbodyData.innerHTML = '';
        dataAnggota.forEach((item, index) => {
            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td>${index + 1}</td>
                <td>${item.nama}</td>
                <td>${item.jeniskelamin}</td>
                <td>${item.kelas}</td>
                <td>${item.email}</td>
                <td>
                    <button class="btn btn-primary btnEdit" data-index="${index}">Edit</button>
                    <button class="btn btn-danger btnHapus" data-index="${index}">Hapus</button>
                </td>
            `;
            tbodyData.appendChild(tr);
        });
    }
    formBuku.addEventListener('submit', (e) => {
    e.preventDefault();
    const nama = document.getElementById('nama').value;
    const jeniskelamin = document.getElementById('jeniskelamin').value;
    const kelas = document.getElementById('kelas').value;
    const email = document.getElementById('email').value;
    })
});
