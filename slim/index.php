<?php  
require 'vendor/autoload.php';
$app = new \Slim\App();
$app->get("/randomsaying/",function($request, $response, $args){
	$Sayings=array(
		array("Titre"=>"A bird in the hand is worth two in the bush",
			"Explication"=>"It's better to have a lesser but certain advantage than the possibility of a greater one that may come to nothing."),
		array("Titre"=>"Man's best friend",
			"Explication"=>"An animal that performs valuable service to humans, often with reference to dogs."),
		array("Titre"=>"A chain is only as strong as its weakest link",
			"Explication"=>"The proverb has a literal meaning, although the 'weakest link' referred to is figurative and usually applies to a person or technical feature rather than the link of an actual chain.")
	);
 	return $response->withJson($Sayings[rand(0,count($Sayings)-1)])->withHeader('Access-Control-Allow-Origin', '*'); 	
 	 


});
$app->run();
?>