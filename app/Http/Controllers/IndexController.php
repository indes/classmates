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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return "hello";
//        $u=User::where('stuClassId',session('user')->stuClassId)->get();

        //从数据库中取出相关动态
        $j=DB::table('cm_journal')
            ->leftJoin('cm_user', 'cm_journal.jAuthorId', '=', 'cm_user.id')
            ->where('stuClassId',session('user')->stuClassId)
            ->orderBy('jPublishDate', 'desc')
            ->get();

//        dd($j);
        return view('index.index')->withUser(session('user'))->withJournals($j);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        if(isset($_GET['q'])){

            $res['key']=$_GET['q'];
            $q='%'.$_GET['q'].'%';
//            dd($q);

            $res['u']=User::where('stuName','like',$q)->get();
            $res['c']=cmClass::where('className','like',$q)->get();
            $res['j']=collect(DB::table('cm_journal')
                ->leftJoin('cm_user', 'cm_journal.jAuthorId', '=', 'cm_user.id')
                ->where('jData','like',$q)
                ->orderBy('jPublishDate', 'desc')
                ->get());
            return view('index.search')->withRes($res);
        }else{
            return "请输入关键词";
        }
    }


}
