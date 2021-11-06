<?php 
if (isset($errors) && count($errors)!= 0) {
     echo '<div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
     ';

     foreach($errors as $error){
      echo $error.'<br/>';
     }
     echo'</div>';
   }
    ?>   