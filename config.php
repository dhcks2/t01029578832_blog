<?
$dbmsHost = 'localhost'; // Ehsms 127.0.0.1
$dbmsId = 'root';
$dbmsPw = 'apmsetup' ; 
$dbName = 'blog';

$link = mysqli_connect($dbmsHost,$dbmsId,$dbmsPw,$dbName) or die();
// DB 연결을  UTf8 모드로 설정
mysqli_query($link, " SET NAMES utf8;");

// 사용법 : $rows = getRows("SELECT * FROM article");
function getRows($sql){
	//외부에 있는 $link 변수를 함수안에서 사용하겠다는 의미
	global $link;
	
	// 빈 배열 선언
	//$rows=array();
	

	$result = mysqli_query($link,$sql);

	if ($result ===true ) {
		 return null;
	}


	while ($row = mysqli_fetch_assoc($result)){
	$rows[] = $row;
	
	}

	return $rows;
}

function execute($sql){
		getRows($sql);     
}

?>