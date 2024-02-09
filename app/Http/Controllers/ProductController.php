<?php

namespace App\Http\Controllers;

use App\Jobs\ProductDeleted;
use App\Jobs\ProductJob;
use App\Jobs\ProductUpdated;
use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function show($id)
    {
        $product =  Product::query()->find($id);
        if (!is_object($product)){
            return response('This Product Not Fount', Response::HTTP_NOT_FOUND);
        }
        return response($product, Response::HTTP_NO_CONTENT);
    }

    public function store(Request $request)
    {
        $product = Product::query()->create($request->only('title','image'));
        ProductJob::dispatch($product->toArray())->onQueue('main_admin_queue');
        return response($product, Response::HTTP_CREATED);
    }
    public function update(Request $request,$id)
    {
        $product =  Product::query()->find($id);
        $product->update($request->only('title','image'));
        ProductUpdated::dispatch($product->toArray())->onQueue('main_admin_queue');
        return response($product, Response::HTTP_ACCEPTED);

    }

    public function destroy($id)
    {
        Product::destroy($id);
        ProductDeleted::dispatch($id)->onQueue('main_admin_queue');

        return response('Deleted Successfully', Response::HTTP_NO_CONTENT);
    }
}
