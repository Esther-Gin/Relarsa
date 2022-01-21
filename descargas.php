<?php include 'archivo.php'; ?>
<!DOCTYPE html>
<html>
    <body>
        <ul>
        <?php foreach ($array as $element): ?>
            <li><a href="archivo.php?file_id= <?php echo $element['id']?>"><?php echo $element['nombre'];?>.pdf</a></li>
        <?php endforeach;?>
        </ul>
    </body>
</html>