// Ambil data yang ingin diedit jika ada
const urlParams = new URLSearchParams(window.location.search);
const editIndex = urlParams.get('edit');
const entries = JSON.parse(localStorage.getItem('entries')) || [];

if (editIndex !== null) {
    const entry = entries[editIndex];
    document.getElementById('transportation').value = entry.transportation;
    document.getElementById('region').value = entry.region;
    document.getElementById('date').value = entry.date;
    document.getElementById('name').value = entry.name;
    document.getElementById('from').value = entry.from;
    document.getElementById('to').value = entry.to;
    document.getElementById('time').value = entry.time;

    // Ubah behavior tombol simpan menjadi update
    document.querySelector('.btn-simpan').innerText = 'Update';
    document.getElementById('dataForm').onsubmit = function(event) {
        event.preventDefault();
        updateEntry(editIndex);
    };
} else {
    document.getElementById('dataForm').onsubmit = function(event) {
        event.preventDefault();
        saveEntry();
    };
}

function saveEntry() {
    const newEntry = {
        transportation: document.getElementById('transportation').value,
        region: document.getElementById('region').value,
        date: document.getElementById('date').value,
        name: document.getElementById('name').value,
        from: document.getElementById('from').value,
        to: document.getElementById('to').value,
        time: document.getElementById('time').value
    };
    entries.push(newEntry);
    localStorage.setItem('entries', JSON.stringify(entries));
    alert('Data berhasil ditambahkan!');
    window.location.href = 'categories.html'; // Kembali ke halaman Categories
}

function updateEntry(index) {
    entries[index] = {
        transportation: document.getElementById('transportation').value,
        region: document.getElementById('region').value,
        date: document.getElementById('date').value,
        name: document.getElementById('name').value,
        from: document.getElementById('from').value,
        to: document.getElementById('to').value,
        time: document.getElementById('time').value
    };
    localStorage.setItem('entries', JSON.stringify(entries));
    alert('Data berhasil diperbarui!');
    window.location.href = 'categories.html'; // Kembali ke halaman Categories
}