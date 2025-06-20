<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;
 // Ensure you have a ContactEmail Mailable created


class ShowContactPage extends Component
{
    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
    ];

    public function submit()
    {
        $this->validate();

        $mailData = [
            'subject' => 'You have a new contact message',
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ];

        Mail::to('admin@example.com');

        session()->flash('success', 'Your message has been sent successfully!, we will get back to you soon.');

        $this->redirect('/contact');

        // Here you would typically send the message, e.g., via email or store it in the database.
        // For demonstration purposes, we'll just reset the fields.
        $this->reset(['name', 'email', 'message']);

        session()->flash('success', 'Your message has been sent successfully!');
    }
    
    public function render()
    {
        return view('livewire.show-contact-page');
    }
}
