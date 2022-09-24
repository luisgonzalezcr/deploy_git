<h1>Productos</h1>
<?php foreach ($posts as $p ) : ?>
 <li><?php echo $p['nombre'];?></li>
 <li><?php echo $p['body'];?></li>
<?php endforeach ;?>


<?php 
// print_r($posts);
;?>