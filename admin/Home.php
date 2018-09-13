<?php include "Header2.php" ?>
<?php include "../php/config.php" ?>
<style type="text/css">
html{
    padding:0px;
    margin:0px;
}
div#map_canvas{
    margin:auto;
    width:400px;
    height:300px;
    overflow:hidden;
}
</style>
<script language="javascript">
function fncSubmit()
{
    if(document.form1.Name_store.value == "")
    {
        alert('กรุณากรอกชื่อร้าน');
        document.form1.Name_store.focus();
        return false;
    }   
    if(document.form1.Time.value == "")
    {
        alert('กรุณากรอกเวลาเปิดปิด');
        document.form1.Time.focus();        
        return false;
    }   
     if(document.form1.Address.value == "")
    {
        alert('กรุณากรอกที่อยู่ร้าน');
        document.form1.Address.focus();        
        return false;
    }  
     if(document.form1.Detail.value == "")
    {
        alert('กรุณากรอกรายละเอียดข้อมูลสินค้า');
        document.form1.Detail.focus();        
        return false;
    }  
    if(document.form1.latitude.value == "")
    {
        alert('กรุณากรอกรัดติจุด');
        document.form1.latitude.focus();        
        return false;
    }  
    if(document.form1.longitude.value == "")
    {
        alert('กรุณากรอกลองติจุด');
        document.form1.longitude.focus();        
        return false;
    }  
    if(document.form1.tel.value == "")
    {
        alert('กรุณากรอกเบอร์โทรศัพท์');
        document.form1.tel.focus();        
        return false;
    }  
    document.form1.submit();
}
</script>
<div class="content-wrapper">
        <div class="container">
        <form class="form-horizontal" name="form1" action="../php/db.php" method="POST"  enctype="multipart/form-data" onSubmit="JavaScript:return fncSubmit();">
            <input type="hidden" name="menu" value="InsertShop">
            <input type="hidden" name ="idstore" id = "idstore">
	        <input type="hidden" name ="img" id = "img">
            <fieldset>
                <!-- Form Name -->
                <H2><br><br>เพื่มข้อมูล</H2>
                <!-- Text input-->
                <div class="form-group">
                <H4><label class="col-md-4 control-label" for="textinput">ชื่อร้าน</label></H4>  
                <div class="col-md-4">
                <input id="Name_store" name="Name_store" type="text"  class="form-control input-md" >
                </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                <H4><label class="col-md-4 control-label" for="textinput">เวลาเปิดปิด</label></H4> 
                <div class="col-md-4">
                <input id="Time" name="Time" type="text"  class="form-control input-md" >  
                </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                <H4><label class="col-md-4 control-label" for="textinput"> ที่อยู่</label></H4>  
                <div class="col-md-4">
                <input id="Address" name="Address" type="text"  class="form-control input-md" > 
                </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                <H4><label class="col-md-4 control-label" for="textinput">ข้อมูลสินค้า</label></H4>  
                <div class="col-md-4">
                <textarea id="Detail" name="Detail" type="text"  class="form-control input-md" > </textarea>
                </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                <H4><label class="col-md-4 control-label" for="textinput">รัดติจุด</label></H4>  
                <div class="col-md-4">
                <input id="latitude" name="latitude" type="text"  class="form-control input-md" >
                </div>
                </div>

                <div class="form-group">
                <H4><label class="col-md-4 control-label" for="textinput">ลองติจุด</label></H4>  
                <div class="col-md-4">
                <input id="longitude" name="longitude" type="text"  class="form-control input-md" >
                </div>
                </div>
                <div class="form-group">
                <H4><label class="col-md-4 control-label" for="textinput">แผนที่</label></H4>  
                <div class="col-md-4">
                        <div id="map_canvas">
                        </div> 
                </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                <H4><label class="col-md-4 control-label" for="textinput">เบอร์โทร</label></H4>  
                <div class="col-md-4">
                <input id="tel" name="tel" type="text" onkeypress="NumberOneOrZero(event)"  class="form-control input-md" >
                </div>
                </div>
            <!-- File Button --> 
                <div class="form-group">
                <H4><label class="col-md-4 control-label" for="filebutton">รูปภาพ</label></H4>
                <div class="col-md-4">
                    <input id="fileToUpload" name="fileToUpload" class="input-file" type="file">
                </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-4">
                    <button id="singlebutton" name="singlebutton" class="btn btn-danger">บันทึก</button>
                </div>
                </div>
            </fieldset>
        </form>
        <?php 
        $sql = "SELECT * FROM database_store";
        $result = $conn->query($sql);
        ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ภาพ</th>
                    <th>ชื่อ</th>
                    <th>ที่อยู่</th>
                    <th>รัดติจุด</th>
                    <th>ลองติจุด</th>
                    <th>แก้ไข</th>
                    <th>ลบ</th>
                </tr>
            </thead>
        <tbody>
            <?php
            while($row = $result->fetch_assoc()){ 
            ?>
        <tbody>
          <tr>
              <td><img src="<?php echo $row["image"] ?>" width="50"></td>
              <td><?php echo $row["name"]?></td>
              <td><?php echo $row["address"]?></td>
              <td><?php echo $row["latitude"]?></td>
              <td><?php echo $row["longitude"]?></td>
              <td> <button id="singlebutton" name="singlebutton" onclick="getEShopMAP(<?php echo $row["id"] ?>)" class="btn btn-primary">แก้ไข</button></td>
                <td><a href="../php/db.php?menu1=delete&id=<?php echo $row["id"] ?>"><button  id="singlebutton2" name="singlebutton2"  class="btn btn-warning" type = "button" >ลบ</button></a></td>
          </tr>
        </tbody>
      <?php 
      }
      ?>
    </table>
        </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
