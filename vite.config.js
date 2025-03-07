import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/style.css",
                "resources/css/animate.css",
                "resources/js/wow.min.css",
                "resources/js/main.js",
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
