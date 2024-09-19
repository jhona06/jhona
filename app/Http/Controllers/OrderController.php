<<<<<<< HEAD
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\MenuItem;
use App\Models\Order;

class OrderController extends Controller
{
    public function add(Request $request)
    {
        // Validate request
        $request->validate([
            'item_id' => 'required|exists:menu_items,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $item = MenuItem::find($request->item_id);
        $order = Session::get('order', []);

        if (isset($order[$item->id])) {
            $order[$item->id]['quantity'] += $request->quantity;
        } else {
            $order[$item->id] = [
                'name' => $item->name,
                'price' => $item->price,
                'quantity' => $request->quantity,
            ];
        }

        Session::put('order', $order);
        $orderTotal = array_sum(array_map(function ($item) {
            return $item['quantity'] * $item['price'];
        }, $order));

        Session::put('order_total', $orderTotal);

        return redirect()->route('home');
    }

    public function placeOrder(Request $request)
    {
        // Get the current order
        $order = Session::get('order', []);
        
        if (empty($order)) {
            return redirect()->route('home')->with('error', 'No items in the order.');
        }

        // Save the order to the database
        $orderModel = new Order();
        $orderModel->total = Session::get('order_total');
        $orderModel->status = 'pending';
        $orderModel->save();

        // Clear the order from the session
        $request->session()->forget('order');
        $request->session()->forget('order_total');

        // Notify user
        return redirect()->route('home')->with('order_placed', true);
    }

    public function removeOrder(Request $request)
    {
        if ($request->has('remove_order')) {
            // Clear the order from the session
            session()->forget('order');
            session()->forget('order_total');
            
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false], 400);
    }
    // OrderController.php

// OrderController.php

public function cancel(Request $request)
{
    $itemsToCancel = $request->input('items_to_cancel', []);
    
    if (Session::has('order')) {
        $order = Session::get('order');

        foreach ($itemsToCancel as $itemIndex) {
            // Remove the selected item from the order
            unset($order[$itemIndex]);
        }

        // Update the session with the modified order
        Session::put('order', $order);

        // Recalculate the total
        $orderTotal = array_reduce($order, function ($carry, $item) {
            return $carry + ($item['quantity'] * $item['price']);
        }, 0);

        Session::put('order_total', $orderTotal);

        // Optionally, you might want to set a cancellation message
        return redirect()->route('home')->with('order_canceled', 'Selected items have been canceled.');
    }

    // If no order was found
    return redirect()->route('home')->with('error', 'No items to cancel.');
}


}
=======
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\MenuItem;
use App\Models\Order;

class OrderController extends Controller
{
    public function add(Request $request)
    {
        // Validate request
        $request->validate([
            'item_id' => 'required|exists:menu_items,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $item = MenuItem::find($request->item_id);
        $order = Session::get('order', []);

        if (isset($order[$item->id])) {
            $order[$item->id]['quantity'] += $request->quantity;
        } else {
            $order[$item->id] = [
                'name' => $item->name,
                'price' => $item->price,
                'quantity' => $request->quantity,
            ];
        }

        Session::put('order', $order);
        $orderTotal = array_sum(array_map(function ($item) {
            return $item['quantity'] * $item['price'];
        }, $order));

        Session::put('order_total', $orderTotal);

        return redirect()->route('home');
    }

    public function placeOrder(Request $request)
    {
        // Get the current order
        $order = Session::get('order', []);
        
        if (empty($order)) {
            return redirect()->route('home')->with('error', 'No items in the order.');
        }

        // Save the order to the database
        $orderModel = new Order();
        $orderModel->total = Session::get('order_total');
        $orderModel->status = 'pending';
        $orderModel->save();

        // Clear the order from the session
        $request->session()->forget('order');
        $request->session()->forget('order_total');

        // Notify user
        return redirect()->route('home')->with('order_placed', true);
    }

    public function removeOrder(Request $request)
    {
        if ($request->has('remove_order')) {
            // Clear the order from the session
            session()->forget('order');
            session()->forget('order_total');
            
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false], 400);
    }
}
>>>>>>> b6b0a52d0d922780083a03166b299f9d786c8a5b
