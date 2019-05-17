<?php
/**
 * Created by PhpStorm.
 * User: tasha
 * Date: 22.03.19
 * Time: 9:12
 */

namespace App\Http\Controllers;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
         /*$this->middleware('user');*/
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}