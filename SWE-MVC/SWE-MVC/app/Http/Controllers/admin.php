<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class admin extends Controller
{
    public function login(Request $req){
        $mail = $req->username;
        $pass = $req->pass;

        if($mail == 'admin' && $pass == 'admin'){
            $faculty = DB::table("faculty")->get();
            return view('admin.crud' , compact('faculty'));        
        }
    }

    public function store(Request $req){
          $data = array();
          $data['id'] = $req->pid;
          $data['fname'] = $req->fname;
          $data['uname'] = $req->uname;
          $data['logo'] = $req->logo;
          $data['expertise'] = $req->logo;
          $data['interest'] = $req->logo;

          $faculty = DB::table('faculty')->insert($data);
          return redirect()->route('start')->with('success', 'faculty created Successfully');
      }

      public function edit($id){
          $faculty = DB::table('faculty')->where('id',$id)->first();
          return View('faculty/edit', compact('faculty'));
      }

      public function applyedit(Request $req , $id){
        $data = array();
        $data['id'] = $req->pid;
        $data['fname'] = $req->fname;
        $data['uname'] = $req->uname;
        $data['logo'] = $req->logo;
        $data['expertise'] = $req->logo;
        $data['interest'] = $req->logo;

        $faculty = DB::table('faculty')->where('id', $id )->update($data);
        return redirect()->route('start')->with('success', 'faculty Updated Successfully');
      }

      public function delete($id){
          DB::table('faculty')->where('id',$id)->delete();
          return redirect()->route('start')->with('success', 'faculty deleted Successfully');
      }

      public function show($id){
         $faculty = DB::table('faculty')->where('id',$id)->first();
         return View('faculty/show', compact('faculty'));
     }

}
