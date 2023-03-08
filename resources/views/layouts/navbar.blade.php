<div class="navbar d-flex justify-content-between align-items-center bg-light shadow-sm p-0 m-0 px-3" style="height: 7vh">
    <div class="col-2 h-100 d-flex justify-content-start align-items-center">
        <h4 class="ms-3">
            Nama Brand
        </h4>
    </div>
    <div class="col-4 h-100 d-flex justify-content-evenly align-items-center">
        <a href="#">Home</a>
        <a href="#">About Us</a>
        <a href="#">Produk</a>
        <a href="#">Contact</a>
    </div>
    <div class="col-1">
        <form action="/logout" method="POST">
            @csrf
            <button class="btn btn-info py-0">Logout</button>
        </form>
    </div>
</div>