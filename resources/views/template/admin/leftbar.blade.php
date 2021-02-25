<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
            </li>


            <li>
                <a class="active-menu" href="{{ route('admin.index.index') }}"> Trang chủ</a>
            </li>
            <li>
                <a href="{{ route('admin.room.index') }}"> Quản lý phòng</a>
            </li>
            <li>
                <a href="{{ route('admin.roomtype.index') }}"> Quản lý loại phòng</a>
            </li>
            <li>
                <a href="{{ route('admin.user.index') }}"> Quản lý người dùng</a>
            </li>
            <li>
                <a href="{{ route('admin.contact.index') }}">Quản lý liên hệ</a>
            </li>

            <li>
                <a href="{{ route('admin.comment.index') }}">Quản lý bình luận</a>
            </li>

        </ul>

    </div>

</nav>
<!-- /. NAV SIDE  -->
