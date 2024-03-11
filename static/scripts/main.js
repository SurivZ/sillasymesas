// Lightbox
const imagenes = document.querySelectorAll(".img-galeria");
const imagenLight = document.querySelector(".agregar-imagen");
const contenedorLight = document.querySelector(".imagen-light");
const closeLight = document.querySelector(".close");

imagenes.forEach((imagen) => {
  imagen.addEventListener("click", () => {
    aparecerImagen(imagen.getAttribute("src"));
  });
});
contenedorLight.addEventListener("click", (e) => {
  if (e.target !== imagenLight) {
    contenedorLight.classList.toggle("show");
    imagenLight.classList.toggle("showImage");
    hamburguer.style.opacity = "1";
  }
});
const aparecerImagen = (imagen) => {
  imagenLight.src = imagen;
  contenedorLight.classList.toggle("show");
  imagenLight.classList.toggle("showImage");
  hamburguer.style.opacity = "0";
};
// Menú
const hamburguer = document.querySelector(".hamburguer");
const menu = document.querySelector(".menu-navegacion");

hamburguer.addEventListener("click", () => {
  console.log("abrir");
  menu.classList.toggle("spread");
});

window.addEventListener("click", (e) => {
  if (
    menu.classList.contains("spread") &&
    e.target != menu &&
    e.target != hamburguer
  ) {
    console.log("cerrar");
    menu.classList.toggle("spread");
  }
});
