<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, inicial-scale=1.0">
	<title>Pedido confirmado - McDonald's</title>
	<style>  
		body { font-family: Arial; sans-serif;margin: 0;padding: 20px;background-color: #f5f5f5;}
		.container { max-width: 800px; margin: 0 auto;text-align: center;}
		.confirmacion { background: white; padding: 30px;border-radius: 5px;box-shadow: 0 2px 10px rgba(0,0,0,1);
		}
		.icono { font-size: 50px;color: #33cc33;margin: 20px  }
		.numero-pedido { font-size: 1.5em;color: #ff0000; margin: 20px 0; }
		button {background-color: #ffcc00; border: :none;padding: 10px 20px;border-radius: 3px; cursor: pointer;
		button:hover {background-color: #e6b800; } 
	</style>
</head>
<body>
	<div class="container">
		<div class='icono'>✔</div>
		<h1>¡Pedido confirmado!</h1>
		<p>Gracias por tu compra en McDonald's.</p>

		<?php if (isset($_GET['id'])): ?>
            <p>Tu número de pedido es:</p>
            <div class="numero-pedido">#<?php echo htmlspecialchars($_GET['id']); ?></div><p>Hemos enviado los detalles a nuestro equipo de cocina👩‍🍳👩‍.</p>
		 <?php endif; ?>

		 <button onclick="location.href='index.php'">Volver al menú</button>
			</div>
		</div>
	</body>
	</html>
		