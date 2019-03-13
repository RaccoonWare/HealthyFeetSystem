<template>
<div class="content">
    <div class="container-fluid">
        <div class="row" style="padding-left:40px;padding-top:10px;">
            <form class="col-12">
            	<div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="motivo">Motivo de la consulta:</label>
                        <textarea class="form-control" rows="5" id="motivo" style="resize:none;"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="principioEvolucion">Prinicipio y evolucion del padecimiento actual</label>
                      <textarea class="form-control" rows="3" id="principioEvolucion"  style="resize:none;"></textarea>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="antecedentesHeredo">Antecedentes heredo familiares</label>
                       <textarea class="form-control" rows="3" id="antecedentesHeredo"  style="resize:none;"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div id="accordion">
                            <div class="card card-primary">
                                <button type="button" class="btn btn-secondary btn-sm" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" >
                                    <h1 class="card-title">Dolor</h1>
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
                               <h1 class="card-title">Temperatura</h1>
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
                                 <h1 class="card-title">Coloración</h1>
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
           						<h1 class="card-title">Edema</h1>
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
                    <div class="col-md-6">
                        <div id="accordion">
                            <div class="card card-primary">
                                <button type="button" class="btn btn-secondary btn-sm" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" >
           						<h1 class="card-title">Presencia de Vello</h1>
                                </button>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="accordion">
                            <div class="card card-primary">
                                <button type="button" class="btn btn-secondary btn-sm" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" >
           						<h1 class="card-title">Pulso Femoral</h1>
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
                    <div class="col-md-6">
                        <div id="accordion">
                            <div class="card card-primary">
                                <button type="button" class="btn btn-secondary btn-sm" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" >
           						<h1 class="card-title">Pulso Popliteo</h1>
                                </button>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="accordion">
                            <div class="card card-primary">
                                <button type="button" class="btn btn-secondary btn-sm" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" >
           						<h1 class="card-title">Pulso Pedio</h1>
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
                    <div class="col-md-6">
                        <div id="accordion">
                            <div class="card card-primary">
                                <button type="button" class="btn btn-secondary btn-sm" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" >
           						<h1 class="card-title">Pulso Tibial Posterior</h1>
                                </button>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="accordion">
                            <div class="card card-primary">
                                <button type="button" class="btn btn-secondary btn-sm" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" >
           						<h1 class="card-title">Pulso Peroneo</h1>
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
           						<h1 class="card-title">Llenado Capilar</h1>
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
           						<h1 class="card-title">Indice Tobillo/Brazo</h1>
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
           						<h1 class="card-title">Insuficiencia Venosa. Clasificación de Nicolaides (CEAP)</h1>
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
           						<h1 class="card-title">Insuficiencia Arterial. Clasificación de Fontaine / Estadios</h1>
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
           						<h1 class="card-title">Insuficiencia Arterial. Clasificación Rutherford / Categorías</h1>
                                </button>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="motivo">Otros Hallazgos Clínicos:</label>
                        <textarea class="form-control" rows="3" id="motivo" style="resize:none;"></textarea>
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


