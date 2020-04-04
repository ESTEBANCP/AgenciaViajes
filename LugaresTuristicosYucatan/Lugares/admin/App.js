// Comentario Constructor
class Comentario {
    constructor(name, year) {
        this.name = name;
        this.year = year;
    }
}

// UI Constructor
class UI {
    addComentario(comentario) {
        const comentarioList = document.getElementById('comentario-list');
        const element = document.createElement('div');
        element.innerHTML = `
            <div class="card text-center mb-4">
                <div class="card-body">
                    <strong>Comentario</strong>: ${comentario.name} -
                    <strong>Año de publicación</strong>: ${comentario.year}
                    <a href="#" class="btn btn-danger" name="delete">Eliminar</a>
                </div>
            </div>
        `;
        comentarioList.appendChild(element);
    }

    resetForm() {
        document.getElementById('comentario-form').reset();
    }

    deleteComentario(element) {
        if (element.name === 'delete') {
            element.parentElement.parentElement.remove();
            this.showMessage('Comentario Eliminado con éxito', 'success');
        }
    }

    showMessage(message, cssClass) {
        const div = document.createElement('div');
        div.className = `alert alert-${cssClass} mt-2`;
        div.appendChild(document.createTextNode(message));
        // Mostrar en el DOM
        const container = document.querySelector('.container');
        const app = document.querySelector('#App');
        // Insertar mensaje en la interfaz de usuario
        container.insertBefore(div, app);
        // Eliminar el mensaje después de 3 segundos
        setTimeout(function () {
            document.querySelector('.alert').remove();
        }, 3000);
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
        if (name === '' || year === '') {
            ui.showMessage('Please Insert data in all fields', 'danger');
        }

        // Guardar Comentario
        ui.addComentario(comentario);
        ui.showMessage('Comentario Agregado exitosamente', 'success');
        ui.resetForm();

        e.preventDefault();
    });

document.getElementById('comentario-list')
    .addEventListener('click', function (e) {
        const ui = new UI();
        ui.deleteComentario(e.target);
        e.preventDefault();
    });