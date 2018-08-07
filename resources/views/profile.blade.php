@extends('layouts.app')
@section('content')
<html lang = "ja">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>確認画面</title>
  </head>
  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">タイトル</h3>
  </div>
  <div class="panel-body">
    デフォルトのパネル
  </div>
</div>
  <body>
    <h3>
	<?php foreach($views as $value){
    echo '<div class="panel panel-info">'.$value->subject.'</h3>';
    echo '</div>';
    echo '</div>';
    echo '<div class="panel-body">'.$value->text;
    echo '</div>';
    echo '</div>';
    // echo "題名:".$value->subject."<br>";
    // echo "本文:".$value->text."<br>";
	}
	?>
	<br>
   ここはプロフィール画面
    </h3>
  </body>
        </div>
    </div>
  </div>
</html>
@endsection
