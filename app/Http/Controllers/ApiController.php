<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    //


    public function tiendasXProduct($producto)
    {

        try {
            //code...
            return   DB::select('select sales_posts.id ,sales_posts.name as caseta ,products.name
            from products,sales_posts 
            where products.sales_posts_id=sales_posts.id and products.name like ?', ['%'.$producto.'%']);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
