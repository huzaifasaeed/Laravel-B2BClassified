<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->middleware('auth');
        if ((Auth::user()->is_admin)&&(Auth::user()->is_active)) {

            $total_Active_Users = DB::table('users')
                                        ->where('is_active','=','1')
                                        ->count();
            $total_Users=DB::table('users')
                                        ->count();
            $total_adds=DB::table('advertisements')
                                        ->where('is_approved','=','1')
                                        ->count();

            

         return view('admin-home', ['total_Active_Users' => $total_Active_Users,'total_Users'=>$total_Users,'total_adds'=>$total_adds]);
        }
        elseif((Auth::user()->is_active)){
            return view('account-home');
        }
        else
        {
            Auth::logout();
            return view('index');
            
        }
        
    }


    public function getIndexPage()
    {
        $city_data = DB::select('call Get_Top_Cities()');
        $category_data = DB::select('call Get_Categories()');
        $sub_category_data = DB::select('call Get_Sub_Categories()');

        return view('index' , ['category_data'=>$category_data,'city_data'=>$city_data,'sub_category_data'=>$sub_category_data]);
    }


    public function getCategoryPage(Request $request ) {

            return view('category');
     }




    
}
