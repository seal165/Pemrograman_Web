<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Barryvdh\DomPDF\Facade\Pdf;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.categories', compact('categories'));
    }

    public function create()
    {
        return view('categories.categories-entry');
    }

    public function store(Request $request)
    {
       $request->validate([
            'transportation' => 'required',
            'region' => 'required',
            'date' => 'required',
            'name' => 'required',
            'from_location' => 'required',
            'to_location' => 'required',
            'time' => 'required',
        ]);

        Category::create([
            'trasportation' => $request->trasnportation,
            'region' => $request->region,
            'date' => $request->date,
            'name' => $request->name,
            'from_location' => $request->from_location,
            'to_location' => $request->to_location,
            'time' => $request->time,
        ]);

        return redirect('/category');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories.categories-edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'transportation' => 'required',
            'region' => 'required',
            'date' => 'required',
            'name' => 'required',
            'from_location' => 'required',
            'to_location' => 'required',
            'time' => 'required',
        ]);

        $category = Category::find($id);

        $category->update([
            'trasportation' => $request->trasnportation,
            'region' => $request->region,
            'date' => $request->date,
            'name' => $request->name,
            'from_location' => $request->from_location,
            'to_location' => $request->to_location,
            'time' => $request->time,
        ]);

        return redirect('/category');
    }

    public function delete($id)
    {
        $category = Category::find($id);
        return view('categories.categories-delete', compact('category'));
    }

    public function cetak(){
        $categories = Category::all();
        $pdf = Pdf::loadview('categories.categories-cetak', compact('categories'));
        return $pdf->download('laporan-categories.pdf');
    }

}