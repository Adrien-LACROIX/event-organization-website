<?php $title = 'Accueil'; ?>
<?php ob_start(); ?>
<div>
	<!--Nav-->
	<div class="container w-full p-6 mx-auto">
		<div class="flex items-center justify-between w-full">
			<a class="flex items-center text-2xl font-bold text-indigo-400 no-underline hover:no-underline lg:text-4xl" href="#">
				<svg class="h-8 pr-2 text-indigo-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
					<path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm-5.6-4.29a9.95 9.95 0 0 1 11.2 0 8 8 0 1 0-11.2 0zm6.12-7.64l3.02-3.02 1.41 1.41-3.02 3.02a2 2 0 1 1-1.41-1.41z" />
				</svg> <?php echo SITE_NAME; ?> </a>
			<div class="flex content-center justify-end w-1/2">
			</div>
		</div>
	</div>
	<!--Main-->
	<div class="container flex flex-col flex-wrap items-center px-6 pt-24 mx-auto md:pt-48 md:flex-row">
		<!--Left Col-->
		<div class="flex flex-col justify-center w-full overflow-y-hidden xl:w-2/5 lg:items-start">
			<h1 class="my-4 text-3xl font-bold leading-tight text-center text-purple-800 md:text-5xl md:text-left slide-in-bottom-h1">
				Votre gestionnaire d'idéation d'évènements
			</h1>
			<p class="mb-8 mr-4 text-base leading-normal text-center md:text-xl md:text-left slide-in-bottom-subtitle">
				Créez vos évènements en quelques clics, gérez vos invités, organisez vos évènements en toute simplicité.
			</p>
		</div>

		<section class="w-full px-4 pt-4 pb-4 space-y-4 bg-white rounded-md fade-in xl:w-3/5 sm:px-6 lg:px-4 xl:px-6 sm:pb-6 lg:pb-4 xl:pb-6">
			<header class="flex items-center justify-between">
				<h2 class="text-2xl font-medium leading-6 text-black">Idées d'évènements</h2>
				<button class="flex items-center px-4 py-2 text-sm font-medium text-green-600 bg-green-100 rounded-md cursor-pointer hover:bg-green-200 hover:text-green-800 group">
					<svg class="mr-2 text-green-500 group-hover:text-green-600" width="12" height="20" fill="currentColor">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M6 5a1 1 0 011 1v3h3a1 1 0 110 2H7v3a1 1 0 11-2 0v-3H2a1 1 0 110-2h3V6a1 1 0 011-1z"/>
					</svg>
					Nouveau
				</button>
			</header>
			<form class="relative">
				<svg width="20" height="20" fill="currentColor" class="absolute text-gray-400 transform -translate-y-1/2 left-3 top-1/2">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
				</svg>
				<input class="w-full py-2 pl-10 text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md focus:border-green-500 focus:ring-1 focus:ring-green-500 focus:outline-none" type="text" aria-label="Filtrer les idées d'évènements" placeholder="Filtrer les idées d'évènements" />
			</form>
			<ul class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-1 xl:grid-cols-2">
				<?php
					while ($events !== false && $event = $events->fetch())
					{
				?>
					<li>
						<a class="block p-4 border border-gray-200 rounded-lg hover:bg-green-500 hover:border-transparent hover:shadow-lg group">
							<dl class="grid items-center grid-cols-2 grid-rows-2 sm:block lg:grid xl:block">
							<div>
								<dt class="sr-only">Titre</dt>
								<dd class="font-medium leading-6 text-black group-hover:text-white">
								Soirée étudiante 30/11/2021 à 20:00
								</dd>
							</div>
							<div>
								<dt class="sr-only">Catégorie</dt>
								<dd class="text-sm font-medium group-hover:text-green-200 sm:mb-4 lg:mb-0 xl:mb-4">
								Soirée
								</dd>
							</div>
							<div class="col-start-2 row-start-1 row-end-3">
								<dt class="sr-only">Utilisateurs</dt>
								<dd class="flex justify-end -space-x-2 sm:justify-start lg:justify-end xl:justify-start">
								<img x-for="user in item.users" src="https://www.fillmurray.com/640/360" :alt="user.name" width="48" height="48" class="bg-gray-100 border-2 border-white rounded-full w-7 h-7" />
								</dd>
							</div>
							</dl>
						</a>
					</li>
				<?php
					}
				?>
				<li class="flex rounded-lg hover:shadow-lg">
				<a href="/new" class="flex items-center justify-center w-full py-4 text-sm font-medium border-2 border-gray-200 border-dashed rounded-lg hover:border-transparent hover:shadow-xs">
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