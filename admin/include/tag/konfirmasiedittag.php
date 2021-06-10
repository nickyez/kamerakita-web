<?php 
    if(isset($_SESSION['id_tag'])){
        $id_tag = $_SESSION['id_tag'];
        $tag = $_POST['tag'];
        if(empty($tag)){
            header("Location:edit-tag-data-".$id_tag."_notif=editkosong");
        }else{
            $sql = "UPDATE `tag` SET `tag`='$tag' WHERE `id_tag`='$id_tag'";
            mysqli_query($koneksi, $sql);
            header("Location:tag_notif-editberhasil");
        }
    }
?>