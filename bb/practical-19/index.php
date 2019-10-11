<?php
include("class.php");
error_reporting(0);
$r="";
$name="";
$age="";
$city="";
$id="";
$h1="";
$h2="";
$h3="";
$h4="";
 $ob =new student($name,$age,$city,$id);

if(isset($_REQUEST['insert']))
{
    $name= $_REQUEST['name'];
    $age=$_REQUEST['age'];
    $city= $_REQUEST['city'];
    $id =$_REQUEST['id'];
 $ob =new student($name,$age,$city,$id);
 $ob->insert();
 $h1="Id";
    $h2="Name";
    $h3="age";
    $h4="City";
 $r=$ob->display();
}
if(isset($_REQUEST['view']))
{
    $h1="Id";
    $h2="Name";
    $h3="age";
    $h4="City";
    $r=$ob->display();

}
if(isset($_REQUEST['delete']))
{
    $id=$_REQUEST['id'];
    $ob->delete($id);
    $h1="Id";
    $h2="Name";
    $h3="age";
    $h4="City";
 $r=$ob->display();
}
if(isset($_REQUEST['update']))
{
    $name= $_REQUEST['name'];
    $age=$_REQUEST['age'];
    $city= $_REQUEST['city'];
    $id =$_REQUEST['id'];
       $ob->update($id,$name,$age,$city);
    $h1="Id";
    $h2="Name";
    $h3="age";
    $h4="City";
    $r=$ob->display();
}
?>



<html>
    <head>
        <style>
            .container-fuild{
                
                background-color:#343148;
            }
            .container2{
             
                height:500px;
                background-color:#616247;
                        }
       .table{
       background-color:#EAE6DA;
       }                 
            </style>
    <link href="bootstrap.min.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fuild">
        <br>
        <br>
        <div class="container ">
                <h1 style="color: white;">Manage Data</h1>
                    <form name="f1" method="post">
                    <div class="row">
            <div class="col-md-8">
                    <div class="form-goup">
                <input name="name" class="form-control" placeholder="Enter name">        
                </div>
                <br>
                <div class="form-goup">
                <input name="age" placeholder="Enter Age" class="form-control">
                </div>
                <br>
                <div class="form-goup">
                <input name="city" class="form-control" placeholder="Enter City">        
                </div>
                <br>
                <div class="form-goup">
                <input name="id" class="form-control" placeholder="Enter Id">        
                </div>
                <br>
                <div class="form-goup">
                <input name="insert"  type="submit" class="btn btn-info"  value="INSERT">        
                <input name="view"  type="submit" class="btn btn-warning" value="VIEW">        
                <input name="update"  type="submit" class="btn btn-success" value="UPDATE" >        
                <input name="delete"  type="submit" class="btn btn-danger" value="DELETE" >        
                    
            </div>


</form>
</div>
</div>
</div>
        </div>
        <div class="container-fluid">
         
          <div class="contaner-fluid">
              <h1>View Data</h1>
              <table class="table table-responsive">
                  <tr>
                      <th><?php echo $h1 ?></th>
                      <th><?php echo $h2 ?></th>

                      <th><?php echo $h3 ?></th>
                      <th><?php echo $h4 ?></th>
                     


                    </tr>

                    
              <?php  
              while($row=mysqli_fetch_row($r))
              {
              ?>   
              <tr>
                  <td><?php echo $row[0]; ?></td>
                  <td><?php echo $row[1]; ?></td>
                  <td><?php echo $row[3]; ?></td>
                  <td><?php echo $row[2]; ?></td>
                    </tr>
                    <?php

              }
              ?>
                  <table>
                    </div>
        </div>
        </body>
    </html>