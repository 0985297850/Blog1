<?php
namespace App\controllers;
use App\Blade\Blade;
use App\database\Database;
use App\privilege;
use App\Register;
use App\Roles;
use App\User;
use App\UserPrivilege;

new Database;
class PrivilegeController extends Controller
{
    /**
     * @function index()
     * List All data from database
     * Example : Register::all()
     */
    public function index(){
        $privilege = privilege::all();
        $users = User::all();

        Blade::render('back-end/privilege/privilege',compact('privilege','users'));
    }
    /**
     * @function create()
     * View form create
     * Type data : Array
     * Example : Register::create($data)
     */

    public function edit($id){
        $privileges = privilege::all();
        $users = User::where($id)->get();
        $privilegeGroup = Roles::orderBy('id','ASC')->get();
        $checkboxs = UserPrivilege::where('users_id',$id['id'])->get();

        Blade::render('/back-end/privilege/edit-privilege',compact('privileges','privilegeGroup','checkboxs','users'));
    }



    public function create(){


    }
    /**
     * @function store()
     * Insert data to database
     * Type data : Array
     * Example : Register::create($data)
     */
    public function store(){

    }

    /**
     * @function show()
     * Get detail a data in database
     * Type id : number
     * Get id from URl
     * Example : Register::find($id)
     */
    public function show($id){
        print_r($id['id']);
    }
    /**
     * @function update()
     * Update data with id to database
     * Type id :number
     * Get id from URL
     * Type data : Array
     * Example : Register::find($id)->update($data)
     */
    public function update($id){

        $deletePrivileges = UserPrivilege::where('users_id', $id)->delete();
        foreach ($_POST['privileges'] as $per_id){
            UserPrivilege::create([
                'users_id'=>$id['id'],
                'privilege_id'=>$per_id,
            ]);
        }


    }
    /**
     * @function delete()
     * Delete data with id
     * Type id : number
     * Example : Register::delete()
     */
    public function delete($id){

    }

    protected function registerCheck(array $input)
    {
        // TODO: Implement registerCheck() method.
    }
}
