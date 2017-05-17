<?php

namespace Classmate\Http\Controllers\Home;

use Classmate\Http\Model\cmClass;
use Classmate\http\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use Classmate\Http\Requests;
use Classmate\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login()
    {
        $i=Input::get();
        if($i['password']){
            if($u=User::where('email','=',$i['email'])->first()){
                if($u->password==md5($i['password'])){
//                    session(['userid'=>$u->id,'username'=>$u->stuName,'classid'=>$u->stuClassId]);

                    session(['user'=>$u]);
                    return redirect()->route('index');

                }else{
                    return redirect()->back()->withInput()->withErrors('用户名或密码错误！');
                }
            }else{
                return redirect()->back()->withInput()->withErrors('用户名或密码错误！');
            }
        }else{
            return redirect()->back()->withInput()->withErrors('请输入密码！');
        }
    }

    public function logout()
    {
        if(session('user')){
            session(['user'=>null]);
            return view('index.redirect')->withRdurl(url('auth/login'))->withMsg('退出成功！');
        }
    }

    public function signup(Request $request)
    {

        if ($request->isMethod('post')) {
//            注册用户
            $i=Input::get();
            if($i['email']&&$i['name']&&$i['Password']&&$i['confirmPassword']&&$i['classid']){
                if($i['Password']==$i['confirmPassword']){
                    //判断邮箱是否存在
                    if(!(User::where('email','=',$i['email'])->first())){
                        $u=new User;

                        //判断班级是否存在
//                        if(($c=cmClass::where('className','=',$i['class'])->first())){
//                            $u->stuClassId=$c->classid;
//                        }else{
//                            $c=new cmClass;
//                            $c->className=$i['class'];
//                            $c->save();
//                            $u->stuClassId=$c->classid;
//                        }

                        $u->stuClassId=$i['classid'];
                        $u->stuName=$i['name'];
                        $u->stuSex=$i['sex'];
                        $u->email=$i['email'];
                        $u->password=md5($i['Password']);
                        $u->save();
                        return view('index.redirect')->withRdurl(url('auth/login'))->withMsg('注册成功！');
                    }else{
                        return redirect()->back()->withInput()->withErrors('该邮箱已经注册！');
                    }
                }else{
                    return redirect()->back()->withInput()->withErrors('两次输入的密码不一致！');
                }
            }else{
                return redirect()->back()->withInput()->withErrors('所有的信息都要填写！');
            }
        };

        if ($request->isMethod('get')) {
            //显示注册页面
            return view('home.signup')->withInfo(['title'=>'注册'])->withSc(cmClass::all());
        };



    }
}
