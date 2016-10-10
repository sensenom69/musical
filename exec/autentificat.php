<?PHP
if(!isset($_SESSION['logeado'])){
    header("Location: http://localhost/martin/gestio");
}
 
if(!$_SESSION['logeado'] ){
    header("Location: http://localhost/martin/gestio");
}
?>