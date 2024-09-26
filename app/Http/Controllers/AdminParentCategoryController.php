<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\ParentCategory;

class AdminParentCategoryController extends Controller
{
    public function index()
    {
        $parentCategories = ParentCategory::get();
        return view('Admin.categories.parent.index', compact('parentCategories'));
    }

    public function create()
    {
        return view('Admin.categories.parent.add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:parent_categories',
            'descriptions' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('parent_categories', 'public');
            $validatedData['image'] = $imagePath;
        }

        ParentCategory::create($validatedData);

        return redirect()->route('parent-categories.index')->with('success', 'Parent Category added successfully');
    }

    public function edit(string $id)
    {
        $category = ParentCategory::findOrFail($id);

        return view('Admin.categories.parent.edit', compact('category'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'descriptions' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $category = ParentCategory::findOrFail($id);
        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->descriptions = $request->input('descriptions');

        if ($request->hasFile('image')) {
            if ($category->image) {
                Storage::disk('public')->delete($category->image);
            }

            $imagePath = $request->file('image')->store('parent_categories', 'public');
            $category->image = $imagePath;
        }

        $category->save();

        return redirect()->route('parent-categories.index')->with('success', 'Parent Category successfully updated.');
    }

    public function destroy(string $id)
    {
        $category = ParentCategory::findOrFail($id);

        if ($category->image) {
            Storage::disk('public')->delete($category->image);
        }

        $category->delete();

        return redirect()->route('parent-categories.index')->with('success', 'Parent Category successfully deleted.');
    }
}
