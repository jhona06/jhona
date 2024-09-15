
<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Handle the form submission
        // Validate and process the request

        // For now, just redirect back with a success message
        return redirect()->route('contact')->with('success', 'Your message has been sent!');
    }
}
