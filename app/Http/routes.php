<?php

use App\Book;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('layouts.books');
// });



Route::group(['middleware' => ['web']], function() {
	Route::get('/', function(){
		$books = Book::all();
		return view('layouts.books', [
			'books' => $books
		]);
	});

	Route::post('/book', function(Request $request) {
		$validator = Validator::make($request->all(), [
			'name' => 'requird[max:255',
		]);

		if($validator->fails()) {
			return requird('/')
				->withInput()
				->withErrors($validator);
		}

		$book =	new Book;
		$book->title = $request->name;
		$book->save();

		return reqirect('/');
	});

	Route::delete('/book/{book}', function(Book $book) {
		$book->delete();
	});
});