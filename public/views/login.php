
    <section class="ftco-section">
	  <div class="container" >
		  <div class="row justify-content-center">
			  <div class="col-md-6 text-center mb-5">
				  <h2 class="heading-section"></h2>
			  </div>
		  </div>
		  <div class="row justify-content-center">
			  <div class="col-md-6 col-lg-4">
				  <div class="login-wrap p-0">
				<h3 class="mb-4 text-center">Iniciar Sesion</h3>
				<form action="index.php?controller=UsuarioController&action=procesarInicioSesion" method="post" class="signin-form">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Username" name="usuario" id="usuario">
                        <?php
                            if (isset($data) && isset($data['usuario']))
                            echo "<div class='alert alert-danger'>"
                            .$data['usuario'].
                            "</div>";
                        ?>
					</div>
			  <div class="form-group">
				<input id="password-field" type="password" class="form-control" placeholder="Password" name="contrasena" id="contrasena">
				<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                <?php
                            if (isset($data) && isset($data['contrasena']))
                            echo "<div class='alert alert-danger'>"
                            .$data['contrasena'].
                            "</div>";
                        ?>
			  </div>
			  <div class="form-group">
              <?php
                            if (isset($data) && isset($data['general']))
                            echo "<div class='alert alert-danger'>"
                            .$data['general'].
                            "</div>";
                        ?>
				  <button type="submit" class="form-control btn btn-primary submit px-3" name="botonlogin">Sign In</button>
			  </div>
			  </div>
			</form>
			</div>
			  </div>
		  </div>
	  </div>
  </section>

