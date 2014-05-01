phpSocket
=========

socket, bash, crom (port serial)


Configuracion basica  puerto serial
<pre>
::::::::::::::::::::::::::::
::: acceder puerto serial
::::::::::::::::::::::::::::
::: lista de puertos
dmesg | grep tty
:::  obtener informacion de los puertos
setserial -g /dev/ttyS*

::::::::::::::::::::::::::::
::: dar permisos puerto serial (activar)
::::::::::::::::::::::::::::
chmod 666 /dev/ttyS*
chmod 666 /dev/ttyS1

::::::::::::::::::::::::::::
::: test(puerto serial)
::::::::::::::::::::::::::::
#stty 9600 -F /dev/ttyS1 cs8 -parenb

</pre>
