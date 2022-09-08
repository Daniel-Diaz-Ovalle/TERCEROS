 <!-- FORMULARIO DE CONSULTAS
 <section>
            <form class="buscador" action="" method="POST">
                <input type="tel" id="buscador" name="buscador" value="" placeholder="BUSCADOR">
                <button type="submit" class="buscar" name="buscar">buscar</button>
            </form>       
            
        </section> -->
        <!-- FORMULARIO DE TERCEROS-->
        <section class="terceros-vista">
            <form class="FormularioAjax" data-form="save" method="POST" action="<?php echo SERVERURL; ?>ajax/tercerosAjax.php">
                <h2>REGISTRO TERCEROS</h2>
                <hr>

                <!-- <div>
                    <p>Selecciona de acuerdo a su rol, para diligenciar el formulario: PERSONA JURÍDICA / PERSONA NATURAL</p>
                    <div class="div-input">
                    <label for="tipo-persona">Seleccionar</label>
                    <select class="input" name="tipo-persona" id="tipo-persona">
                    <option value="" selected="" >Seleccione una opción</option>
                        <option value="1">Persona Jurídica</option>
                        <option value="2">Persona Natural</option>
                    </select>
                </div> -->


                </div>
                <div class="div-input">
                    <label for="numero-identificacion">Identificación</label>
                    <input type="tel" class="input" name="id" id="id" placeholder="Identificación">
                </div>
                
                <div class="div-input">
                    <label for="tipo-identificacion">Tipo de Identificación</label>
                    <select class="input" name="tipo" id="tipo">
                    <option value="" selected="" >Seleccione una opción</option>
                        <option value="1">Cédula de Ciudadanía</option>
                        <option value="2">Cédula de Extrangería</option>
                        <option value="3">Tarjeta de Identidad</option>
                    </select>
                </div>

                <div class="div-input">
                    <label for="nombres">Nombres Completos</label>
                    <input type="text" class="input" name="nombres" placeholder="Nombres Completos">
                </div>
                <!-- <div class="div-input">
                    <label for="razon-social">Razón social</label>
                    <input type="text" class="input" pattern="[a-zA-Z0-9]{10,200}" name="razon-social" placeholder="Razon Social">
                </div> -->


                <div class="div-input">
                    <label for="telefono">Teléfono</label>
                    <input type="tel" class="input" name="telefono" id="telefono" placeholder="Teléfono">
                </div>

                
                <div class="div-input">
                    <label for="correo">Correo</label>
                    <input type="email" class="input" name="correo" id="correo" placeholder="Correo electrónico">
                </div>

                <div class="div-input">
                    <label for="direccion">Direccion</label>
                    <input type="text" name="direccion" class="input" id="direccion" placeholder="Dirección">
                </div>

                <!-- <div class="div-input">
                    <label for="Estado">Seleccionar</label>
                    <select class="input" name="estado" id="estado">
                    <option value="" selected="" >Seleccione una opción</option>
                        <option value="1">Activo</option>
                        <option value="2">Inactivo</option>
                    </select>
                </div> -->

                <!-- <div class="div-input">
                    <label for="NIT">NIT</label>
                    <input type="tel" class="input" name="nit" id="nit" placeholder="NIT">
                </div> -->
                <button class="enviar" type="submit">Guardar</button>
                
            </form>

            
        </section>
        
                
        
            