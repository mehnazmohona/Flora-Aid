<div class="col-md-2 sidebar pd0">
    <div class="side_user">
        <img class="img-responsive" src="{{asset('admin/images/avatar.png')}}" />
            <h4>Flora Aid</h4>
    </div>
    <h2>MAIN NAVIGATION</h2>
    <ul>
        <li><a href="{{url('/backend/deshboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basicone" aria-expanded="false" aria-controls="ui-basic">
                <i class="fa fa-user-circle"></i>
                <span class="menu-title">Users</span>
                <i class="menu-arrow"></i>
                </a>
            <div class="collapse" id="ui-basicone">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/backend/retailer') }}">Retailer</a>
                    </li>
                </ul>
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/backend/gardener') }}">Gardener</a>
                    </li>
                </ul>
            </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basicfaq" aria-expanded="false" aria-controls="ui-basic">
                <i class="fa fa-info-circle"></i>
                <span class="menu-title">FAQ</span>
                <i class="menu-arrow"></i>
                </a>
            <div class="collapse" id="ui-basicfaq">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/backend/faq') }}">Post FAQ</a>
                    </li>
                </ul>
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/backend/manage/faq') }}">Manage FAQ</a>
                    </li>
                </ul>
            </div>
            </li>

                <li class="nav-item">
                    <a href="{{ url('/backend/product')}}"><i class="fa  fa-bars"></i>Product Information</a>
                </li>

                <li><a href="{{ url('/backend/message')}}"><i class="fa  fa-comments"></i>Messages</a></li>
                <li>
                    <a class="nav-link">
                        <form class="" action="{{ route('admin.logout') }}" method="post">
                          @csrf
                          <input type="submit" value="Logout Now" class="btn btn-danger">
                        </form>
                    </a>
                </li>

                


    </ul>
</div><!--sidebar end-->