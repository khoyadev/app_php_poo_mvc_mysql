<?php ob_start(); ?>

            <div class="login">
				<form method="post" action="index.php?action=listes">
					<label for="chk" aria-hidden="true">Connexion</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<input type="submit" class="button" value="Connexion" name="listes">

					<button></button>
				</form>
			</div>

<?php $content1 = ob_get_clean(); ?>
