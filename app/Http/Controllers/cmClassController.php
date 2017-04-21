<?php

namespace Classmate\Http\Controllers;

use Classmate\Http\Model\cmClass;
use Classmate\http\Model\User;
use Illuminate\Http\Request;

use Classmate\Http\Requests;
use Classmate\Http\Controllers\Controller;

class cmClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $c=cmClass::find(session('classid'));
        $c->members=User::where('stuClassId',session('classid'))->get();
        return view('class.index')->withClass($c);
    }

}
