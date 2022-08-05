
					$x = 2;
				?>
				<table class="table table-bordered table-striped table-hover table-dark">
					<thead class="bg-secondary text-uppercase">
						<tr>
							<th>Operador</th>
							<th>Descripción</th>
							<th>Ejemplo</th>
							<th>Resultado</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> + </td>
							<td> Adición </td>
							<td>$x=2; $x+2;</td>
							<td><?php echo $x=$x+2; ?></td>
						</tr>
						<tr>
							<td> - </td>
							<td> Substracción </td>
							<td>$x=2; 5-$x;</td>
							<td>
								<?php 
									$x=2; 
									echo $x=5-$x; 
								?>
							</td>
						</tr>
						<tr>
							<td> * </td>
							<td> Producto </td>
							<td>$x=4; $x*5;</td>
							<td>
								<?php 
									$x=4; 
									echo $x=$x*5; 
								?>
							</td>
						</tr>
						<tr>
							<td> / </td>
							<td> División </td>
							<td>15/5;</td>
							<td>
								<?php echo 15/5; ?>
							</td>
						</tr>
						<tr>
							<td> % </td>
							<td> Residuo </td>
							<td>5%2;</td>
							<td>
								<?php echo 5%2; ?>
							</td>
						</tr>
						<tr>
							<td> ++ </td>
							<td> Incremento </td>
							<td>$x=5; $x++;</td>
							<td>
								<?php 
									$x = 5;
									echo $x++;
								?>
							</td>
						</tr>
						<tr>
							<td> ++ </td>
							<td> Incremento </td>
							<td>$x=5; ++$x;</td>
							<td>
								<?php 
									$x = 5;
									echo ++$x;
								?>
							</td>
						</tr>
						<tr>
							<td> -- </td>
							<td> Decremento </td>
							<td>$x=5; --$x;</td>
							<td>
								<?php 
									$x = 5;
									echo --$x;
								?>
							</td>
						</tr>
					</tbody>
				</table>?>
                </div>
    </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>