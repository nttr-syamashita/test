<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['as' => 'form::'], function() {
 
    // 入力画面
    Route::post('/input', ['as' => 'input', 'uses' => 'FormController@input']);
    // 完了画面
    Route::post('/save', ['as' => 'save', 'uses' => 'FormController@save']);
 
});

Route::get('/', function () {
    return view('welcome');
});




















//ここからIPoE
Route::get('/ipoe', function(){
//$check_ip = '172.20.40.12';
//$url = 'https://whois.nic.ad.jp/cgi-bin/whois_gw?key=172.20.40.12';
$context = stream_context_create([
            'http' => [
                'timeout' => 8
            ]
        ]);
$str = file_get_contents('http://yahoo.co.jp');
echo $str;
/*
mb_language("Japanese");
        mb_regex_encoding("UTF-8");
        // TODO: Curlを使う場合は不要なのでコメントアウトする
        $context = stream_context_create([
            'http' => [
                'timeout' => 8
            ]
        ]);
        echo "b";
        try {
            // TODO: Whoisの取得が不安定 Curlを使う場合はコメントアウトする
           
           $websc = file_get_contents($url, false, $context);
            echo "a";
            // TODO: Curl用のコマンド
            //$websc = $this->get_html_curl($url);
            $html = mb_convert_encoding($websc, 'utf8', 'sjis');
        } catch (\Exception $e) {
            $html = "timeout";
        }
		return $html;
*/
});


