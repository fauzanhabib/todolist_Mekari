<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\List_todo;

class Web_todoController extends Controller
{
    public function get_code(){
        $list_todo = DB::table('list_todo')->get();
        //dd($list_todo);
        $tab = DB::table('list_todo')->select('name')->get();
        $data = array (
            'list_todo' => $list_todo,
            'tab' => $tab
        );
        return view('code',compact('data'));
    }

    public function get_demo(){
        return view('index');
    }
}
