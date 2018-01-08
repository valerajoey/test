<?php

$sql = "SELECT * FROM categories WHERE parent = 0";
$pquery = $db->query($sql); 
?>




	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<a class="navbar-brand" href="#">Red Horse Store</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<?php while($parent = mysqli_fetch_assoc($pquery)) : ?>

				<?php 
					$parent_id = $parent['id'];
					$sql2 = "SELECT * FROM categories WHERE parent = '$parent_id' "; 
					$cquery = $db->query($sql2);
				?>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $parent['category']; ?></a>

					<div class="dropdown-menu" aria-labelledby="dropdown01">
						<?php while($child = mysqli_fetch_assoc($cquery)): ?>
							<a class="dropdown-item" href="#"><?php echo $child['category'] ?> </a>
						<?php endwhile; ?>
					</div>
				</li>
			<?php endwhile; ?>
			</ul>

		</div>
	</nav>