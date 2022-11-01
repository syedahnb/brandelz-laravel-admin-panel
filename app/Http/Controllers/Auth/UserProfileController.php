<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use ProtoneMedia\Splade\Facades\Splade;
use ProtoneMedia\Splade\Facades\Toast;

class UserProfileController extends Controller
{
    public function show(Request $request)
    {
        abort_if(Gate::denies('auth_profile_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('profile.show');
    }

    public function updateProfile(Request $request)
    {
        $request->only(['name', 'email']);
        $request->validate([
            'name' => 'required|min:4|string|max:255',
            'email' => 'required|string|max:255|unique:users,email,' . \auth()->user()->id
        ]);
        $user = Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->save();
        Splade::toast('Profile Updated!')->autoDismiss(5);
        return redirect()->route('profile.show');

    }

    public function passwordChange(Request $request)
    {
        # Validation
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|confirmed:new_password_confirmation',
        ]);


        #Match The Old Password
        if (!Hash::check($request->current_password, auth()->user()->password)) {

            return Toast::title('Password Can\'t Change')
                ->message('Old Password Doesn\'t match!')
                ->danger()
                ->autoDismiss(5);
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        Splade::toast('Password changed successfully!')->autoDismiss(5);
        return redirect()->route('profile.show');

    }
}
