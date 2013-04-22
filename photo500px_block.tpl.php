<?php
/**
* @author: winminsoe
* 
**/
   
    $comsumer_key = variable_get('photo500px_cosumer_key');
    $username = variable_get('photo500px_username');
    $count = variable_get('photo500px_count');
  

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"https://api.500px.com/v1/photos?feature=user&username={$username}&consumer_key={$comsumer_key}");
    curl_setopt($ch , CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $json = curl_exec($ch);

    if(curl_errno($ch))
    {
        // echo 'Curl error: ' . curl_error($ch);
    }
   curl_close($ch);
   
   $obj = array();
   if($json)
   {
      $obj = json_decode($json);
      echo "<h2>500px</h2><div class='info'>500px.com/{$username}</div>";

      foreach ($obj->photos as $photo) {
        echo "<div class='img'><img src='".$photo->image_url."' /></div>";
      }
    }
    else{
       echo "<h2>500px</h2><div class='info'>500px.com/{$username}</div>";
       echo "<p>Currently, No Service Available.</p>";
    }
?>


