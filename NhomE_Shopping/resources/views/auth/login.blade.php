<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Đăng Nhập - Hệ Thống Quản Trị</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome từ CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('admin_template/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin_template/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Hệ Thống</b> Quản Trị</a>
  </div>

  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Vui lòng đăng nhập để tiếp tục</p>

      <!-- Hiển thị thông báo thành công nếu có -->
      @if (session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif

      <!-- Hiển thị lỗi đăng nhập nếu có -->
      @if (session('error'))
        <div class="alert alert-danger">
          {{ session('error') }}
        </div>
      @endif

      <!-- Hiển thị các lỗi xác thực -->
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul class="mb-0">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <!-- Form đăng nhập -->
      <form action="{{ route('login.post') }}" method="POST">
        @csrf
        <!-- Trường Email -->
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Nhập email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <!-- Trường Mật khẩu -->
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu" required id="password">
          <div class="input-group-append">
            <button type="button" class="btn btn-outline-secondary" onclick="togglePassword()" title="Hiển thị/Ẩn mật khẩu">
              <i class="fas fa-eye" id="eye-icon"></i>
            </button>
          </div>
        </div>

        <!-- Nút Đăng nhập -->
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
          </div>
        </div>

        <!-- Liên kết hỗ trợ -->
        <div class="row mt-3">
          <div class="col-12 text-center">
          <a href="#" class="text-muted">Quên mật khẩu?</a> <!-- Thay đổi route nếu cần -->
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eye-icon');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.classList.remove('fa-eye');
            eyeIcon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
        }
    }
</script>
</body>
</html>