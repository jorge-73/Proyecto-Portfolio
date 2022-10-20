<?php
include('header.php');
include('../conexion.php');
//include('../conn.php');
/*$sentenciaSQL=$connect->prepare("SELECT * FROM contact");
$sentenciaSQL->execute();
$messageList=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);*/

$messageList = mysqli_query($connect, "SELECT * FROM `Contact`");

?>

<div class="card-header"><h2><b>message list</b></h2></div>
<?php foreach($messageList as $message) { ?>
<div class="col-md-4">
    <div class="card bg-outline-secondary">
        <div class="card-body">
            <h4 class="card-title"><?php echo $message['name']; ?></h4>
            <h4><?php echo $message['email']; ?></h4>
            <p class="bg-white text-dark"><?php echo $message['message']; ?></p>
        </div>
    </div>
</div>
<?php } ?>





















<?php 
include('footer.php');
?>