<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
    $api->group(['namespace' => 'App\Http\Controllers\Api'], function ($api) {
        //namespace声明路由组的命名空间，因为上面设置了"prefix"=>"api",所以以下路由都要加一个api前缀，比如请求/api/users_list才能访问到用户列表接口


            $api->get('users_list',function(){
                return 'test';
            });


            #管理员可用接口
            #用户列表api
            // $api->get('/users_list','AdminApiController@usersList');
            // #添加用户api
            // $api->post('/add_user','AdminApiController@addUser');
            // #编辑用户api
            // $api->post('/edit_user','AdminApiController@editUser');
            // #删除用户api
            // $api->post('/del_user','AdminApiController@delUser');
            // #上传头像api
            // $api->post('/upload_avatar','UserApiController@uploadAvatar');



    });
});

