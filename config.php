<?
$dbmsHost = 'localhost'; // Ehsms 127.0.0.1
$dbmsId = 'root';
$dbmsPw = 'apmsetup' ; 
$dbName = 'blog';

$link = mysqli_connect($dbmsHost,$dbmsId,$dbmsPw,$dbName) or die();
// DB ������  UTf8 ���� ����
mysqli_query($link, " SET NAMES utf8;");

// ���� : $rows = getRows("SELECT * FROM article");
function getRows($sql){
	//�ܺο� �ִ� $link ������ �Լ��ȿ��� ����ϰڴٴ� �ǹ�
	global $link;
	
	// �� �迭 ����
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