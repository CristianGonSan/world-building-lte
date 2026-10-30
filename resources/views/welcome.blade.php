@extends('adminlte::page')

@section('title', 'Panel de prueba')

@section('content_header')
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-2">
        <div>
            <h1 class="mb-1">Panel de prueba</h1>
            <p class="text-body-secondary mb-0">Vista de muestra para comprobar los recursos de AdminLTE 4 y Vite.</p>
        </div>
        <div class="d-flex gap-2">
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#viteTestModal">
                <i class="bi bi-check2-circle me-1" aria-hidden="true"></i>
                Probar Bootstrap
            </button>
            <button class="btn btn-outline-primary" type="button" id="sweetalert-test">
                <i class="bi bi-bell me-1" aria-hidden="true"></i>
                Probar SweetAlert2
            </button>
        </div>
    </div>
@stop

@section('js')
    <script>
        document.getElementById('sweetalert-test').addEventListener('click', () => {
            window.Swal.fire({
                title: 'SweetAlert2 funciona',
                text: 'El paquete está cargado desde el bundle de Vite.',
                icon: 'success',
                confirmButtonText: '¡Genial!',
            });
        });
    </script>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-6 col-xl-3">
            <div class="small-box text-bg-primary">
                <div class="inner">
                    <h3>128</h3>
                    <p>Elementos del mundo</p>
                </div>
                <i class="small-box-icon bi bi-globe-americas" aria-hidden="true"></i>
                <span class="small-box-footer">Datos de ejemplo</span>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="small-box text-bg-success">
                <div class="inner">
                    <h3>24</h3>
                    <p>Personajes</p>
                </div>
                <i class="small-box-icon bi bi-people" aria-hidden="true"></i>
                <span class="small-box-footer">Datos de ejemplo</span>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="small-box text-bg-warning">
                <div class="inner">
                    <h3>8</h3>
                    <p>Lugares por explorar</p>
                </div>
                <i class="small-box-icon bi bi-map" aria-hidden="true"></i>
                <span class="small-box-footer">Datos de ejemplo</span>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="small-box text-bg-danger">
                <div class="inner">
                    <h3>3</h3>
                    <p>Alertas pendientes</p>
                </div>
                <i class="small-box-icon bi bi-exclamation-triangle" aria-hidden="true"></i>
                <span class="small-box-footer">Datos de ejemplo</span>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-7">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="bi bi-clock-history me-1" aria-hidden="true"></i>
                        Actividad reciente
                    </h3>
                    <div class="card-tools">
                        <span class="badge text-bg-primary">Actualizado</span>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped align-middle mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Elemento</th>
                                    <th scope="col">Categoría</th>
                                    <th scope="col">Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><i class="bi bi-person me-2 text-primary" aria-hidden="true"></i>Aria Veld</td>
                                    <td>Personaje</td>
                                    <td><span class="badge text-bg-success">Publicado</span></td>
                                </tr>
                                <tr>
                                    <td><i class="bi bi-geo-alt me-2 text-danger" aria-hidden="true"></i>Puerto de Niebla</td>
                                    <td>Ubicación</td>
                                    <td><span class="badge text-bg-warning">Borrador</span></td>
                                </tr>
                                <tr>
                                    <td><i class="bi bi-book me-2 text-info" aria-hidden="true"></i>La primera era</td>
                                    <td>Historia</td>
                                    <td><span class="badge text-bg-success">Publicado</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-body-secondary">
                    <i class="bi bi-info-circle me-1" aria-hidden="true"></i>
                    Tabla, colores, iconos y estilos de tarjetas de AdminLTE.
                </div>
            </div>
        </div>

        <div class="col-lg-5">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="bi bi-palette me-1" aria-hidden="true"></i>
                        Recursos visuales
                    </h3>
                </div>
                <div class="card-body">
                    <p>Si ves esta página con tipografía, iconos, tarjetas y colores, el CSS de Vite está cargado.</p>

                    <p class="mb-2">Progreso de exploración <span class="float-end"><b>70</b>%</span></p>
                    <div class="progress mb-3" role="progressbar" aria-label="Progreso de exploración" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-success" style="width: 70%"></div>
                    </div>

                    <div class="alert alert-info mb-0" role="alert">
                        <i class="bi bi-lightbulb me-1" aria-hidden="true"></i>
                        Pulsa «Probar Bootstrap» para verificar también el JavaScript.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="viteTestModal" tabindex="-1" aria-labelledby="viteTestModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title fs-5" id="viteTestModalLabel">
                        <i class="bi bi-check-circle text-success me-1" aria-hidden="true"></i>
                        Bootstrap está funcionando
                    </h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    Este diálogo se abre con el JavaScript de Bootstrap incluido en el bundle de Vite.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
@stop
