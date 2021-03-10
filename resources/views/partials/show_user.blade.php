<div class="user" >
    <div class="photo">
        {{-- <img src="http://148.202.89.89/Fotos/2236079.jpg"/> --}}
        <img src="https://picsum.photos/200/300" alt="">
    </div>

    <div class="info">
        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
            <span>
                {{Auth::user()->codigo}}
                <b class="caret"></b>
            </span>
        </a>

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

