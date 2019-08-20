<?php
// What languages do we support
$available_langs = array('en','nau');
if(isset($_GET['lang']) && $_GET['lang'] != ''){
    // check if the language is one we support
    if(in_array($_GET['lang'], $available_langs))
    {
        $_SESSION['lang'] = $_GET['lang']; // Set session
    }
}
// Set our default language session ONLY if we've got nothing
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'en';
}
// Include active language
require('assets/lang/'.$_SESSION['lang'].'/'.$_SESSION['lang'].'.php');
?>
<!doctype html>
<html>
 <script>
 function changeLang(){
  document.getElementById('form_lang').submit();
 }
 </script>
 <?php echo $titile?>
 <!-- Language -->
 <form method='get' action='' id='form_lang' >
   Select Language : <select name='lang' onchange='changeLang();' >
   <option value='en' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en'){ echo "selected"; } ?>>English</option>
   <option value='nau' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'nau'){ echo "selected"; } ?>>Nauruan</option>
  </select>
 </form>
</html>