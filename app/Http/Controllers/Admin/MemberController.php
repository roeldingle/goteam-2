<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\memberValidate;

use App\User;
use App\UserMeta;
use App\Role;
use App\Job;

class MemberController extends Controller
{

    public function index(Request $request)
    {
      //dd($request->user()->authorizeRoles(['SA', 'A', 'M']));
      $members = User::latest()->paginate(10);
      return view('members.index', compact('members'));
    }

    public function create()
    {
        //
        //$request->user()->authorizeRoles(['SA', 'A']);
        $jobs = Job::all();
        return view('members.create', compact('jobs', $jobs));
    }

    public function store(Request $request, memberValidate $validate)
    {

      $user = new User;
      $usermeta = new UserMeta;
      $role_default = Role::where('shortname', 'M')->first();

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
      $usermeta->avatar = $request['avatar'];
      $usermeta->description = $request['description'];
      $usermeta->save();
      $user->roles()->attach($role_default);

      return redirect('/admin/members')->with('success','New member created successfully!');
    }

    public function show($id)
    {
        $member = User::find($id);
        return view('members.show', compact('member'));
    }

    public function edit($id)
    {
      $jobs = Job::all();
      $member = User::find($id);
      return view('members.edit', compact(['member','jobs']));
    }

    public function update(Request $request, memberValidate $validate, $id)
    {

           $user = User::find($id);
           $user->metas->job_id = $request['job_id'];
           $user->metas->fname = $request['fname'];
           $user->metas->mname = $request['mname'];
           $user->metas->lname = $request['lname'];
           $user->metas->date_hired = $request['date_hired'];
           $user->metas->date_birth = $request['date_birth'];
           $user->metas->contact_number = $request['contact_number'];
           $user->metas->address = $request['address'];
           $user->metas->avatar = $request['avatar'];
           $user->metas->description = $request['description'];
           $user->metas->save();

           return redirect('/admin/members')->with('success','Updated member successfully!');


    }

    public function destroy($id)
    {
      $user = User::find($id);
      $user->delete();
      return redirect('/admin/members')->with('success', 'Member has been deleted Successfully');
    }
}
