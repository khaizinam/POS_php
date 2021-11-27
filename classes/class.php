<?php
    //DATABASE connect----------------
class DataBase    
    {
        public $host= HOSTNAME;
        public $name= USERTNAME;
        public $pass= PASS;
        public $database= DATABASEBNAME;

        public $link;
        public $eror;
        public  function __construct()
        {
            $this->connectDB();
        }
        public function connectDB(){
                $this->link = new mysqli($this->host,$this->name,$this->pass,$this->database);
                if (!$this->link) {
                    $this->eror = "Connect fail".$this->link->connect_error;
                    return false;
                }
        }
        public function get_req($query){
           $result = $this->link->query($query) or 
           die($this->link->error.__LINE__);
               return $result;
        }
         public function send_req($query){
            $this->link->query($query) or 
            die($this->link->error.__LINE__);      
         }
    }  
      //USER CHECK----------------
      class userLogin    
      {
            public $db;
            public $fm;

            public  function __construct()
            {
                $this->db = new DataBase();
                $this->fm = new Format();
            }
            public function checkLogin(){
                
            }
            public function login($userName , $userPass )
            {
                $userName = $this->fm->validation($userName);
                $userPass = $this->fm->validation($userPass);

                $userName = mysqli_real_escape_string($this->db->link, $userName);
                $userPass = mysqli_real_escape_string($this->db->link, $userPass);
                if(empty($userName) ||empty($userPass) ){
                    $alert= "User and Pass must be not emty";
                    return $alert;
                }else{
                    $query = "SELECT * FROM username WHERE username='$userName' AND password='$userPass' LIMIT 1";
                    $result = $this->db->get_req($query);
                    if($result != false){
                        $value = $result->fetch_assoc();
                        Session::set('userLogin',true);
                        Session::set('userID',$value['id']);
                        Session::set('userName',$value['username']);
                        Session::set('userPass',$value['password']);
                        Session::set('fullName',$value['name']);
                    }else {
                        $alert="User and Pass not match";
                        return $alert;
                    }
                }
            }
            public function signup($userName , $userPass,$fullname ,$repassword, $email,  $phone_number)
            {
                $fullname = $this->fm->validation($fullname);
                $userName = $this->fm->validation($userName);
                $userPass = $this->fm->validation($userPass);
                $repassword = $this->fm->validation($repassword);
                $email = $this->fm->validation($email);
                $phone_number = $this->fm->validation($phone_number);
                /////////////////////////////////////////
                $fullname = mysqli_real_escape_string($this->db->link, $fullname);
                $userName = mysqli_real_escape_string($this->db->link, $userName);
                $userPass = mysqli_real_escape_string($this->db->link, $userPass);
                $repassword = mysqli_real_escape_string($this->db->link, $repassword);
                $email = mysqli_real_escape_string($this->db->link, $email);
                $phone_number = mysqli_real_escape_string($this->db->link, $phone_number);
                if(empty($userName) ||empty($userPass) || empty($repassword) ){
                    $alert= "User and Pass must be not emty";
                    return $alert;
                }else{
                    if($userPass != $repassword){
                        $alert= "repeat Password must be same password";
                        return $alert;
                    }else{
                        $query = "INSERT INTO username(username, password, name, email, phone_number, role, addres, nation, sex, avatar) VALUES ('$userName','$userPass','$fullname','$email','$phone_number','4','none','none','none','none')";
                        $this->db->send_req($query);
                        $alert= "sucess to create new user";
                        return $alert;
                    }
                }
            }
      }   
      //CATEGORY
      class category
      {
        public $db;
        public $fm;
        public  function __construct()
        {
            $this->db = new DataBase();
            $this->fm = new Format();
        }
        public function call_cat($type){
            $type = $this->fm->validation($type);
            $type = mysqli_real_escape_string($this->db->link, $type);

            if($type == 'all'){
                $query = "SELECT * FROM item_1 WHERE status='active' ORDER BY type ASC" ;
            }else{
                $query= "SELECT * FROM item_1 WHERE type= '$type' AND status='active'  ORDER BY name ASC" ;
            } 
            $result=$this->get_req($query);
            return $result;
        }
        public function show($id){
            $id = $this->fm->validation($id);
            $id = mysqli_real_escape_string($this->db->link, $id);
            $query= "SELECT * FROM item_1 WHERE id= '$id' LIMIT 1" ;
            $result=$this->get_req($query);
            return $result;
        }
        public function send_req($query){
            $this->db->send_req($query);
        }
        public function get_req($query){
            $result = $this->db->get_req($query);
            return $result;
        }
      }
      //CART
      class cart
      {
        public $db;
        public $fm;
        public  function __construct()
        {
            $this->db = new DataBase();
            $this->fm = new Format();
        }
        public function cart_select(){
            $query = "SELECT * FROM my_cart WHERE pay='0' AND id_user='".Session::get('userID')."' ORDER BY id_item ASC" ;
            $result=$this->get_req($query);
            return $result;
        }
        public function cart_check_select(){
            $query = "SELECT * FROM my_cart WHERE pay='0' AND id_user='".Session::get('userID')."'" ;
            $result=$this->get_req($query);
            $num = mysqli_num_rows($result);
            return $num;
        }
        public function status_select(){
            //
            $query =  "SELECT * FROM my_cart WHERE id_user='".Session::get('userID')."' AND pay='1'";
            $result=$this->get_req($query);
            return $result;
        }
        public function status_check_select(){
            $query = "SELECT * FROM my_cart WHERE pay='1' AND id_user='".Session::get('userID')."'" ;
            $result=$this->get_req($query);
            $num = mysqli_num_rows($result);
            return $num;
        }
        public function add_to_cart($id_item, $name, $img, $cost, $amount, $id_cart, $id_user,$user_name,$status,$pay,$ban){
            //kiem tra danh sach hang hoa xem hang hoa da dc dang ki chua  
            $sql_1 = "SELECT * FROM my_cart WHERE id_item='".$id_item."' AND id_cart='".$id_cart."'  AND pay='0'";
            $query_kiem_tra = $this->db->get_req($sql_1);
            $count_kiem_tra = mysqli_num_rows($query_kiem_tra); 
            $fetch_query_kiem_tra = mysqli_fetch_array( $query_kiem_tra);
            $so_luong_tmp = $fetch_query_kiem_tra['amount']; 
           if($count_kiem_tra==0){//Chua dang ki
               $sql = "INSERT INTO my_cart(id_item,name,img,cost,amount,id_cart,id_user,user_name,status,pay,so_ban,code) VALUE('".$id_item."','".$name."','".$img."','".$cost."', '".$amount."', '".$id_cart."', '".$id_user."','".$user_name."', '".$status."', '".$pay."','".$ban."','')" ;
               $this->send_req($sql);
           }else{
               $so_luong_tmp += $amount;
               $update_1 = "UPDATE my_cart SET amount='".$so_luong_tmp."' WHERE id_item='".$id_item."' AND id_cart='".$id_cart."'";
               $this->send_req($update_1);
           }
        }
        public function find_id_gio_hang($id){
            $sql = "SELECT * FROM tbl_gio_hang WHERE id_user='".$id."' AND status='not'";
            $query=$this->get_req($sql);
            return  $query;
        }
        public function get_id_cart($id){
            $sql = "SELECT * FROM tbl_gio_hang WHERE id_user='".$id."' AND status='not'";
            $query=$this->get_req($sql);
            $count = mysqli_num_rows($query);
            if($count==0){
                $sql_create = "INSERT INTO tbl_gio_hang(id_cart,id_user, status, date,time) VALUES ('','".$id."','not','','".date("F d, Y h:i:s A")."')";
                $this->db->send_req($sql_create);     
            }
            $query_gio_hang=$this->find_id_gio_hang($id);
            $fetch_query_gio_hang =  mysqli_fetch_array($query_gio_hang);
            return $fetch_query_gio_hang['id_cart'];
        }
        public function delete_cart($id_item,$id_cart){
            $id_item = $this->fm->validation($id_item);
            $id_item = mysqli_real_escape_string($this->db->link, $id_item);
            $id_cart = $this->fm->validation($id_cart);
            $id_cart = mysqli_real_escape_string($this->db->link, $id_cart);

            $sql = "DELETE FROM my_cart WHERE id_item='$id_item' AND id_cart='$id_cart' AND pay='0'";
            $this->send_req($sql);
        }
        public function thanh_toan($id){
            $id = $this->fm->validation($id);
            $id = mysqli_real_escape_string($this->db->link, $id);
            $sql_1= "UPDATE my_cart SET pay='1' WHERE id_cart='$id'";
            $this->get_req($sql_1);
            $sql= "UPDATE tbl_gio_hang SET status='pay' WHERE id_cart='$id'";
            $this->send_req($sql);
        }
        public function send_req($query){
            $this->db->send_req($query);
        }
        public function get_req($query){
            $result = $this->db->get_req($query);
            return $result;
        }
      }
      class manage
      {
        public $db;
        public $fm;
        public  function __construct()
        {
            $this->db = new DataBase();
            $this->fm = new Format();
        }
        public function insert(){
            $id_opt = '';
            $thu_tu_opt = $_POST['thu_tu'];
            $name_opt = $_POST['name'];
            $img_opt =  $_FILES['img']['name'];
            $img_opt_tmp =  $_FILES['img']['tmp_name'];
            $cost_opt = $_POST['cost'];
            $status_opt = $_POST['status'];
            $details_opt = $_POST['details'];
            $HSD_opt = $_POST['HSD'];
            $NXS_opt = $_POST['NXS'];
            $Supply_opt = $_POST['Supply'];
            $type_opt = $_POST['type'];
            $category_opt = $_POST['category'];
            //call sql
            $add_002 = "INSERT INTO item_1(id,thu_tu,name,img,cost,status,details,HSD,NXS,Supply,type,category) VALUES ('".$id_opt."', '".$thu_tu_opt."', '".$name_opt."', '".$img_opt."', '".$cost_opt."', '".$status_opt."', '".$details_opt."', '".$HSD_opt."', '".$NXS_opt."', '".$Supply_opt."', '".$type_opt."', '".$category_opt."');" ;
            $this->send_req($add_002);
            move_uploaded_file($img_opt_tmp,'../assets/img/'.$img_opt);
            Session::set('add',true);
            Session::set('add_name',$name_opt);
        }
        public function list_history(){
            $sql ="SELECT * FROM tbl_gio_hang WHERE status='done' ORDER BY id_cart DESC";
            $result= $this->get_req($sql);
            return $result;
        }
        public function select_history($id){
            $sql ="SELECT * FROM my_cart WHERE pay='2' AND id_cart='".$id."'";
            $result=$this->get_req($sql);
            return $result;
        }  
        public function show_kho_hang(){
            $sql ="SELECT * FROM item_1 ORDER BY type ASC";
            $result= $this->get_req($sql);
            return $result;
        }
        public function update_don_hang($code,$status){
            $sql ="UPDATE my_cart SET status='".$status."' WHERE code='".$code."'";
            $this->get_req($sql);
        } 
         public function update_1(){
            if(isset($_POST['update_don_hang_1'])){
                $tep=$_POST['update_status_1'];
                $code=$_POST['code_1'];
                $this->update_don_hang($code,$tep);
            }elseif(isset($_POST['update_don_hang_2'])){
                $tep=$_POST['update_status_2'];
                $code=$_POST['code_2'];
                $this->update_don_hang($code,$tep);
            }elseif(isset($_POST['update_don_hang_3'])){
                $tep=$_POST['update_status_3'];
                $code=$_POST['code_3'];
                $this->update_don_hang($code,$tep);
            }
            elseif(isset($_POST['update_don_hang_4'])){
                $tep=$_POST['update_status_4'];
                $code=$_POST['code_4'];
                $this->update_don_hang($code,$tep);
            }elseif(isset($_POST['update_don_hang_5'])){
                $tep=$_POST['update_status_5'];
                $code=$_POST['code_5'];
                $this->update_don_hang($code,$tep);
            }elseif(isset($_POST['update_don_hang_6'])){
                $tep=$_POST['update_status_6'];
                $code=$_POST['code_6'];
                $this->update_don_hang($code,$tep);
            }elseif(isset($_POST['update_don_hang_7'])){
                $tep=$_POST['update_status_7'];
                $code=$_POST['code_7'];
                $this->update_don_hang($code,$tep);
            }elseif(isset($_POST['update_don_hang_8'])){
                $tep=$_POST['update_status_8'];
                $code=$_POST['code_8'];
                $this->update_don_hang($code,$tep);
            }elseif(isset($_POST['update_don_hang_9'])){
                $tep=$_POST['update_status_9'];
                $code=$_POST['code_9'];
                $this->update_don_hang($code,$tep);
            }elseif(isset($_POST['update_don_hang_10'])){
                $tep=$_POST['update_status_10'];
                $code=$_POST['code_10'];
                $this->update_don_hang($code,$tep);
            }
        }
        public function query_don_hang($id){
            $sql ="SELECT * FROM my_cart WHERE pay!='2' AND pay!='0' AND id_cart='".$id."'";
            $result=$this->get_req($sql);
            return $result;
        } 
         public function update_don_hang_done($id_cart){
            $sql = "UPDATE my_cart SET pay='2', status='Hoàn thành'  WHERE id_cart='".$id_cart."'" ;
            $sql_2 = "UPDATE tbl_gio_hang SET status='done'  WHERE id_cart='".$id_cart."'" ;
            $this->send_req($sql);
            $this->send_req($sql_2);
        }
        public function add_item($id,$thu_tu,$name,$cost,$status,$details,$HSD, $NXS,$Supply,$type,$category,$id_list ){
            $sql = "UPDATE item_1 SET id='".$id."', thu_tu='".$thu_tu."',name='".$name."',cost='".$cost."',status='".$status."',details='". $details."',NXS='".$NXS."',HSD='".$HSD."',Supply='".$Supply."',type='".$type."',category='".$category."' WHERE  id='". $id_list."' ";
            $this->send_req($sql);
        }
        public function send_req($query){
            $this->db->send_req($query);
        }
        public function get_req($query){
            $result = $this->db->get_req($query);
            return $result;
        }
      }
 
?>