
<?php
session_start();
require 'classes/banco.php';
// $banco = new Banco("localhost", "ardrizzodesig_medtemplate", "ardrizzodesig_admin", "Re%Dla=kMwq9");
$banco = new Banco("localhost", "medtemplate", "ardrizzodesig_admin", "KsY9#*SvJZuXR");

$idSessao = $_SESSION['id']; 

?>

	<?php echo($idSessao) ?>



<div id="content">


  <section class="container">
    <h1>Título do Template</h1>
    <img class="medgrupo__logo" src="imgs/institucional-negativo-horizontal.png" alt="">
    <h2>Descrição do Template</h2>
  </section>

  <section class="container lista">
    
    <div class="row">
      <div class="column">
        <p>1. Lorem ipsum dolor sit amet, consectetur.</p>
        <p>Dolor fugit corporis provident amet quo modi reiciendis neque quaerat tempore distinctio deleniti delectus omnis architect.</p>
        <p>Quis dicta qui voluptates animi voluptatem.</p>
      </div>

      <div class="column">
        <img class="imagens__mockups" src="imgs/mock-1.png" alt="">
      </div>
    </div>

  </section>

  <section class="container lista">
    
    <div class="row">

      <div class="column">
        <img class="imagens__mockups" src="imgs/mock-1.png" alt="">
      </div>   
         
      <div class="column">
        <p>2. Lorem ipsum dolor sit amet, consectetur.</p>
        <p>Dolor fugit corporis provident amet quo modi reiciendis neque quaerat tempore distinctio deleniti delectus omnis architect.</p>
        <p>Quis dicta qui voluptates animi voluptatem.</p>
      </div>
    </div>

  </section>

  <section class="container lista">
    
    <div class="row">
      <div class="column">
        <p>3. Lorem ipsum dolor sit amet, consectetur.</p>
        <p>Dolor fugit corporis provident amet quo modi reiciendis neque quaerat tempore distinctio deleniti delectus omnis architect.</p>
        <p>Quis dicta qui voluptates animi voluptatem.</p>
      </div>

      <div class="column">
        <img class="imagens__mockups" src="imgs/mock-1.png" alt="">
      </div>
    </div>

  </section>

  <section class="container lista">
    
    <div class="row">
      <div class="column">
        <img class="imagens__mockups" src="imgs/mock-1.png" alt="">
      </div>

      <div class="column">
        <p>4. Lorem ipsum dolor.</p>
      </div>
    </div>

  </section>

  <section class="container">
      
      <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum cum explicabo itaque nisi, magni necessitatibus.</h3>

      <div class="datas__row">
          <div class="datas__columns active">
              <div class="datas__row">
                  <div class="columns nv2"><b class="bold-family">15</b></div>
                  <div class="columns nv2"><b class="bold-family">Abril</b></div>     
              </div>
          </div>


          <div class="datas__columns">
              <div class="datas__row">
                  <div class="columns nv2">15</div>
                  <div class="columns nv2"><b class="bold-family">Junho</b></div>     
              </div>
          </div>

          <div class="datas__columns">
              <div class="datas__row">
                  <div class="columns nv2">15</div>
                  <div class="columns nv2"><b class="bold-family">Agosto</b></div>     
              </div>
          </div>


          <div class="datas__columns">
              <div class="datas__row">
                  <div class="columns nv2">15</div>
                  <div class="columns nv2"><b class="bold-family">Outubro</b></div>     
              </div>
          </div>

      </div>

  </section>


  <section class="container">
    <section id="section__cronograma" class="desktop">
        <h3>Cronograma de Simulados</h3>
        <div class="tabs">
          <ul id="tabs-nav">
            <li><a href="#tab1">MEDCURSO</a></li>
            <li><a href="#tab2">M.E.D</a></li>
            <li><a href="#tab3">TEGO</a></li>
            <li><a href="#tab4">MEDMASTER</a></li>
            <li><a href="#tab5">Programas R+</a></li>
          </ul> <!-- END tabs-nav -->
          <div id="tabs-content">


            <!-- MEDCURSO -->
            <div id="tab1" class="tab-content">
            <div class="mobile">
                <h2>MEDCURSO</h2>
                <hr>
            </div>

                <table>
                  <thead>
                    <tr>
                      <th>Simulados</th>
                      <th>Mês</th>
                      <th>Período*</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                        <td>Simulado 1</td>
                        <td>Abril</td>
                        <td>04/04 a 14/04<br><span class="small">às 23h59</span></td>
                    </tr>

                    <tr>
                        <td>Simulado 2</td>
                        <td>Maio</td>
                        <td>02/05 a 12/05<br><span class="small">às 23h59</span></td>
                    </tr>

                    <tr>
                        <td>Simulado 3</td>
                        <td>Junho</td>
                        <td>06/06 a 16/06<br><span class="small">às 23h59</span></td>
                    </tr>


                    <tr>
                        <td>Simulado 4</td>
                        <td>Julho</td>
                        <td>04/07 a 14/07<br><span class="small">às 23h59</span></td>
                    </tr>

                    <tr>
                        <td>Simulado 5</td>
                        <td>Agosto</td>
                        <td>01/08 a 11/08<br><span class="small">às 23h59</span></td>
                    </tr>

                    <tr>
                        <td>Simulado 6</td>
                        <td>Setembro</td>
                        <td>05/09 a 15/09<br><span class="small">às 23h59</span></td>
                    </tr>
                    

                    <tr>
                        <td>Simulado 7</td>
                        <td>Outubro</td>
                        <td>03/10 a 13/10<br><span class="small">às 23h59</span></td>
                    </tr>
                    

                  </tbody>
                </table>



                <p>*Sujeito a alterações.</p>

                <div class="mobile">
                    <hr>
                </div>

            </div>


            <!-- MED -->                
            <div id="tab2" class="tab-content">
            <div class="mobile">
                <h2>M.E.D</h2>
                <hr>
            </div>
            

                <table>
                  <thead>
                    <tr>
                      <th>Simulados</th>
                      <th>Mês</th>
                      <th>Período*</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                        <td>Simulado 1</td>
                        <td>Abril</td>
                        <td>04/04 a 14/04<br><span class="small">às 23h59</span></td>
                    </tr>

                    <tr>
                        <td>Simulado 2</td>
                        <td>Maio</td>
                        <td>02/05 a 12/05<br><span class="small">às 23h59</span></td>
                    </tr>

                    <tr>
                        <td>Simulado 3</td>
                        <td>Junho</td>
                        <td>06/06 a 16/06<br><span class="small">às 23h59</span></td>
                    </tr>


                    <tr>
                        <td>Simulado 4</td>
                        <td>Julho</td>
                        <td>04/07 a 14/07<br><span class="small">às 23h59</span></td>
                    </tr>

                    <tr>
                        <td>Simulado 5</td>
                        <td>Agosto</td>
                        <td>01/08 a 11/08<br><span class="small">às 23h59</span></td>
                    </tr>

                    <tr>
                        <td>Simulado 6</td>
                        <td>Setembro</td>
                        <td>05/09 a 15/09<br><span class="small">às 23h59</span></td>
                    </tr>
                    

                    <tr>
                        <td>Simulado 7</td>
                        <td>Outubro</td>
                        <td>03/10 a 13/10<br><span class="small">às 23h59</span></td>
                    </tr>
                    

                  </tbody>
                </table>
                <p>*Sujeito a alterações.</p>
            <div class="mobile">
                <hr>
            </div>

            </div>


            <!-- TEGO -->                
            <div id="tab3" class="tab-content">
            <div class="mobile">
                <h2>TEGO</h2>
                <hr>
            </div>
           

                <table>
                  <thead>
                    <tr>
                      <th>Simulados</th>
                      <th>Mês</th>
                      <th>Período*</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                        <td>Simulado 1</td>
                        <td>Abril</td>
                        <td>04/04 a 14/04<br><span class="small">às 23h59</span></td>
                    </tr>

                    <tr>
                        <td>Simulado 2</td>
                        <td>Maio</td>
                        <td>02/05 a 12/05<br><span class="small">às 23h59</span></td>
                    </tr>

                    <tr>
                        <td>Simulado 3</td>
                        <td>Junho</td>
                        <td>06/06 a 16/06<br><span class="small">às 23h59</span></td>
                    </tr>


                    <tr>
                        <td>Simulado 4</td>
                        <td>Julho</td>
                        <td>04/07 a 14/07<br><span class="small">às 23h59</span></td>
                    </tr>
                    

                  </tbody>
                </table>
                <p>*Sujeito a alterações.</p>
            <div class="mobile">
                <hr>
            </div>

            </div>




            <!-- MEDmaster -->                
            <div id="tab4" class="tab-content">
            <div class="mobile">
                <h2>MEDMASTER</h2>
                <hr>
            </div>
            

                <table>
                  <thead>
                    <tr>
                      <th>Simulados</th>
                      <th>Mês</th>
                      <th>Período*</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                        <td>Simulado 1</td>
                        <td>Abril</td>
                        <td>04/04 a 14/04<br><span class="small">às 23h59</span></td>
                    </tr>

                    <tr>
                        <td>Simulado 2</td>
                        <td>Maio</td>
                        <td>02/05 a 12/05<br><span class="small">às 23h59</span></td>
                    </tr>

                    <tr>
                        <td>Simulado 3</td>
                        <td>Junho</td>
                        <td>06/06 a 16/06<br><span class="small">às 23h59</span></td>
                    </tr>


                    <tr>
                        <td>Simulado 4</td>
                        <td>Julho</td>
                        <td>04/07 a 14/07<br><span class="small">às 23h59</span></td>
                    </tr>

                    <tr>
                        <td>Simulado 5</td>
                        <td>Agosto</td>
                        <td>01/08 a 11/08<br><span class="small">às 23h59</span></td>
                    </tr>

                    <tr>
                        <td>Simulado 6</td>
                        <td>Setembro</td>
                        <td>05/09 a 15/09<br><span class="small">às 23h59</span></td>
                    </tr>
                    

                    <tr>
                        <td>Simulado 7</td>
                        <td>Outubro</td>
                        <td>03/10 a 13/10<br><span class="small">às 23h59</span></td>
                    </tr>
                    

                  </tbody>
                </table>
                <p>*Sujeito a alterações.</p>
            <div class="mobile">
                <hr>
            </div>

            </div>

            <!-- MEDmaster -->                
            <div id="tab5" class="tab-content">
            <div class="mobile">
                <h2>Programas R+</h2>
                <hr>
            </div>
            

                <table>
                  <thead>
                    <tr>
                      <th>Simulados</th>
                      <th>Mês</th>
                      <th>Período*</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                        <td>Simulado 1</td>
                        <td>Abril</td>
                        <td>04/04 a 14/04<br><span class="small">às 23h59</span></td>
                    </tr>

                    <tr>
                        <td>Simulado 2</td>
                        <td>Maio</td>
                        <td>02/05 a 12/05<br><span class="small">às 23h59</span></td>
                    </tr>

                    <tr>
                        <td>Simulado 3</td>
                        <td>Junho</td>
                        <td>06/06 a 16/06<br><span class="small">às 23h59</span></td>
                    </tr>


                    <tr>
                        <td>Simulado 4</td>
                        <td>Julho</td>
                        <td>04/07 a 14/07<br><span class="small">às 23h59</span></td>
                    </tr>

                    <tr>
                        <td>Simulado 5</td>
                        <td>Agosto</td>
                        <td>01/08 a 11/08<br><span class="small">às 23h59</span></td>
                    </tr>

                    <tr>
                        <td>Simulado 6</td>
                        <td>Setembro</td>
                        <td>05/09 a 15/09<br><span class="small">às 23h59</span></td>
                    </tr>
                    

                    <tr>
                        <td>Simulado 7</td>
                        <td>Outubro</td>
                        <td>03/10 a 13/10<br><span class="small">às 23h59</span></td>
                    </tr>
                    

                  </tbody>
                </table>
                <p>*Sujeito a alterações.</p>
            <div class="mobile">
                <hr>
            </div>

            </div>





          </div> <!-- END tabs-content -->
        </div> <!-- END tabs -->

    </section>




    <!-- Cronograma -->
    <section id="section__cronograma" class="mobile">            
        <div class="accordion-container">
        <hr>
        <h2>Cronograma</h2>

          <!-- MEDCURSO -->
          <div class="set">
            <a>
              MEDCURSO
              <i class="fa fa-plus"></i>
            </a>
            <div class="content">



    <!-- Tabela - Linha -->
          <div class="table">
      <div class="table-row">
        <div class="title">
          Simulado 1
        </div>
      </div>
      <div class="table-row">
        <div class="table-column">
          Abril
        </div>
        <div class="table-column">
          04/04 a 14/04<br><span class="small">às 23h59*</span>
        </div>
      </div>
        </div>


    <!-- Tabela - Linha -->
          <div class="table">
      <div class="table-row">
        <div class="title">
          Simulado 2
        </div>
      </div>
      <div class="table-row">
        <div class="table-column">
          Maio
        </div>
        <div class="table-column">
          02/05 a 12/05<br><span class="small">às 23h59*</span>
        </div>
      </div>
        </div>

                <!-- Tabela - Linha -->
          <div class="table">
      <div class="table-row">
        <div class="title">
          Simulado 3
        </div>
      </div>
      <div class="table-row">
        <div class="table-column">
          Junho
        </div>
        <div class="table-column">
          06/06 a 16/06<br><span class="small">às 23h59*</span>
        </div>
      </div>
        </div>



                <!-- Tabela - Linha -->
          <div class="table">
      <div class="table-row">
        <div class="title">
          Simulado 4
        </div>
      </div>
      <div class="table-row">
        <div class="table-column">
          Julho
        </div>
        <div class="table-column">
          04/07 a 14/07<br><span class="small">às 23h59*</span>
        </div>
      </div>
        </div>



                <!-- Tabela - Linha -->
          <div class="table">
      <div class="table-row">
        <div class="title">
          Simulado 5
        </div>
      </div>
      <div class="table-row">
        <div class="table-column">
          Agosto
        </div>
        <div class="table-column">
          01/08 a 11/08<br><span class="small">às 23h59*</span>
        </div>
      </div>
        </div>



                <!-- Tabela - Linha -->
          <div class="table">
      <div class="table-row">
        <div class="title">
          Simulado 6
        </div>
      </div>
      <div class="table-row">
        <div class="table-column">
          Setembro
        </div>
        <div class="table-column">
          05/09 a 15/09<br><span class="small">às 23h59*</span>
        </div>
      </div>
        </div>


                <!-- Tabela - Linha -->
          <div class="table">
      <div class="table-row">
        <div class="title">
          Simulado 7
        </div>
      </div>
      <div class="table-row">
        <div class="table-column">
          Outubro
        </div>
        <div class="table-column">
          03/10 a 13/10<br><span class="small">às 23h59*</span>
        </div>
      </div>
        </div>





            <p>*Sujeito a alterações.</p>
            </div>
          </div>


        <!-- MED -->
          <div class="set">
            <a>
              MED
              <i class="fa fa-plus"></i>
            </a>
            <div class="content">
              

            <!-- Tabela - Linha -->
            <div class="table">
                <div class="table-row">
                    <div class="title">
                        Simulado 1
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-column">
                        Abril
                    </div>
                    <div class="table-column">
                        04/04 a 14/04<br><span class="small">às 23h59*</span>
                    </div>
                </div>
            </div>


            <!-- Tabela - Linha -->
            <div class="table">
                <div class="table-row">
                    <div class="title">
                        Simulado 2
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-column">
                        Maio
                    </div>
                    <div class="table-column">
                        02/05 a 12/05<br><span class="small">às 23h59*</span>
                    </div>
                </div>
            </div>

                            <!-- Tabela - Linha -->
            <div class="table">
                <div class="table-row">
                    <div class="title">
                        Simulado 3
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-column">
                        Junho
                    </div>
                    <div class="table-column">
                        06/06 a 16/06<br><span class="small">às 23h59*</span>
                    </div>
                </div>
            </div>



                            <!-- Tabela - Linha -->
            <div class="table">
                <div class="table-row">
                    <div class="title">
                        Simulado 4
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-column">
                        Julho
                    </div>
                    <div class="table-column">
                        04/07 a 14/07<br><span class="small">às 23h59*</span>
                    </div>
                </div>
            </div>



                            <!-- Tabela - Linha -->
            <div class="table">
                <div class="table-row">
                    <div class="title">
                        Simulado 5
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-column">
                        Agosto
                    </div>
                    <div class="table-column">
                        01/08 a 11/08<br><span class="small">às 23h59*</span>
                    </div>
                </div>
            </div>



                            <!-- Tabela - Linha -->
            <div class="table">
                <div class="table-row">
                    <div class="title">
                        Simulado 6
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-column">
                        Setembro
                    </div>
                    <div class="table-column">
                        05/09 a 15/09<br><span class="small">às 23h59*</span>
                    </div>
                </div>
            </div>


                            <!-- Tabela - Linha -->
            <div class="table">
                <div class="table-row">
                    <div class="title">
                        Simulado 7
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-column">
                        Outubro
                    </div>
                    <div class="table-column">
                        03/10 a 13/10<br><span class="small">às 23h59*</span>
                    </div>
                </div>
            </div>





            <p>*Sujeito a alterações.</p>
            </div>
          </div>




        <!-- TEGO -->
          <div class="set">
            <a>
              TEGO
              <i class="fa fa-plus"></i>
            </a>
            <div class="content">
               

            <!-- Tabela - Linha -->
            <div class="table">
                <div class="table-row">
                    <div class="title">
                        Simulado 1
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-column">
                        Abril
                    </div>
                    <div class="table-column">
                        04/04 a 14/04<br><span class="small">às 23h59*</span>
                    </div>
                </div>
            </div>


            <!-- Tabela - Linha -->
            <div class="table">
                <div class="table-row">
                    <div class="title">
                        Simulado 2
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-column">
                        Maio
                    </div>
                    <div class="table-column">
                        02/05 a 12/05<br><span class="small">às 23h59*</span>
                    </div>
                </div>
            </div>

                            <!-- Tabela - Linha -->
            <div class="table">
                <div class="table-row">
                    <div class="title">
                        Simulado 3
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-column">
                        Junho
                    </div>
                    <div class="table-column">
                        06/06 a 16/06<br><span class="small">às 23h59*</span>
                    </div>
                </div>
            </div>



                            <!-- Tabela - Linha -->
            <div class="table">
                <div class="table-row">
                    <div class="title">
                        Simulado 4
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-column">
                        Julho
                    </div>
                    <div class="table-column">
                        04/07 a 14/07<br><span class="small">às 23h59*</span>
                    </div>
                </div>
            </div>

            <p>*Sujeito a alterações.</p>
            </div>
          </div>



        <!-- MEDMASTER -->
          <div class="set">
            <a>
              MEDMASTER
              <i class="fa fa-plus"></i>
            </a>
            <div class="content">
              

            <!-- Tabela - Linha -->
            <div class="table">
                <div class="table-row">
                    <div class="title">
                        Simulado 1
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-column">
                        Abril
                    </div>
                    <div class="table-column">
                        04/04 a 14/04<br><span class="small">às 23h59*</span>
                    </div>
                </div>
            </div>


            <!-- Tabela - Linha -->
            <div class="table">
                <div class="table-row">
                    <div class="title">
                        Simulado 2
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-column">
                        Maio
                    </div>
                    <div class="table-column">
                        02/05 a 12/05<br><span class="small">às 23h59*</span>
                    </div>
                </div>
            </div>

                            <!-- Tabela - Linha -->
            <div class="table">
                <div class="table-row">
                    <div class="title">
                        Simulado 3
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-column">
                        Junho
                    </div>
                    <div class="table-column">
                        06/06 a 16/06<br><span class="small">às 23h59*</span>
                    </div>
                </div>
            </div>



                            <!-- Tabela - Linha -->
            <div class="table">
                <div class="table-row">
                    <div class="title">
                        Simulado 4
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-column">
                        Julho
                    </div>
                    <div class="table-column">
                        04/07 a 14/07<br><span class="small">às 23h59*</span>
                    </div>
                </div>
            </div>



                            <!-- Tabela - Linha -->
            <div class="table">
                <div class="table-row">
                    <div class="title">
                        Simulado 5
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-column">
                        Agosto
                    </div>
                    <div class="table-column">
                        01/08 a 11/08<br><span class="small">às 23h59*</span>
                    </div>
                </div>
            </div>



                            <!-- Tabela - Linha -->
            <div class="table">
                <div class="table-row">
                    <div class="title">
                        Simulado 6
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-column">
                        Setembro
                    </div>
                    <div class="table-column">
                        05/09 a 15/09<br><span class="small">às 23h59*</span>
                    </div>
                </div>
            </div>


                            <!-- Tabela - Linha -->
            <div class="table">
                <div class="table-row">
                    <div class="title">
                        Simulado 7
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-column">
                        Outubro
                    </div>
                    <div class="table-column">
                        03/10 a 13/10<br><span class="small">às 23h59*</span>
                    </div>
                </div>
            </div>





            <p>*Sujeito a alterações.</p>
            </div>
          </div>



        <!-- MED -->
          <div class="set">
            <a>
              Programas R+
              <i class="fa fa-plus"></i>
            </a>
            <div class="content">
              

            <!-- Tabela - Linha -->
            <div class="table">
                <div class="table-row">
                    <div class="title">
                        Simulado 1
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-column">
                        Abril
                    </div>
                    <div class="table-column">
                        04/04 a 14/04<br><span class="small">às 23h59*</span>
                    </div>
                </div>
            </div>


            <!-- Tabela - Linha -->
            <div class="table">
                <div class="table-row">
                    <div class="title">
                        Simulado 2
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-column">
                        Maio
                    </div>
                    <div class="table-column">
                        02/05 a 12/05<br><span class="small">às 23h59*</span>
                    </div>
                </div>
            </div>

                            <!-- Tabela - Linha -->
            <div class="table">
                <div class="table-row">
                    <div class="title">
                        Simulado 3
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-column">
                        Junho
                    </div>
                    <div class="table-column">
                        06/06 a 16/06<br><span class="small">às 23h59*</span>
                    </div>
                </div>
            </div>



                            <!-- Tabela - Linha -->
            <div class="table">
                <div class="table-row">
                    <div class="title">
                        Simulado 4
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-column">
                        Julho
                    </div>
                    <div class="table-column">
                        04/07 a 14/07<br><span class="small">às 23h59*</span>
                    </div>
                </div>
            </div>



                            <!-- Tabela - Linha -->
            <div class="table">
                <div class="table-row">
                    <div class="title">
                        Simulado 5
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-column">
                        Agosto
                    </div>
                    <div class="table-column">
                        01/08 a 11/08<br><span class="small">às 23h59*</span>
                    </div>
                </div>
            </div>



                            <!-- Tabela - Linha -->
            <div class="table">
                <div class="table-row">
                    <div class="title">
                        Simulado 6
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-column">
                        Setembro
                    </div>
                    <div class="table-column">
                        05/09 a 15/09<br><span class="small">às 23h59*</span>
                    </div>
                </div>
            </div>


                            <!-- Tabela - Linha -->
            <div class="table">
                <div class="table-row">
                    <div class="title">
                        Simulado 7
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-column">
                        Outubro
                    </div>
                    <div class="table-column">
                        03/10 a 13/10<br><span class="small">às 23h59*</span>
                    </div>
                </div>
            </div>





            <p>*Sujeito a alterações.</p>
            </div>
          </div>



        </div>
    </section>

  </section>


  <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, voluptas.</h3>

  <section class="container">
    <div class="accordion-container">
      <div class="set">
        <a>
          1 - Lorem ipsum dolor sit amet?
          <i class="fa fa-plus"></i>
        </a>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin gravida malesuada orci, vel pharetra augue.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin gravida malesuada orci, vel pharetra augue.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="container">
    <div class="accordion-container">
      <div class="set">
        <a>
          1 - Lorem ipsum dolor sit amet?
          <i class="fa fa-plus"></i>
        </a>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin gravida malesuada orci, vel pharetra augue.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin gravida malesuada orci, vel pharetra augue.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="container">
    <div class="accordion-container">
      <div class="set">
        <a>
          1 - Lorem ipsum dolor sit amet?
          <i class="fa fa-plus"></i>
        </a>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin gravida malesuada orci, vel pharetra augue.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin gravida malesuada orci, vel pharetra augue.</p>
        </div>
      </div>
    </div>
  </section>
			

</div>

	<form method="POST">

		<input type="text" id="fake" name="templateHtml" hidden="hidden">

	<input type="submit" value="salvar">

	</div>



		


	<script>
		
		function saveContentInInput() {
			var getContent = document.getElementById("content").innerHTML;
			document.getElementById("fake").value = getContent;
			console.log("save in input")
		}

		function autoSave() {
		  setInterval(function(){ saveContentInInput() }, 1000);
		}

		autoSave();




	</script>

	


	<?php
			
		if (isset($_POST['templateHtml']) && empty($_POST['templateHtml']) == false ) {
			
			$banco->query("SELECT * FROM templates");

			$templateHtml = addslashes($_POST['templateHtml']);

			$banco->query("INSERT INTO templates SET
				templateUserId = $idSessao,
				templateHtml = '$templateHtml'
			");

			echo "<div class='accept'><p>template criado!</p></div>";
		} else {
			echo "<div class='reject'><p>Ocorreu um erro</p></div>";
		}

	?>