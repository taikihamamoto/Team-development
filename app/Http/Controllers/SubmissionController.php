<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;
use App\Http\Requests\SubmissionRequest;

class SubmissionController extends Controller
{

    public function index()
    {
        return view("articles.submission");
    }
    
    public function exeStore(SubmissionRequest $request)
    {
        var_dump($request);
        // 画像を受け取る
        $upload_image = $request->file('image');

        if($upload_image) {
            //アップロードされた画像を保存
            $path = $upload_image->store('images','public');
            // 画像の保存に成功したらDBに記録する
            if($path){
                Submission::create([
                    "image" => $upload_image->getClientOriginalName(),
                    "image_path" => $path
                ]);
            }
        }
        //ブログのデータ受け取る
        $inputs = $request->all();

        \DB::beginTransaction();
        try{
            //ブログを登録する
            Submission::create($inputs);
            \DB::commit();
        } catch(\Throwable $e) {
            \DB::rollback();
            abort(500);
        }

        return redirect(route('top_page'));
    }
}
