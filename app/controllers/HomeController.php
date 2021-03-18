<?php
namespace App\controllers;
use App\Blade\Blade;
use App\database\Database;
use App\Register;
use App\User;

new Database;
class HomeController extends Controller
{
    /**
     * @function index()
     * List All data from database
     * Example : Register::all()
     */
    public function index(){
        $users = User::all();
        Blade::render('back-end/user/index', compact('users'));
    }
    /**
     * @function create()
     * View form create
     * Type data : Array
     * Example : Register::create($data)
     */
    public function create(){
        Blade::render('back-end/user/add-users');

    }
    /**
     * @function store()
     * Insert data to database
     * Type data : Array
     * Example : Register::create($data)
     */
    public function store(){
        $email = $_POST['emailAdd'];
        $firstname = $_POST['firstnameAdd'];
        $lastname = $_POST['lastnameAdd'];
        $password = $_POST['passwordAdd'];

        $user =User::create([
            'email'=>$email,
            'firstname'=>$firstname,
            'lastname'=>$lastname,
            'password'=>$password,
        ]);
        if ($user){
            echo " <script>alert('Thêm Người Dùng Thành Công!');window.location='/small/back-end/index'; </script> ";

        }else{
            echo " <script>alert('Thêm Người Dùng Thất Bại! ^!^ ');window.location='/small/back-end/add-users' </script> ";
        }
    }

    public function edit($id){
        $users = User::find($id['id']);
//        Blade::render('/small/back-end/edit-users',compact('users'));
        Blade::render('/back-end/user/edit-users',compact('users'));
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
        $email = $_POST['email'];
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];

        $update_user = User::find($id['id']);
        $users = $update_user->update([
            'email'=>$email,
            'lastname'=>$lastname,
            'firstname'=>$firstname,
        ]);
        if ($users){
            echo "<script>alert('Update Thành Công!');window.location='/small/back-end/index'; </script>";
        }else{
            echo "<script>alert('Update Thất Bại!');window.location='/small/back-end/edit-users';</script>";
        }

    }
    /**
     * @function delete()
     * Delete data with id
     * Type id : number
     * Example : Register::delete()
     */
    public function delete($id){
        User::destroy($id);
        header('Location:/small/back-end/index');
    }

    protected function registerCheck(array $input)
    {
        // TODO: Implement registerCheck() method.
    }
}
