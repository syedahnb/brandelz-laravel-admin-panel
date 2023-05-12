/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/protonemedia/laravel-splade/lib/**/*.vue",
        "./vendor/protonemedia/laravel-splade/resources/views/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            colors: {
                // Palette 6
                //Primary
                "red-050": "#FFEEEE",
                "red-100": "#FACDCD",
                "red-200": "#F29B9B",
                "red-300": "#E66A6A",
                "red-400": "#D64545",
                "red-500": "#BA2525",
                "red-600": "#A61B1B",
                "red-700": "#911111",
                "red-800": "#780A0A",
                "red-900": "#610404",

                "yellow-vivid-050": "#FFFBEA",
                "yellow-vivid-100": "#FFF3C4",
                "yellow-vivid-200": "#FCE588",
                "yellow-vivid-300": "#FADB5F",
                "yellow-vivid-400": "#F7C948",
                "yellow-vivid-500": "#F0B429",
                "yellow-vivid-600": "#DE911D",
                "yellow-vivid-700": "#CB6E17",
                "yellow-vivid-800": "#B44D12",
                "yellow-vivid-900": "#8D2B0B",
                //Neutrals
                "warm-grey-050": "#FAF9F7",
                "warm-grey-100": "#E8E6E1",
                "warm-grey-200": "#D3CEC4",
                "warm-grey-300": "#B8B2A7",
                "warm-grey-400": "#A39E93",
                "warm-grey-500": "#857F72",
                "warm-grey-600": "#625D52",
                "warm-grey-700": "#504A40",
                "warm-grey-800": "#423D33",
                "warm-grey-900": "#27241D",
                //Supporting
                "cyan-050": "#E0FCFF",
                "cyan-100": "#BEF8FD",
                "cyan-200": "#87EAF2",
                "cyan-300": "#54D1DB",
                "cyan-400": "#38BEC9",
                "cyan-500": "#2CB1BC",
                "cyan-600": "#14919B",
                "cyan-700": "#0E7C86",
                "cyan-800": "#0A6C74",
                "cyan-900": "#044E54",

                "lime-green-050": "#F2FDE0",
                "lime-green-100": "#E2F7C2",
                "lime-green-200": "#C7EA8F",
                "lime-green-300": "#ABDB5E",
                "lime-green-400": "#94C843",
                "lime-green-500": "#7BB026",
                "lime-green-600": "#63921A",
                "lime-green-700": "#507712",
                "lime-green-800": "#42600C",
                "lime-green-900": "#2B4005",
            },
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        require("@tailwindcss/aspect-ratio")
    ],
};
