## Requerimientos del sistema

### Requerimientos funcionales

RF1. La aplicación permitirá guardar diferentes tipos de productos en las categorías:
   - Desayunos
   - Comida
   - Bebidas
   - Postres

RF2. Al ingresar a la aplicación, habrá dos formas de entrar: como trabajador y como consumidor

RF3. Un consumidor podrá entrar como invitado, o iniciar sesión (habiéndose registrado previamente).

RF4. Será necesario que el consumidor ingrese datos esenciales para la creación de su cuenta, tales como:
   - Nombre
   - Apellido
   - Email
   - Contraseña
   - Domicilio

RF5. El consumidor podrá seleccionar la cantidad de productos que desee de las categorías antes mencionadas.

RF6. Los trabajadores tendrán la capacidad de visualizar y modificar registros de ventas.

RF7. El administrador tendrá la opción de visualizar, crear, modificar y eliminar los productos que venda el negocio.

RF8. Cada producto tendrá los siguientes datos: 
    - Nombre
    - Precio
    - Descripción
    - Disponibilidad

RF9. Como trabajadores, habrán diferentes roles:
   - Administrador
   - Empleado

RF10. El empleado deberá tener 1 rol:
   - Cocinero.
   - Mesero (Repartidor).

RF11. El administrador tendrá todas las funciones del sistema disponibles.

RF12. El empleado únicamente podrá ver las órdenes del momento, y este podrá cambiar el status de la orden.

RF13. Las órdenes se irán almacenando en forma de cola, de forma que serán visibles para los empleados

RF14. El consumidor eberá pagar en efectivo.

RF15. En el momento en el que el consumidor haga un pedido, se le desplegará una línea del tiempo del status de su pedido, con los siguientes estados:
   - Recibido
   - En preparación
   - En proceso de entrega
   - Entregado


### Requerimientos no funcionales

RNF1. La aplicación web deberá funcionar en los navegadores Edge y Chrome.

RNF2. La aplicación web debe ser capaz de operar adecuadamente con hasta 100 usuarios con sesiones concurrentes.

RNF3. Los datos modificados en la base de datos deben ser actualizados aproximadamente 5 segundos después de realizar alguna actualización.

RNF4. La aplicación webdebe contar con manuales de usuario estructurados adecuadamente.

RNF5. El acceso a diferentes puntos de la aplicación podrá ser controlado por un administrador. (El administrador es quien podrá cambiar los roles de los trabajadores).

RNF6. La aplicación web debe poseer un diseño “Responsive” a fin de garantizar la adecuada visualización en múltiples computadores personales, dispositivos tableta y teléfonos inteligentes.

RNF7. La aplicación web tendrá un archivo de "respaldo". Dicho archivo contendrá todas las ventas realizadas en la plataforma.

RNF8. La aplicación web debe funcionar en cualquiera de los siguientes sistemas operativos:
   - Windows.
   - iOS.
   - Linux.  
   - Android. 

RNF9. La plataforma contará con una documentación que permita la fácil escalabilidad de la aplicación.

RNF10. Los datos personales de los consumidores (nombre completo, email, contraseña) serán encriptados con ayuda del gestor de base de datos, MySQL. 

RNF11. La aplicación web tendrá un control de excepciones, es decir, una validación de la información.
