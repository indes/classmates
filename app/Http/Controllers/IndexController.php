<?php

namespace Classmate\Http\Controllers;
use Classmate\Http\Model\cmClass;
use DB;
use Classmate\Http\Model\Journal;
use Classmate\Http\Model\User;

use Illuminate\Http\Request;

use Classmate\Http\Requests;
use Classmate\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function index()
    {
        //从数据库中取出相关动态
        $j=DB::table('cm_journal')
            ->leftJoin('cm_user', 'cm_journal.jAuthorId', '=', 'cm_user.id')
            ->where('stuClassId',session('user')->stuClassId)
            ->orderBy('jPublishDate', 'desc')
            ->paginate(6);
        $u=session('user');
        $u->jcount=Journal::where('jAuthorId',$u->id)->get()->count();
        $u->classcount=User::where('stuClassId',$u->stuClassId)->get()->count();
//        dd($u);
        return view('index.index')->withUser($u)->withJournals($j);
    }


    public function rd()
    {
        return view('index.redirect')->withMsg("跳转页面");
    }


    public function search()
    {
        if(isset($_GET['q'])&&$_GET['q']!=''){

            $res['key']=$_GET['q'];
            $q='%'.$_GET['q'].'%';
            $res['u']=User::where('stuName','like',$q)->orWhere('userName','like',$q)->get();
            $res['c']=cmClass::where('className','like',$q)->get();
            $res['j']=collect(DB::table('cm_journal')
                ->leftJoin('cm_user', 'cm_journal.jAuthorId', '=', 'cm_user.id')
                ->where('jData','like',$q)
                ->orderBy('jPublishDate', 'desc')
                ->get());
            return view('index.search')->withRes($res);
        }else{
            return view('index.redirect')->withMsg("请输入关键词！")->withRdurl(url('/'));
        }
    }

    public function test()
    {
        $u=User::where('id',11)->get();
        Header( "Content-type: image/gif");
        echo $u[0]->stuImg;
    }

}
