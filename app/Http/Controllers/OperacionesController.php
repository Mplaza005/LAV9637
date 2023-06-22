<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{
    public function suma($num1,$num2)
    {
        //return view ('operaciones.suma');

         return view('operaciones.suma',['pepe'=>$num1,'num2'=>$num2]);

    }

    public function amigos ($num1,$num2){
        $acu1=0;
        $acu2=0;
        
        for ($i=1; $i < $num1; $i++) { 

            if($num1 % $i == 0){
                $acu1 = $acu1 + $i;
            }
            
        }
        echo $acu1;
        for ($i=1; $i < $num2; $i++) { 

            if($num2 % $i == 0){
                $acu2 = $acu2 + $i;
            }
            
        }
        echo $acu2;

        if($acu1==$num2 &&  $acu2==$num1){
        echo"son amigos";
          }
          else
          echo"no son amigos:";

    }

    public function primo ($num1){
        $cont=0;
        for ($i=1; $i <= $num1; $i++) { 

            if($num1 % $i == 0){
                $cont=$cont+1;
            }
       
    }

    echo $cont;        
    


    }







}
