<?php
$data_comments = array() ;
//$comment1 = ['author' => 'didier', 'comment' => "super l'article"] ;
$comment1['author'] = 'didier' ;
$comment1['comment'] = "super l'article" ;

$comment2['author'] = 'RT2' ;
$comment2['comment'] = "Vraiment super l'article" ;


$data_comments[] = $comment1 ;
$data_comments[] = $comment2 ;

?>
<html>

<body>

<h1><?php echo $data_article['title'] ;?></h1>

<div class="article_content">
   <?php echo $data_article['article'] ; ?>
</div>

<?php 
   foreach($data_comments as $comment) {
?>
<div class="comment">
   <?php echo $comment['comment'] ; ?>
   <br/>
   --
   <small><?php echo $comment['author'] ;?></small>
</div>
<?php 
 }
?>
</body>


</html>