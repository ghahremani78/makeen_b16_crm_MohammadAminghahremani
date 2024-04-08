<html lang="en" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>مقالات</title>
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
        <h2>ایجاد سفارش</h2>
        <div class="mb-3 mt-3">
          <label for="descriptionpost" class="form-label">توضیحات مقاله :</label>
          <input
            type="textarea"
            class="form-control"
            id="descriptionpost"
            placeholder="توضیحات را وارد کنید"
            name="descriptionpost"
          />
        </div>

        <div class="mb-3">
          <label class="form-label">انتخاب دسته بندی:</label>
          <select class="form-control" name="categoryselect">
            <option value=""></option>
            <option value=""></option>
          </select> 
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
