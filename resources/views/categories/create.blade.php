<html lang="en" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>لیست دسته بندی</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-sm bg-light container">
      <div class="container-fluid">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="C:\xampp\htdocs\projects\crm\login.html">ورود</a></li>
          <li class="nav-item"><a class="nav-link" href=/users/create >ثبت نام</a></li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">دسته بندی</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">موبایل</a></li>
              <li><a class="dropdown-item" href="#">تبلت</a></li>
              <li><a class="dropdown-item" href="#">لوازم جانبی</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href=/products/index>محصولات</a></li>
          <li class="nav-item"><a class="nav-link" href=/orders/index>سفارشات</a></li>
          <li class="nav-item"><a class="nav-link" href="/users/index">کاربران</a></li>
          <li class="nav-item"><a class="nav-link" href="C:\xampp\htdocs\projects\crm\posts\list.html">مجله</a></li>
        </ul>
      </div>
    </nav>

      <div class="container">
      <form action="/categories/create"method="post">
        @csrf
        <h2>ایجاد دسته بندی</h2>
        <div class="mb-3 mt-3">
          <label for="categoryname" class="form-label">نام دسته بندی:</label>
          <input
            type="text"
            class="form-control"
            id="categoryname"
            placeholder="نام دسته بندی را وارد نمایید"
            name="categoryname"
          />
          @error('categoryname')
          <span class="text-danger">{{ $message }}</span>
          @enderror

        </div>

        <div class="mb-3 mt-3">
          <label for="description" class="form-label"> توضیحات:</label>
          <input
            type="text"
            class="form-control"
            id="description"
            placeholder="توضیحات را وارد نمایید"
            name="description"
          />
          @error('description')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
      <div class="container">
        <button type="submit" class="btn btn-primary">
          ثبت
        </button>
        </div>
      </div>
    </div>
    </form>
  </body>
</html>
