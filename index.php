<?php include "Header2.php" ?>
<?php include "php/config.php" ?>
<script language="javascript">
function fncSubmit()
{
    if(document.form1.point.value == "")
    {
       // alert('กรุณาเลือกคะแนนความพึ่งพอใจ');
        $("#msg").html("<div class=\"alert alert-warning\"><strong>คุณยังไม่ได้เลือกคะแนน!</strong> กรุณาเลือกความพึ่งพอใจด้วยครับ </div>");
        document.form1.point.focus();        
        return false;
    }  
    document.form1.submit(); 
} 
</script>
<div class="content-wrapper">
    <div class="container">
        <div class="col-md-12">
                    <div class="Compose-Message">               
                    <div class="panel panel-success">
                    <div class="panel-heading">
                    <br>
                   แสดงความคิดเห็น
                    
                    </div>
                    <form action="php/db.php" method="POST" name="form1" onSubmit="JavaScript:return fncSubmit();">
                        <input type="hidden" name="menu" value="addcomment">
                        <div class="panel-body">        
                            <label>ชื่อ : </label>
                            <input id="name" name="name" type="text"  class="form-control input-md" required>
                            <label>Email :  </label>
                            <input id="Email" name="Email" type="email"  class="form-control input-md" >
                            <label>ความติดเห็น : </label>
                            <textarea rows="9" class="form-control" id="comment" name="comment" required></textarea>
                            <label>ให้คะแนนความพึ่งพอใจ</label>
                            <div id="msg"></div>
                            <select id="point" name="point" class="form-control input-md" >
                                <option value="">กรุณาเลือกคะแนน</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <hr />
                            <button id="singlebutton" name="singlebutton" class="btn btn-info"><span class="glyphicon glyphicon-envelope"></span> Send Message </button>
                        </div>
                    </form>
        </div>
    </div>
</div>