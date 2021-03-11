## Install Frontend

From the root directory of your project, run the following:

```
composer require akitikkx/frontend
```

then run:

```
php artisan vendor:publish
```

then select the option with:

```
Provider: Akitikkx\Frontend\FrontendServiceProvider
```

This should automatically generate the following 
view files which will be need to get the component to work:  

```
- resources/views/layouts/livewire/frontend.blade.php
- resources/views/layouts/app.blade.php
- resources/views/layouts/frontend.blade.php
```

as well as the following classes:

```
app/Http/Livewire/Frontend
```

NB: Note that the namespace needs to be changed to match the project's
namespace, such as `App\Http\Frontend`

### Run the migrations

```
php artisan migrate
```

the table 'pages' should be createdb after the migration is complete.

## Install Livewire
```
php artisan jetstream:install livewire
```
the output should be the following:

```
Livewire scaffolding installed successfully.
Please execute 'npm install && npm run dev' to build your assets.
```

Then run:

``
npm install && npm run dev
``

Output should be similar to the following:

```
✔ Compiled Successfully in 6130ms
┌─────────────────────────────────┬──────────┐
│                            File │ Size     │
├─────────────────────────────────┼──────────┤
│                      /js/app.js │ 673 KiB  │
│                     css/app.css │ 3.88 MiB │
└─────────────────────────────────┴──────────┘
webpack compiled successfully

```

and the following view files should have been created
automatically:

- `resources/views/layouts/guest.blade.php`
- `resources/views/policy.blade.php`
- `resources/views/terms.blade.php`
