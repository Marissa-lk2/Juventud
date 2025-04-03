document.addEventListener("DOMContentLoaded", function () {
    let calendario = document.getElementById("calendario");
    let mesActual = document.getElementById("mes-actual");
    let btnAnterior = document.getElementById("anterior");
    let btnSiguiente = document.getElementById("siguiente");

    let fecha = new Date();
    let mes = fecha.getMonth();
    let año = fecha.getFullYear();

    const nombresMeses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

    function generarCalendario() {
        mesActual.textContent = `${nombresMeses[mes]} ${año}`;
        let diasMes = new Date(año, mes + 1, 0).getDate();
        let primerDia = new Date(año, mes, 1).getDay();

        fetch(`../../dev/controller/CrudEventos/eventos.php?mes=${mes + 1}&año=${año}`)
            .then(response => response.json())
            .then(eventos => {
                let diasConEventos = eventos.map(evento => evento.fecha); // Lista de fechas con eventos
                
                let tabla = "<table>";
                tabla += "<tr><th>Dom</th><th>Lun</th><th>Mar</th><th>Mié</th><th>Jue</th><th>Vie</th><th>Sáb</th></tr>";
                tabla += "<tr>";

                for (let i = 0; i < primerDia; i++) {
                    tabla += "<td></td>";
                }

                for (let dia = 1; dia <= diasMes; dia++) {
                    let fechaStr = `${año}-${(mes + 1).toString().padStart(2, '0')}-${dia.toString().padStart(2, '0')}`;
                    let claseDia = diasConEventos.includes(fechaStr) ? "dia dia-evento" : "dia";

                    if ((primerDia + dia - 1) % 7 === 0) {
                        tabla += "</tr><tr>";
                    }

                    tabla += `<td class="${claseDia}" data-fecha="${fechaStr}">${dia}</td>`;
                }

                tabla += "</tr></table>";
                calendario.innerHTML = tabla;

                document.querySelectorAll(".dia").forEach((td) => {
                    td.addEventListener("click", function () {
                        document.querySelectorAll(".dia").forEach((el) => el.classList.remove("dia-seleccionado"));
                        this.classList.add("dia-seleccionado");
                        cargarEventos(this.dataset.fecha);
                    });
                });
            })
            .catch(error => console.error("Error al obtener eventos:", error));
    }

    btnAnterior.addEventListener("click", function () {
        mes--;
        if (mes < 0) {
            mes = 11;
            año--;
        }
        generarCalendario();
    });

    btnSiguiente.addEventListener("click", function () {
        mes++;
        if (mes > 11) {
            mes = 0;
            año++;
        }
        generarCalendario();
    });

    function cargarEventos(fecha) {
        document.getElementById("fecha-seleccionada").textContent = `Eventos programados para: ${fecha}`;

        fetch(`../../dev/controller/CrudEventos/eventos.php?fecha=${fecha}`)
            .then(response => response.json())
            .then(data => {
                let tablaEventos = document.getElementById("tabla-eventos");
                tablaEventos.innerHTML = "";

                if (data.length > 0) {
                    data.forEach(evento => {
                        let fila = document.createElement("tr");
                        fila.innerHTML = `<td>${evento.hora}</td><td>${evento.titulo}</td><td>${evento.descripcion}</td>`;
                        tablaEventos.appendChild(fila);
                    });
                } else {
                    tablaEventos.innerHTML = "<tr><td colspan='3'>No hay eventos</td></tr>";
                }
            })
            .catch(error => console.error("Error al obtener eventos:", error));
    }

    generarCalendario();
});
