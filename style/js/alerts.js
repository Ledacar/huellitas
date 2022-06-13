$("#ash").click(function(e){
    e.preventDefault();
    Swal.fire({
        title: '<strong>Ashly <u>Ramos</u></strong>',
        icon: 'info',
        html:
          'Hola, soy Ashly. Adoro mucho a los cachorros mi pasión es velar siempre por su seguridad <b>Siempre a la disposición de tu mascota.</b> ' +
          '<a style="cursor: pointer;" href="https://www.instagram.com/yarainsty/">Instagram</a> ',
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: true,
        confirmButtonText:
          '<i class="fa fa-thumbs-up"></i> Estupend@!',
        confirmButtonAriaLabel: 'Thumbs up, great!',
        cancelButtonText:
          '<i class="fa fa-thumbs-down"></i>',
        cancelButtonAriaLabel: 'Thumbs down'
      })
  });

$("#gab").click(function(e){
e.preventDefault();
Swal.fire({
    title: '<strong>Gabriela <u>Valverde</u></strong>',
    icon: 'info',
    html:
        'Soy Gabriela me gustan los españoles y soy bien suicida FUMO? <b>Amo los animales y dare lo mejor por ellos.</b> ' +
        '<a style="cursor: pointer;" href="https://www.instagram.com/gabb_v_/">Instagram</a> ',
    showCloseButton: true,
    showCancelButton: true,
    focusConfirm: true,
    confirmButtonText:
        '<i class="fa fa-thumbs-up"></i> Estupend@!',
    confirmButtonAriaLabel: 'Thumbs up, great!',
    cancelButtonText:
        '<i class="fa fa-thumbs-down"></i>',
    cancelButtonAriaLabel: 'Thumbs down'
    })
});

$("#jos").click(function(e){
e.preventDefault();
Swal.fire({
    title: '<strong>Josias <u>Nicaragua</u></strong>',
    icon: 'info',
    html:
        'Mi nombre es Josias adoro jugar y cuidar animales y más si son perros :D <b>Tu veterinario de confiaza.</b> ' +
        '<a style="cursor: pointer;" href="https://www.instagram.com/josias_nicaragua/">Instagram</a> ',
    showCloseButton: true,
    showCancelButton: true,
    focusConfirm: true,
    confirmButtonText:
        '<i class="fa fa-thumbs-up"></i> Estupend@!',
    confirmButtonAriaLabel: 'Thumbs up, great!',
    cancelButtonText:
        '<i class="fa fa-thumbs-down"></i>',
    cancelButtonAriaLabel: 'Thumbs down'
    })
});

  $("#na").click(function(e){
    e.preventDefault();
    Swal.fire({
        title: '<strong>Nayely <u>Martinica</u></strong>',
        icon: 'info',
        html:
          'Hola soy Nayely, me gusta mucho la comida y cocacola, tambien cuidar a las de los animalitos y que siempre esten bien <b>Dare lo mejor por ellos.</b> ' +
          '<a style="cursor: pointer;" href="https://www.instagram.com/martinica_03/">Instagram</a> ',
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: true,
        confirmButtonText:
          '<i class="fa fa-thumbs-up"></i> Estupend@!',
        confirmButtonAriaLabel: 'Thumbs up, great!',
        cancelButtonText:
          '<i class="fa fa-thumbs-down"></i>',
        cancelButtonAriaLabel: 'Thumbs down'
      })
  });

  $("#ric").click(function(e){
    e.preventDefault();
    Swal.fire({
        title: '<strong>Ricarto <u>Rodriguez</u></strong>',
        icon: 'info',
        html:
          'Hola soy Ricardo, veterinario de huellitas, soy amante a los animales, me gusta el futbol, videos juegos y salir en los ratos libres. <b>Jamas descuidaria a una mascota.</b> ' +
          '<a style="cursor: pointer;" href="https://www.instagram.com/rodriquez8671/">Instagram</a> ',
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: true,
        confirmButtonText:
          '<i class="fa fa-thumbs-up"></i> Estupend@!',
        confirmButtonAriaLabel: 'Thumbs up, great!',
        cancelButtonText:
          '<i class="fa fa-thumbs-down"></i>',
        cancelButtonAriaLabel: 'Thumbs down'
      })
  });



  // ====== Validaciones ======

  function validarEntero(valor){
   valor = parseInt(valor)
    if (isNaN(valor)) {
          return ""
    }else{
          return valor
    }
}

