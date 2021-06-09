<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;
use App\Http\Requests\SubmissionRequest;

class TopController extends Controller
{
    public function index()
    {
        $submission = Submission::orderBy('id', 'desc')
                                        ->limit(3)->get();
        return view(
            "articles.top",
        ['submission' => $submission]
    );
    }

}
