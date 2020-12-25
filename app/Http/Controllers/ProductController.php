<?php

namespace App\Http\Controllers;
use App\Models\User;

use App\Models\product;
use Illuminate\Http\Request;
use App\Helpers\UploadPaths;

class ProductController extends Controller
{
  public function show(){
    return view('products.create');
}
public function save(Request $request){
    $productName=$request->get('product_name');
    $productPrice=$request->get('product_price');
    $fileurl = $request->file('product_photo');
    $createdBy=Auth()->User()->name;
    if(isset($fileurl)){
        $productPhotoName = uniqid("product_").'_'.$createdBy.'_'.'.'.$fileurl->getClientOriginalExtension();
        $fileurl ->move(UploadPaths::getUploadPath('product_photos'), $productPhotoName);
    }
    else{
        $productPhotoName='';
    }
   product::create([
       'name'=>$productName,
       'price'=>$productPrice,
       'photo'=>$productPhotoName,
       'created_by' =>$createdBy
   ]);
   return view('products.create');
}
}
