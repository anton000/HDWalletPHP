HDWallet.PHP
============

PHP implementation of BIP 0032 

Prototype software, use at your own peril.

# How to use


require_once HDAddress.php';


HDAddress::bitcoin();
$hd = new HDAddress('000102030405060708090a0b0c0d0e0f');

or


HDAddress::bitcoin();
$hd = new HDAddress(HDAddress::generate());


echo $hd->identifier;
echo $hd->fingerPrint;
echo $hd->mainAddress;
echo $hd->secretKey;
echo $hd->secretKeyWif;
echo $hd->publicKey;
echo $hd->chainCode;
echo $hd->serialPublicKey;
echo $hd->serialPrivateKey;


# License

This library is free and open-source software released under the MIT
license.

# Copyright

HDWallet (c) 2014-2015 Anthony Chua
Released under MIT license  
http://tonyotonio.com/
