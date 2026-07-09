const registrarse = document.getElementById('registrarse');
const div= document.getElementById('asd2');

    registrarse.addEventListener("submit", (e) => {
    e.preventDefault();

    let form = new FormData(registrarse);

    fetch("registrarse.php",{
        method: "POST",
        body: form
    })
    
    .then(res => res.json())
    .then(datos=>{
        console.log(datos);

    
        if (datos.exito) {
            div.innerHTML = '<h3>Agregado</h3>';

        } else {

            div.innerHTML = '<h3>Error</h3>';

        }
    })
})