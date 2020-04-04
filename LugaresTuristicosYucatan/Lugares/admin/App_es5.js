// Comentario Constructor
function Comentario(name, year) {
    this.name = name;
    this.year = year; 
}

// UI Constructor
function UI() {}

UI.prototype.addComentario = function(comentario) {
    const comentarioList = document.getElementById('comentario-list');
    const row = document.createElement('div');
    row.innerHTML = `
        ${comentario.name}
        ${comentario.year}
        <a href="#" class="delete">Delete</a>
    `;
    comentarioList.appendChild(row);
}

UI.prototype.resetForm = function () {
    document.getElementById('comentario-form').reset();
}

UI.prototype.showMessage = function (message, cssClass) {
    const div = document.createElement('div');
    div.className = `alert alert-${cssClass}`;
    div.appendChild(document.createTextNode(message));
    // Mostrar en el DOM
    const app = document.querySelector('#App');
    const form = document.querySelector('#comentario-form');
    // Insertar mensaje en la interfaz de usuario
    app.insertBefore(div, form);
    // Eliminar el mensaje después de 3 segundos
    setTimeout(function() {
        document.querySelector('.alert').remove();
    }, 3000);
}

UI.prototype.deleteComentario = function(element) {
    if(element.className === 'delete') {
        element.parentElement.remove();
    }
}

// DOM Events
document.getElementById('comentario-form')
    .addEventListener('submit', function (e) {

        const name = document.getElementById('name').value,
            year = document.getElementById('year').value;
        
        // Crea un nuevo Oject Comentario
        const comentario = new Comentario(name, year);

        // Crear una nueva interfaz de usuario
        const ui = new UI();

        // Validación de usuario de entrada
        if(name === ''  || year === '') {
            ui.showMessage('Please Insert data in all fields', 'danger');
        }

        // Guardar Comentario
        ui.addComentario(comentario);
        ui.showMessage('Comentario Added Successfully', 'success');
        ui.resetForm();
        
        e.preventDefault();
    });

document.getElementById('comentario-list')
    .addEventListener('click', function(e) {
        const ui = new UI();
        ui.deleteComentario(e.target);
        ui.showMessage('Comentario Deleted Succsssfully', 'success');
        e.preventDefault();
    });