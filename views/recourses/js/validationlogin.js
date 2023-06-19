const email = document.getElementById('email');
const password = document.getElementById('password');
const btn = document.getElementById('ingresar');

email.addEventListener('click', e => document.querySelector('.warning-email').classList.add('hidden'))
btn.addEventListener('click', e=> {

    if (email.value.length <= 0) {
        e.preventDefault();
        document.querySelector('.warning-email').classList.remove('hidden')
    }
    
    if (password.value.length <= 0) {
        e.preventDefault();
        document.querySelector('.warning-password').classList.remove('hidden')
        password.addEventListener('click', e => document.querySelector('.warning-password').classList.add('hidden'));
    }

    else if (password.value.length <= 7) {
        e.preventDefault();
        document.querySelector('.warning-password-min').classList.remove('hidden')
        password.addEventListener('click', e => document.querySelector('.warning-password-min').classList.add('hidden'));
    }
});

document.addEventListener( 'keydown', e=> {
    var mayus = e.getModifierState && e.getModifierState( 'CapsLock' );
    console.log( mayus );
    if(mayus) {
        document.querySelector('.mayus-active').classList.remove('hidden')
    } else {
        document.querySelector('.mayus-active').classList.add('hidden')
    }
    
  });

  let boton = document.getElementById("boton");
  let input =document.getElementById("password");

      boton.addEventListener("click", mostrarContrasena);

      function mostrarContrasena(){
          if (input.type == "password") {
          input.type = "text";
          boton.src = "./views/recourses/icons/low-vision.svg";
                    
          } else {
              input.type == "text";
              input.type = "password";
              boton.src = "./views/recourses/icons/show.svg";
          }
      }