importScripts('assets/js/cache-polyfill.js');


self.addEventListener('install', function(e) {
 e.waitUntil(
   caches.open('thegate').then(function(cache) {
     return cache.addAll([
       '/index.php',
       '/quotes.php',
       '/assets/css/bootstrap.css',
       '/assets/css/bootstrap.min.css',
       '/assets/css/custom.css',
       '/assets/css/custom.min.css',
       '/assets/css/fork-awesome.min.css',
       '/assets/fonts/forkawesome-webfont.ttf?v=1.0.10',
       '/assets/fonts/forkawesome-webfont.eot?v=1.0.10',
       '/assets/fonts/forkawesome-webfont.svg?v=1.0.10',
       '/assets/fonts/forkawesome-webfont.woff?v=1.0.10',
       '/assets/fonts/forkawesome-webfont.woff2?v=1.0.10',
       'https://code.jquery.com/jquery-3.2.1.slim.min.js',
       '/assets/js/popper.min.js',
       '/assets/js/bootstrap.min.js',
       '/assets/js/init.js'
     ]);
   })
 );
});
self.addEventListener('fetch', function(event) {
    //console.log(event.request.url);
        event.respondWith(
            caches.match(event.request).then(function(response) {
            return response || fetch(event.request);
        })
    );
});