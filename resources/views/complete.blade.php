@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang = "ja">
  <head>
    <meta charset = "utf-8">
	<title>確認画面</title>
  </head>
  <body>
	<h3>
	題名:{{$subject}}
	<br>
	本文:{{$text}}
	<br><br>
	以上の内容で登録します。
	</h3>

	<form method="POST" action="/write">
		{{ csrf_field() }}
		<input type="hidden" name="subject" value="{{$subject}}">
		<input type="hidden" name="text" value="{{$text}}">
		<button type="submit" onclick="confirm()">OK!</button>
	</form>

	<script>
		var confirm = function() {
			alert('{{$subject}}{{$text}}で登録しました。');
		}
	</script>
  </body>
</html>
@endsection
