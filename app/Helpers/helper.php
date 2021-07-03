<?php

function status($status,$text=['Active','Inactive']){
    if($status==1){
        return ' <span class="badge badge-success">'.$text[0].'</span>';
    }else{
         return ' <span class="badge badge-danger">'.$text[1].'</span>';
    }
}

?>