<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <form class="form-inline mx-auto"> <!-- mx-auto để căn giữa form -->
      <div class="input-group input-group-lg"> <!-- input-group-lg để làm form lớn hơn -->
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" style="width: 400px;"> <!-- Điều chỉnh độ rộng -->
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
        
      </div>
    </form>
    <!-- Form đăng xuất -->
    <form method="POST" action="{{ route('logout') }}" class="ml-3">
    @csrf
    <button type="submit" class="btn btn-outline-danger">Đăng xuất</button>
</form>

</nav>
