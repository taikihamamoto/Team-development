<!DOCTYPE html>
<html lang="ja">

<head>
  <meta name="viewport" content="width=device-width, initial-scale= 1.0">
  <meta http-equiv="content-type" charset="utf-8">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
  <title>投稿ページ</title>
</head>

<body>
  <script src="{{ asset('js/script.js') }}"></script>
  <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input name="main_title" type="text" value="">
    <div>
      <input name="title_1" type="text" value="">
      <input name="text_1" type="text" value="">
    </div>
    <div>
      <input name="title_2" type="text" value="">
      <input name="text_2" type="text" value="">
    </div>
    <div>
      <input name="title_3" type="text" value="">
      <input name="text_3" type="text" value="">
    </div>
    <div>
      <input name="image" type="file" value="" accept="image/png, image/jpeg">
    </div>
    <div>
      <input name="money_goals" type="number" value="">
    </div>
    <div>
      <input name="reception_deadline" type="date" value="">
    </div>
    <input name="submit" type="submit" onclick="submissionChk()" value="送信">
  </form>
</body>

</html>