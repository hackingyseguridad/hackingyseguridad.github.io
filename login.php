<?PHP
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $usuario = "admin";
    $pass= "12345";
    if(! ($_POST['username'] == $usuario && $_POST['password'] == $pass) )
    {
        Echo "<html>";
        Echo "<title>Acceso denegado</title>";
        include("login.html");        
        
        session_destroy() ;
        
        return false;
    }
    else {
    
        Echo "<html>";
        Echo "<title>Muy bien hacker!!!</title>";
	include("index.htm");	
        session_destroy();    
 
        return true;
    }
}
?>

