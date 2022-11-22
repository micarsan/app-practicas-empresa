# Aplicación de Gestión de Prácticas en Empresa

## Una aplicación para aprendizaje en DAW
#### Por favor, mi actual nivel de programación es bastante moderado. Utilice este código con cuidado.

<br>

### Índice
- [Autor](#autor)
- [Contexto](#contexto)
- [Objetivo](#objetivo)
- [Detalle](#detalle)
- [Especificaciones mínimas](#especificaciones-mínimas)
- [Procedimiento a seguir](#procedimiento-a-seguir)
- [Criterios de calificación](#criterios-de-calificación)
- [Licencia](#licencia)

<br>

## Autor
Miguel Carmona
<a href="https://miguelcarmona.com">https://miguelcarmona.com</a>

<br>

### CONTEXTO

El control de los alumnos que realiza las prácticas en empresa tanto en la etapa de formación DUAL como en el módulo de FCT del último trimestre es un procedimiento muy importante ya que mantener de forma ordenada la información es indispensable para poder homologar el ciclo. Actualmente esa gestión se se realiza de forma totalmente manual, sin ninguna herramienta informática más allá de una hoja de cálculo.


Hay que tener en cuenta que un alumno puede realizar prácticas tanto en alternancia (opcional) como en Formación en centros de trabajo (obligatoria). 


De forma particular a cada alumno se se asigna al inicio de sus prácticas:

* un profesor tutor
* una empresa donde realizar las prácticas
* el total de horas  que deben durar las prácticas.

<br>

### OBJETIVO 

Realizar el interfaz de una aplicación web para gestionar el personal en prácticas del centro y llevar el control de las mismas.

<br>

### DETALLE

Será necesario administrar la información relacionada con:

1. Alumnos
2. Profesores
3. Empresas

Los usuarios de la aplicación podrán ser tanto los propios alumnos como los profesores encargados de la tutorización de las prácticas. Un alumno tiene un único profesor responsable y un profesor es responsable de varios alumnos.

Igualmente un alumno tiene una única empresa asignada y una empresa puede tener a varios alumnos.

Los profesores serán los administradores de la aplicación y serán los responsables de añadir alumnos y empresas a la aplicación.

Los alumnos solo podrán editar su tabla de Actividades diarias. El objetivo es que diariamente puedan entrar en la aplicación y añadir una entrada en dicha tabla indicando:

* Fecha
* Tipo de práctica (Dual o FCT)
* Total horas realizadas ese día
* Actividad realizada
* Observaciones o incidencias

La información necesaria para gestionar de cada alumno es:

* Nombre
* Apellidos
* Contraseña de acceso
* DNI
* Fecha nacimiento
* Email
* Teléfono de contacto
* Empresa donde realiza las prácticas
* Profesor Tutor asignado
* Nº de horas totales para realizar en DUAL
* Nº de horas totales para realizar en FCT
* Observaciones

La información necesaria para las empresas es:
* Nombre de la empresa
* Telefono
* Email
* Responsable de empresa
* Observaciones o incidencias

La información de cada profesor es:
* Nombre
* Apellidos
* Contraseña de acceso
* Correo electrónico

<br>

### ESPECIFICACIONES MÍNIMAS

Deberán diseñarse todas las páginas necesarias usando HTML, CSS y Javascript. Se pueden utilizar Frameworks de todo tipo.

No será necesario conectar con el back-end, por lo que **deberán usarse datos de ejemplo en todas las pantallas/páginas.**

Al arranque de la aplicación deberá mostrar una ventana de Login donde el usuario se autentique con su correo y contraseña.

Si el usuario es de tipo profesor deberá poder:

* Ver el listado de todos los alumnos asignados a él y pulsando sobre un alumno podrá entrar a una ficha en la que se muestren todos sus datos.
* Ver el listado completo de Actividades Diarias de un alumno concreto en formato de tabla.
* Ver el total de horas que ha realizado un alumno en sus prácticas y las que le quedan pendientes (tanto DUAL como FCT)
* Crear un nuevo alumno (quedará asignado al profesor que lo haya creado)
* Modificar los datos personales de un alumno
* Borrar un alumno
* Asignar una empresa a un alumno
* Crear una empresa
* Modificar los datos de una empresa

Si el usuario es tipo alumno deberá poder:

* Ver el listado de todas sus Actividades Diarias en formato de tabla
* Añadir una nueva entrada en la tabla
* Editar una entrada ya existente
* Eliminar una entrada ya existente
* Saber cuantas horas de práctica ha realizado y las que le quedan pendientes (tanto DUAL como FCT)
* Ver la información de la empresa asignada y del profesor tutor
* Los profesores inicialmente solo se podrán crear, editar y eliminar de forma manual desde la base de datos.

En todo caso, en la aplicación deberá primar la **facilidad de uso** (usa de manera que no deba ser necesario ningún tipo de formación ni indicación para poder usar el programa).

Además de entregar el código completo del interfaz web, habrá que entregar  la siguiente documentación

<br>

### PROCEDIMIENTO A SEGUIR

Habrá que documentar todo el proceso que se ha seguido para realizar la aplicación y justificar las decisiones que se tomen (elección de IDE, frameworks, diseños de ventanas, etc...).

El despliegue en un servidor no será obligatorio, pero si será recomendable hacerlo.

Se realizará una primera entrega antes de la finalización del mes de octubre con todo lo realizado hasta ese momento y un pequeño vídeo descriptivo para poder hacer un seguimiento adecuado.

Una vez implementado, realizar una demostración completa, grabarla en vídeo (screencast), donde se vean con detalle todas las opciones y añadirla a la tarea. 

Debéis subir el repositorio con el código a vuestras cuentas de GitHub y compartir el enlace todos los miembros del grupo.

<br>

### CRITERIOS DE CALIFICACIÓN 

La calificación de esta tarea se realizará a todos los miembros del grupo por igual.

Para cada uno de los módulos se puntuará:
* Resolución adecuada del problema: 5 puntos
* Documentación presentada, Presentación, estructura y formato: 3 puntos
* Creatividad y mejoras adicionales: 2 puntos
(La calificación final de esta actividad se pondera en base a un máximo de 10 puntos) 

<br>

## Licencia
[Copyright Miguel Carmona](https://miguelcarmona.com)

