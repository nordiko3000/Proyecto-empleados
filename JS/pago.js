document.addEventListener('DOMContentLoaded', function () {
  
  const formulario = document.getElementById('formulario');

formulario.addEventListener('submit', function (event) {
  event.preventDefault();

  const horaEntrada = document.getElementById('hora_entrada').value;
  const horaSalida = document.getElementById('hora_salida').value;
  const pagoHora = parseFloat(document.getElementById('pago_hora').value);
  const pagoHoraExtra = parseFloat(document.getElementById('horas_extra').value);
  const bonificacion = parseFloat(document.getElementById('bonificacion').value || 0);
  const deduccionesExtra = parseFloat(document.getElementById('deduccion').value || 0);

  const horasTrabajadas = calcularHorasTrabajadas(horaEntrada, horaSalida);
  const salarioSemanal = calcularSalarioSemanal(horasTrabajadas, pagoHora, pagoHoraExtra, deduccionesExtra, bonificacion);
  const salarioAnual = calcularSalarioAnual(salarioSemanal);

  document.getElementById('salario_semanal').value = salarioSemanal.toFixed(2);
  document.getElementById('salario_anual').value = salarioAnual.toFixed(2);
  
});

function calcularHorasTrabajadas(horaEntrada, horaSalida) {
  const entrada = new Date('2000-01-01T' + horaEntrada + ':00');
  const salida = new Date('2000-01-01T' + horaSalida + ':00');

  const milisegundos = salida - entrada;
  const segundos = Math.round(milisegundos / 1000);
  const minutos = Math.round(segundos / 60);
  const horas = Math.floor(minutos / 60);
  const minutosRestantes = minutos % 60;

  return horas + ':' + minutosRestantes;
}

function calcularSalarioSemanal(horasTrabajadas, pagoHora, pagoHoraExtra, deduccionesExtra, bonificacion) {
  const [horas, minutos] = horasTrabajadas.split(':');
  let salarioSemanal = 0;

  if (horas < 8) {
    salarioSemanal = (pagoHora * horas);
  } else {
    const horasExtras = horas - 8;
    const salarioHorasExtras = pagoHoraExtra * horasExtras;
    salarioSemanal = (pagoHora * 8) + salarioHorasExtras;
  }

  salarioSemanal = salarioSemanal - deduccionesExtra + bonificacion;
  return salarioSemanal;
}

function calcularSalarioAnual(salarioSemanal) {
  const semanasEnUnAnio = 52;
  return salarioSemanal * semanasEnUnAnio;
}
    
$.ajax({
  url: "../paginas/php/pago.php",
  type: "GET",
  data: { id: id },
  success: function(data) {
    var dato = data;
    // Aquí puedes hacer lo que quieras con el dato recuperado
  },
  error: function() {
    alert("Error al recuperar el dato");
  }
});


 
});
  
    
    
    
    
    
    
