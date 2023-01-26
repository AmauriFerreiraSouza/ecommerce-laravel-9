<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(CategoryFormRequest $request)
    {
        $validatedData = $request->validated();

        $category = new Category;
        $category->name = $validatedData['name'];
        $category->slug = Str::slug($validatedData['slug']);
        $category->description = $validatedData['description'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');//primeiro eu pego o arquivo enviado pelo request
            $ext = $file->getClientOriginalExtension();//pego a extenção original
            $filename = time().'.'.$ext;//crio um novo nome para este arquivo

            $file->move('uploads/category/', $filename);//movo ele para um pasta desejada

            $category->image = $filename;//salvo o nome do arquivo
        }

        $category->meta_title = $validatedData['meta_title'];
        $category->meta_keyword = $validatedData['meta_keyword'];
        $category->meta_description = $validatedData['meta_description'];

        $category->status = $request->status == true ? '1':'0';
        $category->save();

        return redirect('admin/category')->with('message', 'Categoria adicionada com sucesso!');
    }
}
