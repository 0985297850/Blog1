<?php
namespace App\controllers;
use App\Blade\Blade;
use App\database\Database;
use App\privilege;
use App\User;
use App\UserPrivilege;
use http\Header;

new Database;
class LoginController extends Controller
{

    /**
     * @function index()
     * List All data from database
     * Example : Register::all()
     */
    public function index(){
        Blade::render('back-end/auth/login');
    }


    /**
     * @function create()
     * View form create
     * Type data : Array
     * Example : Register::create($data)
     */

    public function login()
    {

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
        $user_privileges = UserPrivilege::all();
        privilege::all();
        $flat = 0;
        $user = User::all();
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($email == "" || $password == ""){
            echo "Tài Khoản Or Password Không Được Để Trống!";
        }else{
            foreach ($user as $key => $user){

                if ($user['email'] == $email && $user['password'] == $password ){

                    $userPrivileges = UserPrivilege::
                            join('privilege','privilege.id','=','users_privilege.privilege_id')
                        ->where('users_privilege.users_id','=',$user->id)
                        ->get();
                    if(!empty($userPrivileges)){
                        $user['privileges'] = array();
                        foreach($userPrivileges as $privilege){
                            $user['privileges'][] = $privilege['url_match'];
                        }
                    }
                    $_SESSION['user'] = $user;
                    $flat = 1;
                    header('Location:dashboard');
                } else{
                    echo "<script>alert('Tài Khoản Or PassWord Không Đúng!');window.location='login' </script>";
                }
//                header('Location:dashboard');
            }
        }

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

    }
    /**
     * @function delete()
     * Delete data with id
     * Type id : number
     * Example : Register::delete()
     */
    public function delete($id){

    }
    public function logout(){
        unset($_SESSION['user']);
        header('Location:/small/back-end/login');
    }
    protected function registerCheck(array $input)
    {
        // TODO: Implement registerCheck() method.
    }
}
