<?php
 session_start();
$menu = $_POST["menu"];
$menu1 = $_GET['menu1'];
include "config.php" ;
$urlPath = "../assets/img/";

if($menu == 'login'){
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $sql ="SELECT * FROM adminDB Where Username ='".$Username."' and Password ='".$Password."' ";
    $result = $conn->query($sql); 
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $_SESSION["Username"] = $row["Username"];
                $_SESSION["Name"] = $row["name"];
                Header("Location: ../admin/Home.php");
            }
        }
        else{
            Header("Location: ../admin/index.php");

        }
    $conn->close();
}

if($menu == 'editstore'){
    $id = $_POST["id"];
	$query = "SELECT * FROM database_store WHERE id = '$id'";
	$result = $conn->query($query);
	while ($row = $result->fetch_assoc()) {
		      $arryItem["id"] = $row["id"];
            $arryItem["name"] = $row["name"];
            $arryItem["address"] = $row["address"];
            $arryItem["phone"] = $row["phone"];
            $arryItem["time"] = $row["time"];
            $arryItem["product"] = $row["product"];
            $arryItem["latitude"] = $row["latitude"];
            $arryItem["longitude"] = $row["longitude"];
            $arryItem["image"] = $row["image"];
            $arrRows[] = $arryItem;
	}
	$listteacher = json_encode($arrRows);
    echo  $listteacher; 
    
    //echo $id;
}

if($menu == "InsertShop"){
    $id = $_POST["idstore"];
    $Name_store = $_POST["Name_store"];
    $Time = $_POST["Time"];
    $Address = $_POST["Address"];
    $Detail = $_POST["Detail"];
    $longitude = $_POST["longitude"];
    $latitude = $_POST["latitude"];
    $tel = $_POST["tel"];
    $img = $_POST["img"];
    if($id == ""){
        //insert 
        if(!empty($_FILES['fileToUpload']['name'])){
            $tmpname = $_FILES['fileToUpload']['tmp_name'];
            $name = md5($_FILES['fileToUpload']['name']);
            $ext = explode('.',$_FILES['fileToUpload']['name']);
            $ext = array_pop($ext);
            $Newname = $name.".".$ext;
            $filepath = $urlPath.$Newname;
		$Urlname = "http://43.228.87.87/tor/assets/img/".$Newname;
            if(move_uploaded_file($tmpname , $filepath)){
                $sql = "INSERT INTO database_store(id,name,address, phone, time, product, latitude ,longitude , image) VALUES (NULL,'".$Name_store."','".$Address."','".$tel."','".$Time."','".$Detail."','".$latitude."','".$longitude."','".$Urlname."')";
                if ($conn->query($sql) === TRUE) {
                    Header("Location: ../admin/Home.php");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
            }
        }
            else{
                $sql = "INSERT INTO database_store(id,name,address, phone, time, product, latitude ,longitude , image) VALUES (NULL,'".$Name_store."','".$Address."','".$tel."','".$Time."','".$Detail."','".$latitude."','".$longitude."','http://43.228.87.87/tor/assets/img/Noimg.png')";
                if ($conn->query($sql) === TRUE) {
                    Header("Location: ../admin/Home.php");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
            }
    }            
    else{
        //update
        if(!empty($_FILES['fileToUpload']['name'])){
            $tmpname = $_FILES['fileToUpload']['tmp_name'];
            $name = md5($_FILES['fileToUpload']['name']);
            $ext = explode('.',$_FILES['fileToUpload']['name']);
            $ext = array_pop($ext);
            $Newname = $name.".".$ext;
            $filepath = $urlPath.$Newname;
            $Urlname = "http://43.228.87.87/tor/assets/img/".$Newname;
            if(move_uploaded_file($tmpname , $filepath)){
                $sql = "UPDATE database_store SET name ='".$Name_store."' , address = '".$Address."' ,phone = '".$tel."' ,time = '".$Time."' ,product = '".$Detail."' ,latitude = '".$latitude."' ,longitude = '".$longitude."' , image = '".$Urlname."' WHERE id = '".$id."' ";
                if ($conn->query($sql) === TRUE) {
                    Header("Location: ../admin/Home.php");
                } else {
                    echo "Error updating record: " . $conn->error;
                }
                $conn->close();
            }
        }
        else{
            $sql = "UPDATE database_store SET name ='".$Name_store."' , address = '".$Address."' ,phone = '".$tel."' ,time = '".$Time."' ,product = '".$Detail."' ,latitude = '".$latitude."' ,longitude = '".$longitude."'  WHERE id = '".$id."' ";
                if ($conn->query($sql) === TRUE) {
                    Header("Location: ../admin/Home.php");
                } else {
                    echo "Error updating record: " . $conn->error;
                }
                $conn->close();
            }
    }         
}

if($menu == 'delete'){
    $id = $_POST["id"];
    $type = $_POST["table"];
    //echo $type;
    $sql = "DELETE FROM $type WHERE id  = '$id'";

    if ($conn->query($sql) === TRUE) {
        Header("Location: ../admin/Home.php");
   
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    $conn->close();
    
}

if($menu1 == 'delete'){
    $id = $_GET["id"];

    //echo $type;
    $sql = "DELETE FROM database_store WHERE id  = '$id'";

    if ($conn->query($sql) === TRUE) {
        Header("Location: ../admin/Home.php");
   
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    $conn->close();
    
}

if($menu1 == 'deletecomment'){
    $id = $_GET["id"];

    //echo $type;
    $sql = "DELETE FROM comment WHERE id  = '$id'";

    if ($conn->query($sql) === TRUE) {
        Header("Location: ../admin/comment.php");
   
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    $conn->close();
    
}


if($menu == 'addcomment'){
    $name = $_POST["name"];
    $email = $_POST["Email"];
    $comment = $_POST["comment"];
    $point = $_POST['point'];
    date_default_timezone_set("Asia/Bangkok");
    $date = date("y-m-d");
    $sql = "INSERT INTO comment(id,name,email,comment,point,date) VALUES (NULL,'".$name."','".$email."','".$comment."','".$point."','".$date."')";
    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>alert('รับความคิดเห็นเรียบร้อยแล้ว');</script> ";
        Header("Location: ../index.php");
    } else {
       // echo "<script type='text/javascript'>alert('ไม่สามารถแสดงความคิดเห็นได้ เนื่องจากคุณไม่ได้เลือกคะแนน');</script> ";
      //  Header("Location: ../index.php");
      echo "Error: " . $sql . "<br>" . $conn->error;
        
    }
    $conn->close(); 
}
if($menu == 'addcommentstore'){
    $id = $_POST['id'];
    $name = $_POST["name"];
    $email = $_POST["Email"];
    $comment = $_POST["comment"];
    $point = $_POST['point'];
    date_default_timezone_set("Asia/Bangkok");
    $date = date("y-m-d");
    $sql = "INSERT INTO comment_store(id,name,email,comment,date,point,storeid) VALUES (NULL,'".$name."','".$email."','".$comment."','".$date."','".$point."','$id')";
    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>alert('รับความคิดเห็นเรียบร้อยแล้ว');</script> ";
        Header("Location: ../index2.php?id=$id");
    } else {
        //echo "<script type='text/javascript'>alert('ไม่สามารถแสดงความคิดเห็นได้ เนื่องจากคุณไม่ได้เลือกคะแนน');</script> ";
        // Header("Location: ../index2.php?id=$id");
     echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close(); 
}

?>