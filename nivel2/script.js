function verificar(respuesta) {
    const correcta = "visibilidad";
    const resultado = document.getElementById("resultado");
  
    if (respuesta === correcta) {
      resultado.textContent = "¡Correcto! El sistema no muestra si la acción fue exitosa.";
      resultado.style.color = "green";
    } else {
      resultado.textContent = "¡Incorrecto! Intenta de nuevo.";
      resultado.style.color = "red";
    }
  }
  