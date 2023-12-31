### Installation
As I make it Admin dashboard ui that why first of all you need to install `laravel ui`  and `ui bootstrap --auth`. How can you make this .

```
composer require laravel/ui
```
Then 
```
php artisan ui bootstrap --auth
```
Migrate the tables 

```
php artisan migrate
```
command

Now You can install my package with this command
```
composer require webdevifti/admindash
```
publish the vendor with this command
```
php artisan vendor:publish
```
Thend select the vendor which name is 
```
Webdevifti\Admindash\AdminDashServiceProvider
```
Now time to make some changes on some files 

Modify the code on `app/Providers/RouteServiceProvider.php` file 
``` php
public const HOME = "/admin/dashboard";
```
Put there block of code on you `routes/web.php` file 
``` php
Route::middleware(['auth:web'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
});
```
Now go to `app/Http/Controllers/HomeController.php` file and make some change on `index()` method. Change the **views** directory to 
``` php 
public function index(){
	return view('vendor.admindash.admin.index');
}
```
You can **delete** these file and directory now
`auth/`
`views/home.blade.php `
`views/layouts/`

On  `vendor/admindash/auth` directory cut the auth folder and paste on `views/` this direcotry


Thank You.