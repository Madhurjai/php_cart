<?php 
session_start();
$arr = array(array('id'=>'101','img'=>'football.png','price'=>'$150.00','name'=>'foot ball'),
array('id'=>'102','img'=>'tennis.png','price'=>'$120.00','name'=>'tennis'),
array('id'=>'103','img'=>'basketball.png','price'=>'$90.00','name'=>'Basket ball'),
array('id'=>'104','img'=>'table-tennis.png','price'=>'$110.00','name'=>'table tannis'),
array('id'=>'105','img'=>'soccer.png','price'=>'$80.00','name'=>'soccar'));



function display($arr){
     $html = '<div id = "display">';
     foreach($arr as $key => $val){
           $html .= '<form action="" method="POST"><input type="hidden" name="listid" value = "'.$val['id'].'" >
           <img src="images/'.$val['img'].'">
           <h3>'.$val['name'].'</h3><span> Price :'.$val['price'].' </span>
           <input type="submit" value="add" name="action" id = "addbtn">
           </form>';
     }
     $html .= "</div>";
     return $html ;
}
function getproduct($id,$arr){
    foreach($arr as $key => $val){
            if($val['id'] == $id){
                return $val ;
            }
    }
}
?>
