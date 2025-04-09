<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){
        $viewData = [];
        $viewData["title"] = "Home Page - GiftXpress";
        return view('home.index')->with('viewData',$viewData);
    }

    public function about(){
        $viewData = [];
        $viewData['title'] = 'About Us - GiftXpress';
        $viewData['subtitle'] = 'About Us';
        $viewData['description'] = 'This is the about page of our online giftcards store';
        $viewData['author'] = 'Indika|Sujeewa';

        return view('home.about')->with('viewData',$viewData);
    }
}
