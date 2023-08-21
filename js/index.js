window.addEventListener('load', () => {
    registerSW();
});

async function registerSW() {
  if("serviceWorker" in navigator){
    navigator.serviceWorker.register("service_worker.js").then(registration=>{
      console.log("SW Registered!");
    }).catch(error=>{
      console.log("SW Registration Failed");
    });
  }else{
    console.log("Not supported");
  }
}