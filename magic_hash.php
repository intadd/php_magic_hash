<?php

#################################################
# Language : php(7.0.15)						#
# Develpoer : intadd							#
# date : 2017-5-24								#
# version : 0.2									#
#################################################

# get all hash name 
foreach(hash_algos() as $v){

	$hash_lists[] = $v;
}

function hash_function($hash_name)
{

    if (is_numeric($hash_name)) {
        if (count($GLOBALS['hash_lists']) > (int)$hash_name && (int)$hash_name > 0) {
            $hash_name = $GLOBALS['hash_lists'][(int)$hash_name];
        } else {
            exit("[*]Check your hash list index\n");
        }
    } else if (!in_array($hash_name, $GLOBALS['hash_lists'])) {
        exit("[*]CHECK your hash name\n");
    }

    print ("\n\t[*] " . $hash_name . " magic hash finder start [*]\n");

	#  This 'cnt value' requires your customization.
	$cnt=0;
	while(True){
        $he = hash($hash_name, $cnt);
        print("\tCHECKING ... {$he} | {$cnt} \r");
        if (substr($he, 0, 2) == '0e') {
            if (preg_match("/[a-zA-Z]/", substr($he, 2, -1)) == 0) {
                print ("\n\t[*]FIND MAGIC HAHS[*]\n");
				print ("\t\t==> input: {$cnt}\n");
				print ("\t\t==> hash: {$he}\n");
                $result = ('0e12451231' == hash($hash_name, $cnt) ? 'True' : 'False');

                print("\t\t==> '0e12451231' == hash('{$hash_name}','{$cnt}') is {$result}\n");
				print("\t\tEX]\n\t\t\tif('0e12451231' == hash('{$hash_name}','{$cnt}')){ \n\t\t\t\t print 'True'; \n\t\t\t} \n\t\t\t==>{$result}\n\n");
                print(" * find more {$hash_name} magic hash?[y/n]:");
                $input = strtolower(getInput());

                if ($input == 'n' or $input == "no") {
					print("Bye");
					return 0;
                } 
            }
        }
		$cnt+=1;
    }

	exit ("NO FIND :( \n Bye \n");

}

function getInput()
{
    $file = fopen("php://stdin", "r");
    $input = fgets($file, 50);
    $input = rtrim($input);
    fclose($file);
    return $input;
}


function logoPrint()
{
    print ("\n\n");
    print ("                .-.   _                __
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
	                     `'---'`");
}
function main()
{
    while (True) {
	    print("\n\nex) input hash name :crc32 \nex) input hash lists Number : 24\n\n");
	    print("hash lists : ");
	    print_r($GLOBALS['hash_lists']);
        print "input hash name: ";
        $string = getInput();
        hash_function($string);
    }
}

logoPrint();
main();

