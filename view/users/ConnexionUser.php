<?php ob_start(); ?>

            <div class="login">
				<form method="post" action="index.php?view=listes">
					<label for="chk" aria-hidden="true">Connexion</label>
					<input type="text" name="username" placeholder="Username" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<input type="submit" class="button" value="Connexion" name="listes">

					<button></button>
				</form>
			</div>

<?php $content1 = ob_get_clean(); ?>
