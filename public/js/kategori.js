window.onload = function() {
    const sidebar = document.querySelector(".sidebar");
    const closeBtn = document.querySelector("#btn");
    const searchBtn = document.querySelector(".bx-search");
    const logoutBtn = document.querySelector("#log_out");

    closeBtn.addEventListener("click", function() {
        sidebar.classList.toggle("open");
        menuBtnChange();
    });

    searchBtn.addEventListener("click", function() {
        sidebar.classList.toggle("open");
        menuBtnChange();
    });

    function menuBtnChange() {
        if (sidebar.classList.contains("open")) {
            closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else {
            closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
    }

    logoutBtn.addEventListener("click", function() {
        window.location.href = "{{ route('login') }}";
    });

    const modalData = document.getElementById('modalData');
    const btnTambah = document.getElementById('btnTambah');
    const btnBatal = document.getElementById('btnBatal');
    const formKategori = document.getElementById('form-kategori');
    const tbodyData = document.getElementById('tbodyData');

    let dataKategori = []; // Simpan data kategori
    let editIndex = null;

    async function fetchKategori() {
        const response = await fetch('/api/kategori');
        dataKategori = await response.json();
        tampilkanData();
    }

    btnTambah.addEventListener('click', () => {
        modalData.style.display = 'block';
        document.getElementById('modalTitle').textContent = 'Tambah Data Kategori';
        formKategori.reset();
        editIndex = null;
    });

    btnBatal.addEventListener('click', () => {
        modalData.style.display = 'none';
    });

    function tampilkanData() {
        tbodyData.innerHTML = '';
        dataKategori.forEach((item, index) => {
            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td>${index + 1}</td>
                <td>${item.nama}</td>
                <td>
                    <button class="btn btn-primary btnEdit" data-index="${index}">Edit</button>
                    <button class="btn btn-danger btnHapus" data-index="${index}">Hapus</button>
                </td>
            `;
            tbodyData.appendChild(tr);
        });
    }

    formKategori.addEventListener('submit', async (e) => {
        e.preventDefault();
        const kategori = document.getElementById('kategori').value;
        if (kategori.trim() !== '') {
            if (editIndex === null) {
                const response = await fetch('/api/kategori', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ nama: kategori })
                });
                const newData = await response.json();
                dataKategori.push(newData);
            } else {
                const id = dataKategori[editIndex].id;
                const response = await fetch(`/api/kategori/${id}`, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ nama: kategori })
                });
                const updatedData = await response.json();
                dataKategori[editIndex] = updatedData;
            }
            tampilkanData();
            modalData.style.display = 'none';
        }
    });

    tbodyData.addEventListener('click', async (e) => {
        if (e.target.classList.contains('btnEdit')) {
            editIndex = e.target.getAttribute('data-index');
            const kategori = dataKategori[editIndex].nama;
            document.getElementById('kategori').value = kategori;
            document.getElementById('modalTitle').textContent = 'Edit Data Kategori';
            modalData.style.display = 'block';
        }

        if (e.target.classList.contains('btnHapus')) {
            const index = e.target.getAttribute('data-index');
            const id = dataKategori[index].id;
            await fetch(`/api/kategori/${id}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            });
            dataKategori.splice(index, 1);
            tampilkanData();
        }
    });

    fetchKategori();

};
document.querySelector('.logo_name').addEventListener('click', function() {
    window.location.href = '/petugas'; // Change this to the correct URL
  });
