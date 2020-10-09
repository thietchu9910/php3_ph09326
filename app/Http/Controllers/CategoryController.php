<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
   public function index(){
    $categories = Category::paginate(5);
    return view('admin.categories.index', ['categories'=>$categories]);
   }   
}
