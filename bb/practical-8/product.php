<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Page-P8</title>
    <style>
        body{
            background-image: url('erez-attias-58871-unsplash.jpg');
            font-family:verdana;
            font-size: 10pt;
        }
        form{
            background-color: white;
            margin: 3%;
        }
        .link_button{
            margin: 5%;
            text-decoration: none;
            color: Black;
            font-size: 25pt;
            border: 2px solid;
        }
        .link_button1{
            margin: 5%;
            text-decoration: none;
            color: green;
            font-size: 25pt;
        }
        .del-link{
            text-decoration: none;
        }
        #text_main{
	        width:220px;
	        height:10px;
	        border-radius:5px 5px 5px 5px;
	        padding:10px;
	        font-size:13px;
	        border-color: black;
        }
        .drp{
	        width:240px;
	        height:35px;
	        border-radius:5px 5px 5px 5px;
	        font-size:13px;
	        border-color: black solid;
        }
        #button2{
	        width:100px;
	        height:35px;
	        left:750px;
	        top:625px;
	        background-color: black;
	        font-family:verdana;
	        font-size:18px;
	        color: white;
	        border-radius:5px 5px 5px 5px;
	        margin-left: 2%;
	        border-style: none;
	        cursor:pointer;	
        }
        .del-link{
            width:100px;
	        height:35px;
	        left:750px;
	        top:625px;
	        background-color: white;
	        font-family:verdana;
	        font-size:18px;
            color: black;
	        border-radius:5px 5px 5px 5px;
	        margin-left: 2%;
	        border-style: 2px solid red;
	        cursor:pointer;	
        }
    </style>
</head>
<body>
<form action="save_prod.php" method="POST" name="combo_form" enctype="multipart/form-data">
        <center>
            <br><br>
            <a class="link_button" href="brand.php">Brand</a>
            <a class="link_button1" href="product.php"><u>Product</u></a>
            <br><br><br>
            <table border="1" width="50%">
                <tr>
                    <th>Brand</th>
                    <?php
                        $db=mysqli_connect('localhost','root','','shop_master') or die("Error 404 not found");                       
                    ?>
                    <th> 
                        <select class="drp" name="brand_name">
                            <option id="drp">--Select--</option>
                            <?php
                            $sql = mysqli_query($db, "SELECT brand_name From brand_master");
                            $row = mysqli_num_rows($sql);
                            while ($row = mysqli_fetch_array($sql)){
                            echo "<option value='". $row['brand_name'] ."'>" .$row['brand_name'] ."</option>" ;
                            }
                            
                        ?>
                        </select> 
                    </th>
                </tr>
                
                <tr>
                    <th>Product Name</th>
                    <th> <input type="text" name="prod_name" id="text_main" required> </th>
                </tr>
                <tr>
                    <th>Color</th>
                    <th> 
                        <input type="text" name="prod_color" id="text_main" required>    
                    </th>
                </tr>
                <tr>
                    <th>Price</th>
                    <th> <input type="text" name="prod_price" id="text_main" required> </th>
                </tr>
                <tr>
                    <th>Product Description</th>
                    <th> <textarea name="prod_desc" cols="30" rows="5"></textarea> </th>
                </tr>
                <tr>
                    <th></th>
                    <th> 
                        <input type="submit" name="save" value="Save" id="button2"> 
                        <!-- <input type="submit" name="view" value="View" id="view">
                        <input type="submit" name="delete" value="Delete" id="delete"> -->
                        <input type="reset" name="reset" id="button2">
                    </th>
                </tr>
                
            </table>
            <br><br>

            <table border="1" width="50%">
                <tr>
                    <th>Product Id</th>
                    <th>Brand Id</th>
                    <th>Product Name</th>
                    <th>Product Name</th>
                    <th>Color</th>
                    <th>Price</th>
                    <th>Description</th>
                </tr>
 
                <?php

                    $cnt=0;
                    $s="SELECT * FROM product_master,brand_master WHERE product_master.brand_id=brand_master.brand_id ORDER BY prod_id ASC";
                    $r=mysqli_query($db,$s);
                    while($row=mysqli_fetch_array($r))
                    {
                        $cnt++;
                       
                ?>
                <tr>
                <!-- <td></td> -->
                <td><?php echo $row['brand_id'] ?></td>
                <td><?php echo $row['brand_name'] ?></td>
                <td><?php echo $row['prod_id'] ?></td>
                <td><?php echo $row['prod_name'] ?></td>
                <td><?php echo $row['prod_color'] ?></td>
                <td><?php echo $row['prod_price'] ?></td>
                <td><?php echo $row['prod_desc'] ?></td>
                    <?php
                    }
                    ?>
                </tr>
            </table>
            <br><br>
</form>
</body>
</html>