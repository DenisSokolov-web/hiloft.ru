<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;

use DB;
use Auth;

class UsersController extends BaseController
{
    public function __construct()
    {
        $this->middleware('admin');

        $this->template = 'admin.users.';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->template .= 'index';
        $this->page_title = 'Список всех пользователей';

        // тут по идее должна быть группировка коллекции по типу роли, но не работает :(
        $users = User::with(['roles' => function ($query) {
            $query->orderBy('id', 'desc');
        }])->get();

        $this->vars = array_add($this->vars, 'users', $users);

        return $this->renderOutput();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->template .= 'create';
        $this->page_title = 'Добавление нового пользователя';

        $roles = Role::all();
        $this->vars = array_add($this->vars, 'roles', $roles);

        return $this->renderOutput();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'bail|required|email',
                'phone' => 'bail|required|string',
                'password' => 'required'
            ]
        );

        $user = $request->all();
        $user['password'] = bcrypt($user['password']);

        $role = Role::find($user['role_id'])->users()->create($user);

        return redirect(route('users.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        $this->template .= 'show';
        $this->page_title = 'Профиль пользоваеля: ' . $user->name;

        $this->vars = array_add($this->vars, 'user', $user);

        return $this->renderOutput();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $this->template .= 'edit';
        $this->page_title = 'Редактирование пользователя:<br />' . $user->name;

        $roles = Role::all();
        $this->vars = array_add($this->vars, 'roles', $roles);

        $this->vars = array_add($this->vars, 'user', $user);

        return $this->renderOutput();
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
        $user = User::find($id);
        $role = Role::find($request->input('role_id'));

        $actrualPivot = $user->roles()->where('user_id', $user->id)->first()->pivot;
        $pivot_id = $actrualPivot->id;

        //dd($request->all());

        $user->update($request->all());

        DB::table('roles__users')->where('id', $pivot_id)->update(['role_id' => $role->id]);

        //$user->roles()->updateExistingPivot($id, ['role_id' => $role->id]); //почему-то не работает :(

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->destroy($user->id);
        return redirect()->route('users.index');
    }
}
