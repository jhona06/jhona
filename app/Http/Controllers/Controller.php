namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menuItems = MenuItem::all();
        return view('menu.index', compact('menuItems'));
    }

    public function show($id)
    {
        $menuItem = MenuItem::findOrFail($id);
        return view('menu.show', compact('menuItem'));
    }
}
