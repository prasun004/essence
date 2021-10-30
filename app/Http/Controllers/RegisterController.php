<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){

        $this->validate($request, [

            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        Register::create([
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        return redirect()->route('home');

    }

    // protected function create(array $data){

    //     $user = Register::create([
    //         'name' => $data['name'],
    //         'email' => $data['email']
    //     ]);

    //     $email_data = array(
    //         'name' => $data['name'],
    //         'email' => $data['email']
    //     );

    //     Mail::send('welcome_email', $email_data, function ($message) use ($email_data){
    //         $message -> to($email_data['email'], $email_data['name'])
    //                  -> subject('welcome to my blog')
    //                  -> from('sangeeta@gmail.com', 'MyBlogs');
    //     });

    //     return $user;
    // }

}
