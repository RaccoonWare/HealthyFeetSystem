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
                                    <h1 class="card-title">Antecedentes Personales Patológicoss</h1>
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
                               <h1 class="card-title">Antecedentes Personales No Patológicos</h1>
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
                                 <h1 class="card-title">Antecedentes Ginecobstétricos</h1>
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
           						<h1 class="card-title">Interrogatorio por Aparatos y Sistemas</h1>
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