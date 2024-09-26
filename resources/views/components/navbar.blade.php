<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">ชื่อเว็บไซต์</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin') }}">ข้อมูลโปรแกรมสอน</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin_teacher') }}">ข้อมูลผู้สอน</a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="nav-link btn btn-link">ออกจากระบบ</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
