<?php

namespace App\Http\Livewire;

use App\Imports\UsersImport;
use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;

class Mail extends Component
{

    use WithFileUploads;

    public $excel;

    public function render()
    {
        return view('livewire.mail');
    }

    public function save()
    {
        $this->validate([
            'excel' => 'mimes:xlsx|max:10024'
        ]);
        $filename = $this->excel->store('upload-excels');
        Excel::import(new UsersImport, $filename);

    }

}
