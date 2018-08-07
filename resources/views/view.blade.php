@extends('layouts.app') 
@section('content')
<html lang="ja">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>確認画面</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php foreach ($views as $value) {
    echo '<div class="post-preview">';
    echo '<a href="post.html">';
    echo '<h2 class="post-title">'
                                .$value->subject.
                            '</h2>';
    echo '<h3 class="post-subtitle">'
                                .$value->text.
                            '</h3>
            </a>

            <p class="post-meta">'.$value->created_at.'</p>
            </div>
            <hr>';

    // echo '<div class="panel panel-info">'.$value->subject;


            // echo '<div class="panel-body">'.$value->text;
            // echo '</div>';
            // echo '</div>';
            // echo '</div>';
            // echo '</div>';
            // echo '</div>';
            // echo '</div>';
            // echo "題名:".$value->subject."<br>";
            // echo "本文:".$value->text."<br>";
}
    ?>
</body>
</div>
</div>
</div>

</html>
@endsection