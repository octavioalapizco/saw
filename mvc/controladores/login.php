<?
/*Use of Sessions*/
if(!session_id())
session_start();

header("Cache-control: private"); //avoid an IE6 bug (keep this line on top of the page)

$login='NO data sent';

/*simple checking of the data*/
if(isset($_POST['login']) && isset($_POST['pass']))
{

/*Connection to database logindb using your login name and password*/
$db=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('saw');

/*additional data checking and striping*/
$_POST['login']=mysql_real_escape_string(strip_tags(trim($_POST['login'])));
$_POST['pass']=mysql_real_escape_string(strip_tags(trim($_POST['pass'])));

$q=mysql_query("SELECT * FROM login WHERE login='{$_POST['login']}' AND pass='{$_POST['pass']}'",$db) or die(mysql_error());

/*If there is a matching row*/
if(mysql_num_rows($q) > 0)
{
	$_SESSION['login'] = $_POST['login'];
	$login='Welcome back '.$_SESSION['login'];
}
else
{
	$login= 'Wrong login or password';
}

mysql_close($db);

}

//you may echo the data anywhere in the file
echo $login;

?>