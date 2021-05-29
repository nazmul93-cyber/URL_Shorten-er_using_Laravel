<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalController extends Controller
{
    //
    public function mathOp(Request $req) {


        $submit = $req->input('submit');

        if (isset($submit)) {

            $num1 = $req->input('num1');
            $num2 = $req->input('num2');
            $mathop = $req->input('mathop');


            if($mathop == "add") {
            
                $result = $num1+$num2;
                $req->session()->flash('final',$result);
                return redirect('calculator');

            }elseif($mathop == "sub") {

                $result= $num1-$num2;
                $req->session()->flash('final',$result);
                return redirect('calculator');

            }elseif($mathop == "mul") {

                $result= $num1*$num2;
                $req->session()->flash('final',$result);
                return redirect('calculator');

            }else {

                $result= $num1/$num2;
                $req->session()->flash('final',$result);
                return redirect('calculator');

            }


        }

        
    }
}
