<?php
$fichier = $_GET["nom"];
$contenu = $_GET["txt"];

$myObj->id = $fichier;
$myObj->val = $contenu;
$update=0;
$contents = file_get_contents("data.json");

$tempArray = json_decode($contents,true);
print_r($tempArray);
print_r('<br>');
print_r('<br>');
print_r('<br>');
$n=0;
foreach($tempArray as $k=>$v){
   print_r($v['id'].'<br>');
   $n=$n+1;
   if($v['id']==$fichier){
		print_r($v['id'].'<br>');
		$v['value']=$contenu;
		print_r($v['value'].'<br>');
		print_r($n.'<br>');
		$tempArray[$k]['value']=$contenu;
		$update=1;		
   }
}
if($update==0){
	$tempArray[$n]['id']=$fichier;
	$tempArray[$n]['value']=$contenu;
}
print_r('<br>');
print_r('<br>');
print_r($tempArray);


$jsonData = json_encode($tempArray);

$myfile = fopen("data.json", "w") or die("Unable to open file!");
fwrite($myfile, $jsonData);

fclose($myfile);
?>
