function validar(){
  var nombres,apellidos,email,sucursal,monto,ticket;
  nombres = document.getElementById('nombres').value;
  apellidos = document.getElementById('apellidos').value;
  email = document.getElementById('email').value;
  sucursal = document.getElementById('sucursal').value;
  monto = document.getElementById('monto').value;
  ticket = document.getElementById('ticket').value;

  var expresion = /\w+@\w+\.+[a-z]/;
  if(nombres ===""||apellidos ===""||email ===""||sucursal ===""||monto ===""||ticket ===""){
    alert("Todos los campos son obligatorios")
    return false;
  }
  else if(nombres.length>20){
  alert("el nombre es muy largo");
  return false;
  }
  else if(apellidos.length>20){
  alert("el apellidos es muy largo");
  return false;
  }
  else if(email.length>30){
  alert("el email es muy largo");
  return false;
  }
  else if (!expresion.test(email)) {
    alert("el correo no es valido");
    return false;
  }
  else if(monto.length>4){
  alert("el monto es muy largo");
  return false;
}   else if(ticket.length>10){
    alert("el ticket es muy largo");
    return false;
    }
  else if(isNaN(monto)){
    alert("el monto debe ser un numero");
    return false;
       }
  else if(isNaN(monto)){
    alert("el monto debe ser un numero");
    return false;
    }
    else if (num = 1) {
    }
}
