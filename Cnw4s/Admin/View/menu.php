<style>

        .sidebar-menu li:hover {
            background-color: #E6E6FA; /* Màu khi di chuột qua */
        }

        /* Màu chữ khi di chuột qua */
        .sidebar-menu li:hover a {
            color: #BA55D3; /* Màu chữ khi di chuột qua */
        }

        /* Màu khi button được click */
        .sidebar-menu li.active {
            background-color: #FFD700; /* Màu khi button được click */
        }

        /* Màu chữ khi button được click */
        .sidebar-menu li.active a {
            color: #4CAF50; /* Màu chữ khi button được click */
        }
</style>
<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="?act=home"> <img alt="image" src="assets/img/logo2.png" class="header-logo" /> <span
          class="logo-name">Trang Anh </span>
      </a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Main</li>
      <li class="dropdown active">
        <a href="?act=home" name="act" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
      </li>
      <li class="dropdown " id="customer">
        <a class="nav-link" href="?act=view-acc"><i data-feather="users"></i><span>Customer</span></a></li>
      <li><a class="nav-link" href="?act=view-product"><i data-feather="briefcase"></i><span>Product</span></a></li>
      <li><a class="nav-link" href="?act=view-type"><i data-feather="sliders"></i><span>Product-Type</span></a></li>
      <li><a class="nav-link" href="?act=order"><i data-feather="clipboard"></i><span>Order</span></a></li>
      <li><a class="nav-link" href="?act=view-cate"><i data-feather="box"></i><span>Category</span></a></li>
      <li><a class="nav-link" href="?act=view-prm"><i data-feather="gift"></i><span>Promotion</span></a></li>
     
    </ul>
  </aside>
</div>
<script>
        // JavaScript để xử lý sự kiện click và giữ nguyên màu sắc
        var menuItems = document.querySelectorAll('.sidebar-menu li');

        menuItems.forEach(function(item) {
            item.addEventListener('click', function() {
                // Thêm hoặc xóa lớp 'active' tùy thuộc vào trạng thái hiện tại
                item.classList.toggle('active');
            });
        });
    </script>
