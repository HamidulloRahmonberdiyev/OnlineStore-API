<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(): Collection
    {
        return Category::all();
    }

    public function create()
    {
       //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Category $category)
    {
        return $category;
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
