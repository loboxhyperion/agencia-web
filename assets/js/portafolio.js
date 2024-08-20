const grid = new Muuri('.grid',{
    layout: {
        rounding: false
    }
});

//agregamos los listener de los enlaces para filtrar por categoria
window.addEventListener('load', () =>{
    grid.refreshItems().layout();//para aque refresque nuestra grid y acomode el tamaño de nuestras imagenes
    document.getElementById('grid').classList.add('imagenes-cargadas');

    //filtrado
    //accedo a todos los elances que se encuentra en el id categorias
    const enlaces = document.querySelectorAll('#categorias a');//todos los enlaces se guardan aqui
    enlaces.forEach((elemento) => {
        elemento.addEventListener('click', (evento) => {
            evento.preventDefault();
            //remuevo la clase activo de todos los enlaces para que se desmarquen
            enlaces.forEach((enlace) => enlace.classList.remove("activo"));
             //agrego la clase activo al enlace marcado
            evento.target.classList.add("activo");

            
            const categoria = evento.target.innerHTML.toLowerCase();//optiene el texto del enlace
            //si categoria es igual a todos 
            // de lo contrario trae los elementos que cumplan con la categoria
            categoria === 'todos' ? grid.filter('[data-categoria]') :  grid.filter(`[data-categoria="${categoria}"]`);
           
        })
    });
    // Agregamos el listener para la barra de busqueda
    //evento(input) por cada que escriba algo
    document.querySelector("#barra-busqueda").addEventListener('input', (evento) => {
        const busqueda = evento.target.value;//obtenemos el texto ingresado en la barra de busqueda
        grid.filter( (item) => item.getElement().dataset.etiquetas.includes(busqueda)); //accedemos  a los dataset de etiquetas

    });
});
