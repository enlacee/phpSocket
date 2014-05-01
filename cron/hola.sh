#!/bin/bash
clear
echo "=========================="
echo           CRON-PHP
echo "=========================="
echo "INGRESE TU NOMBRE:"
read line
echo
echo Tu nombre es: $line
echo

php hola.php "${line}" $line  && echo ${line};
