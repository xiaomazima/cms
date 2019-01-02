<?php

namespace  App\Http\Controllers\User;

use Illuminate\Routing\Controller;
use App\Model\User;
class IndexController extends Controller{

    public function index(){

//        echo 'ID:'.$id;
        //echo __METHOD__;
        $arr=User::where(['id'=>2])->first()->toArray();
        print_r($arr);
    }

    public function userAdd(){
        $data=[
          'user_name'=>str_random(5),
            'phone'=>'18532351877',
            'email'=>'122223452353@qq.com',
            'salt'=>'1234'
        ];
        $arr=User::insert($data);
        var_dump($arr);
    }

    public function userDel(){
        $data=User::where(['id'=>1])->delete();
        var_dump($data);
    }

    public function userUpdate(){
        $data=[
            'email'=>'2231185856@qq.com'
        ];
        $res=User::where(['id'=>2])->update($data);
        var_dump($res);
    }

    public function userSelect(){
        $data=User::get()->toArray();
        var_dump($data);
    }

    public function userList(){
        $list=User::all();
        $data=[
          'list'=>$list,
            'page'=>999
        ];
        return view('user.index',$data);
    }
    public function sd(){
        
    }
}