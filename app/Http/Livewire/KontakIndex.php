<?php

namespace App\Http\Livewire;

use App\Models\Kontak;
use Livewire\Component;


class KontakIndex extends Component
{
    public $statusUpdate = false;
    public $paginate = 5;
    public $search;


    protected $listeners = [
        'contactStored' => 'handleStored',
        'contactUpdated' => 'handleUpdate'
    ];

    protected $updateQueryString = ['search'];

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }


    public function render()
    {
        return view('livewire.kontak-index', [
            'kontaks' => $this->search == null ?
                Kontak::latest()->paginate($this->paginate) :
                Kontak::latest()->where('name', 'like', '%' . $this->search . '%')->paginate($this->paginate)

        ]);
    }

    // public function contactStored($kontak)
    // {
    //     // ini dia
    // }


    public function handleStored($kontak)
    {
        session()->flash('Sukses', 'Data ' . $kontak['name'] . ' Berhasil Masuk!');
    }

    public function handleUpdate()
    {
        session()->flash('Sukses', 'Data Berhasil diupdate!');
        $this->statusUpdate = false;
    }

    public function getKontak($id)
    {
        $this->statusUpdate = true;
        $kontact = Kontak::find($id);
        // dd($contact['name']);
        $this->emit('getKontak', $kontact);
    }

    public function destroy($id)
    {
        if ($id) {
            Kontak::destroy($id);
            session()->flash('Sukses', 'Data Berhasil dihapus!');
        }
    }
}
