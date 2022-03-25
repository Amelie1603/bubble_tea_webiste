<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        //$userOrder = DB::table('bubble_my_tea')
        $user = User::where('id', $req->user()->id)->get();
        $order = Order::where('user_id', $req->user()->id)->get();
        echo "<script>console.log('Debug Objects: " . $order . "' );</script>";
        // $order = [
        //     $name = 'lena',
        //     $lastname = 'martin'
        // ]; 
        $data = [
            'user' => $user,
            'orders' => $order
        ];
        return view('profil')->with($data);
        // ->join('user', 'users.id', '=', '')

        //>get();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sign');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validates = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required', 
            'email' => 'required', 
            'phone' => 'required', 
            'address' => 'required',
            'password' => 'required',
        ]);

        $user = new User;

        $user->role = 'customer';
        $user->firstname = $validates['firstname'];
        $user->lastname = $validates['lastname'];
        $user->email = $validates['email'];
        $user->phone = $validates['phone'];
        $user->password = $validates['password'];
        $user->address = $validates['address'];
        

        $user->save();
        return 'user was created';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        // return view('user.profil', [
        //     'user' => User::findOrFail($id)
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
