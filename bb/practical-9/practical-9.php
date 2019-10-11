<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Date Functions</title>
</head>
<body>
<center><br><br><br><br><br><br><br>
    <table border="1">
        <tr>
            <th>Functions</th>
            <th>Return Value</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>GETDATE</td>
            <td><?php print_r(date('d-m-y')); ?></td>
            <td>This function return the current date.</td>
        </tr>
        <tr>
            <td>TIME</td>
            <td><?php $t = time(); echo $t; ?></td>
            <td>This function will return time in seconds.</td>
        </tr>
        <tr>
            <td>Date with 5 diff. format</td>
            <td>
                <?php 
                    echo date('d-m-y'); 
                ?> (d-m-y) <br>

                <?php 
                    echo date('j-F-Y'); 
                ?> (j-F-Y) <br>
                <?php 
                    echo date('d-M-y'); 
                ?> (d-M-y) <br>
                <?php 
                    echo date('j-F-Y t'); 
                ?> (j-F-Y t) <br>
                <?php 
                    echo date('l-n-y'); 
                ?> (l-n-y) <br>
            </td>
            <td>These functions will return date in different format</td>
        </tr>
        <tr>
            <td>Date Create</td>
            <td><?php $d = date_create('02/02/2019'); echo date_format($d,"d-M-y");?></td>
            <td>This function will create or return user input date of the system.</td>
        </tr>
        <tr>
            <td>Date Difference</td>
            <td><?php $date1 = date_create('04-08-1998'); $date2 = date_create('16-09-2019'); echo date_diff($date1,$date2)->format("%Y Years, %M Months, %D Days");?></td>
            <td>This function will return the difference between date.</td>
        </tr>
        <tr>
            <td>MKTIME</td>
            <td><?php echo "Aug 4, 1998 was on a ".date("l", mktime(0,0,0,8,4,1998)) . "<br><br>"; ?></td>
            <td>This function will return the day of given date.</td>
        </tr>
    </table>
</center>    
</body>
</html>