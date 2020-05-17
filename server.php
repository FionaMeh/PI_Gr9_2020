<?php

 include 'database.php';
  if (isset($_POST['save'])) {
    $name = $_POST['name'];
  	$comment = $_POST['comment'];

  	$sql = "INSERT INTO comments (name, comment) VALUES ('{$name}', '{$comment}')";
  	if (mysqli_query($con,$sql)) {
  	  $id = mysqli_insert_id($con);
      $saved_comment = '<div class="comment_box">
      		<span class="delete" data-id="' . $id . '" >delete</span>
      		<span class="edit" data-id="' . $id . '">edit</span>
      		<div class="display_name">'. $name .'</div>
      		<div class="comment_text">'. $comment .'</div>
      	</div>';
  	  echo $saved_comment;
  	}else {
  	  echo "Error: ". mysqli_error($con);
  	}
  	exit();
  }
  // delete comment from database
  if (isset($_GET['delete'])) {
  	$id = $_GET['id'];
  	$sql = "DELETE FROM comments WHERE id=" . $id;
  	mysqli_query($con, $sql);
  	exit();
  }
  if (isset($_POST['update'])) {
  	$id = $_POST['id'];
  	$name = $_POST['name'];
  	$comment = $_POST['comment'];
  	$sql = "UPDATE comments SET name='{$name}', comment='{$comment}' WHERE id=".$id;
  	if (mysqli_query($con, $sql)) {
  		$id = mysqli_insert_id($con);
  		$saved_comment = '<div class="comment_box">
  		  <span class="delete" data-id="' . $id . '" >delete</span>
  		  <span class="edit" data-id="' . $id . '">edit</span>
  		  <div class="display_name">'. $name .'</div>
  		  <div class="comment_text">'. $comment .'</div>
  	  </div>';
  	  echo $saved_comment;
  	}else {
  	  echo "Error: ". mysqli_error($con);
  	}
  	exit();
  }

  // Retrieve comments from database
  $sql = "SELECT * FROM comments";
  $result = mysqli_query($con, $sql);
  $comments = '<div id="display_area">';
  while ($row = mysqli_fetch_array($result)) {
  	$comments .= '<div class="comment_box">
  		  <span class="delete" data-id="' . $row['id'] . '" >delete</span>
  		  <span class="edit" data-id="' . $row['id'] . '">edit</span>
  		  <div class="display_name">'. $row['name'] .'</div>
  		  <div class="comment_text">'. $row['comment'] .'</div>
  	  </div>';
  }
  $comments .= '</div>';
?>
