// Fungsi untuk menampilkan data yang tersimpan dari file.txt
function tampilkanDataTersimpan() {
    const dataContainer = document.getElementById("dataContainer");
  
    // Menggunakan objek XMLHttpRequest untuk mengambil data dari file.txt
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
      if (this.readyState === 4 && this.status === 200) {
        // Data berhasil diambil, tampilkan di halaman web
        dataContainer.innerHTML = "<pre>" + this.responseText + "</pre>";
      }
    };
    xhr.open("GET", "file.txt", true);
    xhr.send();
  }
  
  // Panggil fungsi tampilkanDataTersimpan saat halaman selesai dimuat
  window.onload = function () {
    tampilkanDataTersimpan();
  };
  
  // Fungsi untuk menampilkan pesan setelah data terkirim
  function tampilkanPesan() {
    const form = document.getElementById("formPendaftaran");
    form.innerHTML = "<h2>Data berhasil terkirim!</h2>";
  }
  