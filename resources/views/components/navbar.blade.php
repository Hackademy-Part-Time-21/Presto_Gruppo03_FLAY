<nav class="navbar navbar-expand-lg bg-white sticky-top">
    <div class="container-fluid ">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        {{-- <nav class="navbar bg-body-tertiary">
        </nav> --}}
        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('logo.png') }}" style="width:120px;"
                alt="Logo del sito"></a>



        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mb-2 mb-lg-0">


                {{-- bandiere --}}
                <div class="dropdown">
                    <button class="nav-link dropdown-toggle fw-semibold fst-italic" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    {{ __('ui.ling') }}
                </button>


                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><x-_locale lang='it' nation='it' /></a></li>
                        <li><a class="dropdown-item" href="#"><x-_locale lang='en' nation='gb' /></a></li>
                        <li><a class="dropdown-item" href="#"><x-_locale lang='fr' nation='fr' /></a></li>
                    </ul>
                </div>

             
                

                {{-- <li class="nav-item">
                    <x-_locale lang='it' nation='it' />
                </li>

                <li class="nav-item">
                    <x-_locale lang='en' nation='gb' />
                </li>

                <li class="nav-item">
                    <x-_locale lang='fr' nation='fr' />
                </li> --}}


                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page"
                        href="{{ route('announcements.index') }}">{{ __('ui.nav_ann') }}</a>
                </li>

                {{-- DropDown categorie --}}
                {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{__('ui.cat')}}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                            @foreach ($categories as $category)
                                <li><a class="dropdown-item"
                                        href="{{ route('categoryShow', compact('category')) }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li> --}}
            </ul>



            <ul class="navbar-nav ms-auto montserrat-regular fs-6 me-4">
                {{-- <li class="d-flex "> --}}
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('ui.login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}"> {{ __('ui.register') }}</a>
                    </li>
                @else
                    <li>
                        <a class="nav-link active" aria-current="page"
                            href="{{ route('announcements.create') }}"><i class="fa-solid text-info fa-bullhorn"></i> {{ __('ui.creaNav') }}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-semibold fst-italic text-info" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" id="tab-login" data-mdb-pill-init href="#" role="tab"
                                    aria-controls="pills-logout" aria-selected="true"
                                    onclick="
                                    event.preventDefault();
                                    getElementById('form-logout').submit();
                                    ">Logout</a>
                                <form action="/logout" method="POST" id="form-logout">@csrf</form>
                            </li>
                        </ul>
                    </li>

                    @if (Auth::user()->is_revisor)
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-info btn-sm position-relative" aria-current="page"
                                href="{{ route('revisor.index') }}">
                                {{ __('ui.areaRev') }}
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    {{ App\Models\Announcement::toBeRevisionedCount() }}
                                    <span class="visually-hidden">Messaggio non letto</span>
                                </span>
                            </a>
                        </li>
                        </li>
                    @endif
                @endguest
            </ul>
        </div>
    </div>
</nav>




{{-- <li> --}}
{{-- <div class=" justify-content-end ">
                        <form action="{{ route('announcement.search') }}" method="GET" class="d-flex">
                            <input type="search" name="searched" class="form-control me-2" style="width: 100%"
                                placeholder='Cosa stai cercando?' aria-label='Search'>
                            <button class="btn btn-outline-success" type='submit'>Cerca</button>
                        </form>
                    </div> --}}
{{-- 
        </li> --}}
