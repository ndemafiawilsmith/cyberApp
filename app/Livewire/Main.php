<?php

namespace App\Livewire;

use DOMDocument;
use Livewire\Component;

class Main extends Component
{

    public $name; // The URL entered by the user
    public $results = []; // Array to store scan results
    public $error; // To handle errors

    public function scan()
    {
        // Validate the URL
        if (filter_var($this->name, FILTER_VALIDATE_URL)) {
            // Clear previous results and errors
            $this->results = [];
            $this->error = null;

            // Initialize a cURL session
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $this->name);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

            // Execute cURL session and store the content of the URL
            $html = curl_exec($ch);

            if (curl_errno($ch)) {
                $this->error = 'Error: ' . curl_error($ch);
            } else {
                // Parse the HTML content to find hidden input fields
                $dom = new DOMDocument();
                @$dom->loadHTML($html); // Suppress errors from malformed HTML
                $inputs = $dom->getElementsByTagName('input');

                foreach ($inputs as $input) {
                    $type = $input->getAttribute('type');
                    $style = $input->getAttribute('style');

                    // Check for hidden fields or fields that are off-screen
                    if ($type == 'hidden' || strpos($style, 'display: none') !== false || strpos($style, 'position: absolute') !== false) {
                        $this->results[] = [
                            'name' => $input->getAttribute('name'),
                            'type' => $type,
                            'style' => $style,
                        ];
                    }
                }

                if (empty($this->results)) {
                    $this->results[] = ['message' => 'No vulnerabilities found.'];
                }
            }

            curl_close($ch);
        } else {
            $this->error = 'Invalid URL. Please enter a valid URL.';
        }
    }

    public function render()
    {
        return view('livewire.main');
    }
}
