<template>    <!-- Main content -->
   <div class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header">
                     <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                           <a  @click="cMenu1()" class="nav-link active" id="pills-ficha-tab" data-toggle="pill" href="#FichaClinica" role="tab" aria-controls="pills-ficha" aria-selected="true">Ficha Clínica</a>
                        </li>
                        <li class="nav-item">
                           <a @click="cMenu2()" class="nav-link" id="pills-interrogatorio-tab" data-toggle="pill" href="#Interrogatorio" role="tab" aria-controls="pills-interrogatorio" aria-selected="false">Interrogatorio</a>
                        </li>
                        <li class="nav-item">
                           <a @click="cMenu3()" class="nav-link" id="pills-general-tab" data-toggle="pill" href="#ExploracionFisicaGeneral" role="tab" aria-controls="pills-general" aria-selected="false">Exploración Física General</a>
                        </li>
                        <li class="nav-item">
                           <a @click="cMenu4()" class="nav-link" id="pills-podologica-tab" data-toggle="pill" href="#ExploracionPodologica" role="tab" aria-controls="pills-podologica" aria-selected="false">Exploración Podológica</a>
                        </li>
                        <li class="nav-item">
                           <a @click="cMenu5()" class="nav-link" id="pills-fotografias-tab" data-toggle="pill" href="#Fotografias" role="tab" aria-controls="pills-fotografias" aria-selected="false">Fotografías</a>
                        </li>
                        <li class="nav-item">
                           <a @click="cMenu6()" class="nav-link" id="pills-evolucion-tab" data-toggle="pill" href="#NotasEvolucion" role="tab" aria-controls="pills-evolucion" aria-selected="false">Notas de Evolución</a>
                        </li>
                        <li class="nav-item">
                           <a @click="cMenu7()" class="nav-link" id="pills-recetas-tab" data-toggle="pill" href="#Recetas" role="tab" aria-controls="pills-recetas" aria-selected="false">Recetas</a>
                        </li>
                        <li class="nav-item">
                           <a @click="cMenu8()" class="nav-link" id="pills-anexo1-tab" data-toggle="pill" href="#Anexo1" role="tab" aria-controls="pills-anexo1" aria-selected="false">Anexo 1: Exploración Vascular Podológica</a>
                        </li>
                        <li class="nav-item">
                           <a @click="cMenu9()" class="nav-link" id="pills-anexo2-tab" data-toggle="pill" href="#Anexo2" role="tab" aria-controls="pills-anexo2" aria-selected="false">Anexo 2: Exploración Neurológica Podológica</a>
                        </li>
                        <li class="nav-item">
                           <a @click="cMenu10()" class="nav-link" id="pills-anexo3-tab" data-toggle="pill" href="#Anexo3" role="tab" aria-controls="pills-anexo3" aria-selected="false">Anexo 3: Exploración Biomecánica Podológica</a>
                        </li>
                        <li class="nav-item">
                           <a @click="cMenu11()" class="nav-link" id="pills-anexo4-tab" data-toggle="pill" href="#Anexo4" role="tab" aria-controls="pills-anexo4" aria-selected="false">Anexo 4: Valoración de Pie Diabético en 3 Minutos</a>
                        </li>
                     </ul>
                  </div>
                  <!-- /.card-header -->

                  <!-- .card-body -->
                  <div class="card-body">
                     <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="FichaClinica" role="tabpanel" aria-labelledby="pills-home-tab">
                           <ficha-component></ficha-component>
                        </div>
                        <div class="tab-pane fade" id="Interrogatorio" role="tabpanel" aria-labelledby="pills-interrogatorio-tab-tab">
                           <interrogatorio-component></interrogatorio-component>
                        </div>
                        <div class="tab-pane fade" id="ExploracionFisicaGeneral" role="tabpanel" aria-labelledby="pills-general-tab">
                           <general-component></general-component>
                        </div>
                        <div class="tab-pane fade" id="ExploracionPodologica" role="tabpanel" aria-labelledby="pills-podologica-tab">
                           <podologica-component></podologica-component>
                        </div>
                        <div class="tab-pane fade" id="Fotografias" role="tabpanel" aria-labelledby="pills-fotografias-tab">
                           <fotografias-component></fotografias-component>
                        </div>
                        <div class="tab-pane fade" id="NotasEvolucion" role="tabpanel" aria-labelledby="pills-evolucion-tab">
                           <evolucion-component></evolucion-component>
                        </div>
                        <div class="tab-pane fade" id="Recetas" role="tabpanel" aria-labelledby="pills-recetas-tab">
                           <recetas-component></recetas-component>
                        </div>
                        <div class="tab-pane fade" id="Anexo1" role="tabpanel" aria-labelledby="pills-anexo1-tab">
                           <anexoUno-component></anexoUno-component>
                        </div>
                        <div class="tab-pane fade" id="Anexo2" role="tabpanel" aria-labelledby="pills-anexo2-tab">
                           <anexoDos-component></anexoDos-component>
                        </div>
                        <div class="tab-pane fade" id="Anexo3" role="tabpanel" aria-labelledby="pills-anexo3-tab">
                           <anexoTres-component></anexoTres-component>
                        </div>
                        <div class="tab-pane fade" id="Anexo4" role="tabpanel" aria-labelledby="pills-anexo4-tab">
                           <anexoCuatro-component></anexoCuatro-component>
                        </div>
                     </div>
                  </div><!-- /.card-body -->
               </div>
            </div><!-- /.card-body -->
         </div><!-- /.card-->
      </div><!-- /.container-fluid -->
   </div>
</template>

<script>
    export default {
      data() {
        return {
          menu2 : 0
        }

      },
        mounted() {
           this.cMenu1();
           this.cMenu2();
           this.cMenu3();
           this.cMenu4();
           this.cMenu5();
           this.cMenu6();
           this.cMenu7();
           this.cMenu8();
           this.cMenu9();
           this.cMenu10();
           this.cMenu11();
           this.cMenu12();
        },
        methods : {
            cMenu1(){
                this.$parent.menu2 = 1;
            },
            cMenu2(){
                this.$parent.menu2 = 2;
            },
            cMenu3(){
                this.$parent.menu2 = 3;
            },
            cMenu4(){
                this.$parent.menu2 = 4;
            },
            cMenu5(){
                this.$parent.menu2 = 5;
            },
            cMenu6(){
                this.$parent.menu2 = 6;
            },
            cMenu7(){
                this.$parent.menu2 = 7;
            },
            cMenu8(){
                this.$parent.menu2 = 8;
            },
            cMenu9(){
                this.$parent.menu2 = 9;
            },
            cMenu10(){
                this.$parent.menu2 = 10;
            },
            cMenu11(){
                this.$parent.menu2 = 11;
            },
            cMenu12(){
                this.$parent.menu2 = 0;
            }

        }

    }
</script>
