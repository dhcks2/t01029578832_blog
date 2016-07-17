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



<h1><?=$name?> 게시물  입니다.</h1>

<table border = "1">
<thead>
<script>
function deleteArticle(btn) { 
	if( confirm('삭제하시겠습니까?') == false) { alert('삭제를 시작합니다.'); 
		return;
	}

	var $clickedBtn=$(btn);
	var $listItem = $clickedBtn.closest('tr');
	$listItem.remove();

	var id= $listItem.data('id');

	$.post(
		'/service/article/delete.php',
		{'id' : id},
		function(data) {
			alert(data.id + "가 삭제되었습니다.");
		},
		'json'
	);
}
</script>

<tr>


<th>번호</th>
<th>작성자</th>
<th>내용</th>
<th>날짜</th>


</tr>
</thead>

<tbody>
<? foreach ( $articles as $article) { ?>

<tr data-id="<?=$article['id']?>">


<td><?=$article['id']?></td>
<td><?=$article['writer']?></td>
<td><?=$article['body']?></td>
<td><?=$article['regDate']?></td>
<td><button onclick="deleteArticle(this)">
삭제</button></td>



</tr>
<? } ?>
</tbody>
</table>
