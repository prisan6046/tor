<?php include "Header2.php" ?>
<?php include "php/config.php" ?>
<?php
 $id = $_GET['id'];
?>
<style>


/*----------------------------------------------------*/
/*----------------- Testimonials CSS -----------------*/
/*----------------------------------------------------*/
.testimonial{
    margin-bottom: 10px;
}

    .testimonial-section {
        width: 100%;
        height: auto;
        padding: 15px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        position: relative;
        border: 1px solid #fff;
    }
    .testimonial-section:after {
        top: 100%;
        left: 50px;
        border: solid transparent;
        content: " ";
        position: absolute;
        border-top-color: #fff;
        border-width: 15px;
        margin-left: -15px;
    }

    .testimonial-desc {
        margin-top: 20px;
        text-align:left;
        padding-left: 15px;
    }
        .testimonial-desc img {
            border: 1px solid #f5f5f5;
            border-radius: 150px;
            height: 70px;
            padding: 3px;
            width: 70px;
            display:inline-block;
            vertical-align: top;
        }

        .testimonial-writer{
            display: inline-block;
            vertical-align: top;
            padding-left: 10px;
        }

            .testimonial-writer-name{
                font-weight: bold;
            }

            .testimonial-writer-designation{
                font-size: 85%;
            }

            .testimonial-writer-company{
                font-size: 85%;
            }
    /*---- Outlined Styles ----*/
    .testimonial.testimonial-default{
        
    }
        .testimonial.testimonial-default .testimonial-section{
            border-color: #777;
        }

            .testimonial.testimonial-default .testimonial-section:after{
                border-top-color: #777;
            }

        .testimonial.testimonial-default .testimonial-desc{
            
        }

            .testimonial.testimonial-default .testimonial-desc img{
                border-color: #777;
            }

            .testimonial.testimonial-default .testimonial-writer-name{
                color: #777;
            }

    .testimonial.testimonial-primary{
        
    }
        .testimonial.testimonial-primary .testimonial-section{
            border-color: #337AB7;
            color: #286090;
            background-color: rgba(51, 122, 183, 0.1);
        }

            .testimonial.testimonial-primary .testimonial-section:after{
                border-top-color: #337AB7;
            }

        .testimonial.testimonial-primary .testimonial-desc{
            
        }

            .testimonial.testimonial-primary .testimonial-desc img{
                border-color: #337AB7;
            }

            .testimonial.testimonial-primary .testimonial-writer-name{
                color: #337AB7;
            }

    .testimonial.testimonial-info{
        
    }
        .testimonial.testimonial-info .testimonial-section{
            border-color: #5BC0DE;
            color: #31b0d5;
            background-color: rgba(91, 192, 222, 0.1);
        }

            .testimonial.testimonial-info .testimonial-section:after{
                border-top-color: #5BC0DE;
            }

        .testimonial.testimonial-info .testimonial-desc{
            
        }

            .testimonial.testimonial-info .testimonial-desc img{
                border-color: #5BC0DE;
            }

            .testimonial.testimonial-info .testimonial-writer-name{
                color: #5BC0DE;
            }


    .testimonial.testimonial-success{
        
    }
        .testimonial.testimonial-success .testimonial-section{
            border-color: #5CB85C;
            color: #449d44;
            background-color: rgba(92, 184, 92, 0.1);
        }

            .testimonial.testimonial-success .testimonial-section:after{
                border-top-color: #5CB85C;
            }

        .testimonial.testimonial-success .testimonial-desc{
            
        }

            .testimonial.testimonial-success .testimonial-desc img{
                border-color: #5CB85C;
            }

            .testimonial.testimonial-success .testimonial-writer-name{
                color: #5CB85C;
            }

    .testimonial.testimonial-warning{
        
    }
        .testimonial.testimonial-warning .testimonial-section{
            border-color: #F0AD4E;
            color: #d58512;
            background-color: rgba(240, 173, 78, 0.1);
        }

            .testimonial.testimonial-warning .testimonial-section:after{
                border-top-color: #F0AD4E;
            }

        .testimonial.testimonial-warning .testimonial-desc{
            
        }

            .testimonial.testimonial-warning .testimonial-desc img{
                border-color: #F0AD4E;
            }

            .testimonial.testimonial-warning .testimonial-writer-name{
                color: #F0AD4E;
            }

    .testimonial.testimonial-danger{
        
    }
        .testimonial.testimonial-danger .testimonial-section{
            border-color: #D9534F;
            color: #c9302c;
            background-color: rgba(217, 83, 79, 0.1);
        }

            .testimonial.testimonial-danger .testimonial-section:after{
                border-top-color: #D9534F;
            }

        .testimonial.testimonial-danger .testimonial-desc{
            
        }

            .testimonial.testimonial-danger .testimonial-desc img{
                border-color: #D9534F;
            }

            .testimonial.testimonial-danger .testimonial-writer-name{
                color: #D9534F;
            }

    /*---- Filled Styles ----*/
    .testimonial.testimonial-default-filled{
        
    }
        .testimonial.testimonial-default-filled .testimonial-section{
            color: #fff;
            border-color: #777;
            background-color: #777;
        }

            .testimonial.testimonial-default-filled .testimonial-section:after{
                border-top-color: #777;
            }

        .testimonial.testimonial-default-filled .testimonial-desc{
            
        }

            .testimonial.testimonial-default-filled .testimonial-desc img{
                border-color: #777;
                background-color: #777;
            }

            .testimonial.testimonial-default-filled .testimonial-writer-name{
                color: #777;
            }

    .testimonial.testimonial-primary-filled{
        
    }
        .testimonial.testimonial-primary-filled .testimonial-section{
            color: #fff;
            background-color: #337ab7;
            border-color: #2e6da4;
        }

            .testimonial.testimonial-primary-filled .testimonial-section:after{
                border-top-color: #337AB7;
            }

        .testimonial.testimonial-primary-filled .testimonial-desc{
            
        }

            .testimonial.testimonial-primary-filled .testimonial-desc img{
                border-color: #2e6da4;
                background-color: #337ab7;
            }

            .testimonial.testimonial-primary-filled .testimonial-writer-name{
                color: #337AB7;
            }

    .testimonial.testimonial-info-filled{
        
    }
        .testimonial.testimonial-info-filled .testimonial-section{
            color: #fff;
            background-color: #5bc0de;
            border-color: #46b8da;
        }

            .testimonial.testimonial-info-filled .testimonial-section:after{
                border-top-color: #5BC0DE;
            }

        .testimonial.testimonial-info-filled .testimonial-desc{
            
        }

            .testimonial.testimonial-info-filled .testimonial-desc img{
                border-color: #46b8da;
                background-color: #5bc0de;
            }

            .testimonial.testimonial-info-filled .testimonial-writer-name{
                color: #5BC0DE;
            }


    .testimonial.testimonial-success-filled{
        
    }
        .testimonial.testimonial-success-filled .testimonial-section{
            color: #fff;
            background-color: #5cb85c;
            border-color: #4cae4c;
        }

            .testimonial.testimonial-success-filled .testimonial-section:after{
                border-top-color: #5CB85C;
            }

        .testimonial.testimonial-success-filled .testimonial-desc{
            
        }

            .testimonial.testimonial-success-filled .testimonial-desc img{
                border-color: #4cae4c;
                background-color: #5cb85c;
            }

            .testimonial.testimonial-success-filled .testimonial-writer-name{
                color: #5CB85C;
            }

    .testimonial.testimonial-warning-filled{
        
    }
        .testimonial.testimonial-warning-filled .testimonial-section{
            color: #fff;
            background-color: #f0ad4e;
            border-color: #eea236;
        }

            .testimonial.testimonial-warning-filled .testimonial-section:after{
                border-top-color: #F0AD4E;
            }

        .testimonial.testimonial-warning-filled .testimonial-desc{
            
        }

            .testimonial.testimonial-warning-filled .testimonial-desc img{
                border-color: #eea236;
                background-color: #f0ad4e;
            }

            .testimonial.testimonial-warning-filled .testimonial-writer-name{
                color: #F0AD4E;
            }

    .testimonial.testimonial-danger-filled{
        
    }
        .testimonial.testimonial-danger-filled .testimonial-section{
                color: #fff;
                background-color: #d9534f;
                border-color: #d43f3a;
        }

            .testimonial.testimonial-danger-filled .testimonial-section:after{
                border-top-color: #D9534F;
            }

        .testimonial.testimonial-danger-filled .testimonial-desc{
            
        }

            .testimonial.testimonial-danger-filled .testimonial-desc img{
                border-color: #d43f3a;
                background-color: #D9534F;
            }

            .testimonial.testimonial-danger-filled .testimonial-writer-name{
                color: #D9534F;
            }
