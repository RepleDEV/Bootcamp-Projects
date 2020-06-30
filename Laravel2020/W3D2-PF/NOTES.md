

# How to set up Laravel project/application

## First, run this command to create your project

```bash
composer create-project --perfer-dist laravel/laravel [PROJECT NAME]
```

Replacing **[PROJECT NAME]** with your **project name**.

## Next, test if your app works (functions properly)

Make sure you are in the directory of your application. After that, run this command:

```bash
php artisan serve
```

Next go to your _favourite browser_ and go to `localhost:8000` and check if any response is available.  
If this doesn't work, try going to `127.0.0.1:8000`, or read the console log/verbose below the `serve` command.
Should read something like `Laravel development server started: http://[url]:[port]` where the `[url]` is the **local IP**, usually `127.0.0.1`, and the default `[port]` is `8000`.


### To add `html`/`php` page files, name your file as `*.blade.php` and place them in the `/resources/views` folder

## To add a `route`, open the `web.php` file in the `routes` folder

The default front page is the 