<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\File;
class HomeController extends Controller
{
    public function ShowHome(){
        $users = User::all();
        $products = Product::all();
        $categories = Category::all();
        return view('client.home')->with('users', $users)
        ->with('products', $products)->with('categories',$categories);;
    }
}
