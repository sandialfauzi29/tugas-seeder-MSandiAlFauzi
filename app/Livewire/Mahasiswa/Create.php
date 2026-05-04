<?php

namespace App\Livewire\Mahasiswa;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Create extends Component
{
    public $npm, $nama, $nidn;

    public function simpan()
    {
        $this->validate([
            'npm' => 'required',
            'nama' => 'required',
            'nidn' => 'required',
        ]);

        DB::table('mahasiswa')->insert([
            'npm' => $this->npm,
            'nama' => $this->nama,
            'nidn' => $this->nidn,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        session()->flash('success', 'Mahasiswa berhasil ditambahkan');

        $this->reset();
    }

    public function render()
    {
        $dosen = DB::table('dosen')->get();
        return view('livewire.mahasiswa.create', compact('dosen'));
    }
}