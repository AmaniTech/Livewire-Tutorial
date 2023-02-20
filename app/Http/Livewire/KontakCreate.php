<?php

namespace App\Http\Livewire;

use App\Models\Kontak;
use Livewire\Component;

class KontakCreate extends Component
{

    public $name;
    public $contact;

    public function render()
    {
        return view('livewire.kontak-create');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|min:3',
            'contact' => 'required|max:15'
        ]);

        $kontak = Kontak::create([
            'name' => $this->name,
            'contact' => $this->contact
        ]);

        $this->resetInput();
        $this->emit('contactStored', $kontak);
    }

    private function resetInput()
    {
        $this->name = null;
        $this->contact = null;
    }
}
