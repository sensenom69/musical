<?
/*
0=>no existix el usuari
1=>pass no correcte
2=>usuari administrador
3=>usuari normal
*/
include('../comun.php');
/*
$dbname = 'martin';	// your database name
$dbuser = 'root';	// your database user name
$dbpasword = '';			// your database password
//make connection to dbase
$connection = @mysql_connect($server, $dbuser, $dbpasword)
   or die(mysql_error());
$base_datos = @mysql_select_db($dbname,$connection)
			or die(mysql_error());
@mysql_query("SET NAMES 'utf8'");
*/
$email = $_POST['email'];
$pass = $_POST['pass'];
$res = mysql_query("SELECT id_local, nombre,pass,id,permiso FROM usuario WHERE email = '".addslashes($email)."'");
$dades = mysql_fetch_array($res);
if(mysql_affected_rows()==0){
    die ("0");
}
if($pass == $dades['pass'] && $pass != ''){
    /*
    $res = mysql_query("SELECT id_tipo_llicencia 
                        FROM llicencia 
                        WHERE
                            id_local = '".addslashes($dades['id_local'])."' AND
                            id_usuari = '".addslashes($dades['id'])."' 
                        ");
    $dada = mysql_fetch_array($res);
    $_SESSION['logeado']=true;
	$_SESSION['id_usuari'] = $dades['id'];
    $_SESSION['nombre']=$dades['nom'];
    $_SESSION['permiso'] = $dades['permiso'];
    $_SESSION['user'] = $nick;
	$_SESSION['click']=0;
    $_SESSION['id_local'] = $dades['id_local'];
    $_SESSION['id_client'] = 1;
    $_SESSION['licencia'] = $dada['id_tipo_llicencia'];
    die($dada['id_tipo_llicencia']);
    */
    $_SESSION["permiso"]=$dades['permiso'];
    $_SESSION['id_local'] = $dades['id_local'];
    $_SESSION["id_usuario"] = $dades["id"];
    $_SESSION['logeado']=true;
    if($_SESSION["permiso"]==0)
        die("3");//aci retocarem per a que es note els permisos
    else   
        die("3"); 
}
else{
    die("1");
}
/* Closing connection */
mysql_close(); 
?>

