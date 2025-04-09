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

}
