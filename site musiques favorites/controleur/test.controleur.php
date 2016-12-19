<p> bbb </p>
<?
echo('ccc');
require_once("../Database.class.php");
echo('aaaaa');
$test = new Database();
echo('aaaaa');
var_dump($test->getDb());
echo 'aaaaa';
?>
