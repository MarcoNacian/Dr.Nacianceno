<?php include('header.php'); ?>
<main>
<div class="container-fluid">
	<div class="row">
		  <div id="titulo" class="col-md-12">
			  <h2>Citas</h2>
			  <p>Llenar el siguiente formato para solicitar una cita</p>
			  <br>
		  </div>
	  </div>
        <div class="row">
			<div class="col-md-6">
				<form action="">
					<div class="form-group">
						<label for="name">Nombre</label>
						<input type="text" class="form-control" id="inName" placeholder="Ingrese su nombre completo">
					</div>
					<div class="form-group">
						<label for="phone">Telefono</label>
						<input type="phone" class="form-control" id="inPhone" placeholder="Ingrese su telefono">
					</div>
					<div class="form-group">
						<label for="mail">Correo Electronico</label>
						<input type="mail" class="form-control" id="inMail" placeholder="Ingrese Correo">
					</div>
					<div class="form-group">
						<label for="date">Fecha de Consutla</label>
						<input type="date" class="form-control" id="inDate" placeholder="Seleccione Fecha">
					</div>
					<div class="form-check form-check-inline">
						<input type="checkbox"class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">Hombre</label>
					</div>
					<div class="form-check ">
						<input type="checkbox"class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">Mujer</label>
					</div>
					<button type="submit" class="btn btn-success">Agendar Cita</button>
				</form>
			</div>
			<div class="col-md-6">
			<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d65!2d-100.3253823!3d25.6466503!2m2!1f157.6!2f45.02!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x8662be419ad2ed5d%3A0xe180ce5936b36e76!2sAv.+Rufino+Tamayo%2C+San+Pedro+Garza+Garc%C3%ADa%2C+N.L.!5e1!3m2!1ses-419!2smx!4v1524271289884" width="100%" height="600" frameborder="10" style="border:5px solid #68b04d" allowfullscreen></iframe>
			</div>
		</div>
</div>
</main>
<?php include('footer.php'); ?>


