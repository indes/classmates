<?php

namespace Classmate\Http\Controllers\Home;

use Classmate\Http\Model\Journal;
use Illuminate\Http\Request;
use Classmate\Http\Model\User;
use Classmate\Http\Requests;
use Classmate\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id=null)
    {
        if(isset($id)){
            return view('/home/index')->withUser(User::find($id));
        }else{
            return view('home/index')->withUser(User::find(session('userid')));
        }

        //
    }

    public function login()
    {
        return view('home/login');

    }

    public function publish()
    {
        $pbinfo=Input::get('pbinfo');
        $j=new Journal();
        $j->jData= $pbinfo;
        $j->jAuthorId=session('userid');
        $j->jPublishDate=date("Y-m-d H:i:s");
        $j->save();
        return "发布成功";
    }


}
