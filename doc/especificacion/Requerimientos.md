## Requerimientos del sistema

### Requerimientos funcionales

RF1. La aplicación permitirá guardar diferentes tipos de productos en las categorías:
   - Desayunos
   - Entradas
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
    - Lista de ingredientes
    - Descripción

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

RF16. A los usuarios que junten $1000 en compras, se les hará un descuento del 10% en la compra consecuente una vez hayan alcanzado la cantidad.


### Requerimientos no funcionales

RNF1. La aplicación deberá funcionar en los navegadores Edge y Chrome.

RNF2. La aplicación debe ser capaz de operar adecuadamente con hasta 100 usuarios con sesiones concurrentes.

RNF3. Los datos modificados en la base de datos deben ser actualizados aproximadamente 5 segundos después de realizar alguna actualización.

RNF4. La aplicación debe contar con manuales de usuario estructurados adecuadamente.

RNF5. El acceso a diferentes puntos de la aplicación podrá ser controlado por un administrador. (El administrador es quien podrá cambiar los roles de los trabajadores).

RNF6. La aplicación web debe poseer un diseño “Responsive” a fin de garantizar la adecuada visualización en múltiples computadores personales, dispositivos tableta y teléfonos inteligentes.
