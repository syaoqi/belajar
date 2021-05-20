<h1>Data Ujian</h1>

<a href="{{ url("ujian/tambah") }}">Tambah</a>

<table border="1">
    <tr>
        <th>Nama MK</th>
        <th>Dosen</th>
        <th>Jumlah Soal</th>
        <th>Keterangan</th>
        <th>Aksi</th>
    </tr>
    @foreach ($ujian as $u)
    <tr>
        <td>{{ $u->nama_mk }}</td>
        <td>{{ $u->dosen }}</td>
        <td>{{ $u->jumlah_soal}}</td>
        <td>{{ $u->keterangan}}</td>
        <td>
            <a href="{{ route("ujian.edit", [$u->id]) }}">Edit</a>
            <form action="{{ url("ujian/delete", [$u->id]) }}" method="POST" onclick="return confirm('Hapus gak? hapuslah masak enggak')">
                @csrf
                @method("DELETE")
                <button type="submit">Hapus</button>
            </form>
            {{-- <a href="">Delete</a> --}}
        </td>
    </tr>
    @endforeach
</table>
