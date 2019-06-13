<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;

    class MyController extends Controller{
        public function GetLogin()
        {
            return view('login');
        }
        public function PostLogin(Request $request)
        {
            echo $request->Username.'<br>';
            echo $request->Password;
        }
        public function Demo()
        {
            return view('demo');
        }
}