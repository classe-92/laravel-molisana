<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Laravel inizializzazione progetto

```bash
#apriamo la cartella parent
cd your parent_folder_path

#creiamo il progetto
composer create-project --prefer-dist laravel/laravel:^9.2 your_project_name_here

#entriamo nella cartella del progetto da terminale di vscode
cd your_project_name

#apriamo la cartella in vscode
code . -r 

#installiamo il pacchetto di inizializzazione ui con bootstrap
composer require pacificdev/laravel_9_preset

#installiamo il pacchetto 
php artisan preset:ui bootstrap

#Installare pacchetto per update migration:
composer require doctrine/dbal

#lanciamo npm install
npm install

#installiamo fonawesome se serve
npm install --save @fortawesome/fontawesome-free

#modifichiamo vite.config.js per aggiungere alias fontawesome
...
 '~@fortawesome': path.resolve(__dirname, 'node_modules/@fortawesome'),
...
#creiamo le cartelle e i file necessari
#dentro resources:
fonts
img

#dentro resources>views:
layouts > layout.blade.php
partials > header.blade.php e footer.blade.php

#dentro resources>scss:
partials
(inseriamo dentro partials almeno un file _varaibles.scss) 

#copiamo la cartella dei webfont di fontawesome dentro fonts

#editiamo il file app.scss
@use './partials/variables' as *;

$fa-font-path: "../fonts/webfonts" !default;

@import "~@fortawesome/fontawesome-free/scss/fontawesome";
@import "~@fortawesome/fontawesome-free/scss/regular";
@import "~@fortawesome/fontawesome-free/scss/solid";
@import "~@fortawesome/fontawesome-free/scss/brands";

@import "~bootstrap/scss/bootstrap";

#prepara il file del layout e la welcome

#verifichiamo che tutto funzioni:

npm run dev

php artisan serve

```
## Pubblicare su github

```
#create project on github and follow instructions
# add composer.lock and package.lock.json to .gitignore

git init
git add .
git commit -m "first commit"
git branch -M main
git remote add origin your_git_url
git push -u origin main

```
## Creo migration e seeder

```php
#Creo database da phpmyadmin

#Aggiungo configurazione a file .env

#creare le migration per le tabelle ecc

#per creazione:
php artisan make:migration create_nometabella_table

#per aggiunta campo nome migration:
php artisan make:migration add_momecampo_to_nometabella_table

#per modifica campi e tabelle nome migration:
php artisan make:migration update_nometabella_table --table=nometabella

#dentro il file  migration 
	public function up()
	{
		Schema::create('pastas', function (Blueprint $table) {
			$table->id();
			$table->string('title', 50);
			$table->text('description')->nullable();
			$table->string('type', 20);
			$table->string('image');
			$table->string('cooking_time', 20);
			$table->string('weight', 20);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('pastas');
	}
#per lanciare le migration

php artisan migrate

#controllo su phpmyadmin se c'è tutto
#creo model per la tabella generata
php artisan make:model Nometabellasingolare

#preparo il seeder

php artisan make:seeder NomeTableSeeder

#apro il seeder e dentro c'è la funzione run()
				$array_pasta = config('pasta');
				foreach($array_pasta as $pasta_item) {
						$new_pasta_object = new Pasta();
						$new_pasta_object->title = $pasta_item['titolo'];
						$new_pasta_object->description = $pasta_item['descrizione'];
						$new_pasta_object->type = $pasta_item['tipo'];
						$new_pasta_object->image = $pasta_item['src'];
						$new_pasta_object->cooking_time = $pasta_item['cottura'];
						$new_pasta_object->weight = $pasta_item['peso'];
						$new_pasta_object->save();
				}

#lancio il seeder:

php artisan db:seed --class=NomeClasseSeeder
#controllo phpmyadmin se i dati sono inseriti

#volendo aggiungo la classe del seedere a DabaseSeeeder aggiungendo nella funzione run ad es.:
$this->call([
	  PostTableSeeder::class,
]);


#creo controller correggo il file della rotta e stampo in pagina con le view

```

## Laravel clone progetto

```Bash
#clone repo from github

composer install

#fare copia del file .env.example e rinominarlo  in .env 
cp .env.example .env

php artisan key:generate

npm install

#creo db

#modifico file env con nome DB e credenziali mysql

npm run dev

php artisan serve

# lancio migration e seeder anche con un solo comando (se i seeder sono tutti presenti nell'array della dunzione run di DatabaseSeeder.php):

php artisan migrate --seed

```



- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
