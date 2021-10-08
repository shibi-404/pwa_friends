self.addEventListener('install', e => {
    e.waitUntil(
        caches.open("static").then(cache => {
            return cache.addAll(
                [
                    "pages/add.php"
                    // ".",
                    // "index.php",
                    // "about.php",
                    // "add_frnd.php",
                    // "add.php",
                    // "contact.php",
                    // "favicon.ico",
                    // "portfolio.php",
                    // "view_frnd.php",
                    // "template/header.php",
                    // "src/css/styles.css",
                    // "src/img/icons/honey-bee-16x16.png",
                    // "src/img/icons/honey-bee-20x20.png",
                    // "src/img/icons/honey-bee-24x24.png",
                    // "src/img/icons/honey-bee-32x32.png",
                    // "src/img/icons/honey-bee-48x48.png",
                    // "src/img/icons/honey-bee-64x64.png",
                    // "src/img/icons/honey-bee-128x128.png",
                    // "src/img/icons/honey-bee-256x256.png",
                    // "src/img/icons/honey-bee-512x512.png",
                    // "src/img/icons/honey-bee-1024x1024.png",
                    // "src/img/icons/honey-bee-2048x2048.png",
                    // "src/img/icons/honey-bee-4096x4096.png",
                    // "src/js/app.js",
                    // "https://fonts.googleapis.com/icon?family=Material+Icons",
                    // "https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.3.0/material.indigo-pink.min.css",
                    // "https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap",
                    // "https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLEj6Z1xlFd2JQEk.woff2",
                    // "https://fonts.gstatic.com/s/materialicons/v109/flUhRq6tzZclQEJ-Vdg-IuiaDsNcIhQ8tQ.woff2",
                    // "https://fonts.gstatic.com/s/poppins/v15/pxiEyp8kv8JHgFVrJJfecnFHGPc.woff2",
                    // "https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLGT9Z1xlFd2JQEk.woff2",
                    // "manifest.json"
                ]
            );
        })
    );
    console.log("File Change, Install The Service Worker.");
});

self.addEventListener('activate', e => {
    console.log("Service Worker is in Active.");
});

self.addEventListener('fetch', e => {
    e.respondWith(
        caches.match(e.request).then(response => {
            return response || fetch(e.request);
        })
    );
});
