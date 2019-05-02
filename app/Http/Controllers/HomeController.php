<?php
/**
 * Created by PhpStorm.
 * User: tasha
 * Date: 22.03.19
 * Time: 9:12
 */

namespace App\Http\Controllers;


class HomeController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      /*  $this->middleware(['auth','verified']);*/
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