# PROYECTO PHP-MySQL
## ÍNDICE 
1. [OBJETIVO](#id1)
2. [MODELO MVC](#id2) <br> 
  2.1. [CREACIÓN DEL MODELO VISTA CONTROLADOR](#id3)
3. [IMPLEMENTACIÓN DE NUESTRA WEB EN LA MÁQUINA VIRTUAL](#id4) <br>
  3.1. [CONFIGURACIÓN DE LA MÁQUINA](#id5) <br>
  3.2. [IMPLEMENTACIÓN DEL PROYECTO](#id6)

---
# 1. OBJETIVO <a name="id1"></a>
En esta práctica aplicaremos lo que hemos aprendido en los últimos meses para crear un proyecto en PHP, un lenguaje de programación usado en el desarrollo de aplicaciones web. 

La tarea consiste en implementar una aplicación web usando el patrón Modelo-Vista-Controlador (MVC). El repositorio incluye el código para crear los contenedores en la máquina virtual llamada "EntornoDesarrolloPHP", junto con la carpeta "public" que contiene todos los archivos necesarios para crear la aplicación web usando Php, Html, Css y Bootstrap.

---
# 2. MODELO MVC <a name="id2"></a>
El Modelo-Vista-Controlador (MVC) es una forma de diseñar el software que se utiliza para separar el código en diferentes responsabilidades, y así tener capas especializadas en tareas específicas. Esto ofrece múltiples beneficios, ya que permite una mejor organización del código, facilita el mantenimiento y la escalabilidad del proyecto, y también permite una mayor flexibilidad en el desarrollo. 

En resumen, el MVC divide las tareas en distintas capas, cada una con una tarea específica, lo que resulta en un software más ordenado y fácil de mantener.

---  
### **2.1. CREACIÓN DEL MVC** <a name="id3"></a>
---
Para crear nuestro proyecto, utilizaremos el patrón de arquitectura Modelo-Vista-Controlador (MVC) y lo implementaremos de la siguiente manera:

**ASSETS**: En esta carpeta, alojaremos todas las imágenes que se utilizarán en nuestro proyecto.

**CONTROLLERS**: Aquí se almacenarán los archivos que contienen las funciones que interactúan con los datos de la aplicación web.

**DB**: Esta carpeta contiene los archivos necesarios para gestionar la base de datos de la aplicación.

**MODELS**: Aquí se encuentran los archivos que definen la estructura y el comportamiento de los objetos de datos de la aplicación, incluyendo los modelos de bases de datos.

**VIEWS**: Esta carpeta contiene los archivos que especifican cómo se presenta la aplicación web, incluyendo la interfaz de usuario y el diseño.

---
# 3. IMPLEMENTACIÓN DE NUESTRA WEB EN LA MÁQUINA VIRTUAL <a name="id4"></a>

### **3.1 CONFIGURACIÓN DE LA MÁQUINA VIRUTAL** <a name="id5"></a>
---

Después de haber creado nuestra aplicación web en el entorno local, debemos configurar nuestra máquina virtual en la nube del departamento. Para hacer esto, debemos conectarnos a la máquina virtual utilizando SSH a través del puerto configurado, en su caso sería el puerto específico o mediante el siguiente enlace: [https://informatica.iesalbarregas.com:2000].

Una vez conectados, debemos actualizar los repositorios del sistema `sudo apt update` y `sudo apt upgrade -y` y cambiar la dirección ip de la máquina por una estática.

Una vez configurada la máquina virtual en la nube, debemos instalar docker-compose `sudo apt-get install docker-compose` para poder implementar nuestra aplicación web en la nube de la misma manera que lo hicimos localmente. En los contenedores de Docker se encuentra toda la configuración de nuestra aplicación web. Usando los contenedores de Docker, podemos tener la misma configuración en varios sitios y desplegar nuestra aplicación web con solo unos comandos.

Para hacer esto, primero debemos asegurarnos de tener Docker instalado en la máquina virtual. Luego, instalaremos docker-compose y crearemos los contenedores necesarios para nuestra aplicación web. Una vez que los contenedores estén funcionando, podremos acceder a nuestra aplicación web en la nube de la misma manera que lo hacíamos localmente.

También hay que tener en cuenta que aunque dentro del contenedor de Docker tenemos un servidor de base de datos, necesitemos un cliente para poder guardar y administrar la base de datos creada en nuestra máquina local `apt-get install mariadb-client`.


---
### **3.2 IMPLEMENTACIÓN DEL PROYECTO** <a name="id6"></a>
---

Una vez ya realizada la configuración, pasaremos a poner en marchar nuestro entorno. Por lo que utilizaremos `docker-compose up -d`:

Hay que tener en cuenta que la primera vez que se realiza, puede dar fallo en la versión de nuestro entorno, por lo que deberemos pasar de una versión 3.9 a 3.3.

Una vez tengamos nuestro entorno encendido, tan solo nos quedará importar nuestra Base de Datos de la aplicación **HeidiSQL**, que deberemos exportarla y subirla a nuestra máquina usando `mysql -u root -p -h 127.0.0.1 < database.sql`.

Una vez tengamos todo terminado, podremos ver nuestra web mediante la dirección ip o por el enlace siguiente [http://informatica.iesalbarregas.com:17001](http://informatica.iesalbarregas.com:17001).




