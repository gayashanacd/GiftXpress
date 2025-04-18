<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Products - CSIS 3280 Online Store Demo";
        $viewData["products"] = Product::all();
        return view("admin.product.index")->with("viewData", $viewData);
    }

    public function store(Request $request)
    {
        Product::validate($request);

        $nProduct = new Product();
        $nProduct->setName($request->input("name"));
        $nProduct->setDescription($request->input("description"));
        $nProduct->setPrice($request->input("price"));
        $nProduct->setAmount($request->input("amount"));
        $nProduct->setCurrency($request->input("currency"));
        $nProduct->setBrand($request->input("brand"));
        $nProduct->setCategory($request->input("category"));
        $nProduct->setAvailableStock($request->input("available_stock"));
        $nProduct->setIsActive($request->input("is_active"));

        // Default image before upload
        $nProduct->setImage("game.png");
        $nProduct->save();

        if ($request->hasFile("image")) {
            $imageName = $nProduct->getId() . "." . $request->file("image")->extension();
            Storage::disk("public")->put($imageName, file_get_contents($request->file("image")->getRealPath()));
            $nProduct->setImage($imageName);
            $nProduct->save();
        }

        return back();
    }

    public function delete($id)
    {
        Product::destroy($id);
        return back();
    }

    public function edit($id)
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Edit Product - Online Store Demo";
        $viewData["product"] = Product::findOrFail($id);
        return view("admin.product.edit")->with("viewData", $viewData);
    }

    public function update(Request $request, $id)
    {
        Product::validate($request);

        $eProduct = Product::findOrFail($id);
        $eProduct->setName($request->input("name"));
        $eProduct->setDescription($request->input("description"));
        $eProduct->setPrice($request->input("price"));
        $eProduct->setAmount($request->input("amount"));
        $eProduct->setCurrency($request->input("currency"));
        $eProduct->setBrand($request->input("brand"));
        $eProduct->setCategory($request->input("category"));
        $eProduct->setAvailableStock($request->input("available_stock"));
        $eProduct->setIsActive($request->input("is_active"));

        if ($request->hasFile("image")) {
            $imageName = $eProduct->getId() . "." . $request->file("image")->extension();
            Storage::disk("public")->put($imageName, file_get_contents($request->file("image")->getRealPath()));
            $eProduct->setImage($imageName);
        }

        $eProduct->save();

        return redirect()->route("admin.product.index");
    }
}
