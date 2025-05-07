let coloresSeleccionados = [];

function allowDrop(ev) {
    ev.preventDefault();
}

function dropColor(ev) {
    const color = ev.dataTransfer.getData("text/plain") || ev.target.dataset.color;
    if (!color) return;

    coloresSeleccionados.push(color.trim().toLowerCase());


    if (coloresSeleccionados.length === 1) {
        // Mostrar el color directamente si solo hay uno
        document.getElementById("color-mezclado").style.backgroundColor = color;
        document.getElementById("resultado").querySelector("p").textContent = `Has añadido el color ${color}`;
    }

    if (coloresSeleccionados.length === 2) {
        const resultado = obtenerMezcla(coloresSeleccionados[0], coloresSeleccionados[1]);
        document.getElementById("color-mezclado").style.backgroundColor = resultado.color;
        document.getElementById("resultado").querySelector("p").textContent = `¡Has creado el color ${resultado.nombre}!`;
        coloresSeleccionados = [];
    }
}

document.querySelectorAll('.color').forEach(el => {
    el.addEventListener('dragstart', function(ev) {
        ev.dataTransfer.setData("text/plain", ev.target.dataset.color);
    });
});

function obtenerMezcla(color1, color2) {
    const combinaciones = {
        "rojo+azul": { color: "purple", nombre: "morado" },
        "azul+rojo": { color: "purple", nombre: "morado" },
        "rojo+amarillo": { color: "orange", nombre: "naranja" },
        "amarillo+rojo": { color: "orange", nombre: "naranja" },
        "azul+amarillo": { color: "green", nombre: "verde" },
        "amarillo+azul": { color: "green", nombre: "verde" },
        "rojo+blanco": { color: "pink", nombre: "rosado" },
        "blanco+rojo": { color: "pink", nombre: "rosado" },
        "azul+blanco": { color: "lightblue", nombre: "celeste" },
        "blanco+azul": { color: "lightblue", nombre: "celeste" },
        "negro+blanco": { color: "gray", nombre: "gris" },
        "blanco+negro": { color: "gray", nombre: "gris" },
        "rojo+negro": { color: "#8B0000", nombre: "burdeo" },
        "negro+rojo": { color: "#8B0000", nombre: "burdeo" },
        "azul+negro": { color: "#00008B", nombre: "azul marino" },
        "negro+azul": { color: "#00008B", nombre: "azul marino" },
        "amarillo+negro": { color: "#808000", nombre: "oliva" },
        "negro+amarillo": { color: "#808000", nombre: "oliva" }
    };

    const key = color1 + "+" + color2;
    return combinaciones[key] || {
        color: "gray",
        nombre: `desconocido (no definido)`
    };
}
