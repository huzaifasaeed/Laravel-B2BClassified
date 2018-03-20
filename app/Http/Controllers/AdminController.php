<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Categorie;
use App\Sub_Categorie;
use Illuminate\Support\Facades\Auth;
use DB;

class AdminController extends Controller
{
    public function adminsPendingApproval()
    {
    	if (Auth::user()->is_admin) {
    		$admin_data = DB::table('users')
            ->where('is_applied_for_admin','=','1')->get();


            return view('admin-pending-approvals',['admin_data'=>$admin_data]);
    	}
    	else
        {
            Auth::logout();
            return redirect('index');
            
        }

    }
    public function destroy(Request $request, User $admin)
    {
    	if (Auth::user()->is_admin&&Auth::user()->is_active) {
    		DB::table('users')
            ->where('id', $admin->id)
            ->update(array('is_admin' => '0','is_applied_for_admin'=>'0'));
    		return redirect('/admin-pending-approvals');
    	}
    	else{
    		return view('/index');
    	}
    	
    		
    }    
    public function adminApprove(User $admin)
    {
    	if (Auth::user()->is_admin&&Auth::user()->is_active) {
    		DB::table('users')
            ->where('id', $admin->id)
            ->update(array('is_admin' => '1'));
    		return redirect('/admin-pending-approvals');
    	}
    	else{
            Auth::logout();
    		return view('/index');
    	}
    }

    public function getDeactivateUserPage()
    {
        if (Auth::user()->is_admin) {
            $user_data = DB::table('users')->select('id','name', 'email','is_active')->get();
        return view('admin-Deactivate-Users',['user_data'=>$user_data]);
        }
    	
    	else
        {
            Auth::logout();
            return redirect('index');
            
        }

    }


    public function deactivateUser(Request $request, User $user)
    {
    	if (Auth::user()->is_admin&&Auth::user()->is_active) {
    		DB::table('users')
            ->where('id', $user->id)
            ->update(array('is_active' => '0','is_admin' => '0','is_applied_for_admin' => '0'));
    		return redirect('/deactivate-user');
    	}
    	else{
    		Auth::logout();
            return redirect('index');
    	}
    	
    		
    }    



    public function activateUser(Request $request, User $user)
    {
        if (Auth::user()->is_admin&&Auth::user()->is_active) {
            DB::table('users')
            ->where('id', $user->id)
            ->update(array('is_active' => '1','is_admin' => '0','is_applied_for_admin' => '0'));
            return redirect('/deactivate-user');
        }
        else{
            Auth::logout();
            return redirect('index');
        }
        
            
    }    
      public function addCategory(Request $request)
    {



        if (Auth::user()->is_admin&&Auth::user()->is_active) {

        	
		       	$logo = $request->file('category_logo');
		    	$pic = $request->file('category_pic');
		    	$logo_name = ($logo->getClientOriginalName());
		    	$pic_name = ($pic->getClientOriginalName());
		    	$logo-> move ("images\category\/$request->name\logo",$logo_name);
		    	$pic-> move ("images\category\/$request->name\picture",$pic_name);
		    	
		    		DB::table('categories')->insert(
    									['name'=>$request->name,'category_logo'=>$logo_name,'category_pic'=>$pic_name,'is_active'=>'1','is_shown_on_index'=>'0']
										);

            return redirect('/admin-add-category');
        }
        else{
            Auth::logout();
            return redirect('index');
        }
        
            
    }



    public function deactivateCategory(Request $request ,$category_id)
    {
    	if (Auth::user()->is_admin&&Auth::user()->is_active) {
    		DB::table('categories')
            ->where('id', $category_id)
            ->update(array('is_active' => '0'));
    		return redirect('admin-add-category');
    	}
    	else{
            Auth::logout();
    		return view('/index');
    	}
    }
    public function activateCategory(Request $request ,$category_id)
    {
    	if (Auth::user()->is_admin&&Auth::user()->is_active) {
    		DB::table('categories')
            ->where('id', $category_id)
            ->update(array('is_active' => '1'));
    		return redirect('admin-add-category');
    	}
    	else{
            Auth::logout();
    		return view('/index');
    	}
    }
    public function showCategoryonIndex(Request $request ,$category_id)
    {
    	if (Auth::user()->is_admin&&Auth::user()->is_active) {
    		DB::table('categories')
            ->where('id', $category_id)
            ->update(array('is_shown_on_index' => '1'));
    		return redirect('admin-add-category');
    	}
    	else{
            Auth::logout();
    		return view('/index');
    	}
    }
    public function deleteCategoryFromIndex(Request $request ,$category_id)
    {
    	if (Auth::user()->is_admin&&Auth::user()->is_active) {
    		DB::table('categories')
            ->where('id', $category_id)
            ->update(array('is_shown_on_index' => '0'));
    		return redirect('admin-add-category');
    	}
    	else{
            Auth::logout();
    		return view('/index');
    	}
    }
    public function editCategory(Request $request ,$category_id)
    {
    	if (Auth::user()->is_admin&&Auth::user()->is_active) {
    		DB::table('categories')
            ->where('id', $category_id)
            ->update(array('is_admin' => '1'));
    		return redirect('admin-add-category');
    	}
    	else{
            Auth::logout();
    		return view('/index');
    	}
    }





