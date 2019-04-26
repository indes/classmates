<?php

namespace Classmate\Http\Controllers;

use Classmate\Http\Model\cmClass;
use Classmate\http\Model\User;
use Illuminate\Http\Request;

use Classmate\Http\Requests;
use Classmate\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class AccountController extends Controller
{
    private $viewinfo=array('active'=>'set');

    public function pwdset(Request $request)
    {
        $i=Input::get();
        $this->validate($request, [
            'newpassword' => 'required|alpha_dash|max:30|min:6',
        ]);
        if($i['oldpassword']){
            if($i['newpassword']&&$i['rnewpassword']){
                if($i['newpassword']==$i['rnewpassword']){
//                    $u = User::getById(session('user')->id);
                    $u=User::find(session('user')->id);
                    if(md5($i['oldpassword'])==$u->password){
                        $u->password=md5($i['newpassword']);
                        $u->save();
                        return view('index.redirect')->withRdurl(url('home'))->withMsg('修改成功！');

                    }else{
                        return redirect()->back()->withInput()->withErrors('原密码错误！');
                    }
                }else{
                    return redirect()->back()->withInput()->withErrors('两次输入密码不相同！');
                }
            }else{
                return redirect()->back()->withInput()->withErrors('所有项都要输入！');
            }
        }else{
            return redirect()->back()->withInput()->withErrors('请原输入密码！');
        }
    }

    public function profileset(Request $request)
    {
        if ($request->isMethod('post')) {
            //
            $i=Input::get();
            $u=User::find(session('user')->id);
            if($request->file('stuimg')){
                $u->stuImg=file_get_contents($request->file('stuimg')->getRealPath());
            }
//            dd($request->file('stuimg')->getRealPath());
//            dd($request->file('stuimg'));
            $u->stuClassId=$i['classid'];
            $u->userName=$i['name'];
            $u->stuBio=$i['bio'];
            $u->stuName=$i['rname'];
            $u->stuSex=$i['sex'];
            $u->stuQQ=$i['QQ'];
            $u->stuPhone=$i['phone'];
            $u->stuNum=$i['stunum'];
            $u->email=$i['email'];

            $u->save();
            session(['user'=>$u]);

            return view('index.redirect')->withRdurl(url('home'))->withMsg("修改成功！");

        };
        if ($request->isMethod('get')) {
            $this->viewinfo['title']='资料修改';
            $u = User::getById(session('user')->id);
//            $u=User::find(session('user')->id);
            $c=cmClass::find($u->stuClassId);
            $sc=cmClass::all();
            return view('set.profile')->withUser($u)->withClass($c)->withSc($sc)->withInfo($this->viewinfo);
        };
    }
}
