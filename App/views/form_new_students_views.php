<!DOCTYPE html>
<html>

<body>
<header>
<h1 class="title-register">Registro de Estudiantes</h1>
</header>

		<div id="principal">

			<section id="forms" class="form-users">
        <form action="" method="POST">
            <div class="form-reg">

                <input class="reg-input" type="text" id="ci" name="ci" placeholder="Cedula del Alumno" pattern="[VveE1234567890.-]{1,900}" autocomplete="off" required>


                <input class="reg-input" type="text" id="nombres" name="nombres" pattern="[A-Za-záéíóúñ'´ ]{1,900}" placeholder="Nombre Completo del Alumno" autocomplete="off" title="Solo Caracteres Alfabeticos!" required>


                <input class="reg-input" type="text" id="apellidos" name="apellidos" placeholder="Apellido Completo del Alumno" pattern="[A-Za-záéíóúñ'´ ]{1,900}" title="Solo caracteres alfabeticos" autocomplete="off" required>

                <label for="anio_actual">Curso Actual:</label>
                <select name="anio_actual" id="anio_actual">
                        <option value="1-A">1-A</option>
                        <option value="1-B">1-B</option>
                        <option value="2-A">2-A</option>
                        <option value="2-B">2-B</option>
                        <option value="3-A">3-A</option>
                        <option value="3-B">3-B</option>
                        <option value="4-A">4-A</option>
                        <option value="4-B">4-B</option>
                        <option value="5-A">5-A</option>
                        <option value="5-B">5-B</option>
                    </select>


            </div>

            <br>
            <br>

            <div class="buttons">
                <label id="labelFile" for="file"> Subir CSV </label>
                <input style="visibility:collapse; display: none;" type="file" id="file" accept=".csv" name="file">
                <input type="submit" id="boton-confirmar" name="send">
                <br>
                <p id="msj" style="text-align: center; display: none;"></p>
            </div>
        </form>
    </section>



			<!--	<a href="index.php?page=csv_estudiante" style="color: var(--blue-color);"> Subir estudiantes por un archivo csv </a>-->

		</div>		


<script src="js/alerts.js"></script>

</body>
</html>