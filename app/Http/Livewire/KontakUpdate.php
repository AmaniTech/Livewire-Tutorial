<?php

namespace App\Http\Livewire;

use App\Models\Kontak;
use Livewire\Component;
use Livewire\WithPagination;

class KontakUpdate extends Component
{
    use WithPagination;

    public $name;
    public $contact;
    public $contactId;

    protected $listeners = ['getKontak' => 'showKontak'];

    public function showKontak($kontact)
    {
        $this->name = $kontact['name'];
        $this->contact = $kontact['contact'];
        $this->contactId = $kontact['id'];
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|min:3',
            'contact' => 'required|max:15'
        ]);

        if ($this->contactId) {
            Kontak::find($this->contactId)->update([
                'name' => $this->name,
                'contact' => $this->contact
            ]);
        }

        $this->resetInput();
        $this->emit('contactUpdated');
    }


    public function render()
    {
        return view('livewire.kontak-update');
    }

    private function resetInput()
    {
        $this->name = null;
        $this->contact = null;
    }
}
