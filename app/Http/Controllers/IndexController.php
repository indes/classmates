<?php

namespace Classmate\Http\Controllers;
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
        return view('index')->withUser(session('user'))->withJournals($j);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
