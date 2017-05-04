<?php

namespace Classmate\Http\Controllers;

use Classmate\Http\Model\ClassFiles;
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

        $f=ClassFiles::where('classid',session('user')->stuClassId)
            ->where('status','1')
            ->orderBy('created_at','desc')
            ->get()->count();
        $this->c->filenum=$f;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('class.index')->withClass($this->c);
    }


    public function files()
    {
        return view('class.files');

    }
    public function mbr()
    {
        return view('class.member')->withClass($this->c);
    }

}
