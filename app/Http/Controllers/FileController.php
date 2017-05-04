<?php

namespace Classmate\Http\Controllers;


use Classmate\Http\Model\ClassFiles;
use Classmate\Http\Model\cmClass;
use DB;
use Illuminate\Http\Request;

use Classmate\Http\Requests;
use Classmate\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;



class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $f=collect(
            DB::table('cm_files')
            ->leftJoin('cm_user', 'cm_files.userid', '=', 'cm_user.id')
            ->where('classid',session('user')->stuClassId)
            ->where('status','1')
            ->orderBy('created_at','desc')
            ->get()
        );


//        $f=ClassFiles::where('classid',session('user')->stuClassId)
//            ->where('status','1')
//            ->orderBy('created_at','desc')
//            ->get();
        return view('class.files')->withFiles($f)->withUser(session('user'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('class.upload');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('upfile')){
            $file=$request->file('upfile');
//            $filename=iconv("utf-8","gbk",$file->getClientoriginalName());

            //使用时间戳+用户id重命名文件以避免重名文件
            $path='classfiles\\'.session('user')->stuClassId.'\\'.time().'-'.session('user')->id.'.'.$file->guessClientExtension();

            //数据库操作
            $f=new ClassFiles();
            $f->userid=session('user')->id;
            $f->classid=session('user')->stuClassId;
            $f->name=$file->getClientoriginalName();
            $f->type=$file->getClientmimeType();
            $f->size=$file->getClientSize();
            $f->path=$path;
            $f->status=1;
            $f->save();
//            echo $file->getRealPath();

            //文件复制
            $d=Storage::disk('local')->put(
                $path, file_get_contents($file->getRealPath())
            );

            if($d){
                echo '上传成功';
            }else{
                echo '上传失败';
            }
        }


//        dd($request);

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

        $f=ClassFiles::where('fileid',$id)->first();
        $path=storage_path().'\app\\'.$f->path;
//        dd($path);
        return response()->download($path,$f->name);
//        dd(Storage::disk('local')->get($f->path));
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



        $rearr=array("fileid"=>$id);


        $f=ClassFiles::where('fileid',$id)->first();
        if($f->userid!=session('user')->id){
            $rearr['status']=0;
            $rearr['errmsg']='没有权限';
            return response()->json($rearr);
        }else{
            $r=Storage::disk('local')->delete($f->path);

            if($r){
                $f->status=2;
                $f->save();
                $rearr['status']=1;
            }else{
                $rearr['status']=0;
                $rearr['errmsg']='';
            }
            return response()->json($rearr);
        }

        //
    }

    public function del($id=null)
    {


    }
}
