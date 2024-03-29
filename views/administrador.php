<?php 
    include("../template/header.php"); 
?>
<div class="row mt-4">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header bg-primary text-center text-white">
                        <h4>Salas</h4>
                    </div>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Sala #1
                        </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                        <div class="card">
                            <div class="card-header">
                                tarea #1
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Proposito</h5>
                                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis id, dolorem deleniti perspiciatis, minus aperiam architecto voluptatem quidem praesentium aut maiores magnam illo dolor consectetur. Quasi adipisci laborum possimus fugiat?</p>
                                <a href="#" class="btn btn-primary">Realizar</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                tarea #2
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Proposito</h5>
                                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis id, dolorem deleniti perspiciatis, minus aperiam architecto voluptatem quidem praesentium aut maiores magnam illo dolor consectetur. Quasi adipisci laborum possimus fugiat?</p>
                                <a href="#" class="btn btn-primary">Realizar</a>
                            </div>
                        </div>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Sala #2
                        </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Sin tareas</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Sala #3
                        </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. A mollitia ex, adipisci tenetur magnam, minus excepturi similique distinctio autem ea repellat voluptatum vitae ad exercitationem minima, nobis aut. Rerum, aliquid.</div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 gedf-main g-2">

                <!--- \\\\\\\Post-->
                <div class="card gedf-card">
                    <div class="card-body">
                        <label class="sr-only" for="message">post</label>
                        <textarea class="form-control" id="message" rows="3" placeholder="Como estuvo tu dia?"></textarea>
                        <div class="d-grid mt-2">
                        <button type="submit" class="v-btn btn-primary">Publicar</button>
                        </div>
                    </div>
                </div>
                <!-- Post /////-->

                <!--- \\\\\\\Post-->
                <div class="card gedf-card mt-2">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0">usuario</div>
                                    <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>10 min ago</div>
                                </div>
                            </div>
                            <div>
                                <div class="dropdown">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".gedf-drop2" aria-controls="gedf-drop2" aria-expanded="false" aria-label="Toggle navigation">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-left gedf-drop2" aria-labelledby="gedf-drop2">
                                        <div class="h6 dropdown-header">Configuracion</div>
                                        <a class="dropdown-item" href="#">Guardar</a>
                                        <a class="dropdown-item" href="#">Reportar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <a class="card-link" href="#">
                            <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adip.</h5>
                        </a>

                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo recusandae nulla rem eos ipsa praesentium esse magnam nemo dolor
                            sequi fuga quia quaerat cum, obcaecati hic, molestias minima iste voluptates.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-link"><i class="fa fa-gittip"></i> Me gusta</a>
                        <a href="#" class="card-link"><i class="fa fa-comment"></i> Comentar</a>
                        <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Compartir</a>
                    </div>
                </div>
                <!-- Post /////-->


                <!--- \\\\\\\Post-->
                <div class="card gedf-card mt-2">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0">usuario</div>
                                    <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>10 min ago</div>
                                </div>
                            </div>
                            <div>
                            <div class="dropdown">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".gedf-drop1" aria-controls="gedf-drop1" aria-expanded="false" aria-label="Toggle navigation">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right gedf-drop1" aria-labelledby="gedf-drop1">
                                        <div class="h6 dropdown-header">Configuracion</div>
                                        <a class="dropdown-item" href="#">Guardar</a>
                                        <a class="dropdown-item" href="#">Reportar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <a class="card-link" href="#">
                            <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adip.</h5>
                        </a>

                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo recusandae nulla rem eos ipsa praesentium esse magnam nemo dolor
                            sequi fuga quia quaerat cum, obcaecati hic, molestias minima iste voluptates.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-link"><i class="fa fa-gittip"></i> Me gusta</a>
                        <a href="#" class="card-link"><i class="fa fa-comment"></i> Comentar</a>
                        <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Compartir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card gedf-card">
                        <div class="card-body">
                            <h6 class="d-flex align-items-center mb-3"><i
                                    class="material-icons text-info mr-2">Retos diarios </i> Progreso</h6>
                            <small>tarea 1</small>
                            <div class="progress mb-3" style="height: 5px">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 80%"
                                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small>tarea 2</small>
                            <div class="progress mb-3" style="height: 5px">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 72%"
                                    aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small>tarea 3</small>
                            <div class="progress mb-3" style="height: 5px">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 89%"
                                    aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small>tarea 4</small>
                            <div class="progress mb-3" style="height: 5px">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 55%"
                                    aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small>tarea 5</small>
                            <div class="progress mb-3" style="height: 5px">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 66%"
                                    aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card gedf-card">
                        <div class="card-body">
                            <h6 class="d-flex align-items-center mb-3"><i
                                    class="material-icons text-info mr-2">Retos semanales </i> Progreso</h6>
                            <small>tarea 1</small>
                            <div class="progress mb-3" style="height: 5px">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 80%"
                                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small>tarea 2</small>
                            <div class="progress mb-3" style="height: 5px">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 72%"
                                    aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small>tarea 3</small>
                            <div class="progress mb-3" style="height: 5px">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 89%"
                                    aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small>tarea 4</small>
                            <div class="progress mb-3" style="height: 5px">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 55%"
                                    aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small>tarea 5</small>
                            <div class="progress mb-3" style="height: 5px">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 66%"
                                    aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </div>
        
        <script src="../js/bootstrap/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/jquery-3.6.0.min.js"></script>
        <script src="../js/jquery.validate.js"></script>
        <script src="../js/sweetalert2.all.min.js"></script>
        <script src="../js/functions.js"></script>
        <script src="../js/home.js"></script>
    </body>
</html>