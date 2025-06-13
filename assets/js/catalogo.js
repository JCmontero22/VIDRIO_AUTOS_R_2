var myModal;

    function init() {
        listarProductos();

        myModal = new bootstrap.Modal(document.getElementById('staticBackdrop'));
        $("#btnCatalogo").hide();

        document.addEventListener("DOMContentLoaded", function () {
            menuHamburguesa();
        });
    }

    function menuHamburguesa() {
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.navbar__nav');
        const navItems = document.querySelectorAll('.navbar__item a');

        if (!hamburger || !navLinks) return;

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('activado');
        });

        navItems.forEach(item => {
            item.addEventListener('click', () => {
                navLinks.classList.remove('activado');
            });
        });
    }

    function listarProductos() {
        $.ajax({
            'method': 'GET',
            'url': './ajax/productosAjax.php',
            'dataType': 'json',
            'data': {'accion': 1},
            'success': function(response){
                if (response.status == 200) {
                    cargarDataTable(response.data);
                }else{
                    console.error('Error al cargar los productos:', response.message);
                }
            }
        });
    }

    function cargarDataTable(data) {
        $("#datosUsuario").DataTable({
            destroy: true,
            responsive: true,
            data: data,
            columns: [
                {data: "id",
                    createdCell: function (td) {
                        $(td).addClass('col-desktop');
                    }
                },
                {data: "nombre",
                    createdCell: function (td) {
                        $(td).addClass('col-desktop-2');
                    }
                },
                {data: "descripcion",
                    createdCell: function (td) {
                        $(td).addClass('col-desktop');
                    }
                },            
                {data: "marca"},
                {data: "modelo"},
                {data: "precio",
                    render: function(data, type, row) {
                    return `$ ${separarMiles(data)}`;
        }
                },
                {data: "cantidad", 
                    createdCell: function (td) {
                        $(td).addClass('col-desktop-2');
                    }
                },
                /* {data: "imagen", createdCell: function (td) {
                        $(td).addClass('col-desktop');
                    }}, */
                {data: "imagen",
                    render: function(data, type, row) {
                    return `<img src="./assets/img/productos/${row.imagen}" alt="Imagen" width="80" height="50">`;
                    },createdCell: function (td) {
                        $(td).addClass('col-desktop');
                    }
                },
                {data: null,
                    className: "text-center",
                    render: function(data, type, row) {
                        return `
                            <button class="btn btn-primary btn-sm" onclick="modalInfo(${row.id})"> <i class="fa-solid fa-magnifying-glass"></i> </button>
                        `;
                    }
                }
            ],
            order: [[0, "asc"]],
            language: {
                "processing": "Procesando...",
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "emptyTable": "No hay datos disponibles en la tabla",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "search": "Buscar:",
                "paginate": {
                    "first": "Primero",
                    "last": "Último",
                    "next": "Siguiente",
                    "previous": "Anterior"
                },
                "loadingRecords": "Cargando...",
                "aria": {
                    "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
                
        });
    }

    function modalInfo(id) {
        myModal.show();
        consultaProducto(id);
    }


    function consultaProducto(id) {
        $.ajax({
            'method': 'GET',
            'url': './ajax/productosAjax.php',
            'dataType': 'json',
            'data': {'accion': 2, 'id_producto': id},
            'success': function(response){
                if (response.status == 200) {
                    var producto = response.data;
                    $('#id_producto').val(producto.id);
                    $('#nombreProducto').html('Producto: ' + producto.nombre_producto);
                    $('#descripcionProducto').html(producto.descripcion_producto);
                    $('#marcaProducto').html('Marca: ' + producto.marca_producto);
                    $('#precioProducto').html('$' +  separarMiles(producto.precio_producto));
                    $('#modeloProducto').html('Modelo: ' + producto.modelo_producto);
                    $('#cantidadDisponibleProducto').html('Disponible: ' + producto.cantidad_producto);
                    $('#imagenProducto').attr('src', './assets/img/productos/' + producto.imagen_producto);
                }else{
                    console.error('Error al cargar los productos:', response.message);
                }
            }
        });
    }

    function separarMiles(numero) {
    return numero.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }


    function whatsapp(event) {
        event.stopPropagation(); // Evita que se dispare voltearTarjeta
        const phoneNumber = '573177116506';
        const message = encodeURIComponent('Hola Fernando, te contacto desde tu pagina web Vidrio Autos R. Me gustaría saber más sobre tus servicios.');
        window.open(`https://wa.me/${phoneNumber}?text=${message}`, '_blank');
    }

init();