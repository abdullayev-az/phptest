<?php
session_start();
include 'core/confing.php';
if(!isset($_SESSION['giris'])){
    header('location:index.php');
}

?>

<style>
    table{
        width: 100%;
    }
    a{
        padding: 0px 20px;
        text-deceration: none;
        background: yellow;
        text-decoration: none;
    }
</style>





<table border="1">
    <tr>
        <th>Id</th>
        <th>ad</th>
        <th>mail</th>
        <th>Əməliyyatd</th>
    </tr>

    <?php
    
    $user_goster=$db->prepare("SELECT * from emekdaslar");
    $user_goster->execute();

    while($user_view=$user_goster->Fetch(PDO::FETCH_ASSOC)){?>


    <tr>
        <td><?php echo $user_view['id']?></td>
        <td><?php echo $user_view['name']?></td>
        <td><?php echo $user_view['mail']?></td>
        <td>
            <a href="">Yenile</a>
            <a href="">Sil</a>
        </td>
    </tr>


    <?php }


    ?>
    
    


    

</table>


<a href="logout.php" style="position: relative;top: 5rem;">Logout</a>