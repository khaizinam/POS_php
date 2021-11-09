<style>
    table{
        text-align: center;
        padding: 10px;
    }
    table tr td{
        min-width: 100px;
    }
</style>
<?php 
    include('../config/config.php');   
        $list_001 = "SELECT * FROM item_1 ORDER BY id ASC" ;
        $query_list = mysqli_query($mysqli, $list_001);
        if(isset($_GET['option_list']) && $_GET['option_list']== 'delete'){
            $id_list = $_GET['id_list'];
           $list_delt = "DELETE FROM item_1 WHERE id='".$id_list."' ";
           mysqli_query($mysqli,$list_delt);
           header('location:list.php');
    }
?>    
    <a href="../index.php">Return Main Menu</a><br>
    <a href="index.php">Return manage menu</a><br>
    <a href="page.php">add</a>  
    <table border="1"> 
    <tr>
                <td>ID</td>
                <td>Name</td>
                <td>img</td>
                <td>cost</td>
                <td>type</td>
                <td>option</td>
            </tr>
       <?php              
        while($row_list = mysqli_fetch_array( $query_list)){
        ?>           
            <tr>
                <td><?php echo $row_list['id']; ?></td>
                <td><?php echo $row_list['name']; ?></td>
                <td><img src="../assets/img/<?php echo $row_list['img'];?>" width="100px"></td>
                <td><?php echo number_format($row_list['cost']); ?></td>
                <td><?php echo $row_list['type']; ?></td>
                <td><a href="list.php?option_list=delete&id_list=<?php echo $row_list['id']; ?>">delete</a></td>
            </tr>
        <?php }?>
    </table>

