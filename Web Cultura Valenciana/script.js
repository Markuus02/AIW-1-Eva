// Botón para mostrar el contenido
document.getElementById("mostrar_mas").addEventListener("click", () => {
  document.getElementById("mostrar_mas").style.display = "none";
  document.getElementById("contenido").style.display = "block";
});

// Galería de imágenes
const imagenes = [
  "img/artes_ciencias.jpg",
  "img/miguelete.jpg",
  "img/serrano.jpg",
  "img/virgen.jpg"
];

document.getElementById("otra_imagen").addEventListener("click", () => {
  const aleatoria = imagenes[Math.floor(Math.random() * imagenes.length)];
  document.getElementById("imagen_galeria").src = aleatoria;
});

// Frases típicas valencianas
const frases = [
  "A la fresca!",
  "Xe, que bo!",
  "Anem a fer un mosset.",
  "Estic fart de caldo!",
  "Això està de categoria!"
];

document.getElementById("otra_cita").addEventListener("click", () => {
  const aleatoria = frases[Math.floor(Math.random() * frases.length)];
  document.getElementById("cita").innerText = `"${aleatoria}"`;
});
