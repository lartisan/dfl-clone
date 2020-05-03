const mix = require("laravel-mix");

mix.react("resources/js/app.js", "public/js")
    .postCss("resources/css/main.css", "public/css", [require("tailwindcss")])
    .browserSync({
        proxy: "http://dfl-clone.test",
    });
