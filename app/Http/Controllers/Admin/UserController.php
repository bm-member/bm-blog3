<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function show()
    {
        return view('admin.user.show');
    }

    public function edit()
    {
        return view('admin.user.edit');
    }

    public function update(Request $request)
    {
        $imageName = time() . $request->file('image')->getClientOriginalName();
        $imagePath = public_path('upload/profile');

        $input = $request->all();
        $input['image'] = $imageName;

        // check old image exist
        // write code here (homework)

        // Image upload
        $request->file('image')->move($imagePath, $imageName);

        $user = User::find(auth()->id());
        $user->update($input);
        return redirect('admin/profile')->with('status', 'Updated User');
    }
}
