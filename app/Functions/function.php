<?php
function menuMulti($data, $parent_id = 0, $str ="-|", $select =0){
	foreach ($data as  $val) {
		$id = $val["id"];
		$name = $val["name"];

		if($val["parent_id"]==$parent_id){
			if($select !=0 && $id == $select){
				echo '<option value="'.$id.'"selected>'.$str."".$name.'</option>';
			}else{
				echo '<option value="'.$id.'">'.$str."".$name.'</option>';
			}
		
		menuMulti($data, $id, $str."-|");
		}

	}
}

function listCate($data, $parent =0,$str ="-"){
	
	foreach ($data as  $val) {

		
		$id =$val["id"];
		$name =$val["name"];
		if($val["parent_id"] ==$parent){
		echo' 
			<tr class="list_data">';
	        if($str =="-"){

	        	echo' <td class ="list_td alignleft"><b>'.$str.''.$name.'</b></td>';
	        }else{
	        	echo' <td class ="list_td alignleft">'.$str.''.$name.'</td>';
	        }
	       echo'
	       <td class ="list_td aligncenter">
	       <a href ="edit/'.$id.'"><img src ="../../public/tt13_admin/images/edit.png"</a>
       		<a href ="delete/'.$id.'" onclick = "return xacnhanxoa (\'Bạn có muốn xóa không?\')"><img src ="../../public/tt13_admin/images/delete.png"</a>

       </td>
    </tr>';
    listCate($data, $id, $str."-|");
		}
	
	}
}

function menuMulti1($data){
	foreach ($data as  $val) {
		echo '<option value="'.$val["id"].'">'.$val["tenkh"].'</option>';
	}			
}
?>