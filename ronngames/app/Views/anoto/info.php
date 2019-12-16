<body style="background-color:#edebe8">
	<div class="row">
		<div class="col-md">
			<?php if (! empty($Gamess)) : ?>
				<div class="card" style="width: 25rem;">
				  <img src="https://picsum.photos/200/300?grayscale" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title"><?=$Gamess['name'] ?></h5>
				    <p class="card-text"><?=$Gamess['description'] ?></p>
				  </div>
				  <ul class="list-group list-group-flush">
				    <li class="list-group-item"><b>ID</b> : <small><?=$Gamess['ID'] ?></small></li>
				    <li class="list-group-item"><b>Genre</b> : <a href="#"><?=$Gamess['genre'] ?></a></li>
				    <li class="list-group-item"><b>Price</b> : <a href="#"><?=$Gamess['price'] ?></a></li>
				  </ul>
				  <div class="card-body">
				    <a href="#" class="card-link">Facebook</a>
				    <a href="#" class="card-link">Google</a>
				     <a href="javascript:self.history.back();" class="btn btn-secondary float-right btn-sm">Back</a>
				  </div>
				</div>
			 <?php else : ?>
				<div class="card" style="width: 18rem;">
				  <img src="..." class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title">Unknown</h5>
				    <p class="card-text">Anonymous</p>
				  </div>
				  <ul class="list-group list-group-flush">
				    <li class="list-group-item">Id : unknown</li>
				    <li class="list-group-item">Gender : unknown</li>
				    <li class="list-group-item">Origin : unknown</li>
				  </ul>
				  <div class="card-body">
				    <a href="#" class="card-link">Facebook</a>
				    <a href="#" class="card-link">Google</a>
				  </div>
				</div>
			<?php endif ?>
		</div>
	</div>
	</body>
