<meta charset="utf-8">
<?

include 'config.php';
include 'header.php';


//print_r($_GET);

$name = "권오찬";
$dan = $_GET["dan"];

$articles = getRows("SELECT * FROM article ORDER BY id DESC");

//print_r($articles);
?>

<h1><?=$name?> 블로그 메인페이지 입니다.</h1>


