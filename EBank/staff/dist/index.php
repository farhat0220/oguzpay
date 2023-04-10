<?php 

require 'lang.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Languages</title>
</head>
<body>

	<style>

		body{
			font-family: tahoma;
		}
		header{
			display: flex;
			padding: 10px;
			justify-content: center;
			align-items: center;
		}

		header div{
			padding: 10px;
		}

		.dropdown{
			position: relative;
		}

		.dropdown-content{
			position: absolute;
			margin-top:10px;
			background-color: white;
			border: solid thin #aaa;
			padding: 10px;
		}

		.hide{
			display: none;
		}

		section{
			padding: 10px;
			max-width: 600px;
			margin:auto;
		}

	</style>
	<header>
		<div><a href="#"><?= __('Home')?></a></div>
		<div><a href="#"><?= __('About us')?></a></div>
		<div><a href="#"><?= __('Contact us')?></a></div>
		<div><a href="#"><?= __('Login')?></a></div>
		<div><a href="#"><?= __('Signup')?></a></div>
		<div><a href="#"><?= __('Logout')?></a></div>
		<div class="dropdown">
			<a href="#"><?= __('Hi')?>, John</a>
			<div class="dropdown-content hide">
				<div><a href="#"><?= __('Profile')?></a></div>
				<div><a href="#"><?= __('Settings')?></a></div>
				<div><a href="#"><?= __('Logout')?></a></div>
			</div>
		</div>
		<div class="dropdown">
			<a href="#"><?= __('Language')?></a>
			<div class="dropdown-content hide">
				<div><a href="index.php?lang=en">English</a></div>
				<div><a href="index.php?lang=fr">Français</a></div>
				<div><a href="index.php?lang=es">Español</a></div>
				<div><a href="index.php?lang=zh">中文</a></div>
			</div>
		</div>
	</header>

	<section>
		
		What is Lorem Ipsum?

		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		Why do we use it?

		It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

		Where does it come from?

		Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

	</section>
</body>

<script>
	
	var dropdowns = document.querySelectorAll(".dropdown");

	for (var i = 0; i < dropdowns.length; i++) {
		
		dropdowns[i].addEventListener('click',function(e){

			for (var x = 0; x < dropdowns.length; x++) {
				dropdowns[x].querySelector(".dropdown-content").classList.add("hide");
			}

			e.currentTarget.querySelector(".dropdown-content").classList.toggle("hide");
		});
	}

</script>
</html>