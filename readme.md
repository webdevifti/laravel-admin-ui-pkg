### Installation
As I make it Admin dashboard ui that why first of all you need to install `laravel ui`  and `ui bootstrap --auth`. How can you make this .

```
composer require laravel/ui
```
Then 
```
php artisan ui bootstrap --auth
```
That's It .
Now You can install my package with this command
```
composer require webdevifti/admindash
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
On this `vendor/admindash/auth` directory  you can see some folder and files. Replace this files and folder with `views/auth` folder's files. Now delete `vendor/admindash/auth` directory.

You can **delete** these file and directory now
`views/home.blade.php `
`views/layouts/`

Thank You.