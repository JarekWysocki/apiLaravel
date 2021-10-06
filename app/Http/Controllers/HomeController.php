<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\PostService;
use App\Services\UserService;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getJSON()
    {
        PostService::postApi();
        UserService::userApi();
  
    }
   
}
