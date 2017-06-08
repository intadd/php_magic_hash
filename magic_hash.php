<?php

################################################
# Language : php(7.0.15)		       #
# Develpoer : intadd			       #
# date : 2017-5-24	 		       #
# version : 0.1				       #
################################################

function hash_function($hash_name) {
	

	if(!$he=hash($hash_name,1)){

		print "\n $hash_name not supported by php. \n\n";
		return 0;
	}	

	print "\n [*] ".$hash_name." magic hash finder start [*]\n";


	for($i=0;$i<100000000000000000000;$i++){
		$he=hash($hash_name,$i);
		if(substr($he,0,2)=='0e'){
			if(preg_match("/[a-zA-Z]/",substr($he,2,32))==0){
				print "\n input: ".$i."\n hash: ".$he."\n\n";	
				print " * find more?[y/n]:";
				$input=getInput();
				
				if($input=='y' or $input=='Y' or $input =="yes" or $input =="YES"){
					continue;
				}	
				else{
					print "\n";
					break;

				}	
		
			}	
		}
	}


	if($i==100000000000000000001){
		print "\nnot exist magic hash in 100000000000000000000\n";
	}

}


function getInput() {
	 $file = fopen("php://stdin", "r"); 
	 $input = fgets($file, 50); 
	 $input = rtrim($input); 
	 fclose($file); 
	 return $input; 

}


print "\n\n";
print "                .-.   _                __
                `  )`'-,`\        .-''``.-'
   _.-''-.      _.'       `'--._.' ,-'  /
   `\    _`'--'`                      .'
     '._ _`-       .--.   .--.      (`
        `.'       /    '.'    \      '.
       .'         \  0  |  0  /        '.
      /   _        '._.---._.'      _    \
      /    `'-.      (     )    .-'`     \
      / .---'_.   .   `-,-`  .  ._'---.  \
      |   -'`   .       |      .  `'-    |
      /_       .   '   /;\  '    .     ,_\
        '-.     '-..-`( ' )`-..-'     /
           '._         '-'         _.'
 by intadd    '-..,__       __,..-'
                     `'---'`";

print "\n\nex) input hash name :crc32 \n\n";


while (1) {

	print "input hash name: ";	
	$string=getInput();

	$string=$string;

	hash_function($string);
}
?>
