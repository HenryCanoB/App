        <div class="container-fluid">
            <div class="row" id="Lista">
                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header">
                            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ol class="breadcrumb mb-1 ps-2">
                                    <li class="breadcrumb-item text-primary">Home</li>
                                    <li class="breadcrumb-item text-primary active" aria-current="page">Usuarios</li>
                                </ol>
                            </nav>
                        </div>
                        <!--- <div class="card-body pL-2 pr-2">-->
                        <div class="card-body">
                            <div class="table-responsive" style="font-size: 11px;">
                                <table id="tUsuario" class="display compact order-column form-control-sm" style="width:98%;">
                                    <thead>
                                        <tr>
                                            <th style="width: 5%; text-align:center;">
                                                N°
                                            </th>
                                            <th style="width: 13%; text-align:center;">
                                                DNI
                                            </th>
                                            <th style="width: 50%; text-align:center;">
                                                Apellidos y nombres
                                            </th>
                                            <th style="width: 20%; text-align:center;">
                                                Usuario
                                            </th>
                                            <th style="width: 10%; text-align:center;">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbUsuario">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mantenimiento -->
            <div class="row" id="mdRegistro">
                <div class="col-xl-12 col-md-12 col-lg-12">
                    <div class="card shadow">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="card-title text-primary font-weight-bold" id="tituloMantenimiento"></h6>
                            <input type="hidden" id="identificador" name="identificador" value="">
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <!-- <form id="frmRegistro" class="needs-validation" novalidate>-->
                                    <form id="frmRegistro">
                                        <div class="form-row mb-2">
                                            <label for="txtNroDocumento" class="col-sm-3 col-form-label-sm font-weight-normal">
                                                DNI</label>
                                            <div class="col-sm-3 col-md-2">
                                                <input type="hidden" id="hdcodu" name="hdcodu" value="0">
                                                <input type="hidden" id="hdcodp" name="hdcodp" value="0">
                                                <div class="input-group">
                                                    <input type="text" id="txtNroDocumento" name="txtNroDocumento" maxlength="8" class="form-control form-control-sm" />
                                                    <div class="input-group-append">
                                                        <button type="button" id="btnBuscar" title="Buscar por DNI" class="btn btn-sm btn-primary btn-radius">
                                                            <i class="fa fa-search"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!--<div class="invalid-feedback">
                                                Ingrese Nombre
                                            </div> -->
                                            </div>
                                        </div>
                                        <div class="form-row mb-2">
                                            <label for="txtApepaterno" class="col-sm-3 col-form-label-sm font-weight-normal">
                                                Apellido Paterno</label>
                                            <div class="col-sm-3">
                                                <input type="text" id="txtApepaterno" name="txtApepaterno" maxlength="100" class="form-control form-control-sm" />
                                                <!--<div class="invalid-feedback">
                                                Ingrese Nombre
                                            </div> -->
                                            </div>
                                        </div>
                                        <div class="form-row mb-2">
                                            <label for="txtApeMaterno" class="col-sm-3 col-form-label-sm font-weight-normal">
                                                Apellido Materno</label>
                                            <div class="col-sm-3">
                                                <input type="text" id="txtApeMaterno" name="txtApeMaterno" maxlength="100" class="form-control form-control-sm" />
                                                <!--<div class="invalid-feedback">
                                                Ingrese Nombre
                                            </div> -->
                                            </div>
                                        </div>
                                        <div class="form-row mb-2">
                                            <label for="txtNombres" class="col-sm-3 col-form-label-sm font-weight-normal">
                                                Nombres</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtNombres" name="txtNombres" maxlength="100" class="form-control form-control-sm" />
                                                <!--<div class="invalid-feedback">
                                                Ingrese Nombre
                                            </div> -->
                                            </div>
                                        </div>
                                        <div class="form-row mb-2">
                                            <label for="cboSexo" class="col-sm-3 col-form-label-sm font-weight-normal">
                                                Sexo</label>
                                            <div class="col-sm-2">
                                                <select id="cboSexo" name="cboSexo" class="form-control form-control-sm selectpicker" data-live-search="true">
                                                    <option value="">[ -- Seleccione --]</option>
                                                    <option value="F">FEMENINO</option>
                                                    <option value="M">MASCULINO</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row mb-2">
                                            <label for="txtCorreo" class="col-sm-3 col-form-label-sm font-weight-normal">
                                                Correo electrónico</label>
                                            <div class="col-sm-3">
                                                <input type="text" id="txtCorreo" name="txtCorreo" maxlength="100" class="form-control form-control-sm" />
                                                <!--<div class="invalid-feedback">
                                                Ingrese Nombre
                                            </div> -->
                                            </div>
                                        </div>
                                        <div class="form-row mb-2">
                                            <label for="txtUsuario" class="col-sm-3 col-form-label-sm font-weight-normal">
                                                Usuario</label>
                                            <div class="col-sm-3 col-md-2">
                                                <input type="text" id="txtUsuario" name="txtUsuario" maxlength="20" class="form-control form-control-sm" />
                                                <!--<div class="invalid-feedback">
                                                Ingrese Nombre
                                            </div> -->
                                            </div>
                                        </div>
                                        <div class="form-row mb-2">
                                            <label for="txtContrasenia" class="col-sm-3 col-form-label-sm font-weight-normal">
                                                Contraseña</label>
                                            <div class="col-sm-3 col-md-2">
                                                <input type="password" id="txtContrasenia" name="txtContrasenia" maxlength="20" class="form-control form-control-sm" />
                                                <!--<div class="invalid-feedback">
                                                Ingrese abreviatura
                                            </div> -->
                                            </div>
                                        </div>
                                        <div class="form-row mb-2">
                                            <label for="txtConfirmaContrasenia" class="col-sm-3 col-form-label-sm font-weight-normal">
                                                Confirmar Contraseña</label>
                                            <div class="col-sm-3 col-md-2">
                                                <input type="password" id="txtConfirmaContrasenia" name="txtConfirmaContrasenia" maxlength="20" class="form-control form-control-sm" />
                                                <!--<div class="invalid-feedback">
                                                Ingrese abreviatura
                                            </div> -->
                                            </div>
                                        </div>
                                        <div style="text-align: center;" class="pt-2">
                                            <button type="button" id="btnGuardar" class="btn btn-sm btn-primary btn-radius">
                                                <i class="fa fa-save"></i>&nbsp;Guardar</button>
                                            <button type="button" id="btnCancelar" class="btn btn-sm btn-danger btn-radius">
                                                <i class="fa fa-times-circle"></i>&nbsp;Cancelar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>