<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index()
    {
        $data = Products::all();
        return $data;
    }

    public function singleProduct($id)
    {
        try {
            return Products::find($id);
        } catch (\Exception $e) {
            return response('Can not get product information', 500);
        }
    }

    public function search($keyword)
    {
        try {
            return Products::where('name', 'LIKE', '%' . $keyword . '%')->get();
        } catch (\Exception $e) {
            return response('Can not find aby products', 500);
        }
    }

    public function create(Request $request)
    {
        try {
            $product = new Products;

            $product->name = $request->name;
            $product->sku = $request->sku;
            $product->photo = $request->photo;
            $product->warehouse_qty = $request->warehouse_qty;
            $product->price = $request->price;

            $product->save();
            return 'Product successfully created';
        } catch (\Exception $e) {
            return response('Can not save the product', 500);
        }
    }

    public function edit(Request $request, $id)
    {

        try {
            $product = Products::find($id);

            $product->name = $request->name;
            $product->sku = $request->sku;
            $product->photo = $request->photo;
            $product->warehouse_qty = $request->warehouse_qty;
            $product->price = $request->price;

            $product->save();
            return 'Product successfully updated';
        } catch (\Exception $e) {
            return response('Can not edit this product', 500);
        }
    }

    public function delete($id)
    {
        try {
            Products::find($id)->delete();
            return 'Product successfully deleted';
        } catch (\Exception $e) {
            return response('Something went wrong', 500);
        }
    }
}
