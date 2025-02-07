<?php

namespace App\Http\Controllers;

//import model product
use App\Models\Facility; 

//import return type View
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        //get all products
        $fasilitas = Facility::latest()->paginate(10);

        //render view with products
        return view('fasilitas.index', compact('fasilitas'));
    }
}