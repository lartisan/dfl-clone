const mix = require("laravel-mix");
require("laravel-mix-tailwind");

mix.react("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css")
    .tailwind();
// .browserSync({
//     proxy: "https://dfl-clone.test",
// });
