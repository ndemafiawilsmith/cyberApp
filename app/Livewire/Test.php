<?php

namespace App\Livewire;

use Livewire\Component;

class Test extends Component
{
    public $name;
    public $email;
    public $address;
    public $subject;
    public $message;
    public $card_number;
    public $cvv;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'address' => 'required|string|max:255',
        'subject' => 'required|string|max:255',
        'message' => 'required|string|max:1000',
        'card_number' => 'nullable|string|max:16', // You may adjust validation as needed
        'cvv' => 'nullable|string|max:4', // Adjust validation as needed
    ];

    public function submit()
    {

        // Here you can perform actions like sending an email, saving to the database, etc.
        // For demonstration, we'll just dump the data
        dd([
            'name' => $this->name,
            'email' => $this->email,
            'address' => $this->address,
            'subject' => $this->subject,
            'message' => $this->message,
            'card_number' => $this->card_number,
            'cvv' => $this->cvv,
        ]);
    }


    public function render()
    {
        return view('livewire.test');
    }
}
