<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Brand Page-P8</title>

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
    <form action="save.php" method="POST" name="combo_form" enctype="multipart/form-data">
        <center>
            <br><br>
            <a class="link_button1" href="brand.php"> <u>Brand</u> </a>
            <a class="link_button" href="product.php">Product</a>
            <br><br><br>
            <table border="1" width="50%">
                <tr>
                    <th>Brand Name</th>
                    <th> <input type="text" name="brand_name" id="text_main" required> </th>
                </tr>
                <tr>
                    <th>Brand Description</th>
                    <th> <input type="text" name="brand_desc" id="text_main" required> </th>
                </tr>
                <tr>
                    <th></th>
                    <th> 
                        <input type="submit" name="save" value="Save" id="button2"> 
                        <!-- <input type="submit" name="view" value="View" id="view">
                        <input type="submit" name="delete" value="Delete" id="delete">m                               -->
                        <input type="reset" name="reset" id="button2">
                    </th>
                </tr>
            </table>

            <br><br><br>

            <table border="1" width="50%">
                <tr>
                    <th>Brand Id</th>
                    <th>Brand Name</th>
                    <th>Brand Description</th>
                    <th></th>
                </tr>
 
                <?php
                    $db=mysqli_connect('localhost','root','','shop_master') or die("Error 404 not found");

                    $fetch = "SELECT * FROM brand_master";
                    
                    $m = mysqli_query($db, $fetch);

                    while($d = mysqli_fetch_array($m))
                    {
                       
                ?>
                <tr>
                    <td>
                        <?php
                            echo $d['brand_id'];
                        ?>
                    </td>
                    <td> 
                    <?php
                        echo $d['brand_name'];
                    ?>
                    </td>
                    <td>
                    <?php
                        echo $d['brand_desc'];
                    ?>
                    </td>
                    <td>
                        <a class="del-link" href="save.php?delete=<?php echo $d['brand_id']; ?>">Delete</a>
                    </td>
                    <?php
                    }
                    ?>
                </tr>
            </table>
        </center>
        <br><br>
    </form>
</body>
</html>