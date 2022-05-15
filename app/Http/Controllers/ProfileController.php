<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller {
    // index
    public function index() {
        return view( 'admin.profile' );
    }

    //update
    public function update( Request $request ) {
        $request->validate( [
            'name'     => ['required', 'max:255', 'string'],
            'username' => ['required', 'max:255', 'string'],
            'email'    => ['required', 'max:255', 'string'],
        ] );

        $user = User::find( Auth::id() );

        $thumb = $request->thumbnails;

        if ( !empty( $request->file( 'thumbnails' ) ) ) {
            foreach ( $request->thumbnails as $thumb ) {
                $image = time() . '-' . $thumb->getClientOriginalName();
                // save image
                $thumb->storeAs( 'public/uploads', $image );
            }
        }

        $user->update( [
            'name'     => $request->name,
            'username' => $request->username,
            'email'    => $request->email,
            'image'    => $thumb,
        ] );



        return redirect()->route( 'profiles.index' )->with( 'success', 'User Updated' );
    }
}
