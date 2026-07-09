const f = document.getElementById("f")
const div = document.getElementById("admin1")

    f.addEventListener("submit", (e) => {

    e.preventDefault();

    let form = new FormData(f)

    fetch("registrarPersonal.php", 
       {method: "post",
        body: form
})
    .then(res => res.json())
    .then(datos => {
        console.log(datos);
        if (datos.exito) {
            div.innerHTML = '<h3>Agregado</h3>';

        } else {

            div.innerHTML = '<h3>Error</h3>';

        }

    });

 });