<?php

namespace App\Http\Controllers;

use App\Models\Comment_Filters;
use Illuminate\Http\Request;

class CommentFilterController extends Controller
{
    public function listAdmin()
    {
        $commentFilters = Comment_Filters::paginate(request()->input('per_page', 8), ['*'], 'page', request()->input('page', 1));; 
        return view('admins.comment_filter.list', ['commentFilters' => $commentFilters, "selected" => "comment_filter"]);
    }

    // Show the form for creating a new comment filter
    public function create()
    {
        return view('admins.comment_filter.create');
    }

    // Store a new comment filter
    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'content' => 'required|string|max:255',
        ]);

        // Create the new comment filter
        Comment_Filters::create([
            'content' => $request->content,
        ]);

        // Redirect back to the list with a success message
        return redirect()->route('comment_filter.listAdmin')->with('success', 'Lọc bình luận đã thêm thành công!');
    }
    public function destroy($id)
    {
        // Find the comment filter by its ID
        $commentFilter = Comment_Filters::findOrFail($id);

        // Delete the comment filter
        $commentFilter->delete();

        // Redirect back with a success message
        return response()->json([
            "success" => true
        ]);
    }
    
}
// public function store(Request $request, CommentFilterController $commentFilterController)
//     {
//         // Validate the incoming request
//         $request->validate([
//             'content' => 'required|string|max:255',
//         ]);

//         // Filter the comment content
//         $filteredContent = $commentFilterController->filterCommentContent($request->content);

//         // Create and save the comment with the filtered content
//         Comment::create([
//             'content' => $filteredContent,
//             'user_id' => auth()->id(), // Assuming you are storing the logged-in user's ID
//         ]);

//         // Redirect back with a success message
//         return redirect()->back()->with('success', 'Comment added successfully!');
//     }

//     public function filterCommentContent($content)
//     {
//         // Retrieve all filtered words from comment_filters table
//         $filteredWords = Comment_Filters::pluck('content')->toArray();

//         // Replace any filtered word in the comment with '***'
//         foreach ($filteredWords as $word) {
//             if (stripos($content, $word) !== false) {
//                 $content = str_ireplace($word, '***', $content);
//             }
//         }

//         return $content;
//     }