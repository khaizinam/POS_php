<?php
    function add_to_cart($mysqli, $id_item, $name, $img, $cost, $amount, $id_cart, $id_user,$user_name,$status,$pay){
         //kiem tra danh sach hang hoa xem hang hoa da dc dang ki chua  
         $sql_1 = "SELECT * FROM my_cart WHERE id_item='".$id_item."'";
         $query_kiem_tra = mysqli_query($mysqli, $sql_1);
         $count_kiem_tra = mysqli_num_rows($query_kiem_tra); 
         $fetch_query_kiem_tra = mysqli_fetch_array( $query_kiem_tra);
         $so_luong_tmp = $fetch_query_kiem_tra['amount']; 
        if($count_kiem_tra==0){//Chua dang ki
            $sql = "INSERT INTO my_cart(id_item,name,img,cost,amount,id_cart,id_user,user_name,status,pay) VALUE('".$id_item."','".$name."','".$img."','".$cost."', '".$amount."', '".$id_cart."', '".$id_user."','".$user_name."', '".$status."', '".$pay."')" ;
            mysqli_query($mysqli, $sql);
        }else{
            $so_luong_tmp += $amount;
            $update_1 = "UPDATE my_cart SET amount='".$so_luong_tmp."' WHERE id_item='".$id_item."'";
            mysqli_query($mysqli, $update_1);
        };
    };
    
    function call_don_xu_li($mysqli, $id_gio_hang){
        $sql_1 = "SELECT * FROM my_cart WHERE id_gio_hang='".$id_gio_hang."' AND pay='1'";
        mysqli_query($mysqli, $sql_1);
    };
    
    function thanh_toan($mysqli, $id){
        $sql_1 = "UPDATE my_cart SET pay='1' WHERE id_cart='".$id."'";
        mysqli_query($mysqli, $sql_1);
    };


?>