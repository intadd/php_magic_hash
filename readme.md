
## PHP7 Magic Hash Finder
  - Php magic hash vulnerability
    - PHP 7
	 
### Magic hash vulnerability 
you can check this vulnerability : [magic]

## How to install
```sh
$ sudo apt update
$ sudo apt upgrade -y
$ sudo apt install php-cli git -y
$ sudo git clone https://github.com/intadd/php_magic_hash
$ cd ./php_magic_hash
```
## How to use
```sh
$ php ./php_magic_hash.php
input hash name: md5
```
### Apply hash Table
| Name | Length | Name | Length | Name | Length |
| ------ | ------ | ------ | ------ |------ | ------ |
md2|32|md4|32|md5|32|sha1|40
sha224|56|sha256|64|sha384|96|sha512|128
ripemd128|32|ripemd160|40|ripemd256|64|ripemd320|80
whirlpool|128|tiger128,3|32|tiger160,3|40|tiger192,3|48
tiger128,4|32|tiger160,4|40|tiger192,4|48|snefru|64
snefru256|64|gost|64|gost-crypto|64|adler32|8
crc32|8|crc32b|8|fnv132|8|fnv1a32|8
fnv164|16|fnv1a64|16|joaat|8|haval128,3|32
haval160,3|40|haval192,3|48|haval224,3|56|haval256,3|64
haval128,4|32|haval160,4|40|haval192,4|48|haval224,4|56
haval256,4|64|haval128,5|32|haval160,5|40|haval192,5|48
haval224,5|56|haval256,5|64

### Sample
[![Watch the video](https://i.ibb.co/nz4Cd0d/php-magic-hash.gif)](https://www.youtube.com/watch?v=SapUmwwaS9w)
----
### PHP '==' vulnerability

### example code 1
```php
<?php
    if('0e519231' == '0e958123') {
        print ("True\n");
    }else {
        print ("False\n");
    }
?>
```
 Result : 
```sh
$ php example1.php
True
```
### example code 2
```php
<?php
if('0e12451231' == hash('crc32','2332')){ 
     print ("True\n"); 
}else {
	print ("False\n");
}
?>
```
 Result : 
```sh
$ php example2.php
True
```



---
License
----
MIT

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)
   [magic]: <https://www.whitehatsec.com/blog/magic-hashes/>
   string = $string;
        $string = $string;
