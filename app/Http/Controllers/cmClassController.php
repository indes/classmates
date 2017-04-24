<?php

namespace Classmate\Http\Controllers;

use Classmate\Http\Model\cmClass;
use Classmate\http\Model\User;
use Illuminate\Http\Request;

use Classmate\Http\Requests;
use Classmate\Http\Controllers\Controller;
use DB;

class cmClassController extends Controller
{
    public $c;

    function __construct(){
        $this->c=cmClass::find(session('user')->stuClassId);
        $this->c->members=User::where('stuClassId',session('user')->stuClassId)->get();
        $j=collect(DB::table('cm_journal')
            ->leftJoin('cm_user', 'cm_journal.jAuthorId', '=', 'cm_user.id')
            ->where('stuClassId',session('user')->stuClassId)
            ->orderBy('jPublishDate', 'desc')
            ->get());
        $this->c->Journals=$j;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd($_GET['asd']);
        return view('class.index')->withClass($this->c);
    }

    public function mbr()
    {
        return view('class.member')->withClass($this->c);
    }

}
