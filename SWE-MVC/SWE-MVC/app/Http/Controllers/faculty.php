<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\faculty;
use DB;

class faculty extends Controller
{
    public function view(){
        $faculty = DB::table("faculty")->get();
        return View('results' , compact('faculty'));
    }

    public function showFaculty($id){
        $faculty = DB::table("faculty")->where('id',$id)->first();
        $corses =  DB::table("courses")->get();
        return View('view' , compact('faculty' , 'corses'));        
    }

    public function search(Request $req){
        $search = $req->name;
        $filter = $req->filter;

        $product = DB::table('faculty')->where('id',$id)->first();
        if($filter == 'name'){
            $sql = "SELECT * FROM faculty where name like '%$search%'";
        }
        elseif($filter == 'depart'){
            $sql = "SELECT * FROM faculty where department like '%$search%'";
        }
        elseif($filter == 'co-Teach'){

            $sq = "SELECT * FROM courses WHERE c1 LIKE '%$search%' OR c2 LIKE '%$search%' 
            OR c3 LIKE '%$search%' OR c4 LIKE '%$search%' OR c5 LIKE '%$search%'";
            $result = mysqli_query( $db , $sq );
            $row = mysqli_fetch_assoc($result);
            if (mysqli_num_rows($result) > 0){
                $id = $row['faculty_id'];
                $sql = "SELECT * FROM faculty where id ='$id' ";
            }
            else
                $sql = "SELECT * FROM faculty where expirtise like '%$search%'";
        }
        elseif($filter == 'expertise'){
            $sql = "SELECT * FROM faculty where expirtise like '%$search%'";
        }
        elseif($filter == 'Interest'){
            $sql = "SELECT * FROM faculty where interest like '%$search%'";
        }

        $result = mysqli_query( $db , $sql );
        $datas = array();

        if (mysqli_num_rows($result) > 0)
        {
            while ($row = mysqli_fetch_assoc($result))
            {
                $datas[] = $row ;
            }
        }
        else {
            $_SESSION['message'] = "No Results Found";
        }
        return view('results' , compact('faculty'));
    }

}