function pruebaemail (valor){
	re=/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/
	if(!re.exec(valor)){
		return "";
	}else{
    return valor;
  }
  
	}

function validarFormatoFecha(campo) {
  var RegExPattern = /^\d{1,2}\/\d{1,2}\/\d{2,4}$/;
  if ((campo.match(RegExPattern)) && (campo!='')) {
        return "";
  } else {
        return campo;
  }
}

function validarFechaMenorActual(date){
  var x=new Date();
  var fecha = date.split("/");
  x.setFullYear(fecha[2],fecha[1]-1,fecha[0]);
  var today = new Date();

  if (x <= today)
    return "";
  else
    return date;
}

// ======== Validaciones form ========
  const veri_session = (event) => {
    Swal.showLoading();
    event.preventDefault();
    var nombrepa = document.getElementById('nombrepa').value;
    var nombrema = document.getElementById('mascota').value;
    var edad = document.getElementById('edad').value;
    edad = validarEntero(edad)
    var edad = document.getElementById('edad').value = edad;
    var raza = document.getElementById('raza').value;
    var motivo = document.getElementById('motivo').value;
    var fecha = document.getElementById('fecha').value;
    fecha = validarFormatoFecha(fecha)
    var fecha = document.getElementById('fecha').value = fecha
    if (nombrepa == '' || nombrema == '' || edad == '' || raza == '' || motivo == '' || fecha == ''){    
        Swal.fire({
          icon: 'warning',
          title: 'Ocurrio un error',
          html: 
          'Revisa los campos del formulario. <b> Asegurate de llenar los campos bien.</b>' ,
          showConfirmButton: false,
          timer: 4000,
          timerProgressBar: true,
      });
    }
    else{  
        Swal.fire({
          icon: 'success',
          title: 'Su cita se agendo con exito!',
          showConfirmButton: false,
          timer: 2000,
          timerProgressBar: true,
      });
    var nombrepa = document.getElementById('nombrepa').value = '';
    var nombrema = document.getElementById('mascota').value = '';
    var edad = document.getElementById('edad').value = '';
    var raza = document.getElementById('raza').value = '';
    var motivo = document.getElementById('motivo').value = '';
    var fecha = document.getElementById('fecha').value = '';
    }
  }

    const veri_correo = (event) => {
      Swal.showLoading();
      event.preventDefault();
      var nombre = document.getElementById('nombre').value;
      var correo = document.getElementById('correo').value;
      correo = pruebaemail(correo)
      var correo = document.getElementById('correo').value = correo;
      var sujeto = document.getElementById('sujeto').value;
      var mensaje = document.getElementById('mensaje').value;
      if (nombre == '' || correo == '' || sujeto == '' || mensaje == ''){    
          Swal.fire({
            icon: 'warning',
            title: 'Ocurrio un error',
            html: 
            'Revisa los campos del formulario. <b> Asegurate de llenar los campos bien.</b>' ,
            showConfirmButton: false,
            timer: 4000,
            timerProgressBar: true,
        });
      }
      else{  
          Swal.fire({
            icon: 'success',
            title: 'Su mensaje se envio con exito!',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
        });
      var nombre = document.getElementById('nombre').value = '';
      var correo = document.getElementById('correo').value = '';
      var sujeto = document.getElementById('sujeto').value = '';
      var mensaje = document.getElementById('mensaje').value = '';
      }
  }




  // ====== Validacion recat 

  function onSubmit(token) {
    document.getElementById("aa").submit();
  }

  function onSubmit(token) {
    document.getElementById("mens").submit();
  }
