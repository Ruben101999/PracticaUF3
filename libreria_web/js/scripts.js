function validar() {
    email=document.getElementById('email').value;
    password=document.getElementById('password').value;
    
    if (email== '' && password== '') {
        alert('Rellena los campos "Email" y "Contrasena".');
       return false;
    }
  
    else if (email== '') {
       alert('Rellena el campo "Email".');
       return false;
    }
    
    else if (password== ''){
        alert('Rellena el campo "Contrasena".');
       return false;
    }
    else {
    return true;
    }
}


