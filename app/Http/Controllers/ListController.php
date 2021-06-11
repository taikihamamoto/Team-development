<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index()
    {
        $submission = Submission::orderBy('id', 'desc')->get();
        return view(
            "articles.list",
        ['submission' => $submission]
    );
    }
}
