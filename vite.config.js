import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/style.css",
                "resources/css/animate.css",
                "resources/css/featuresStyle.css",
                "resources/js/wow.min.js",
                "resources/js/main.js",
                "resources/js/features.js",
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
