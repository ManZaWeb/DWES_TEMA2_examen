<!-- Autor: MArio ALfonso Nuñez
Github:https://github.com/ManZaWeb/DWES_TEMA2_examen.git -->
 
<?php
include ('articulo.php');
include ('pizza.php');
include ('bebida.php');
include ('index.view.php');

mostrarArticulos($articulos);
mostrarMasVendidos($articulos);
mostrarMasLucrativos($articulos);



?>