<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function create($id) {
        $product = Product::findOrFail($id);
        return view('order.create', compact('product'));
    }

    public function store(Request $request, $id) {
        $product = Product::findOrFail($id);
        $quantity = $request->input('quantity');
        $total = $product->getPrice() * $quantity;

        Order::create([
            'user_id' => Auth::id(),
            'product_id' => $product->getId(),
            'quantity' => $quantity,
            'total_price' => $total,
            'status' => 'processing',
        ]);
        
        $product->setAvailableStock($product->getAvailableStock() - $request->quantity);
        $product->save();

        return redirect()->route('orders.index')->with('success', 'Order placed successfully!');
    }

    public function index() {
        $orders = Order::where('user_id', Auth::id())->with('product')->get();
        return view('order.index', compact('orders'));
    }
}
