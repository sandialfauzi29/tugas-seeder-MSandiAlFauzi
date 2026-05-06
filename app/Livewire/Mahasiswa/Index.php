<?php

namespace App\Livewire\Mahasiswa;

use Livewire\Component;
use App\Models\Mahasiswa;


class Index extends Component
{
    public function render()
    {
        return view('livewire.mahasiswa.index', [
            'mahasiswa' => Mahasiswa::with('dosen')->get()
        ]);
    }

    public function delete($id)
    {
        Mahasiswa::find($id)->delete();
    }
}