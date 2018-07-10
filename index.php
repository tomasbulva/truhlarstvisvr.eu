<?php
include("settings.php");


$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

//print_r($lang);

switch ($lang){
    case "fr":
        //echo "PAGE FR";
        header( 'Location: '.$webroot.'/fr/' ) ;
        break;
    case "cz":
        //echo "PAGE IT";
        header( 'Location: '.$webroot.'/cz/' ) ;
        break;
    case "cs":
        //echo "PAGE IT";
        header( 'Location: '.$webroot.'/cz/' ) ;
        break;
    case "de":
        //echo "PAGE EN";
        header( 'Location: '.$webroot.'/de/' ) ;
        break;        
    default:
        //echo "PAGE EN - Setting Default";
        header( 'Location: '.$webroot.'/en/' ) ;
        break;
}
?>