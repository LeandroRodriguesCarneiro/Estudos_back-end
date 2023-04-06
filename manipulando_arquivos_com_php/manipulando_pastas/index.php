<?php
   // mkdir('pasta');
   /*
   if(is_dir('pasta')){
       echo 'eh uma pasta valida';
   }else{
       echo 'nao existe ou nao eh uma passta';
   }
   */
  //deletar a pasta
  //rmdir('pasta');
  if($handle = opendir('pasta')){
      while($file = readdir($handle)){
          if($file=='.'|| $file== '..'){
              continue;
          }
          if(is_dir('pasta/'.$file == false)){
                //e um aquivo
          }else{
                //e uma passta
          }  
          echo "$file\n";
          echo '<br />';
      }closedir($handle);
  }
?>