<?php
<<<<<<< HEAD
//phpだよ
namespace App\Http\Controllers;

use DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

use Collective\Html\HtmlServiceProvider;

use App\Http\Requests\PostRequest;
use App\tb_blogs;

=======
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
>>>>>>> origin/test
class FormController extends Controller
{
 
    /**
     * 入力画面
     *
     * @return string
     */
    public function input(Request $request)
    {
<<<<<<< HEAD
        return view('input', ['id'=>$request->id], ['pass'=>$request->pass]);
=======
        return view('input',['id'=>$request->id],['pass'=>$request->pass]);
>>>>>>> origin/test
    }
 
    /**
     * 完了画面
     *
     * @return string
     */
<<<<<<< HEAD
    public function save(PostRequest $request)
    {
        return view('complete', ['subject'=>$request->subject], ['text'=>$request->text]);
    }

    /**
     * 入力画面
     *
     * @return string
     */
    public function test()
    {
        return view('input');
    }

    public function write(Request $request)
    {
        $subject=$request->input('subject');
        $text=$request->input('text');
        $today=Carbon::today();
        

        DB::insert("insert into tb_blogs(subject, text) values ('$subject','$text')");
        
        return redirect('/');
    }
    
    public function view()
    {
        $views = tb_blogs::all()->SortByDesc("id");
        /*
        $views = response()->json([
            'data' => $views
        ],200,[],
        JSON_UNESCAPED_UNICODE
        );
        */
        //echo $views[1]->subject;
        return view('view', compact('views'));
    }
    
    
    public function get($check_ip)
    {
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
=======
    public function save()
    {
        return view('form.complete');
    }
 
}
>>>>>>> origin/test
