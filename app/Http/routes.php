<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('orm', function () {

	/*
	|--------------------------------------------------------------------------
	| C : 新增資料
	|--------------------------------------------------------------------------
	|
	*/
		//-------------------------
	    // 第一種寫法：靜態寫法：create
		//-------------------------
	    //\App\Post::create([
		//	'title'	=>	'fake title',
		//	'content'	=>	'fake content',
		//	'is_feature'	=>	false,
		//]);


		//--------------
		// 第二種寫法：new
		//--------------
		//$post = new \App\Post();
		//$post->title = 'fake title';
		//$post->content = 'fake content';
		//$post->is_feature = true;
		//$post->save();

	/*
	|--------------------------------------------------------------------------
	| R : 讀取資料
	|--------------------------------------------------------------------------
	| dd() ：測試工具：可以在任何地⽅方使⽤用,測試程式碼流程、邏輯、了解物件內容
	*/

		//-----------------------------------------------
		//取出全部資料
		// - Model::all()
		//用 primary key 取出單或數筆資料
		// - Model::find($id)、Model::find([/* ids */]) 
		//增加查詢條件式
		// - Model::where('欄位', '條件', '值')
		// - Model::orderBy('欄位', '排序⽅方式')
		//串聯多個條件
		// - Model::where(/*略*/)->orderBy(/*略*/)->get()
		//-----------------------------------------------


		//$posts = \App\Post::all();
		//dd($posts);

		//$posts = \App\Post::find([1, 2]);
		//dd($posts);
		
		//$posts = \App\Post::where('is_feature', '=', '1')->orderBy('id', 'desc')->get();
		//dd($posts);


		//-------
		// toJson
		//-------
		// $posts = \App\Post::all();
		// dd($posts->toJson());


		// $posts = \App\Post::all();
		// <ul>
		// foreach ($posts as $post) {
		// 	<li>{{ $post->id }}</li>
		// 	}
		// </ul>


		//-----------
		// Collection
		//-----------
		// $myCollection = collect([6,9,1,2,55]);
		// $myCollection->push(5);
		// $random = $myCollection->sort();
		// dd($random);


		//----------------
		// 單一筆資料：Model
		//----------------
		// $post = \App\Post::find(11);
		// dd($post);


		//---------------------------
		// Model 間建立關聯後，讀取出資料
		//---------------------------
		// $post = \App\Post::find(8);
		// //dd($post->comments);
		// foreach ($post->comments as $comment) {
		// 	echo '<li>'.$comment->content.'</li><br>';
		// }

	/*
	|--------------------------------------------------------------------------
	| U : 更新資料
	|--------------------------------------------------------------------------
	|
	*/
		//----------------------------------------------------------------
		// 第一種寫法：用 Mass Assignment 寫法，會受 model 裡的 fillable 所限制
		//----------------------------------------------------------------
		// $post = \App\Post::find(1);
		// $post->update([
		// 	'title' => 'update title',
		// 	'content' => 'update content',
		// 	'is_feature' => false,
		// 	]);

		
		//--------------------------------------------------------
		// 第二種寫法：用 save() 寫法，即不受 model 裡的 fillable 所限制
		//--------------------------------------------------------
		// $post = \App\Post::find(1);
		// $post->title = 'update title new new new';
		// $post->content = 'update content';
		// $post->is_feature = true;
		// $post->save();

	/*
	|--------------------------------------------------------------------------
	| D : 刪除資料
	|--------------------------------------------------------------------------
	|
	*/
		//-----------------------------------------------
		// 語法:
		//  - Model::destroy(/* primary key */)
		//-----------------------------------------------



		// $post = \App\Post::find(1);
		// $post->delete();


		//----------------------------------------
		// 參數：$post = \App\Post::destroy(2,4,6);
		// array：$post = destroy([2,4,6]);
		//----------------------------------------
		// $post = \App\Post::destroy(5, 10);
		// $post->delete();


});





/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
