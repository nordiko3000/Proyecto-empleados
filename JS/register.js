const form = document.querySelector('#contactform');
const submitButton = form.querySelector('button[type="submit"]');

form.addEventListener('submit', function(event) {
  event.preventDefault();
  
  // Animación de transición
  form.classList.add('hide');
  
  // Envío del formulario (simulado)
  setTimeout(function() {
    alert('Formulario enviado!');
    form.reset();
    form.classList.remove('hide');
  }, 1000);
});