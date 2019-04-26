function checkRut(rut)
{
    // Despejar Puntos
    var valor = rut.value.replace('.','');
    // Despejar Guión
    valor = valor.replace('-','');

    // Aislar Cuerpo y Dígito Verificador
    cuerpo = valor.slice(0,-1);
    dv = valor.slice(-1).toUpperCase();

    // Formatear RUN
    rut.value = cuerpo + '-'+ dv

    // Si no cumple con el mínimo ej. (n.nnn.nnn)
    if(cuerpo.length < 7) { rut.setCustomValidity("RUT Incompleto"); return false;}

    // Calcular Dígito Verificador
    suma = 0;
    multiplo = 2;

    // Para cada dígito del Cuerpo
    for(i=1;i<=cuerpo.length;i++) {

        // Obtener su Producto con el Múltiplo Correspondiente
        index = multiplo * valor.charAt(cuerpo.length - i);

        // Sumar al Contador General
        suma = suma + index;

        // Consolidar Múltiplo dentro del rango [2,7]
        if(multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }

    }

    // Calcular Dígito Verificador en base al Módulo 11
    dvEsperado = 11 - (suma % 11);

    // Casos Especiales (0 y K)
    dv = (dv == 'K')?10:dv;
    dv = (dv == 0)?11:dv;

    // Validar que el Cuerpo coincide con su Dígito Verificador
    if(dvEsperado != dv) { rut.setCustomValidity("RUT Inválido"); return false; }

    // Si todo sale bien, eliminar errores (decretar que es válido)
    rut.setCustomValidity('');
  }

  function contarcaracteres(){

  var total=200;

  setTimeout(function(){
  var valor=document.getElementById('descripcionTarea');
  var respuesta=document.getElementById('cantidad');
  var cantidad=valor.value.length;
  document.getElementById('cantidad').innerHTML = (total - cantidad) + ' caracteres';
  if(cantidad>total){
    respuesta.style.color = "red";

  }
  else {
    respuesta.style.color = "black";
  }
  },10);

}

function contarcaracteres2(){

var total=500;

setTimeout(function(){
var valor=document.getElementById('descripcionTarea');
var respuesta=document.getElementById('cantidad');
var cantidad=valor.value.length;
document.getElementById('cantidad').innerHTML = (total - cantidad) + ' caracteres';
if(cantidad>total){
  respuesta.style.color = "red";

}
else {
  respuesta.style.color = "black";
}
},10);

}

//Validar tamño fotoPerfil
$("#fotoPerfil").change(function(){
  var tamaño = this.files[0].size;
  if (tamaño > 2000000)
  {
    alert("EL tamaño maximo son 2 mb");
    this.value = '';
  }

})

// Mensaje alerta al cambia de pagina
/*window.onbeforeunload = function(event) {
    var s = "You have unsaved changes. Really leave?";

    event = event || window.event;
    if (event) {
        // This is for IE

    }

    // This is for all other browsers
    return s;
}*/

//Filtar comunas
 $(function()
    {
    $("#idRegion").on("change",function()
    {
  var idRegion = "";

    idRegion = $(this).val();


    $.post('acciones/accion_filtrar_comunas.php',{idRegion:idRegion},function(datos)
    {
      $("#idComuna").html(datos);
    });
  });
    });


    //Filtar comunas
     $(function()
        {
        $("#idRegion1").on("change",function()
        {
      var idRegion = "";

        idRegion = $(this).val();


        $.post('acciones/accion_filtrar_comunas.php',{idRegion:idRegion},function(datos)
        {
          $("#idComuna1").html(datos);
        });
      });
        });
