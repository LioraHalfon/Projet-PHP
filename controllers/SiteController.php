<?php

namespace app\controllers;


use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\modele;
use app\views\site\accueil;



require('C:\Users\liora\basic\models/modele.php');
$articles= Modele::getMovie();
require('C:\Users\liora\basic\views\site/accueil.php');




?>