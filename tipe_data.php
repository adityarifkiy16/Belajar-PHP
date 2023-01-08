<?php

// Tipe Data INT
echo "Decimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(01234);

echo "Hexa : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b1111111);

echo "Underscore in number :";
var_dump(1_241_241_241);

// Tipe Data Float
echo "floating point :";
var_dump(1.234);

echo "floating point dengan E notation Plus (1.2 x 1000 :";
var_dump(1.2e3);

echo "floating point dengan E notation minus (1.2 x 0.001 :";
var_dump(1.2e-3);

echo "Underscore di floating point : ";
var_dump(1_234.567);

// Integer overflow system operation (OS)
echo "Integer overflow 32 bit : ";
var_dump(214783648); //akan berubah menjadi float jika angka yang dimasukan melebihan batas tsb

echo "Integer overflow 64 bit : ";
var_dump(9223372036854775807); //akan berubah menjadi float jika angka yang dimasukan melebihan batas tsb