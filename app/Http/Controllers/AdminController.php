<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\News;
use App\Models\Photo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
Use Alert;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins =User::paginate(10);
        return view('dashboard.admins.index',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $model)
    {
        return view('dashboard.admins.create', compact('model'));
    }



    public function store(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required|max:200|string',
                'email' => 'required|unique:users|max:200',
                'address' => 'required',
                'phone' => 'required',
                'status' => 'required',
                'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
                'password_confirmation' => 'required|min:6',
                'image' => 'required|mimes:jpeg,bmp,png',
            ]);
        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->address = $request->address;
        $users->phone = $request->phone;
        $users->status = $request->status;
        $users->image = $request->image;
        $users->password = Hash::make($request['password']);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '' . rand(1111, 99999) . '.' . $image->getClientOriginalExtension();
            $img = Image::make($request->file('image'));
            $img->save('uploads/users/' . $name);
            $users->image = 'uploads/users/' . $name;
            $users->save();
        }

        if ($users->save()) {
            alert()->success("Success Adding");
            return redirect('AdminPanel/Admins');
        }
    }


    public function show($id)
    {

        $details= User::findOrFail($id);
        return view('dashboard.admins.show', compact('details'));
    }

    public function edit($id)
    {
        $model = User::findOrFail($id);
        return view('dashboard.admins.edit', compact('model'));
    }

    public function update(Request $request, $id)
    {

        $this->validate($request,
            [
                'name' => 'required',
                'email' => 'required',
                'address' => 'required',
                'phone' => 'required',
                'status' => 'required',
     

            ]);
        $users=User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->address = $request->address;
        $users->phone = $request->phone;
        $users->status = $request->status;
        $users->password=Hash::make($request['password']);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '' . rand(1111, 99999) . '.' . $image->getClientOriginalExtension();
            $img = Image::make($request->file('image'));
            $img->save('uploads/users/' . $name);
            $users->image = 'uploads/users/' . $name;
            $users->save();
        }

        if($users->save()){
            alert()->success(trans('Success Editing'));
            return redirect('AdminPanel/Admins');
        }
    }






    public function destroy($id)
    {

        $user = User::findOrFail($id);
        $user->delete();
        alert()->warning('success deleting ');
        return back();


    }


    public function active($id)
    {
        $user = User::findOrFail($id);
        $user->status = 1;
        $user->save();
        alert()->success(' Activing ');
        return back();


    }

    public function unactive($id)
    {
        $user = User::findOrFail($id);
        $user->status = 0;
        $user->save();
        alert()->success('UnActiving ');
        return back();

    }


}
