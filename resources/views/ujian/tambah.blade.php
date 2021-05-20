<h1>Tambah Data Ujian</h1>

<form action="{{ url("ujian/tambah") }}" method="POST">
    @csrf
    <label for="nama_mk">Nama MataKuliah</label>
    <input type="text" name="nama_mk" id="nama_mk">
    <br>
    <label for="dosen">Dosen</label>
    <input type="text" name="dosen" id="dosen">
    <br>
    <label for="jumlah_soal">Jumlah Soal</label>
    <input type="number" name="jumlah_soal" id="jumlah_soal">
    <br>
    <label for="keterangan">Keterangan</label>
    <textarea name="keterangan" id="keterangan" rows="4"></textarea>
    <br>
    <button type="submit">Tambah Data</button>
</form>
