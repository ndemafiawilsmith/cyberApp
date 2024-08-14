<?php

namespace App\Livewire;

use Livewire\Component;

class Test extends Component
{
    public $name;
    public $email;
    public $address;
    public $phone;
    public $company;
    public $job_title;
    public $country;
    public $state;
    public $city;
    public $zip_code;
    public $street_address;

    public function submit()
    {
        // Use dd() to dump and die, showing all collected data
        dd([
            'name' => $this->name,
            'email' => $this->email,
            'address' => $this->address,
            'phone' => $this->phone,
            'company' => $this->company,
            'job_title' => $this->job_title,
            'country' => $this->country,
            'state' => $this->state,
            'city' => $this->city,
            'zip_code' => $this->zip_code,
            'street_address' => $this->street_address,
        ]);
    }

    public function render()
    {
        return view('livewire.test');
    }
}
