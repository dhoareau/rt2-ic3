<?php



function get_article($id) {

}

function get_comments_by_article($id) {
  $query = 'SELECT author,email,comment FROM comments where id_article='.$id ;
  $result = mysql_query($query,$link) ;
  
  $final_result = array() ;
  while($row = mysql_fetch_assoc($result)) {
    $final_result[] = $row ;
  }


  return $final_result ;
}

function get_comment($id_comment) {

}

function insert_comment($id_article, $comment) {

}

/**
 * Functions for users authentication
 **/

function is_registered($login,$mdp) {

}

?>