</style>
<script language="javascript">
function fncSubmit()
{
    if(document.form1.name.value == "")
    {
        alert('Please input Input 1');
        document.form1.name.focus();
        return false;
    }   
    if(document.form1.Email.value == "")
    {
        alert('Please input Input 2');
        document.form1.Email.focus();        
        return false;
    }   
     if(document.form1.comment.value == "")
    {
        alert('Please input comment');
        document.form1.comment.focus();        
        return false;
    }  
     if(document.form1.point.value == "")
    {
        $("#msg").html("<div class=\"alert alert-warning\"><strong>คุณยังไม่ได้เลือกคะแนน!</strong> กรุณาเลือกความพึ่งพอใจด้วยครับ </div>");
        document.form1.point.focus();        
        return false;
    }  
    document.form1.submit();
}
</script>
<div class="content-wrapper">
    <div class="container">
        <div class="col-md-6">



        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">อ่านความคิดเห็น</a></li>
            <li><a data-toggle="tab" href="#menu1">แสดงความคิดเห็น</a></li>
     
        </ul>
    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <table class="table table-striped">
                    <thead>
                      <tr>
                       
                        <th>คะแนนความพึ่งพอใจ</th>
                        <th>สรุป</th>
                        <th>สถานะ</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sum = 0;
                            $query1 = "select COUNT(id) as sum from comment_store where storeid = '$id'";
                            $result1 = $conn->query($query1);
                            while ($row = $result1->fetch_assoc()) {
                                          $countPeople =  $row['sum'];
                            }
                            $query1 = "select point from comment_store where storeid = '$id'";
                            $result1 = $conn->query($query1);
                            while ($row = $result1->fetch_assoc()) {
                                          $sum = $sum + intval($row['point']);
                            }
                        ?>
                      <tr>
                       
                        <td><?php echo $sum; ?></td>
                        <td><?php  echo number_format(($sum/$countPeople), 2, '.', ''); ?></td>
                         <td><?php  
                            if(($sum/$countPeople) >= 1 && ($sum/$countPeople) < 2){
                                echo "ปรับปรุง";
                             }
                             if(($sum/$countPeople) >= 2 && ($sum/$countPeople) < 3){
                                echo "พอใช้";
                             }
                             if(($sum/$countPeople) >=  3 && ($sum/$countPeople) < 4){
                                echo "ปานกลาง";
                             }
                             if(($sum/$countPeople) >=  4 && ($sum/$countPeople) < 5){
                                echo "ดี";
                             }
                              if(($sum/$countPeople) >=  5 ){
                                echo "ดีมาก";
                             }
                         ; ?></td>
                      </tr>
                      
                    </tbody>
                  </table>




            <?php 
           
            $sql = "SELECT * FROM comment_store where storeid = '$id'";
            $result = $conn->query($sql);
            ?>
            <div class="container" style="padding-top:30px">
          
                <div class="row">
                    <?php
                    while($row = $result->fetch_assoc()){ 
                    ?>
                    <div class="col-sm-6">
                            <div id="tb-testimonial" class="testimonial testimonial-info">
                                <div class="testimonial-section">
                                    <?php echo $row["comment"]; ?>
                                </div>
                                <div class="testimonial-desc">
                                    <img src="http://icons.iconarchive.com/icons/gianni-polito/colobrush/256/software-crystal-msn-icon.png" alt="" />
                                    <div class="testimonial-writer">
                                        <div class="testimonial-writer-name"><?php echo $row["name"]; ?></div>
                                        <div class="testimonial-writer-designation"><?php echo $row["email"]; ?></div>
                                        <div class="testimonial-writer-designation"><?php echo $row["date"]; ?></div>
                                    
                                    </div>
                                </div>
                            </div>   
            </div>
                <?php 
                }
                ?>
        </div> 
    </div>

    </div>
        <div id="menu1" class="tab-pane fade">
            <div class="Compose-Message">               
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <?php
                            $query = "SELECT * FROM database_store WHERE id = '$id';";
                            $result = $conn->query($query);
                            while ($row = $result->fetch_assoc()) {
                                $namestore = $row['name'];
                            }
                            $conn->close();

                        ?>
                    แสดงความคิดเห็น  ของร้าน <?php echo $namestore; ?>
                </div>
                <form name="form1" action="php/db.php" method="POST" onSubmit="JavaScript:return fncSubmit();">
                    <input type="hidden" name="menu" value="addcommentstore">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="panel-body">        
                        <label>ชื่อ : </label>
                        <input id="name" name="name" type="text"  class="form-control input-md" required>
                        <label>Email :  </label>
                        <input id="Email" name="Email" type="email"  class="form-control input-md" >
                        <label>ความติดเห็น : </label>
                        <textarea rows="9" class="form-control" id="comment" name="comment" required></textarea>
                        <div id="msg"></div>
                        <label>ให้คะแนนความพึ่งพอใจ</label>
                            <select name="point" class="form-control input-md" >
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
       
    </div>

        </div>
    </div>
</div>