<div style="max-width:500px; margin:auto; margin-top:40px;">

    <h2>Tambah Mahasiswa</h2>

    @if (session()->has('success'))
        <div style="background:lightgreen; padding:10px; margin-bottom:10px;">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="simpan">

        <div style="margin-bottom:10px;">
            <input type="text" wire:model="npm" placeholder="NPM" style="width:100%; padding:8px;">
        </div>

        <div style="margin-bottom:10px;">
            <input type="text" wire:model="nama" placeholder="Nama" style="width:100%; padding:8px;">
        </div>

        <div style="margin-bottom:10px;">
            <select wire:model="nidn" style="width:100%; padding:8px;">
                <option value="">-- Pilih Dosen --</option>
                @foreach($dosen as $d)
                    <option value="{{ $d->nidn }}">
                        {{ $d->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- 🔥 INI TOMBOLNYA -->
        <button type="submit" style="background:blue; color:white; padding:10px; width:100%;">
            SIMPAN
        </button>

    </form>

</div>