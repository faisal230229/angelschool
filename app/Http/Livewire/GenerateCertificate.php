<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class GenerateCertificate extends Component
{
    public $content;

    public function generateCertificate()
    {
        $template_id = "7e577b23828ac440";
        $response = Http::withHeaders([
            'X-API-KEY' => env("PDF_KEY"),
        ])->post('https://rest.apitemplate.io/v2/create-pdf?template_id=' . $template_id, [
            'content' => $this->content,
        ]);


        return redirect()->to($response->json("download_url"));
    }

    public function render()
    {
        return view('livewire.generate-certificate');
    }
}
