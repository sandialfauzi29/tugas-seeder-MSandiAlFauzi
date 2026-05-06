<div style="padding:20px;">

    <h2>Data Mahasiswa</h2>

    <a href="/mahasiswa/create" style="background:blue; color:white; padding:10px; display:inline-block; margin-bottom:20px;">
        ➕ Tambah Mahasiswa
    </a>

    <table border="1" cellpadding="10" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Dosen</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($mahasiswa as $index => $mhs)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->dosen->nama ?? '-' }}</td>
                    <td>
                        <a href="/mahasiswa/edit/{{ $mhs->id }}">Edit</a>
                        |
                        <button wire:click="delete({{ $mhs->id }})">
                            Hapus
                        </button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Belum ada data</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>