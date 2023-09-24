# chat-messages
Accediendo a la siguiente URL https://github.com/brandolyjack21/chat-messages. Nos dirigimos al apartado que dice "code" (está en color verde). Hacemos clic y se mostrará un cuadro pequeño, 
en la parte inferior del cuadro aparecerá una opción que dice "Download Zip". Esto nos descargará los archivos comprimidos, 
y solo queda descomprimirlos. Buscamos los archivos descomprimidos y encontraremos un archivo llamado "chat-messages". Dentro de este 
archivo, hallaremos el código de WebSocket en diferentes archivos, como "src" donde se guarda el código para las vistas, y el código de Node
que ejecuta el servidor WebSocket. Además, a la misma altura del archivo "src", encontraremos el archivo "page-socket". Tendremos que cortarlo y pegarlo 
en un entorno que permita desplegar archivos PHP, como Laragon o XAMPP.
Una vez que podamos abrir estos dos archivos por separado, es decir, el archivo "chat-message" y el archivo que sacamos "page-socket", podremos poner 
en funcionamiento nuestro código. Para hacerlo, abrimos nuestra consola, entramos a la carpeta "chat-message" y ejecutamos el siguiente comando:

```
npm run start
```

Esto pondrá en funcionamiento nuestro WebSocket. Ahora, necesitamos buscar la carpeta "www" según nuestro entorno de ejecución de PHP. En el caso de Laragon u otros, dependiendo del entorno de tu preferencia, puedes desplegarlo con:

```
http://localhost/page-socket/

```

Ahora solo debemos ver la otra vista de HTML. Esto se encuentra en la siguiente URL:

```
http://localhost:3000
```

![image](https://github.com/brandolyjack21/chat-messages/assets/128563618/4142aa9d-9651-40ff-b83e-365b4dcc03ba)

Aquí tienes una vista de cómo sería el resultado. Solo tienes que escribir en la barra de mensajes y hacer clic en el botón de enviar
