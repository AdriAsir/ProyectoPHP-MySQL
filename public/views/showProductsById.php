	<table style=" margin: 0 auto;background-color: whitesmoke;border-radius: 10px;"">
		<thead>
			<tr>
                <th>Producto</th>
				<th>Descripción</th>
				<th>Precio</th>
                <th>Procedencia</th>
				<th>Categoria</th>
				<th>Imagen</th>
			</tr>
		</thead>
		<tbody>
			<tr>
                <td><?php echo $data['Nombre']; ?></td>
				<td><?php echo $data['Descripcion']; ?></td>
				<td><?php echo $data['Precio']; ?></td>
                <td><?php echo $data['Procedencia']; ?></td>
				<td><?php echo $data['Categoria']; ?></td>
                <td><img src="<?php echo $data['Imagen']; ?>"width="200" height="150"></td>
			</tr>
		</tbody>

	</table>
