<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('dashboard') }}">Book Manager</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('books.index') }}">Books</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('authors.index') }}">Authors</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('report.form') }}">Reports</a></li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item"><span class="nav-link">Hello, {{ auth()->user()->name }}</span></li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="btn btn-link nav-link" type="submit">Logout</button>
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
