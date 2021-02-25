<?php

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
Route::pattern('slug','(.*)');
Route::pattern('id','([0-9]*)');
Route::group(['namespace' => 'Cnew'], function(){
  Route::get('', [
    'uses' => 'IndexController@index',
    'as' => 'cnew.index.index'
  ]);
  Route::get('about',[
    'uses' => 'NewController@index',
    'as' => 'cnew.new.index'
  ]);
  Route::get('contact',[
    'uses' => 'ContactController@contact',
    'as' => 'cnew.contact.contact'
  ]);
  Route::post('contact',[
    'uses' => 'ContactController@postContact',
    'as' => 'cnew.contact.contact'
  ]);
  Route::get('cat',[
    'uses' => 'NewController@cat',
    'as' => 'cnew.new.cat'
  ]);
  Route::get('cat/{id}',[
    'uses' => 'CatController@cat',
    'as' => 'cnew.cat.cat'
  ]);
  Route::get('detail/{id}',[
    'uses' => 'NewController@detail',
    'as' => 'cnew.new.detail'
  ]);
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'admin'], function(){
  Route::get('/index',[
    'uses' => 'IndexController@index',
    'as' => 'admin.index.index'
  ]);
  Route::group(['prefix' => 'room'], function(){
    Route::get('',[
      'uses' => 'RoomController@index',
      'as' => 'admin.room.index'
    ]);
    Route::get('add',[
      'uses' => 'RoomController@add',
      'as' => 'admin.room.add'
    ]);
    Route::post('add',[
      'uses' => 'RoomController@postAdd',
      'as' => 'admin.room.add'
    ]);
    Route::get('edit/{id}',[
      'uses' => 'RoomController@edit',
      'as' => 'admin.room.edit'
    ]);
    Route::post('edit/{id}',[
      'uses' => 'RoomController@postEdit',
      'as' => 'admin.room.edit'
    ]);
    Route::get('delete/{id}',[
      'uses' => 'RoomController@delete',
      'as' => 'admin.room.delete'
    ])->middleware('role:admin');
  });

  Route::group(['prefix' => 'roomtype'], function(){
    Route::get('',[
      'uses' => 'RoomTypeController@index',
      'as' => 'admin.roomtype.index'
    ]);
    Route::get('add',[
      'uses' => 'RoomTypeController@add',
      'as' => 'admin.roomtype.add'
    ]);
    Route::post('add',[
      'uses' => 'RoomTypeController@postAdd',
      'as' => 'admin.roomtype.add'
    ]);
    Route::get('edit/{id}',[
      'uses' => 'RoomTypeController@edit',
      'as' => 'admin.roomtype.edit'
    ]);
    Route::post('edit/{id}',[
      'uses' => 'RoomTypeController@postEdit',
      'as' => 'admin.roomtype.edit'
    ]);
    Route::get('delete/{id}',[
      'uses' => 'RoomTypeController@delete',
      'as' => 'admin.roomtype.delete'
    ])->middleware('role:admin');


  });

  Route::group(['prefix' => 'user'], function(){
    Route::get('',[
      'uses' => 'UserController@index',
      'as' => 'admin.user.index'
    ]);
    Route::get('add',[
      'uses' => 'UserController@add',
      'as' => 'admin.user.add'
    ])->middleware('role:admin');
    Route::post('add',[
      'uses' => 'UserController@postAdd',
      'as' => 'admin.user.add'
    ])->middleware('role:admin');
    Route::get('edit/{id}',[
      'uses' => 'UserController@edit',
      'as' => 'admin.user.edit'
    ]);
    Route::post('edit/{id}',[
      'uses' => 'UserController@postEdit',
      'as' => 'admin.user.edit'
    ]);
    Route::get('delete/{id}',[
      'uses' => 'UserController@delete',
      'as' => 'admin.user.delete'
    ])->middleware('role:admin');
  });

  Route::group(['prefix' => 'contact'], function(){
    Route::get('',[
      'uses' => 'ContactController@index',
      'as' => 'admin.contact.index'
    ]);
    Route::get('reply/{id}',[
      'uses' => 'ContactController@reply',
      'as' => 'admin.contact.reply'
    ])->middleware('role:admin|vinaenter');
    Route::post('reply/{id}',[
      'uses' => 'ReplyController@replyEmail',
      'as' => 'admin.contact.reply'
    ])->middleware('role:admin|vinaenter');


  });

  Route::group(['prefix' => 'comment'], function(){
    Route::get('',[
      'uses' => 'CommentController@index',
      'as' => 'admin.comment.index'
    ]);
    Route::get('delete/{id}',[
      'uses' => 'CommentController@delete',
      'as' => 'admin.comment.delete'
    ])->middleware('role:admin|vinaenter');
  });

});

Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function(){
  Route::get('/login',[
    'uses' => 'AuthController@login',
    'as' => 'auth.auth.login'
  ]);
  Route::post('/login',[
    'uses' => 'AuthController@postLogin',
    'as' => 'auth.auth.login'
  ]);
  Route::get('/logout',[
    'uses' => 'AuthController@logout',
    'as' => 'auth.auth.logout'
  ]);
});

Route::get('/pass', function(){
  return bcrypt('123123');
});

Route::get('error',function(){
  return "Bạn không có quyền";
});

Route::post('post-comment',[
  'uses' => 'Api\ApiDetailController@postComment',
  'as' => 'api.detail.post-comment'
]);

Route::post('del-room',[
  'uses' => 'Api\ApiRoomController@delRoom',
  'as' => 'api.room.delete-room'
]);

Route::get('leftbar',[
  'uses' => 'IndexController@LeftBar',
  'as' => 'template.cnew.leftbar'
]);

Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');
