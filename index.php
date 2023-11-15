<!-- Autor: MArio ALfonso Nuñez
Github: -->
 
<?php
include ('articulo.php');
include ('pizza.php');
include ('bebida.php');
include ('index.view.php');

mostrarArticulos($articulos);
mostrarMasVendidos($articulos);
mostrarMasLucrativos($articulos);



?>