    public function getAddCategoryPage()
    {
        if (Auth::user()->is_admin) {
            $category_data = DB::table('categories')->get();
        return view('add-categories',['category_data'=>$category_data]);
        }
        
        else
        {
            Auth::logout();
            return redirect('index');
            
        }

    }   

    protected function createAdmin(array $data)
    {

        $is_admin='0';
        $is_active='1';
        $is_applied_for_admin ='1';
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'is_admin'=>[$is_admin],
            'is_active'=>[$is_active],
            'is_applied_for_admin'=>[$is_applied_for_admin],
        ]);
    }
    	
	public function deleteCategory(Request $request ,$category) {

        if (Auth::user()->is_admin&&Auth::user()->is_active) {
            
                     DB::table('sub_categories')
                    ->where('categorie_id', $category)
                    ->delete();


                    DB::table('categories')
                    ->where('id', $category)
                    ->delete();
                    




            return redirect('admin-add-category');
        }
        else{
            Auth::logout();
            return redirect('index');
        }
        
            
    }


    public function getSubCategoryPage()
    {
        if (Auth::user()->is_admin) {
            $category_data = DB::table('categories')->get();
            $sub_category_data = DB::table('sub_categories')->get();
        return view('add-sub-category',['category_data'=>$category_data,'sub_category_data'=>$sub_category_data]);
        }
        
        else
        {
            Auth::logout();
            return redirect('index');
            
        }

    }

    public function addNewSubCategory(Request $request) {

        if (Auth::user()->is_admin&&Auth::user()->is_active) {
             

            DB::table('sub_categories')->insert(
            array('name' =>$request->name, 'categorie_id' => $request->category, 'is_active'=>"1"));


            return redirect('/add-sub-category');
        }
        else{
            Auth::logout();
            return redirect('index');
        }
        
            
    }



     public function getAddPendingAprovalPage()
    {

        if (Auth::user()->is_admin) {
           $adds = DB::select('call Get_All_Adds ()');
        return view('admin-add-pending-approval',['adds'=>$adds]);
        }
        
        else
        {
            Auth::logout();
            return redirect('index');
            
        }

    }
   


    public function deactivateAdds(Request $request,  $advertisement)
    {
        if (Auth::user()->is_admin&&Auth::user()->is_active) {
            DB::table('advertisements')
            ->where('id', $advertisement)
            ->update(array('is_approved' => '0'));
            return redirect('/pending-add-approval');
        }
        else{
            Auth::logout();
            return redirect('index');
        }
        
            
    }    



    public function activateAdds(Request $request,  $advertisement_data)
    {
        if (Auth::user()->is_admin&&Auth::user()->is_active) {
            DB::table('advertisements')
            ->where('id',  $advertisement_data)
            ->update(array('is_approved' => '1'));



            return redirect('/pending-add-approval/');
        }
        else{
            Auth::logout();
            return redirect('index');
        }
    	
    	
     }


     public function addprovince(Request $request)
    {



        if (Auth::user()->is_admin&&Auth::user()->is_active) {

            
                
                
                    DB::table('provinces')->insert(['province'=>$request->province_name]);

            return redirect('/admin-add-province');
        }
        else{
            Auth::logout();
            return redirect('index');
        }
        
            
    }
    public function getAddProvincePage()
    {

        if (Auth::user()->is_admin) {
            $province = DB::table('provinces')->get();

        return view('admin-add-Province',['province'=>$province]);
        }
        
        else
        {
            Auth::logout();
            return redirect('index');
            
        }

    }


    public function getAddCityPage()
    {

        if (Auth::user()->is_admin) {
            $provinces = DB::table('provinces')->get();
            $cities= DB::table('cities')->get();

        return view('admin-add-city',['provinces'=>$provinces,'cities'=>$cities]);
        }
        
        else
        {
            Auth::logout();
            return redirect('index');
            
        }

    }
    public function addcity(Request $request)
    {



        if (Auth::user()->is_admin&&Auth::user()->is_active) {

            
                
                
                    DB::table('cities')->insert(['city'=>$request->name,'provence_id'=>$request->province]);

            return redirect('admin-add-city');
        }
        else{
            Auth::logout();
            return redirect('index');
        }
        
            
    }
}