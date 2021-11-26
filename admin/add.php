    
<style>
    table{
        border-collapse:collapse;
        background-color: #fff;
        
    }
    tr{
        height: 40px;
        border:1px solid black;
    }
    td{
        padding: 10px;
        border:1px solid black;
    }
    .main-body{
        width: 1080px;
        height: 1080px;
        /* position: relative; */
        margin: 20px auto;
    }
    .menu a{
        display: inline-block;
        padding :10px;
        text-decoration: none;
        color: black;
        background-color: #eee;
    }
    input.submit{
        margin: 20px 5px 0px 5px;
        width: 100px;
        height: 50px;
    }
    input{
        margin: 0px 5px 0px 5px;
        width: 600px;
        height: 40px;
        padding: 10px;
    }
   select{
        margin: 0px 5px 0px 5px;
        width: 200px;
        height: 40px;
        padding: 10px;
    }
</style> 
    <div class="menu">
        <a href="index.php">Menu</a>
        <a href="list.php">Danh sách các hàng hóa</a>
    </div>
    <h3>Thêm hàng hóa</h3>
    <?php
     include('../config/config.php');
     include('../config/format.php');
     include('../classes/session.php');
     include('../classes/class.php');
     //call class 
     $manage = new manage();
    if($_SERVER['REQUEST_METHOD']=='POST'){ 
         //get 
         $manage->insert(); 
    }; 
    if(isset($_SESSION['add']) && $_SESSION['add']==true){
        echo 'Ban da cap nhat thanh cong don hang '.Session::get('add_name');
    }
    ?> 
    <hr>
    <div class="main-body">
        <form action="add.php" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td><span>Số lượng :</span></td>
                    <td> <input type="text" name="thu_tu"></td>
                </tr>
                <tr>
                    <td>Tên :</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Hình ảnh :</td>
                    <td><input type="file" name="img"></td>
                </tr>
                <tr>
                    <td>Giá tiền :</td>
                    <td><input type="text" name="cost"></td>
                </tr>
                <tr>
                    <td>Trạng thái :</td>
                    <td><select name="status" id="">
                            <option value="active">active</option>
                            <option value="notactive">Not active</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Mô tả :</td>
                    <td> <textarea rows="10" cols="100"  name="details"></textarea></td>
                </tr>
                <tr>
                    <td>HSD :</td>
                    <td> <input type="date" name="HSD"></td>
                </tr>
                <tr>
                    <td>NXS :</td>
                    <td><input type="date" name="NXS"></td>
                </tr>
                <tr>
                    <td>Nhà cung cấp:</td>
                    <td><input type="text" name="Supply"></td>
                </tr>
                <tr>
                    <td>Loại hàng hóa :</td>
                    <td>
                        <select name="type" id="">
                            <option value="main_food">Món ăn chính</option>
                            <option value="cake">Bánh ngọt</option>
                            <option value="drink">Thức uống</option>
                            <option value="KFC">KFC</option>
                            <option value="juice">Nước ép trái cây</option>
                        </select>
                    </td>
                </tr>
                <tr>
                <td>temp :</td>
                    <td>
                        <select name="category" id="">
                            <option value="main_food">Món ăn chính</option>
                            <option value="cake">Bánh ngọt</option>
                            <option value="drink">Thức uống</option>
                            <option value="KFC">KFC</option>
                            <option value="juice">Nước ép trái cây</option>
                        </select>
                    </td>
                </tr>
            </table>
            <input class="submit" type="submit" name="add" value="Thêm">
        </form>
    </div>
  
  
