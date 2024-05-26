# Natas11_Tarea

Para la obtecion de la contrseña para natas12 atravez del endpoint de la pagina fue necesario crear 2 scrips en php 
uno que obtuviera la cookie cifrada y otro que mandara la cookie a la pagina y la asignara como la nueva data para que 
el servidor conteste con la contrseña del proximo nivel 

Para el primer scrip utilizo la funcion que la pagina utiliza para encriptar la cookie con xor pero con los parametros 
de la cookie que nos entrega el navegador y la la funcion codificada en json por default para obtner a clave con la quela cookie 
fue encriptada ,despues de eso al imprimir la clave se repite multiples veces pero solo consta de 4 caracteres por ello se 
le indica que la llave solo ceran los 4 primeros caracteres 

Una vez obtenida la llave se utiliza para encriptar la cookie y despues decodificarla en base64 ,ese resultado es la cookie que 
nos arroja la contaseña 


para mandarla al endponit me conecte a travez de sus credeciales de la pagina y sus autenticacion basic para ingresar ,una vez 
alli asigne una variable con el valor de la cookie real y que ese valor se lo asigne a la cookie data del navegador 
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Cookie: data=$cookie")); mediante un post al servidor y utiliando las herrmaientas 
curl 
