let mix = require('laravel-mix');

mix
  .sass('scss/app.scss', 'css/')
  .options({ processCssUrls: false });
