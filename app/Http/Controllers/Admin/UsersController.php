<?php namespace Course\Http\Controllers\Admin;

use Course\Http\Requests;
use Course\Http\Controllers\Controller;

use Course\User;
use Illuminate\Support\Facades\Request;

class UsersController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::paginate();

        return view ( 'admin.users.index', compact( 'users' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view ( 'admin.users.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store( )
    {
        $user  = User::create( Request::all() );

        return redirect()->route ( 'admin.users.index' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user = User::findOrFail( $id );
        return view( 'admin.users.edit', compact( 'user' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $user  = User::findOrFail ( $id );
        $user->fill ( Request::all() );
        $user->save ();

        return redirect()->back( );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //$user  = User::findOrFail ( $id );
        User::destroy( Request::all() );

        return redirect()->back();
    }

}
