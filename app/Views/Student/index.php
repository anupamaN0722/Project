<?php
  $StudentList=$data;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link href="<?=base_url('bootstrap-5.2.3-dist\css\bootstrap.min.css')?>" rel="stylesheet">
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Password</td>
                <td>Email</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $item){?>
                <tr>
                    <td><?php echo $item['ID']?></td>
                    <td><?php echo $item['NAME']?></td>
                    <td><?php echo $item['PASSWORD']?></td>
                    <td><?php echo $item['EMAIL']?></td>
                </tr>
                <?php }?>
        </tbody>
    </table>
</body>
</html>