<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
class PackageController extends Controller
{
    public function index(){
        
    }
    
    public function create(){
        return view("admin.create-package");
    }
    
    public function store(Request $request){
        
        $package=new Package;
        $package->name=$request->input("name");
        $package->jobs=$request->input("jobs");
        $package->cv=$request->input("cv");
        $package->time_duration=$request->input("duration");
        $package->price=$request->input("price");
        $package->save();
        return redirect("admin-package-list");
    }
    public function packages(){
        $data["packages"]=Package::all();
        return view("admin.plans",$data);
    }
    public function empSubcriptionPlans(){
        $data["packages"]=Package::all();
        return view("employe.plans",$data);
    }
}
