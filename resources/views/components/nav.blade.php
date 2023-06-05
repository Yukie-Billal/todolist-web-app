<nav class="navbar navbar-expand-sm navbar-light bg-white">
    <div class="nav-content py-1 px-3">
        <i class="fa-solid fa-bars fs-5 cursor-pointer" data-toggle="sidebar" onclick="toggleNav()"></i>
        <div class="menu-wrap" x-data="{
            open : false
        }">
            <img src="{{ asset('img/default.png') }}" alt="asd" class="img-fluid rounded-circle me-1" width="32px" @click="open = !open">
            <span @click="open = !open">Profile</span>
            <i class="fas fa-chevron-down text-secondary" style="font-size: 14px" @click="open = !open"></i>
            <div class="dropdown-menu-wrap position-absolute" 
                x-show="open" @click.outside="open = false"
                x-transition
            >
                <ul class="list-unstyled d-flex justify-content-center flex-column m-0">
                    <li class="menu-list">
                        <i class="fa fa-list-ul" aria-hidden="true"></i>
                        Dashboard
                    </li>
                    <li class="list-separator"></li>
                    <li class="menu-list">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                        Logout
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
@push('scripts')
    <script>
        function toggleNav() {
            let sidebar = document.querySelector('.sidebar');
            if (sidebar.classList.contains('show')) {
                sidebar.style.width = '0';
                sidebar.classList.remove('show')
                document.querySelector('.content').style.marginLeft = '0';
            } else {
                sidebar.style.width = '240px';
                sidebar.classList.add('show');
                document.querySelector('.content').style.marginLeft = '240px';
            }
        }
    </script>
@endpush