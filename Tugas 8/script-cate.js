// Menambahkan data dari localStorage ke tabel
window.onload = function() {
    displayEntries(JSON.parse(localStorage.getItem('entries')) || []);
};

function displayEntries(entries) {
    const dataBody = document.getElementById('dataBody');
    dataBody.innerHTML = ''; // Clear existing rows

    entries.forEach((entry, index) => {
        const row = dataBody.insertRow();
        row.innerHTML = `
            <td>${entry.date}</td>
            <td>${entry.name}</td>
            <td>${entry.from}</td>
            <td>${entry.to}</td>
            <td>${entry.time}</td>
            <td>
                <button class="btn-edit" onclick="editCategory(${index})">Edit</button>
                <button class="btn-delete" onclick="deleteCategory(${index})">Hapus</button>
            </td>
        `;
    });
}

function searchSchedule() {
    const selectedRegion = document.getElementById('region').value;
    const selectedTransportation = document.getElementById('transportation').value;
    const entries = JSON.parse(localStorage.getItem('entries')) || [];

    const filteredEntries = entries.filter(entry => {
        return (selectedRegion === '' || entry.region === selectedRegion) &&
               (selectedTransportation === '' || entry.transportation === selectedTransportation);
    });

    displayEntries(filteredEntries);
}

function editCategory(index) {
    // Mengarahkan ke halaman Entry Data dengan parameter edit
    window.location.href = `data-entry.php?edit=${index}`;
}

function deleteCategory(index) {
    // Fungsi untuk menghapus data
    if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
        const entries = JSON.parse(localStorage.getItem('entries')) || [];
        entries.splice(index, 1); // Menghapus data berdasarkan index
        localStorage.setItem('entries', JSON.stringify(entries)); // Update localStorage
        window.location.reload(); // Reload halaman untuk menampilkan data terbaru
    }
}