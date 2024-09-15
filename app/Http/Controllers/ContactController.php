
<?php 
namespace App\Http\Controllers;
use App\Models\Contact;

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
class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($validated);

        return redirect()->route('contact')->with('success', 'Your message has been sent!');
    }
}
