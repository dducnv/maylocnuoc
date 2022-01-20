<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MetaSeo;
class MarketingController extends Controller
{
    public function marketing(){
        $seo = MetaSeo::findOrFail(1);
        return view('admin.pages.display.marketing',[
            'seo'=>$seo
        ]);
    }
}
