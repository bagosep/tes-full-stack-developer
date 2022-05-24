<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ route('post.index') }}" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                    Posts
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('user.index') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Users
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('comment.index') }}" class="nav-link">
                <i class="nav-icon fas fa-comment"></i>
                <p>
                    Comments
                </p>
            </a>
        </li>
    </ul>
</nav>
