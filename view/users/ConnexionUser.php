<?php ob_start(); ?>

            <div class="login">
				<form>
					<label for="chk" aria-hidden="true">Connexion</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button>Connexion</button>
				</form>
			</div>

<?php $content1 = ob_get_clean(); ?>
