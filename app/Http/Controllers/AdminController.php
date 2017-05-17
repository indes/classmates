<?php

namespace Classmate\Http\Controllers;

use Illuminate\Http\Request;
use Classmate\Http\Model\cmClass;
use Classmate\http\Model\User;

use Classmate\Http\Requests;
use Classmate\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Input;


class AdminController extends Controller
{
    private $viewinfo=array('active'=>'admin');

    function __construct()
    {
        if(session('user')->isadmin!=1){
//            echo "没有权限";
//            return view('index.redirect')->withRdurl(url('\\'))->withMsg('当前账户没有管理权限！');
        }
    }

    public function index()
    {
        //
        $this->viewinfo['title']='后台管理';
        return view('admin.admin')->withInfo($this->viewinfo);
    }


    public function user($id=null){
        $this->viewinfo['title']='用户管理';
        $u=collect(
            DB::table('cm_user')
                ->leftJoin('cm_class','cm_user.stuClassId','=','cm_class.classid')
                ->get()
        );
        return view('admin.user')->withInfo($this->viewinfo)->withUsers($u);
    }


    public function pwd(Request $request,$id)
    {
        if ($request->isMethod('post')) {
            $i=Input::get();
            if($i['newpassword']==$i['rnewpassword']){
                $u=User::find($id);
                $u->password=md5($i['newpassword']);
                $u->save();
                return view('index.redirect')->withRdurl(url('admin\user'))->withMsg('修改成功！');

            }else{
                return redirect()->back()->withErrors('两次输入密码不相同！');
            }
        };

        if ($request->isMethod('get')) {
            $this->viewinfo['title']='密码修改';
            return view('admin.pwd')->withInfo($this->viewinfo)->withId($id);
        };
    }

    public function profile(Request $request,$id)
    {
        if ($request->isMethod('post')) {
            $i=Input::get();
            $u=User::find($id);
            if($request->file('stuimg')){
                $u->stuImg=file_get_contents($request->file('stuimg')->getRealPath());
            }

            $u->isadmin=$i['role'];
            $u->userName=$i['name'];
            $u->stuBio=$i['bio'];
            $u->stuName=$i['rname'];
            $u->stuSex=$i['sex'];
            $u->stuQQ=$i['QQ'];
            $u->stuPhone=$i['phone'];
            $u->stuNum=$i['stunum'];
            $u->email=$i['email'];
            $u->save();
            return view('index.redirect')->withRdurl(url('admin/user'))->withMsg("修改成功！");
        };

        if ($request->isMethod('get')) {
            $this->viewinfo['title']='资料修改';
            $u=User::find($id);
            $c=cmClass::find($u->stuClassId);
            return view('admin.profile')->withUser($u)->withClass($c)->withInfo($this->viewinfo);
        };
    }


    public function classadmin(Request $request,$id=null)
    {

        if ($request->isMethod('post')) {
            $i=Input::get();
            if(isset($i['classname'])&&isset($i['major'])){            //数据验证
                $c=cmClass::where('classid','=',$id)->first();
                $c->classname=$i['classname'];
                $c->major=$i['major'];
                $c->save();
                return view('index.redirect')->withRdurl(url('admin/class'))->withMsg("修改成功！");

            }else{
                return redirect()->back()->withErrors('所有信息都要填写！');
            }

        };

        if ($request->isMethod('get')) {
            if ($id!=null){
                //展示班级详情
                $this->viewinfo['title']='班级修改';

                $c=cmClass::where('classid','=',$id)->get();
//                dd($c);
                return view('admin.classset')->withClass($c)->withInfo($this->viewinfo);

            }else{
                //展示班级列表
                $c=DB::select('select a.*,count(b.id) as count from cm_class a,cm_user b where a.classid = b.stuClassid group by a.classid;');
                $this->viewinfo['title']='班级管理';
                return view('admin.class')->withClasses($c)->withInfo($this->viewinfo);
            }
        };

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
