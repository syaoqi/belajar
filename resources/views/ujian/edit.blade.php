<h1>Edit Data Ujian</h1>

<form action="{{ url("ujian/edit", [$ujian->id]) }}" method="POST">
    @csrf
    @method("PUT")
    <label for="nama_mk">Nama MataKuliah</label>
    <input type="text" name="nama_mk" id="nama_mk" value="{{ $ujian->nama_mk }}">
    <br>
    <label for="dosen">Dosen</label>
    <input type="text" name="dosen" id="dosen" value="{{ $ujian->dosen }}" >
    <br>
    <label for="jumlah_soal">Jumlah Soal</label>
    <input type="number" name="jumlah_soal" id="jumlah_soal" value="{{$ujian->jumlah_soal}}">
    <br>
    <label for="keterangan">Keterangan</label>
    <textarea name="keterangan" id="keterangan" rows="4">{{ $ujian->keterangan }}</textarea>
    <br>
    <button type="submit">Tambah Data</button>
</form>
