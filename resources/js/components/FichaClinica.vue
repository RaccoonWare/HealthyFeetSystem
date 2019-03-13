<template>

<div class="content">
    <div class="container-fluid">
        <div class="row" style="padding-left:40px;padding-top:10px;">
            <form class="col-12">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="nombre">Nombre(s)</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre(s)">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="apellidos">Apellidos</label>
                      <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="fecha">Fecha (Ficha Clinica)</label>
                      <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Fecha">
                    </div>
                </div>
                <div class="form-group">
                    <label for="domicilio">Domicilio</label>
                    <input type="text" class="form-control" id="domicilio" name="domicilio" placeholder="Domicilio">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="telefono">Teléfono</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Telefono">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="sexo">Sexo</label>
                        <select id="sexo" class="form-control">
                            <option selected>Seleccionar...</option>
                            <option>Hombre</option>
                            <option>Mujer</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Edad</label>
                        <input type="number" class="form-control" id="edad" name="edad" placeholder="Edad" min="0" max="100">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="ocupacion">Ocupacion</label>
                        <input type="text" class="form-control" id="ocupacion" name="ocupacion" placeholder="Ocupación">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="peso">Peso</label>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" id="peso" name="peso" placeholder="Peso" min="0" aria-label="peso" aria-describedby="peso">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Kg</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="estatura">Estatura</label>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" id="estatura" name="estatura" placeholder="Estatura" min="0" aria-label="estatura" aria-describedby="estatura">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="estatura">Mts</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="presionArterial">Presion Arterial</label>
                        <input type="number" class="form-control" id="presionArterial" name="presionArterial" placeholder="Preción Arterial" min="0" max="100">
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div id="accordion">
                            <div class="card card-primary">
                                <button type="button" class="btn btn-secondary btn-sm" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" >
                                    <center><h1 class="card-title">Antecedentes Heredo Familiares</h1></center>
                                </button>
                                <div id="collapseOne" class="panel-collapse collapse in show">
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">

                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" aria-label="madre" >
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control" id="Madre" name="madre" aria-label="Text input with checkbox"  placeholder="Madre">
                                                </div>

                                            </div>
                                            <div class="col-md-4 mb-3">
                                                Padre
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="defaultGroupExample2" name="groupOfDefaultRadios2" checked>
                                                    <label class="custom-control-label" for="defaultGroupExample2">Si</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="defaultGroupExample3" name="groupOfDefaultRadios2">
                                                    <label class="custom-control-label" for="defaultGroupExample3">No</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                Hermanos
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="defaultGroupExample4" name="groupOfDefaultRadios3" checked>
                                                    <label class="custom-control-label" for="defaultGroupExample4">Si</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="defaultGroupExample5" name="groupOfDefaultRadios3">
                                                    <label class="custom-control-label" for="defaultGroupExample5">No</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                Esposo
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="defaultGroupExample6" name="groupOfDefaultRadios4" checked>
                                                    <label class="custom-control-label" for="defaultGroupExample6">Si</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="defaultGroupExample7" name="groupOfDefaultRadios4">
                                                    <label class="custom-control-label" for="defaultGroupExample7">No</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                Hijos
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="defaultGroupExample8" name="groupOfDefaultRadios5" checked>
                                                    <label class="custom-control-label" for="defaultGroupExample8">Si</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="defaultGroupExample9" name="groupOfDefaultRadios5">
                                                    <label class="custom-control-label" for="defaultGroupExample9">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div id="accordion">
                            <div class="card card-primary">
                                <button type="button" class="btn btn-secondary btn-sm" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" >
                                    <center><h1 class="card-title">Antecedentes Personales Patológicos</h1></center>
                                </button>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div id="accordion">
                            <div class="card card-primary">
                                <button type="button" class="btn btn-secondary btn-sm" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" >
                                    <center><h1 class="card-title">Antecedentes Personales No Patológicos</h1></center>
                                </button>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div id="accordion">
                            <div class="card card-primary">
                                <button type="button" class="btn btn-secondary btn-sm" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" >
                                    <center><h1 class="card-title">Padecimiento Actual</h1></center>
                                </button>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div id="accordion">
                            <div class="card card-primary">
                                <button type="button" class="btn btn-secondary btn-sm" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" >
                                    <center><h1 class="card-title">Exploración Física</h1></center>
                                </button>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div id="accordion">
                            <div class="card card-primary">
                                <button type="button" class="btn btn-secondary btn-sm" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" >
                                    <center><h1 class="card-title">Antecedentes Heredo Familiares</h1></center>
                                </button>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div><!-- /.container-fluid -->

</template>
        <script>
    export default {
        mounted() {
           // this.listarPaciente();
        }
    }
</script>
