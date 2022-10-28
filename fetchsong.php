<?php
$con = mysqli_connect("localhost","root","","hmusic");
//$q = "call fetchdata()";
$qu = mysqli_query($con,"Call fetchdata()");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = "1">
    <tr>
        <th>Song File</th>
        <th>Sing photo</th>
        <th>Song Name</th>
        </tr>
        <?php
        while($r=mysqli_fetch_array($qu)){

        ?>
        <tr>
            <td><?php echo $r['Song_mp3']?></td>
            <td><?php echo $r['song_photo']?></td>
            <td><?php echo $r['song_name']?></td>
        </tr>
        <?php }
        ?>



</body>
</html>