
    

<div class="wrapper">
    <div class="sidebar"  style="background: #ac1a2d !important;">
        <div class="sidebar-wrapper">
            
            <div class="user">
                <div class="photo">
                    <img src="../assets/img/default-avatar.png" />
                </div>
                <div class="info">

                   <!-- info-user -->
                   @include('partials.show_user')
                    <!-- END-info-user -->
        
                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a class="profile-dropdown" href="{{ route('logout') }}">
                                    
                                    <span class="sidebar-normal">Mi perfil</span>

                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
                

                
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
                        <i class="nc-icon nc-app"></i>
                        <p>
                            Evidencias
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse " id="componentsExamples">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ url('evidencias') }}">
                                    
                                    <span class="sidebar-normal">Subir</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ url('evidencias') }}">
                                    
                                    <span class="sidebar-normal">Consultar</span>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#formsExamples">
                        <i class="nc-icon nc-notes"></i>
                        <p>
                            Programas y guías
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse " id="formsExamples">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="./forms/regular.html">
                                    
                                    <span class="sidebar-normal">Subir</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="./forms/extended.html">
                                    
                                    <span class="sidebar-normal">Consultar</span>
                                </a>
                            </li>
                            
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#tablesExamples">
                        <i class="nc-icon nc-paper-2"></i>
                        <p>
                            Actas
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse " id="tablesExamples">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="./tables/regular.html">
                                    
                                    <span class="sidebar-normal">Subir</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="./tables/extended.html">
                                    
                                    <span class="sidebar-normal">Consultar</span>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#mapsExamples">
                        <i class="nc-icon nc-pin-3"></i>
                        <p>
                            Academia
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse " id="mapsExamples">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="./maps/google.html">
                                    
                                    <span class="sidebar-normal">Detalle de evidencias</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="./maps/vector.html">
                                    
                                    <span class="sidebar-normal">Detalle de programas y guías</span>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                
            </ul>
        </div>
    </div>
