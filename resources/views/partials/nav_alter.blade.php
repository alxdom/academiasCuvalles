
    

<div class="wrapper">
    <div class="sidebar"  
    
        {{-- style="background: #81a1c1 --}}
        style="background: #2874A6
        !important;">
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
                                <a class="profile-dropdown" href="#">
                                    
                                    <span class="sidebar-normal">Mi perfil</span>

                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>

            <ul class="nav">
                
                <div class="my-3 align-self-center text-center apartado">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cloud-arrow-up" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                        <path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z"/>
                      </svg>
                </div>


                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
                        <p>
                            Cargar archivos
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse " id="componentsExamples">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ url('evidencias') }}">
                                    <span class="sidebar-normal">Evidencias</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ url('programasyguias') }}">
                                    <span class="sidebar-normal">Programas y guías</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ url('actas') }}">
                                    <span class="sidebar-normal">Actas</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                
               

                <div class="my-3 align-self-center text-center apartado">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 0 0-5.86 2.929 2.929 0 0 0 0 5.858z"/>
                      </svg>
                </div>

                {{-- <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#mapsExamples">
                        
                        <p>
                            Detalles de evidencia
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
                    </div> --}}

                    <li class="nav-item">
                        <a class="nav-link"  href="{{ url('academiasAssign') }}">
                            <p>
                                Academias
                            </p>
                        </a>
                    </li>

                    @can('roles.index')
                    <li class="nav-item">
                        <a class="nav-link"  href="{{ url('roles') }}">
                            <p>
                                Roles
                            </p>
                        </a>
                    </li>
                    @endcan
            </ul>
        </div>
    </div>

    <style>
        .apartado{
            background-color: #21618C ;
            padding: 1rem;
        }
    </style>
