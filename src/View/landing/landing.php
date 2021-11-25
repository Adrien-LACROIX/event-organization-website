<?php $title = 'Accueil'; ?>
<?php ob_start(); ?>
<div class="h-screen pb-14 bg-right bg-cover">
	<!--Nav-->
	<div class="w-full container mx-auto p-6">
		<div class="w-full flex items-center justify-between">
			<a class="flex items-center text-indigo-400 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
				<svg class="h-8 fill-current text-indigo-600 pr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
					<path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm-5.6-4.29a9.95 9.95 0 0 1 11.2 0 8 8 0 1 0-11.2 0zm6.12-7.64l3.02-3.02 1.41 1.41-3.02 3.02a2 2 0 1 1-1.41-1.41z" />
				</svg> <?php echo SITE_NAME; ?> </a>
			<div class="flex w-1/2 justify-end content-center">
			</div>
		</div>
	</div>
	<!--Main-->
	<div class="container pt-24 md:pt-48 px-6 mx-auto flex flex-wrap flex-col md:flex-row items-center">
		<!--Left Col-->
		<div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
			<h1 class="my-4 text-3xl md:text-5xl text-purple-800 font-bold leading-tight text-center md:text-left slide-in-bottom-h1">Votre gestionnaire d'idéation d'évènements</h1>
			<p class="leading-normal text-base md:text-xl mb-8 mr-4 text-center md:text-left slide-in-bottom-subtitle">
				Créez vos évènements en quelques clics, gérez vos invités, organisez vos évènements en toute simplicité.
			</p>
		</div>

		<section class="w-full fade-in bg-white rounded-md xl:w-3/5 px-4 sm:px-6 lg:px-4 xl:px-6 pt-4 pb-4 sm:pb-6 lg:pb-4 xl:pb-6 space-y-4">
			<header class="flex items-center justify-between">
				<h2 class="text-2xl leading-6 font-medium text-black">Idées d'évènements</h2>
				<button class="hover:bg-green-200 hover:text-green-800 group flex items-center rounded-md bg-green-100 text-green-600 text-sm font-medium px-4 py-2 cursor-pointer">
					<svg class="group-hover:text-green-600 text-green-500 mr-2" width="12" height="20" fill="currentColor">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M6 5a1 1 0 011 1v3h3a1 1 0 110 2H7v3a1 1 0 11-2 0v-3H2a1 1 0 110-2h3V6a1 1 0 011-1z"/>
					</svg>
					Nouveau
				</button>
			</header>
			<form class="relative">
				<svg width="20" height="20" fill="currentColor" class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
				</svg>
				<input class="focus:border-green-500 focus:ring-1 focus:ring-green-500 focus:outline-none w-full text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-10" type="text" aria-label="Filtrer les idées d'évènements" placeholder="Filtrer les idées d'évènements" />
			</form>
			<ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 xl:grid-cols-2 gap-4">
				<?php
					while ($events !== false && $event = $events->fetch())
					{
				?>
					<li>
						<a class="hover:bg-green-500 hover:border-transparent hover:shadow-lg group block rounded-lg p-4 border border-gray-200">
							<dl class="grid sm:block lg:grid xl:block grid-cols-2 grid-rows-2 items-center">
							<div>
								<dt class="sr-only">Titre</dt>
								<dd class="group-hover:text-white leading-6 font-medium text-black">
								Soirée étudiante 30/11/2021 à 20:00
								</dd>
							</div>
							<div>
								<dt class="sr-only">Catégorie</dt>
								<dd class="group-hover:text-green-200 text-sm font-medium sm:mb-4 lg:mb-0 xl:mb-4">
								Soirée
								</dd>
							</div>
							<div class="col-start-2 row-start-1 row-end-3">
								<dt class="sr-only">Utilisateurs</dt>
								<dd class="flex justify-end sm:justify-start lg:justify-end xl:justify-start -space-x-2">
								<img x-for="user in item.users" src="https://www.fillmurray.com/640/360" :alt="user.name" width="48" height="48" class="w-7 h-7 rounded-full bg-gray-100 border-2 border-white" />
								</dd>
							</div>
							</dl>
						</a>
					</li>
				<?php
					}
				?>
				<li class="hover:shadow-lg flex rounded-lg">
				<a href="/new" class="hover:border-transparent hover:shadow-xs w-full flex items-center justify-center rounded-lg border-2 border-dashed border-gray-200 text-sm font-medium py-4">
					Nouvel évènement
				</a>
				</li>
			</ul>
		</section>

		<!--Footer-->
		<div class="w-full pt-16 pb-6 text-sm text-center md:text-left fade-in">
			<a class="text-gray-500 no-underline hover:no-underline" href="#">&copy; <?php echo SITE_NAME . ' - ' . date('Y'); ?></a>
		</div>
	</div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require dirname(__FILE__) . '/../Layout/page-front.php'; ?>