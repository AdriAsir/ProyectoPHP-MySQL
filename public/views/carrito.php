	<h1 style="text-align: center;">Mi Pedido</h1>
	<?php
	if (empty($data)) {
		echo "<p><center>El carrito de compras está vacío</center></p>";
	} else {
	?>
	<table style=" margin: 2px auto;background-color: whitesmoke;border-radius: 10px;text-align:center">
		<thead>
			<tr >
				<th>Producto</th>
				<th>Descripción</th>
				<th>Precio</th>
				<th></th>
				<th></th>
				<th><a href="#">Comprar</a></th>
				<th></th>
				<th><a href="index.php?controller=ProductController&action=getAllProducts">Seguir comprando</a></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data as $producto): ?>
			<tr>
				<td><?php echo $producto['Nombre']; ?></td>
				<td><?php echo $producto['Descripcion']; ?></td>
				<td><?php echo $producto['Precio']; ?>€</td>
				<td><img src="<?php echo $producto['Imagen']; ?>"width="200" height="150"></td>


			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<?php } ?>


