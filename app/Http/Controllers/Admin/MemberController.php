<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\memberValidate;

use App\User;
use App\UserMeta;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $members = User::latest()->paginate(10);
      return view('members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //$request->user()->authorizeRoles(['SA', 'A']);
        return view('members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, memberValidate $validate)
    {

      $user = new User;
      $usermeta = new UserMeta;

      if(isset($request['user_id']) && $request['user_id'] !== ''){
        $user_id = $request['user_id'];
      }else{
        $user = new User;
        $user->email = $request['email'];
        $user->password = bcrypt('secret');
        $user->save();
        $user_id = $user->id;
      }

      $usermeta->user_id = $user_id;
      $usermeta->job_id = $request['job_id'];
      $usermeta->fname = $request['fname'];
      $usermeta->mname = $request['mname'];
      $usermeta->lname = $request['lname'];
      $usermeta->date_hired = $request['date_hired'];
      $usermeta->date_birth = $request['date_birth'];
      $usermeta->contact_number = $request['contact_number'];
      $usermeta->address = $request['address'];
      $usermeta->save();

      return redirect('/admin/members')->with('success','New member created successfully!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
