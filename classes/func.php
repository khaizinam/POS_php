<?php
    function add_to_cart($mysqli, $id_item, $name, $img, $cost, $amount, $id_cart, $id_user,$user_name,$status,$pay,$ban){
         //kiem tra danh sach hang hoa xem hang hoa da dc dang ki chua  
         $sql_1 = "SELECT * FROM my_cart WHERE id_item='".$id_item."' AND id_cart='".$id_cart."'  AND pay='0'";
         $query_kiem_tra = mysqli_query($mysqli, $sql_1);
         $count_kiem_tra = mysqli_num_rows($query_kiem_tra); 
         $fetch_query_kiem_tra = mysqli_fetch_array( $query_kiem_tra);
         $so_luong_tmp = $fetch_query_kiem_tra['amount']; 
        if($count_kiem_tra==0){//Chua dang ki
            $sql = "INSERT INTO my_cart(id_item,name,img,cost,amount,id_cart,id_user,user_name,status,pay,so_ban,code) VALUE('".$id_item."','".$name."','".$img."','".$cost."', '".$amount."', '".$id_cart."', '".$id_user."','".$user_name."', '".$status."', '".$pay."','".$ban."','')" ;
            mysqli_query($mysqli, $sql);
        }else{
            $so_luong_tmp += $amount;
            $update_1 = "UPDATE my_cart SET amount='".$so_luong_tmp."' WHERE id_item='".$id_item."' AND id_cart='".$id_cart."'";
            mysqli_query($mysqli, $update_1);
        };
    };
    
    function call_don_xu_li($mysqli, $id_gio_hang){
        $sql = "SELECT * FROM my_cart WHERE id_gio_hang='".$id_gio_hang."' AND pay='1'";
        mysqli_query($mysqli, $sql);
    };
    
    function thanh_toan($mysqli, $id){
        $sql= "UPDATE my_cart SET pay='1' WHERE id_cart='".$id."'";
        mysqli_query($mysqli, $sql);
        $sql= "UPDATE tbl_gio_hang SET status='pay' WHERE id_cart='".$id."'";
        mysqli_query($mysqli, $sql);
    };
    function find_id_gio_hang($mysqli, $id){
        $sql = "SELECT * FROM tbl_gio_hang WHERE id_user='".$id."' AND status='not'";
        $query=mysqli_query($mysqli, $sql);
        return  $query;
    };
    function get_id_cart($mysqli, $id){
        $sql = "SELECT * FROM tbl_gio_hang WHERE id_user='".$id."' AND status='not'";
        $query=mysqli_query($mysqli, $sql);
        $count = mysqli_num_rows($query);
        if($count==0){
            $sql_create = "INSERT INTO tbl_gio_hang(id_cart,id_user, status, date,time) VALUES ('','".$id."','not','','".date("F d, Y h:i:s A")."')";
            mysqli_query($mysqli, $sql_create);     
        }
        $query_gio_hang=find_id_gio_hang($mysqli, $id);
        $fetch_query_gio_hang =  mysqli_fetch_array($query_gio_hang);
        return $fetch_query_gio_hang['id_cart'];
    };
    function query_don_hang($mysqli,$id){
        $sql ="SELECT * FROM my_cart WHERE pay!='2' AND pay!='0' AND id_cart='".$id."'";
        $query=mysqli_query($mysqli,$sql);
        return $query;
    } 
    function query_historty($mysqli,$id){
        $sql ="SELECT * FROM my_cart WHERE pay='2' AND id_cart='".$id."'";
        $query=mysqli_query($mysqli,$sql);
        return $query;
    } 
    function query_don_hang_done($mysqli,$id){
        $sql ="SELECT * FROM my_cart WHERE pay='2' AND id_cart='".$id."'";
        $query=mysqli_query($mysqli,$sql);
        return $query;
    } 
    function query_id_don_hang($mysqli){
        $sql ="SELECT * FROM tbl_gio_hang WHERE NOT status='done' AND status!='not' ORDER BY id_cart DESC";
        $query=mysqli_query($mysqli,$sql);
        return $query;
    } 
    function query_id_don_hang_done($mysqli){
        $sql ="SELECT * FROM tbl_gio_hang WHERE status='done'  ORDER BY id_cart DESC";
        $query=mysqli_query($mysqli,$sql);
        return $query;
    }
    function update_don_hang($mysqli,$code,$status){
        $sql ="UPDATE my_cart SET status='".$status."' WHERE code='".$code."'";
        mysqli_query($mysqli,$sql);
    } 
    function update_don_hang_done($mysqli,$id_cart){
        $sql = "UPDATE my_cart SET pay='2', status='Hoàn thành'  WHERE id_cart='".$id_cart."'" ;
        $sql_2 = "UPDATE tbl_gio_hang SET status='done'  WHERE id_cart='".$id_cart."'" ;
        mysqli_query($mysqli,$sql);
        mysqli_query($mysqli,$sql_2);
    }
    function update_1($mysqli){
        if(isset($_POST['update_don_hang_1'])){
            $tep=$_POST['update_status_1'];
            $code=$_POST['code_1'];
            update_don_hang($mysqli,$code,$tep);
        }elseif(isset($_POST['update_don_hang_2'])){
            $tep=$_POST['update_status_2'];
            $code=$_POST['code_2'];
            update_don_hang($mysqli,$code,$tep);
        }elseif(isset($_POST['update_don_hang_3'])){
            $tep=$_POST['update_status_3'];
            $code=$_POST['code_3'];
            update_don_hang($mysqli,$code,$tep);
        }
        elseif(isset($_POST['update_don_hang_4'])){
            $tep=$_POST['update_status_4'];
            $code=$_POST['code_4'];
            update_don_hang($mysqli,$code,$tep);
        }elseif(isset($_POST['update_don_hang_5'])){
            $tep=$_POST['update_status_5'];
            $code=$_POST['code_5'];
            update_don_hang($mysqli,$code,$tep);
        }elseif(isset($_POST['update_don_hang_6'])){
            $tep=$_POST['update_status_6'];
            $code=$_POST['code_6'];
            update_don_hang($mysqli,$code,$tep);
        }elseif(isset($_POST['update_don_hang_7'])){
            $tep=$_POST['update_status_7'];
            $code=$_POST['code_7'];
            update_don_hang($mysqli,$code,$tep);
        }elseif(isset($_POST['update_don_hang_8'])){
            $tep=$_POST['update_status_8'];
            $code=$_POST['code_8'];
            update_don_hang($mysqli,$code,$tep);
        }elseif(isset($_POST['update_don_hang_9'])){
            $tep=$_POST['update_status_9'];
            $code=$_POST['code_9'];
            update_don_hang($mysqli,$code,$tep);
        }elseif(isset($_POST['update_don_hang_10'])){
            $tep=$_POST['update_status_10'];
            $code=$_POST['code_10'];
            update_don_hang($mysqli,$code,$tep);
        }
    }

    function category($mysqli,$type){
        if($type == 'all'){
            $sql = "SELECT * FROM item_1 WHERE status='active' ORDER BY type ASC" ;
        }else{
            $sql= "SELECT * FROM item_1 WHERE type= '".$type."' AND status='active'  ORDER BY name ASC" ;
        } 
        $query = mysqli_query($mysqli, $sql);
        return $query;
    }

?>