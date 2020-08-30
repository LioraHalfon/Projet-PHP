<?php

namespace app\models;
use Yii;
use yii\base\Model;

class Modele extends Model {
	
	public $articles;
    public function getMovie()
   {
	
	$url = "https://api.androidhive.info/json/movies.json";
	
	// afficher tous les films existant sur la page d'acceuil
    if(!isset($_GET['q'])) {
	    $articles = json_decode(file_get_contents($url), true); 
		};

	
	
    // afficher que les films correspondant à la recherche faite
	if(isset($_GET['q']) AND !empty($_GET['q'])) {
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


   
