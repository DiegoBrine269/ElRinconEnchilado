<main class="contenedor">
    <h2>Confirmar orden</h2>
    <form action="" class="form">
        <fieldset>
            <legend>
                Datos del consumidor
            </legend>
            <div class="campo">
                <label for="">Nombre:</label>
                <input class="caja-de-texto" type="text" name="nombre" id="nombre">
            </div>

            <div class="campo">
                <label for="">Apellido:</label>
                <input class="caja-de-texto" type="text" name="apellido" id="apellido">
            </div>

            <div class="campo">
                <label for="">Calle:</label>
                <input class="caja-de-texto" type="text" name="calle" id="calle">
            </div>

            <div class="campo">
                <label for="">Número exterior:</label>
                <input class="caja-de-texto" type="text" name="numExt" id="numExt">
            </div>

            <div class="campo">
                <label for="">Número interior:</label>
                <input class="caja-de-texto" type="text" name="numInt" id="numInt">
            </div>

            <div class="campo">
                <label for="">Colonia:</label>
                <input class="caja-de-texto" type="text" name="colonia" id="colonia">
            </div>

            <div class="campo">
                <label for="">Código Postal:</label>
                <input class="caja-de-texto" type="text" name="cp" id="cp">
            </div>
        </fieldset>
        
        <fieldset>
            <legend>Datos del pedido</legend>
                <div class="campo">
                    <h3>Orden:</h3>
                    <p>Huevo con jamón (x1), Lata de jumex (x2)</p>
                </div>
                
        </fieldset>
        <div class="campo">
            <input class="btn btn-principal" type="submit" value="Confirmar orden">
        </div>
    </form>
</main>