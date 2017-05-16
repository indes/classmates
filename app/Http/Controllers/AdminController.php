<?php

namespace Classmate\Http\Controllers;

use Illuminate\Http\Request;

use Classmate\Http\Requests;
use Classmate\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AdminController extends Controller
{
    private $viewinfo=array('active'=>'set');

    public function index()
    {
        //
        $this->viewinfo['title']='后台管理';

        return view('admin.admin')->withInfo($this->viewinfo);
    }

    public function file()
    {
        $this->viewinfo['title']='文件管理';
        $f=collect(
            DB::table('cm_files')
                ->leftJoin('cm_user', 'cm_files.userid', '=', 'cm_user.id')
                ->leftJoin('cm_class','cm_files.classid','=','cm_class.classid')
                ->where('status','1')
                ->orderBy('created_at','desc')
                ->get()
        );
        return view('admin.file')->withInfo($this->viewinfo)->withFiles($f);
    }
}
