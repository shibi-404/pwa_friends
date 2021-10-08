if("serviceWorker" in navigator){
    navigator.serviceWorker.register('serviceWorker.js').then(function(event){
        console.log("Service Worker Installed......");
    }).catch(function(event){
        console.log("Service Worker Not Installed.......");
    });
}