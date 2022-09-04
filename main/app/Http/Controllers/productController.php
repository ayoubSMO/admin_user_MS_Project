<?php

namespace App\Http\Controllers;

use App\Jobs\ProductLiked;
use App\Models\Product;
use App\Models\ProductUser;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;
use Response;

class productController extends Controller
{
    public function index(){
        return Product::all();
    }

    public function like($id ,Request $request){
        $response = \Http::get('http://docker.for.mac.localhost:8000/api/user');
        $user = $response->json();

        try{
        $productUser = ProductUser::create([
            'user_id' => $user['id'],
            'product_id' => $id
        ]);

        ProductLiked::dispatch($productUser->toArray());

        return response([
            'message' => 'success'
        ]);

    }catch(\Exception $exception){
        return response(
            [
                'error' => 'You already likes this product !!'
            ], HttpResponse::HTTP_BAD_REQUEST);
    }
    }
}
