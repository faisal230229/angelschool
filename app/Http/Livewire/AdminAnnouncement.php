<?php

namespace App\Http\Livewire;

use App\Models\SchoolClass;
use App\Models\User;
use Livewire\Component;

class AdminAnnouncement extends Component
{
    public $message;
    public $teachers = false;
    public $students = false;
    public $class;

    public function makeAnnouncement()
    {
        // if ($this->teachers) {
        // }
        $teacher = User::where('type', 'teacher')->first();

        $url = "https://lifetimesms.com/plain";

        $parameters = array(
            "api_token" => env("LIFETIME_SECRET"),
            "api_secret" => env("LIFETIME_TOKEN"),
            "to" => $teacher->phone,
            "from" => "Lifetimesms",
            "message" => "Testing SMS",
        );

        $ch = curl_init();
        $timeout  =  30;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        $response = curl_exec($ch);
        curl_close($ch);

        dd($response);
    }

    public function render()
    {
        $classes = SchoolClass::all();
        return view('livewire.admin-announcement', compact('classes'));
    }
}
