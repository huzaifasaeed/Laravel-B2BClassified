<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Advertisement;
use Auth;
use DB;




use App\User;
use App\Categorie;
use App\Sub_Categorie;


class AdvertisementController extends Controller
{
    protected $advertisements;
   /*public function __construct(AdvertisementRepository $add)
    {
        $this->middleware('auth');

        $this->advertisements = $add;
    }*/

   public function addPost()
     {

         if (Auth::guest())
          {
            return view('Auth.login');
          }
          else
          {
            $cities_data = DB::table('cities')->get(); 
            $sub_category_data = DB::table('sub_categories')->get();
            return view('post-ads',['sub_category_data'=>$sub_category_data,'cities_data'=>$cities_data]);
          } 
     }


     public function getall()
    {
       $advertisements = Advertisement::all();
         $advertisements = Advertisement::orderBy('id', 'desc')->paginate(12);
        return view ('account-myads', ['advertisements' => $advertisements]);  
    }

     public function getMyListings()
    {
        $user_id = Auth::user()->id;        
        $advertisements = Advertisement::orderBy('id', 'desc')->where('user_id', '=', $user_id)->paginate(5);
        return view ('account-myads', ['advertisements' => $advertisements]);      
    }

    public function getByID($id)
    {
        //mine
        $comments= DB::select('call Get_Comments_According_to_Add_Id (?)', array($id));
        $advertisement = DB::select('call Get_Add_According_to_Id (?)', array($id));
        return view ('ads-details', ['advertisement' => $advertisement,'comments'=>$comments]);    
    }
    public function getByCategory($categoryid)
        {
            //mine

            $advertisement = DB::select('call Get_Adds_According_to_Categories(?)',array($categoryid));
            return view ('category', ['advertisement' => $advertisement]);      

        }

    public function create(Request $request)
    {   
        //mine
        $add_id = DB::table('advertisements')->max('id');
        $add_id=$add_id+1;


           

                $pic1_file = $request->file('pic1');
                $pic2_file = $request->file('pic2');
                $pic3_file = $request->file('pic3');
                $pic4_file = $request->file('pic4');
                
                $pic1_name = ($pic1_file->getClientOriginalName());
                $pic2_name = ($pic2_file->getClientOriginalName());
                $pic3_name = ($pic3_file->getClientOriginalName());
                $pic4_name = ($pic4_file ->getClientOriginalName());


                $pic1_file-> move ("images\advertisement\/$add_id",$pic1_name);
                $pic2_file-> move ("images\advertisement\/$add_id",$pic2_name);
                $pic3_file-> move ("images\advertisement\/$add_id",$pic3_name);
                $pic4_file-> move ("images\advertisement\/$add_id",$pic4_name);
                
                   DB::table('advertisements')->insert(['sub_categorie_id'=>$request->sub_categorie_id, 'add_type'=>$request->add_type,'Adtitle'=>$request->Adtitle,'describe'=>$request->describe,'pic1'=>$pic1_name,'pic2'=>$pic2_name,'pic3'=>$pic3_name,'pic4'=>$pic4_name,'address'=>$request->address,'Number'=>$request->Number,'city_id'=>$request->city,'Price'=>$request->Price,'user_id'=>Auth::user()->id]);
            
        

        return redirect('account-myads');
    }


    public function update(Request $request, $id)
    {
        $advertisement = Advertisement::where('id', $id)->first();

        $this->validate($request, array(
           'category_group' => 'required',
            'add_type' => 'required',
            'Adtitle' => 'required|max:255',
            'describe'  => 'required|max:1000',
            'Number'  => 'required',
            'province'  => 'required',
            'Price'  => 'required',
            ));

        $advertisements->category_group = $request->category_group;
        $advertisements->add_type = $request->add_type;
        $advertisements->Adtitle = $request->Adtitle;
        $advertisements->describe = $request->describe;
        $advertisements->Number = $request->Number;
        $advertisements->province = $request->province;
        $advertisements->Price = $request->Price;
        $advertisements->user_id = Auth::user()->id;

        $advertisements->save();

        return redirect('account-myads');
    }

    public function delete($id)
    {
        $advertisement = Advertisement::where('id', $id)->first();
        $advertisement->delete();

        return redirect()->back();
    }

}
