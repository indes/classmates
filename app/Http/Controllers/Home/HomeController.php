<?php

namespace Classmate\Http\Controllers\Home;

use Classmate\Http\Model\Journal;
use Illuminate\Http\Request;
use Classmate\Http\Model\User;
use Classmate\Http\Requests;
use Classmate\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Redis;

class HomeController extends Controller
{
    private $viewinfo = array('active' => 'home');

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = null)
    {

        if (!isset($id)) $id = session('user')->id;
        $u = User::get($id);
        $j = Journal::where('jAuthorId', $id)->orderBy('jPublishDate', 'desc')->paginate(6);
        $j->count = Journal::where('jAuthorId', $id)->get()->count();

        $u->jcount = Journal::where('jAuthorId', $u->id)->get()->count();
        $u->classcount = User::where('stuClassId', $u->stuClassId)->get()->count();
        $this->viewinfo['title'] = $u->userName . '的主页';

        return view('home/home')->withUser($u)->withJournal($j)->withInfo($this->viewinfo);
        //
    }

    public function login()
    {
        $this->viewinfo['title'] = '登录';
        return view('home/login')->withInfo($this->viewinfo);
    }

    public function publish()
    {
        $pbinfo = Input::get('pbinfo');
        $j = new Journal();
        $j->jData = $pbinfo;
        $j->jAuthorId = session('user')->id;
        $j->jPublishDate = date("Y-m-d H:i:s");
        $j->save();
        return view('index.redirect')->withMsg("发布成功！")->withRdurl(url('/'));
    }

    public function del($id)
    {
        $u = session('user');
        $j = Journal::where('id', $id)->first();
        if ($j) {
            if ($j->jAuthorId == $u->id) {
                if ($j->delete()) {
                    return response()->json(['status' => 1]);
                } else {
                    return response()->json(['status' => 2]);
                }
            } else {
                return response()->json(['status' => 2]);
            }
        } else {
            return response()->json(['status' => 2]);
        }
    }

}
