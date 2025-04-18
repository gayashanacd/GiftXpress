<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index(){
        // get and display all products
        $viewData =[];
        $viewData["title"] = 'Giftcards';
        $viewData["subtitle"] = 'List of Products';
        $viewData["products"] = Product::all();
        return view('product.index')->with("viewData",$viewData);
    }

    public function show($id){
        // get and display a specific product
        $product = Product::findOrFail($id);
        $viewData["title"] = $product->getName();
        $viewData["subtitle"] = $product->getName();
        $viewData["product"] = $product;
        return view('product.show')->with("viewData",$viewData);
    }

    public function buy($id)
    {
        $product = Product::findOrFail($id);

        $viewData = [];
        $viewData["title"] = "Buy " . $product->getName();
        $viewData["product"] = $product;

        return view('product.buy')->with("viewData", $viewData);
    }

    public function purchase(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1|max:' . Product::findOrFail($id)->getAvailableStock()
        ]);

        // You could process the order or redirect to a checkout page
        return redirect()->route('product.show', ['id' => $id])
                        ->with('success', 'Your order has been placed for ' . $request->input('quantity') . ' card(s).');
    }

}
