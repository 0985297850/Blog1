<?php
namespace App\controllers;
use App\Blade\Blade;
use App\database\Database;
use App\News;
use App\NewsTags;
use App\Register;
use App\User;
use http\Header;

new Database;
class NewsTagsController extends Controller
{
    /**
     * @function index()
     * List All data from database
     * Example : Register::all()
     */
    public function index(){
        $news_tags = NewsTags::all();
        Blade::render('/back-end/tags/tags',compact('news_tags'));
    }

    /**
     * @function create()
     * View form create
     * Type data : Array
     * Example : Register::create($data)
     */
    public function create(){
        Blade::render('back-end/tags/add-tags');
    }
    /**
     * @function store()
     * Insert data to database
     * Type data : Array
     * Example : Register::create($data)
     */
    public function store(){
        $name = $_POST['tagsName'];
        $news_tags = NewsTags::create([
            'name' => $name,
        ]);
        if ($news_tags){
            header('Location:/small/public/tags');
        }else{
            echo "Thêm Tags Thất Bại!";
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
    public function edit($id){
        $news_tags = NewsTags::find($id['id']);
        Blade::render('/back-end/tags/edit-tags',compact('news_tags'));
    }
    public function update($id){
        $tags_name = $_POST['editTags'];
        $update_name = NewsTags::find($id['id']);

        $news_tags = $update_name->update([
            'name' => $tags_name,
        ]);
        if ($news_tags){
            echo " <script> alert('Update Thành Công Bro!');window.location='/small/back-end/tags'; </script> ";
        } else{
            echo " <script> alert('Update Thất Bại Bro!');window.location='/small/back-end/tags'; </script> ";
        }

    }
    /**
     * @function delete()
     * Delete data with id
     * Type id : number
     * Example : Register::delete()
     */
    public function delete($id){
        NewsTags::destroy($id);
        header('Location:/small/back-end/tags');
    }

    protected function registerCheck(array $input)
    {
        // TODO: Implement registerCheck() method.
    }
}
