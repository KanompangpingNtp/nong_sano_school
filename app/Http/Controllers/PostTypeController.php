<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostType;

class PostTypeController extends Controller
{
    //
    public function PostTypeIndex()
    {
        $postTypes = PostType::all();

        return view('admin.post.post_type.post_type', compact('postTypes'));
    }

    public function PostTypeCreate(Request $request)
    {
        $request->validate([
            'type_name' => 'required|string|max:255',
        ]);

        PostType::create([
            'type_name' => $request->type_name,
        ]);

        return redirect()->back()->with('success', 'Post type created successfully!');
    }

    public function PostTypeUpdate(Request $request, $id)
    {
        $postType = PostType::findOrFail($id);
        $postType->update([
            'type_name' => $request->type_name
        ]);

        return redirect()->back()->with('success', 'Post type update successfully!');
    }

    public function PostTypeDelete($id)
    {
        $postType = PostType::findOrFail($id);

        $postType->delete();

        return redirect()->back()->with('success', 'Post type delete successfully!');
    }
}
