<html>
<head>
    <title>Practical-6</title>
    <link rel="stylesheet" href="practical-6.css">
</head>
<body>
    <form action="insert.php" method="POST" name="combo_form" enctype="multipart/form-data">
        <center>
            <table>
                <!-- <tr>
                    <td>main head 1</td>
                    <td>main head 2</td>
                </tr> -->
                <tr>
                    <th>Name</th>
                    <th> <input type="text" name="txtname" id="txtname"> </th>
                </tr>
                <tr>
                    <th>City</th>
                    <th> <input type="text" name="txtcity" id="txtcity"> </th>
                </tr>
                <tr>
                    <th>Image</th>
                    <th> <input type="file" name="uploaded" id="uploaded"> </th>
                </tr>
                <tr>
                    <th></th>
                    <th> 
                        <input type="submit" name="submit" value="Insert" id="submit"> 
                        <!-- <input type="submit" name="view" value="View" id="view">
                        <input type="submit" name="delete" value="Delete" id="delete">m                               -->
                        <input type="reset" name="reset" id="reset">
                    </th>
                </tr>
            </table>



            <table>
                <tr>
                    <th>Name</th>
                    <th>City</th>
                    <th>Image</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>

                <?php
                    $db=mysqli_connect('localhost','root','','demo') or die("Error 404 not found");

                    $fetch = "SELECT * FROM master";
                    
                    $m = mysqli_query($db, $fetch);

                    while($d = mysqli_fetch_array($m))
                    {
                       
                ?>
                <tr>
                    <td>
                        <?php
                            echo $d['name'];
                        ?>
                    </td>
                    <td> 
                    <?php
                        echo $d['city'];
                    ?>
                    </td>
                    <td>
                        <img src="<?php echo $d['img'];?>" height="30%" width="30%">   
                    
                    </td>
                    <td>
                        <a href="insert.php?delete=<?php echo $d=['id']; ?>">Delete</a>
                    </td>
                    <td>
                        <a href="view.php?view=<?php echo $d=['id']; ?>">View</a>
                    </td>
                    <td>
                        <a href="download.php?download=<?php echo $d=['id']; ?>">Download</a>
                    </td>
                    <td>
                        <a href="edit.php?edit=<?php echo $d=['id']; ?>">Edit</a>
                    </td>
                    <?php
                    }
                    ?>
                </tr>
            </table>

            
        </center>
    </form>
</table>
</body>
</html>