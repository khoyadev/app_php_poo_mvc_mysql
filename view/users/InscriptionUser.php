<?php ob_start(); ?>

            <div class="signup">
				<!-- <form method="post" action="index.php?view=ConnexionUser"> -->
				<form method="post" action="index.php?action=adduser">
					<label for="chk" aria-hidden="true">Inscription</label>
					<input type="text" name="username" placeholder="Nom" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<input type="submit" class="button" value="enregistrer" name="add">
				<button>Inscription</button>
				</form>
			</div>

<?php $content = ob_get_clean(); ?>

<?php require('view/users/ConnexionUser.php'); ?>
<?php require('view/template/user.php'); ?>