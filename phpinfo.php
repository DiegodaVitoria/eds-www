<?php
echo '<pre>';
echo 'LOADED EXTENSIONS:<br/>';
print_r(get_loaded_extensions());
echo '</pre>';
echo phpinfo();
?>



<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

print_r($categorias); 
 
 
 
 ?>