<?php

namespace App\Http\Controllers;

class Test2Controller extends Controller
{
    public function index()
    {
        $data = [
            "index" => 1,
        ];
        return view("test2", $data);
    }
}




// 問題2
// <?php

// namespace App\Http\Controllers;

// class Test2Controller extends Controller
// {
//     public function index()
//     {
//         $data = ['cat','dog','pig'];
//         return view('test2', compact('data'));
//     }
// }