
       
<!-- FORMULARIO DE SEDE-->
<section class="terceros-vista">
    <form id="form-sede">

        <H2>ASIGNAR SEDE</H2>
        <hr>
        
        <div class="div-input">
            <label for="nombre-sede">Nombre Sede</label>
            <input type="text" id="nombre-sede" name="nombre-sede" placeholder="Nombre Sede">
        </div>

        <div class="div-input">
            <label for="direccion">Direccion</label>
            <input type="text" name="direccion" id="direccion" placeholder="Dirección Sede">
        </div>

        <div class="div-input">
            <label for="telefono-sede">Teléfono</label>
            <input type="tel" name="telefono-sede" id="telefono-sede" placeholder="Teléfono sede">
        </div>

        <div class="div-input">
            <label for="Estado">Seleccionar</label>
            <select class="input" name="estado" id="estado">
            <option value="" selected="" >Seleccione una opción</option>
                <option value="1">Activo</option>
                <option value="2">Inactivo</option>
            </select>
        </div>
        <div class="enlaces-home">
            <a href="http://localhost/TERCEROS/home"><img href="<?php echo SERVERURL;?>home">VOLVER</a>
        
        </div>
        
    </form>
    
</section>