<script type="text/javascript">
    function getEShopMAP(id){
    //alert(id);
    $.ajax({
        type : "POST",
        url : "../php/db.php",
        data : {
              menu : 'editstore',
              id : id,
        },
        dataType : "json",
        success : function (res){
           //console.log(res);
           //alert(res);
            //$("#show").html(res);
           // ส่วนนี้คือการ วนเอาค่าใน เอพีไอ เอามาฌชว์แต่ละตัว
            jQuery.each(res , function(index,row){
               // alert(row.name);
             $("#Name_store").val(row.name);
             $("#Time").val(row.time);
             $("#Address").val(row.address);
             $("#Detail").val(row.product);
             $("#latitude").val(row.latitude);
             $("#longitude").val(row.longitude);
             $("#tel").val(row.phone);
             $("#idstore").val(row.id);
             $("#img").val(row.image);
             Editinitialize(row.latitude,row.longitude);
           //  $("#show").html("ชื่อ "+row.name+" รายละเอียด "+row.deteil+" รูป "+row.img2);
            });



        },
        error : function (jqXHR , status ,error){
            alert("error");
        }
    });
}
function NumberOneOrZero(event) {
        var x = event.which || event.keyCode;
        if (x < 47 || x > 58)
            event.returnValue = false;
        else
            var id = $('#tel').val();
    }
</script>

 
<script src="//maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyBwge1FSHpFtVtNqLlI4Mj3vnoi-lbyos0" type="text/javascript"></script>
<script type="text/javascript"> 
function initialize() { 
        $("#latitude").val(14.987297);
        $("#longitude").val(102.119254);
      if (GBrowserIsCompatible()) { 
        var map = new GMap2(document.getElementById("map_canvas")); 
        var center = new GLatLng(14.987297, 102.119254); // การกำหนดจุดเริ่มต้น
        map.setCenter(center, 16);  // เลข 13 คือค่า zoom  สามารถปรับตามต้องการ 
        map.setUIToDefault(); 
         
        var marker = new GMarker(center, {draggable: true});  
        map.addOverlay(marker);
          
        GEvent.addListener(marker, "dragend", function() {
            var point = marker.getPoint();
            map.panTo(point);
     
            $("#latitude").val(point.lat());
            $("#longitude").val(point.lng());
            $("#zoom_value").val(map.getZoom());
     
        });     
      }
    
} 
function Editinitialize(lat , log) { 
       
      if (GBrowserIsCompatible()) { 
        var map = new GMap2(document.getElementById("map_canvas")); 
        var center = new GLatLng(lat, log); // การกำหนดจุดเริ่มต้น
        map.setCenter(center, 16);  // เลข 13 คือค่า zoom  สามารถปรับตามต้องการ 
        map.setUIToDefault(); 
         
        var marker = new GMarker(center, {draggable: true});  
        map.addOverlay(marker);
          
        GEvent.addListener(marker, "dragend", function() {
            var point = marker.getPoint();
            map.panTo(point);
     
            $("#latitude").val(point.lat());
            $("#longitude").val(point.lng());
            $("#zoom_value").val(map.getZoom());
     
        });     
      }
    
} 
</script> 
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript">
$(function(){
    initialize();
    $(document.body).unload(function(){
            GUnload();
    });
});
</script>