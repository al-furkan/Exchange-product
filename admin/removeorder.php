<?php
include('../db.php');
if(isset($_GET['rmproduct'])){
    $get_id = $_GET['rmproduct'];


$delete_smg = "DELETE FROM extraorder WHERE id='$get_id'";
$run_delete = mysqli_query($con, $delete_smg);
if($run_delete){
    echo "<script>alert('delete  okkay!')</script>";
    echo "<script>window.open('viewexorder.php','_self')</script>";
}

}

?>



<?php
if(isset($_GET['rm'])){
    $get_id = $_GET['rm'];


$delete_smg = "DELETE FROM cart WHERE id='$get_id'";
$run_delete = mysqli_query($con, $delete_smg);
if($run_delete){
    echo "<script>alert('delete  okkay!')</script>";
    echo "<script>window.open('vieworder.php','_self')</script>";
}

}

?>


<?php
if(isset($_GET['rmuser'])){
    $get_id = $_GET['rmuser'];


$delete_smg = "DELETE FROM user_info WHERE user_id='$get_id'";
$run_delete = mysqli_query($con, $delete_smg);
if($run_delete){
    echo "<script>alert('delete  okkay!')</script>";
    echo "<script>window.open('index.php','_self')</script>";
}

}

?>