<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index(){
        return Product::all();
    }

    public function like($id ,Request $request){
        echo 'im here atbbi !!' ;

        $response = \Http::get('http://docker.for.win.localhost:8000/api/user');
        return $response->json();
    }
}
