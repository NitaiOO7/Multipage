<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

use Session;
class EmployeeController extends Controller
{
    //
    public function name(Request $request)
    {
        // $name=$request->session()->get('name');
        $employee = Employee::all();
        return view('name');

       
    }
    public function createname(Request $request)
    {
        $request->validate(
            [
                'name'=>'required|max:255|regex:/[a-zA-Z]/',
            ]
            );
        $data=[
            'name' => $request->input('name')
             ];
        session(['data'=>$data]);  
        // $data=session('name');  
          
        
        return redirect()->route('email');
    }
    public function email(Request $request)
    {
        $employee = Employee::all();
  
        return view('email');
    }
    public function createemail(Request $request)
    {
        $request->validate(
            [
                'email'=>'required|email|confirmed',
                'email_confirmation'=>'required'
            ]
            );
        $data=Session::get('data');
        $data1=[
            'email'=>$request->input('email')
             ];
             $data=array_merge( $data, $data1);
             session(['data'=>$data]); 
    //    array_push($data,);
    //    dd($data);
    //     session(['email'=>$request->input('email')]);  
        // $data1=session('email'); 
        //echo $data1;
        
        // die();  
        return redirect()->route('number');
    }
    public function phonenumber(Request $request)
    {
        $employee = Employee::all();
  
        return view('number');
    }
    public function createphonenumber(Request $request)
    {
       // session(['phone_number'=>$request->input('phone_number')]);  
        // $data2=session('phone_number'); 
        // echo $data2;
        //die();
        $request->validate(
            [
                'phone_number'=>'required|min:10|max:10'
            ]
            );
        $data=Session::get('data');
        $data2=[
            'phone_number'=>$request->input('phone_number')
             ];
             $data=array_merge( $data, $data2);
             session(['data'=>$data]); 
        
  
        return redirect()->route('password');
    }
    public function password(Request $request)
    {
        $employee = Employee::all();
  
        return view('password');
    }
    public function createpassword(Request $request)
    {
        //session(['password'=>$request->input('password')]);  
        //$data3=session('password'); 
        // echo $data3;
        // die();
        $request->validate(
            [
                'password'=>'required|confirmed',
                'password_confirmation'=>'required'
            ]
            );
        $data=Session::get('data');
        //dd($data);
        $data3=[
            'password'=>$request->input('password')
             ];
             $data=array_merge( $data, $data3);
             session(['data'=>$data]);
        return redirect()->route('preview');
    }
    public function store(Request $request)
    {
       
        // dd($request);
        $employee =  Employee::create([
            'name' => $request->name,
            'email' =>$request->email,
            'phone_number'=>$request->phone_number,
            'password'=>$request->password,
            
        ]);
     
            return redirect()->route('view');
    }
    public function show()
    {
        $data=Session::get('data');
        //dd($data);
        return view("preview",compact('data'));
        

    } 
    public function viewdata()
    {
        $employee=Employee::get();
        return view("view",compact('employee'));

    }

}
