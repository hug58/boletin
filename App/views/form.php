
	<script type="text/javascript">
		function form_table(){
			const html_form = `

			<div id="form_table">

				<form method="POST">

					<input type="text" name="seccion" required>
					<select name="anio">

					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>

					</select>
					<button class='btn succes'>Agregar</button>
				</form>

		
			</div>`

			const content = document.getElementById("form_table");
			content.innerHTML = html_form;


		}
	</script>