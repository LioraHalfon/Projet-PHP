<?php

namespace app\models;
use Yii;
use yii\base\Model;

class Modele {
    static function getMovie()
   {
	
	$url = "https://api.androidhive.info/json/movies.json";
	
	// afficher tous les films existant sur la page d'acceuil
    if(!isset($_POST['q'])) {
	    $articles = json_decode(file_get_contents($url), true); 
		};

		
	
    // afficher que les films correspondant à la recherche faite
	if(isset($_POST['q']) AND !empty($_POST['q'])) {
	   $q = htmlspecialchars($_GET['q']);

	   $articles = json_decode(file_get_contents($url), true);
	  /* $articles = array_filter($articles, function($article) use ($q) {
	   	return strpos(strtolower($article['title']), strtolower($q)) !== false;
	   });*/
	   
	  
	   $b=array();
	   foreach ($articles as $a)
       {   
	     if(strpos(strtolower($a['title']), strtolower($q)) !== false)
	     {
		    $b[]=$a;
	     }
	    
      }
	  $articles = $b;
	   
	}
	
	return  $articles;
	
   }
}

?>


   
