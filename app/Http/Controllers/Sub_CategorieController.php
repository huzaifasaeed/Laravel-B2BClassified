<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Sub_CategorieController extends Controller
{
   public function getBySubCategory($sub_category_id)
        {
            //mine

            $advertisement = DB::select('call Get_Adds_According_to_Sub_Category_id(?)',array($sub_category_id));
            return view ('category', ['advertisement' => $advertisement]);      

        }
}
