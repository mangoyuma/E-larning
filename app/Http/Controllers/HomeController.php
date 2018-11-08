<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;

class HomeController extends Controller
{

  public function home()
  {
    return 'Home';
  }   
}


//   function insert(Request $req)
//    {
//       $firstName = $req->input('firstName');
//       $lastName = $req->input('lastName');
//       $moile = $req->input('mobile');
//       // inputで入れた値がファンクションで動く =>($req)

//       $data = array('firstName'=>$firstName,"lastName"=>$lastName,"mobile"=>$mobile);　　
// 　　　　　　　　//　それぞれの値を変数に入れる　=>($data)
      
//       DB::table('input')->insert($data);
//   // DB table(table_name)       ($data) "input" table　に入れる

//       // insert($data)のファンクションを"insertWeb.php"で機能させる

//       echo "Success";
//    }
