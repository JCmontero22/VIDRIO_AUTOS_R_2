<?php require 'includes/header.php'; ?>
<?php require 'includes/cabesera.php'; ?>

<div class="main">
    <h3 class="text-center titulos-main">Catálogo de Productos</h3>

    <div class="catalogo">
        <table id="datosUsuario" class="table table-striped mt-5 table-bordered table-hover">
            <thead>
                <tr>
                    <th class="col-desktop">ID</th>
                    <th class="col-desktop-2">Nombre</th>
                    <th class="col-desktop">Descripción</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Precio</th>
                    <th class="col-desktop-2">Cantidad</th>
                    <th class="col-desktop">Imagen</th>
                    <!-- <th class="col-desktop">Estado</th> -->
                    <th>Ver</th>
                </tr>
            </thead>
            <tbody>
                <!-- Los datos se cargarán aquí mediante AJAX -->
            </tbody>
        </table>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="staticBackdropLabel">Detalle producto</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"  style="padding: 2rem">
                <div class="card">
                    <div class="position-relative bg-secondary">
                        <img src="" class="card-img-top" alt="Imagen del producto" id="imagenProducto">
                        <span class="position-absolute top-0 end-0 bg-success text-white badge rounded-pill m-2" id="cantidadDisponibleProducto"></span>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2" style="width: 100%;">
                            <span class="badge bg-primary" id="marcaProducto" style="font-size: 1.4rem;">Marca</span>
                            <small class="text-muted" id="modeloProducto" style="font-size: 1.4rem;">Modelo</small>
                        </div>
                        <h5 class="card-title mt-5 tituloModalCard" id="nombreProducto" style="font-size: 2rem;"></h5>
                        <p class="card-text textoModalCard" id="descripcionProducto" style="font-size: 1.6rem;">Descripción breve del producto y sus características principales.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="card-text fw-bold" id="precioProducto">$59.99</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<a class="whatsapp-float" target="_blank" title="Chatea con nosotros por WhatsApp" onclick="whatsapp(event)">
    <i class="fab fa-whatsapp"></i>
</a>

<?php require 'includes/footer.php'; ?>

<script src="./assets/js/catalogo.js"></script>

</body>