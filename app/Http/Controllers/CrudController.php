<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CrudModel;
use TijsVerkoyen\CssToInlineStyles\Css\Rule\Rule;

class CrudController extends Controller
{
    public function index()
    {
        $data=CrudModel::get();
        return view('showdata',compact('data'));
    }

    public function addCustomer()
    {
        $data=new CrudModel();
        return view('adddata');
    }

    public function saveCustomer(Request $req)
    {
        $req->validate([
            //fname is a textbox name
            'fname'=>'required',
            'lname'=>'required',
            'phone'=>'required|unique:customers,phone',
            'email'=>'required|unique:customers,email',
            'date'=>'required',
        ]);


        //req is a textbox name and data with database filed name
        $data=new CrudModel();
        $data->firstname=$req->fname;
        $data->lastname=$req->lname;
        $data->phone=$req->phone;
        $data->email=$req->email;
        $data->dob=$req->date;
        $data->save();
        return redirect('showdata');
    }

    public function deleteCustomer($id)
    {
        CrudModel::where('id','=',$id)->delete();
        return redirect('showdata');
    }

    public function editCustomer($id)
    {
        $data=CrudModel::where('id','=',$id)->first();
        return view('editdata',compact('data'));
    }

    public function updateCustomer(Request $req,$id)
    {   
       
        $req->validate([
            //fname is a textbox name
            'fname'=>'required',
            'lname'=>'required',
            'phone'=>'required|unique:customers,phone,'.$id,
            'email'=>'required|unique:customers,email,'.$id,
            'date'=>'required',
        ]);
        $data=new CrudModel();
        $data->id=$req->id;
        // $data->firstname=$req->fname;
        // $data->lastname=$req->lname;
        // $data->phone=$req->phone;
        // $data->email=$req->email;
        // $data->dob=$req->date;

        CrudModel::where('id','=',$id)->update([
            'firstname'=>$req->fname,
            'lastname'=>$req->lname,
            'phone'=>$req->phone,
            'email'=>$req->email,
            'dob'=>$req->date,

        ]);
        return redirect('showdata');
    }
}
