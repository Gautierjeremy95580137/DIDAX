<header id="testheader" class="header">
	<nav id="menu">
		<h1 class="title">
			DIDAX
		</h1>
		
		<ul>
			<li><a href="index.php">Accueil</a></li>
			<li><a href="inscription.php">Inscription</a></li>
			<li><a href="login.php">Connexion</a></li>
			<?php if ($_SESSION['pseudo']): ?>
                <li><a href="logout.php">Se déconnecter</a></li>
            <?php endif ?>
			
		</ul>
	</nav>
		
</header>