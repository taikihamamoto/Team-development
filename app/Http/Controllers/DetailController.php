<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index($id)
    {
        $detail = Submission::find($id);
        if (is_null($detail)) {
            \Session::flash('err_msg', 'データがありません。');
            return ridirect('home');
        }
        return view(
            "articles.detail",
        ['detail' => $detail]
    );
    }
}
