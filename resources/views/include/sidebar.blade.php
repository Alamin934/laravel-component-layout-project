<div class="text-center px-2">
    <img src="{{ asset('images/me.jpeg') }}" alt="Profile" class="img-fluid rounded-circle mt-3">
    <h3 class="font-satisfy mt-4">Al-Amin</h3>
</div>
<div class="text-center">
    <ul class="nav flex-column mt-4">
        <li class="nav-item">
            <a class="nav-link {{Request::routeIs('home') ? 'active' : ''}}" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{Request::routeIs('skills') ? 'active' : ''}}" href="{{ route('skills') }}">Skills</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{Request::routeIs('services') ? 'active' : ''}}" href="{{ route('services') }}">Services</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{Request::routeIs('contact') ? 'active' : ''}}" href="{{ route('contact') }}">Contact</a>
        </li>
    </ul>
</div>