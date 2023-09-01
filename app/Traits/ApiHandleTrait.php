<?php

namespace App\Traits;

trait ApiHandleTrait
{

public function handleApi($reponse,$msg,$status_code){
$data=[
    'data'=>$reponse,
    'msg'=>$msg,
    'status_code'=>$status_code,
];
return resoponse($data);
}}



    ?>