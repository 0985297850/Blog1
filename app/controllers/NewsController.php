<?php
namespace App\controllers;
use App\Blade\Blade;
use App\database\Database;
use App\News;
use App\Register;
use App\User;
use App\LinkNewsTag;
use App\NewsCategories;
use App\NewsTags;
new Database;
use App\components\CategoriesRecursive;
class NewsController extends Controller
{
    /**
     * @function index()
     * List All data from database
     * Example : Register::all()
     */
    public function index(){
        $news = News::all();
        $categories = NewsCategories::all();
        $tags = NewsTags::all();
        $newsTags = LinkNewsTag::all();
        Blade::render('back-end/news/news',compact('news','categories','tags','newsTags'));
    }
    /**
     * @function create()
     * View form create
     * Type data : Array
     * Example : Register::create($data)
     */
    public function create(){
        $tags = NewsTags::all();
        $html = getCategory($parent_id = 0);
        Blade::render('back-end/news/add-news',compact('html','tags'));
    }
    /**
     * @function store()
     * Insert data to database
     * Type data : Array
     * Example : Register::create($data)
     */
    public function store(){
        $title = $_POST['newsAddTitle'];
        $description = $_POST['newsAddDescription'];
        $content = $_POST['newsAddContent'];
        $category = $_POST['newsCategoryAdd'];
        $news = News::create([
            'title'=>$title,
            'description'=>$description,
            'content'=>$content,
            'category_id' => $category,
        ]);
        if ($news) {
            $tags = $_POST["tags"];
            if (!empty($tags)) {
                foreach ($tags as $tag_id) {
                    LinkNewsTag::create([
                        'news_id' => $news->id,
                        'tag_id' => $tag_id
                    ]);
                }
            }
            header('Location:/small/back-end/news');
        } else {
            echo "<script>alert('Thêm tin thất bại'); window.location= '/small/back-end/news';</script>";
        }

    }

    public function edit($id){
        $news = News::find($id['id']);
        $tags = NewsTags::all();
        $newsTags = LinkNewsTag::all();
        $html = getCategory($news->category_id);
        Blade::render('/back-end/news/edit-news',compact('news','ca','tags','newsTags','html'));
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
        $title = $_POST['newsUpTitle'];
        $description = $_POST['newsUpDescription'];
        $content = $_POST['newsUpContent'];
        $category = $_POST['newsCategoryUpdate'];
    //find = WHERE id
        $found_news = News::find($id['id']);

        $news = $found_news->update([
            'title'=> $title,
            'description'=>$description,
            'content'=>$content,
            'category_id' => $category,
        ]);
        if ($news) {
            //  Gắn tags
            $tags = $_POST["tags"];
            if (!empty($tags)) {
                //  Lấy tag đã tồn tại
                $newsTag = LinkNewsTag::where('news_id', $found_news->id)->get();
                $selected_tags = [];
                if (!$newsTag->isEmpty()) {
                    foreach ($newsTag as $tag) {
                        $selected_tags[$tag->tag_id] = $tag->tag_id;
                    }
                }

                foreach ($tags as $tag_id) {
                    //  Kiểm tra nếu có rồi thì bỏ qua
                    $newsTag = LinkNewsTag::where('news_id', $found_news->id)->where('tag_id', $tag_id)->get();
                    //  Insert thêm vào nếu chưa có
                    if ($newsTag->isEmpty()){
                        LinkNewsTag::create([
                            'news_id' => $found_news->id,
                            'tag_id' => $tag_id
                        ]);
                    }
                    unset($selected_tags[$tag_id]);
                }
                //  Loại bỏ tag thừa
                if (!empty($selected_tags)){
                    $arr = [];
                    foreach ($selected_tags as $v) {
                        $arr[] = $v;
                    }
                    LinkNewsTag::where('news_id', $found_news->id)->whereIn('tag_id', $arr)->delete();
                }
            }else{
                // trường hợp mà không chọn tag nào thì xóa hết các liên kết
                LinkNewsTag::where('news_id', $found_news->id)->delete();
            }
            header('Location:/superFood/admin/news/');
        } else {
            echo "<script>alert('Sửa tin thất bại'); window.location= '/small/back-end/news';</script>";
        }
        header('Location:/small/back-end/news');
    }
    /**
     * @function delete()
     * Delete data with id
     * Type id : number
     * Example : Register::delete()
     */
    public function delete($id){
        News::destroy($id);
        LinkNewsTag::where('news_id',$id['id'])->delete();
        header('Location:/small/back-end/news');
    }

    protected function registerCheck(array $input)
    {
        // TODO: Implement registerCheck() method.
    }
}
