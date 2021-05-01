var boton = document.querySelector('.productosmm');
var modal = document.querySelector('.modal-con');
var cerrar = document.querySelector('.cerrar');

boton.addEventListener('click', function(){
    modal.classList.add('bg-active');
});

cerrar.addEventListener('click', function(){
    modal.classList.remove('bg-active');
});