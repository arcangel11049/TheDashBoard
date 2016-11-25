<div class="col-md-3 col-sm-4 col-xs-12">

    <ul class="list-unstyled mail_tabs">
      @if (Auth::user()->can_post())
        <li class="">
            <a href="{{ url('Posts/create') }}" class="btn btn-primary ">
                <i class="fa fa-inbox"></i> Create Post <span class="badge badge-primary pull-right">6</span>
            </a>
        </li>
        <li class="">
            <a href="{{ url('Posts/' .Auth::id().'/userPosts') }}">
                <i class="fa fa-send-o"></i> Published Post <span class="badge badge-purple pull-right">10</span>
            </a>
        </li>
        <li class="">
            <a href="{{ url('Posts/create') }}">
                <i class="fa fa-edit"></i> Drafts <span class="badge badge-orange pull-right">2</span>
            </a>
        </li>
        <li class="">
            <a href="{{ url('Posts/create') }}">
                <i class="fa fa-star-o"></i> Favourite Posts
            </a>
        </li>
        <li class="">
            <a href="{{ url('Posts/create') }}">
                <i class="fa fa-trash-o"></i> Trash
            </a>
        </li>
        @else
        <li class="">
            <a href="{{ url('Posts/create') }}" class="btn btn-info ">
                <i class="fa fa-star-o"></i> Favourite Posts
            </a>
        </li>
      @endif
    </ul>

</div>