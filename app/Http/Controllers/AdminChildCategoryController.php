<?php

namespace App\Http\Controllers;

use App\Models\ChildCategory;
use App\Models\ParentCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminChildCategoryController extends Controller
{
    public function index()
    {
        $childCategories = ChildCategory::with('parentCategory')->get();
        return view('Admin.categories.child.index', compact('childCategories'));
    }

    public function create()
    {
        $parentCategories = ParentCategory::all();
        return view('Admin.categories.child.add', compact('parentCategories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'descriptions' => 'required|string',
            'category_parent_id' => 'nullable|exists:parent_categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $childCategory = new ChildCategory($request->all());

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('child_categories', 'public');
            $childCategory->image = $path;
        }

        $childCategory->save();

        return redirect()->route('child-categories.index')->with('success', 'Child Category created successfully!');
    }

    public function edit($id)
    {
        $childCategory = ChildCategory::findOrFail($id);
        $parentCategories = ParentCategory::all();
        return view('Admin.categories.child.edit', compact('childCategory', 'parentCategories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'descriptions' => 'required|string',
            'category_parent_id' => 'nullable|exists:parent_categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $childCategory = ChildCategory::findOrFail($id);
        $childCategory->fill($request->all());

        if ($request->hasFile('image')) {
            if ($childCategory->image) {
                Storage::disk('public')->delete($childCategory->image);
            }
            $path = $request->file('image')->store('child_categories', 'public');
            $childCategory->image = $path;
        }

        $childCategory->save();

        return redirect()->route('child-categories.index')->with('success', 'Child Category updated successfully!');
    }

    public function destroy($id)
    {
        $childCategory = ChildCategory::findOrFail($id);
        if ($childCategory->image) {
            Storage::disk('public')->delete($childCategory->image);
        }
        $childCategory->delete();

        return redirect()->route('child-categories.index')->with('success', 'Child Category deleted successfully!');
    }
}
