<?php
namespace App\Http\Controllers;

use DB; 
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

use Collective\Html\HtmlServiceProvider;

use App\Http\Requests\PostRequest;
use App\tb_blogs;

class IpoeController extends Controller
{

	public function get($check_ip) {
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
			// TODO: Curl用のコマンド
			//$websc = $this->get_html_curl($url);
			$html = mb_convert_encoding($websc, 'utf8', 'sjis');
		} catch (\Exception $e) {
			$html = "timeout";
		}
		return $html;
	}

}


