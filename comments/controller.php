<?php

include
include_once
require
require_once('model_comment.php') ;

if (!$_GET['action']) {
  exit(); 
}

$action=$_GET['action'] ;


if ($action=="article") {
  $id_article = $_GET['id'] ;

  $data_article = get_article($id_article) ;
  $data_comments = get_comments_by_article($id_article) ;

  //  showView("viewName",$data_comments, $data_article) ;
  include('view_article.php') ;

} else if ($action=="comment") {

  if (is_author_allowed_to_comment($id_article)) {

    include('view_complex_comment.php'); 
  } else {
    include('view_complex_not_allowed.php'); 
  }

} else if ($action=="login") {

} else if ($action=="logout") {

}

?>