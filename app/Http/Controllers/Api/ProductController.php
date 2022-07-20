<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductCreateRequest;
use App\Http\Resources\Product\ProductCollection;
use App\Http\Resources\Product\ProductResource;
use App\Models\Product;
use App\Models\ProductGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($paginate)
    {
        return new ProductCollection(Product::with('gallery')->paginate($paginate));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductCreateRequest $request): ProductResource
    {
        $request = $request->validated();
        $thumbnail = Storage::disk('public')->put('product/gallery', $request['thumbnail']);
        $request['thumbnail'] = $thumbnail;

        $images = $request['gallery'];
        unset($request['gallery']);
        $gallery = [];

        $product = Product::create($request);

        foreach ($images as $image) {
            $imgPath = Storage::disk('public')->put('product/gallery', $image);
            array_push($gallery, $imgPath);

            ProductGallery::create([
                'product_id' => $product->id, 'image' => $imgPath,
            ]);
        }

        return new ProductResource(Product::with('gallery')->where('id', $product->id)->first());

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return new ProductResource($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
