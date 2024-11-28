<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
      <div class="image">
        <img src="{{ asset('admin_template/images/admin-avatar.png') }}" class="img-circle elevation-2" alt="Admin Image">
      </div>
      <div class="info ml-2">
        <a href="#" class="d-block text-light font-weight-bold">ADMIN</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="/dashboard/index" class="nav-link text-light">
            <i class="nav-icon fas fa-chart-pie text-light"></i>
            <p class="ml-2">
              Theo dõi & Thống kê
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('categories.index') }}" class="nav-link text-light">
            <i class="nav-icon fas fa-th text-light"></i>
            <p class="ml-2">
              Loại sản phẩm
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('products.index') }}" class="nav-link text-light">
            <i class="nav-icon fas fa-boxes text-light"></i>
            <p class="ml-2">
              Sản phẩm
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('orders.index') }}" class="nav-link text-light">
            <i class="nav-icon fas fa-shopping-cart text-light"></i>
            <p class="ml-2">
              Đơn hàng
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('statistics.index') }}" class="nav-link text-light">
            <i class="nav-icon fas fa-dollar-sign text-light"></i>
            <p class="ml-2">
              Doanh số
            </p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>

<style>
/* Tăng kích cỡ và thêm khoảng cách cho icon */
.nav-sidebar .nav-icon {
    font-size: 1.2rem;
    margin-right: 8px;
}

/* Tạo hiệu ứng khi hover vào mục menu */
.nav-sidebar .nav-link {
    transition: background-color 0.3s, color 0.3s;
}
.nav-sidebar .nav-link:hover {
    background-color: #1d1d1d;
    color: #ffffff !important;
}

/* Thay đổi kích thước và viền cho ảnh đại diện */
.user-panel .image img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
}

/* Thiết lập font chữ và màu cho tên admin */
.user-panel .info a {
    font-size: 1rem;
    color: #ffffff;
    font-weight: bold;
}
.user-panel .info a:hover {
    color: #ddd;
}
</style>
