SS SpamBlock
============

The aim of this module is to stop the "spam bot".
From my own experience. In some hosting plan that staff despite "ReCapcha" that forms the spammer have always tried spamming "duuu"

It is simply to reduccir resources used by the server or just not consumed bandwith in my house just one spammer I get to generate up to 300MB without the resources used in the server host

___________________________________________

El objetivo de este modulo es detener a los "spam bot".
Por experiencia propia. En algunos hosting que no de plan personal a pesar de los "ReCapcha" que tengas los formularios los spammer siempre intentaran hacer spam "Duuu" 

Simplemente es para poder reduccir los recursos usados por el servidor o simplemente que no se consuma el bandwith en mi casa simplemente un solo spammer me llego a generar hasta 300mb sin contar los recursos usados en el sevidor



## Install / Instalar

You need to know if the hosting has allowed the function "gethosbyname ();" to resolve DNS

They need to make the request of the access key
http://projecthoneypot.org/httpbl_configure.php

Once the access key

put it in _config.php
DEFINE ('HttpPblKey', '<MyKey>');

________________________________________________

Es necesario saber si el hosting tiene permitido la  funcion "gethosbyname();"  para resolver DNS

Necesitan hacer la peticion de la llave de acceso en
http://projecthoneypot.org/httpbl_configure.php

Una vez obtenida la llave de acceso 

la colocamos en _config.php
DEFINE('HttpPblKey','<MyKey>');


