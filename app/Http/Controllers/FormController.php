<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class FormController extends Controller
{
 
    /**
     * 入力画面
     *
     * @return string
     */
    public function input(Request $request)
    {
        return view('input',['id'=>$request->id],['pass'=>$request->pass]);
    }
 
    /**
     * 完了画面
     *
     * @return string
     */
    public function save()
    {
        return view('form.complete');
    }
 
}