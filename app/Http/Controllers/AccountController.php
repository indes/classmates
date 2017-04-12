<?php

namespace Classmate\Http\Controllers;

use Classmate\http\Model\User;
use Illuminate\Http\Request;

use Classmate\Http\Requests;
use Classmate\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function pwdset()
    {
        $i=Input::get();
        if($i['oldpassword']){
            if($i['newpassword']&&$i['rnewpassword']){
                if($i['newpassword']==$i['rnewpassword']){
                    $u=User::where('id','=',session('userid'))->first();
                    if(md5($i['oldpassword'])==$u->password){
                        $u->password=md5($i['newpassword']);
                        $u->save();
                        return "密码修改成功！";
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
}
