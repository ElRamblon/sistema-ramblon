const g = document.getElementById('g');
const div = document.getElementById('asd');

    g.addEventListener('submit', (e) => {
    e.preventDefault();

    let form = new FormData(g)

    fetch("inciar_session.php", 
       {method: "post",
        body: form
})
    .then(res => res.json())
    .then(datos => {
        console.log(datos);
         if (!datos.success) {
            div.innerHTML = `<h3>${datos.msg}</h3>`;
            return;
        }

        if (datos.rol === "adm" || datos.rol === "admin") {
            div.innerHTML = '<h3>Accedio</h3>';
        } else {
            div.innerHTML = '<h3>No accedio</h3>';
        }

    });

 });
