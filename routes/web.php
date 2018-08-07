<?php

use App\tb_blogs;

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

Route::get('/', function () {
    return redirect('/Laravel_de_Blog');
});
/*
Route::get('/page/', function() {
	return view('page.index');
});
*/
Route::group(['as' => 'form::'], function() {

	Route::get('/input',['as' => 'input', 'uses' => 'FormController@test']);
	
	Route::post('/save',['as' => 'save', 'uses' => 'FormController@save']);

});

Route::post('/write', 'FormController@write');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/view', 'FormController@view');


Route::get('/test', function() {
	$datas = tb_blogs::all();
	$check_ip = Request::ip();
	return redirect('/ipoe/172.20.40.12');
	echo Request::ip();
	foreach ($datas as $view) {
		echo $view->subject;
	}
});


//$check_ip = '172.20.40.12';
Route::get('/ipoe', function(){



$check_ip = '172.20.40.12';
$url = 'https://whois.nic.ad.jp/cgi-bin/whois_gw?key=' . $check_ip;
        mb_language("Japanese");
        mb_regex_encoding("UTF-8");
        // TODO: Curlを使う場合は不要なのでコメントアウトする
        $context = stream_context_create([
            'http' => [
                'timeout' => 8
            ]
        ]);
		
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
	
    });



Route::redirect('/ipoere', '/ipoe',302);





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/Laravel_de_Blog',function() {

    return view('cleanblog');

});

Route::post('/profile', function () {
    return view('profile');
    
});
