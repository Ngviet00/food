const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
mix.js('resources/js/admin.js', 'public/js')
        .postCss('resources/css/admin.css', 'public/css')
        .postCss('resources/css/app.css', 'public/css', [
            require('postcss-import'),
            require('tailwindcss'),
            require('postcss-nested'),
            require('autoprefixer'),
        ]);

if (mix.inProduction()) {
  mix.version();
}
