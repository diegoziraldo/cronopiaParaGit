const select = document.querySelector('#select');
const opciones = document.querySelector('#opciones');
const contenidoSelect = document.querySelector('#select .contenido-select');
const hiddenInput = document.querySelector('#inputSelect')


document.querySelectorAll('#opciones > .opcion').forEach((opcion)=>{
    opcion.addEventListener('click',(e)=>{
        e.preventDefault();
        select.classList.toggle('active')
        opciones.classList.toggle('active')
        hiddenInput.value = e.currentTarget.querySelector('name');
 
    });
});


select.addEventListener('click',()=>{
    select.classList.toggle('active');
    opciones.classList.toggle('active');
});

