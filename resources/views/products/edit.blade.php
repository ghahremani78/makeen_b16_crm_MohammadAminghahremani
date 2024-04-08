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
  <form action="/products/edit/{{ $product->id }}" method="post">
        <h2>ویرایش  محصول</h2>
        @csrf
        <div class="mb-3 mt-3">
          <label for="brandname" class="form-label">برند محصول:</label>
          <input
            type="text"
            class="form-control"
            id="brandname"
            placeholder="برند محصول را وارد نمایید"
            name="brandname"
            value="{{ $product->brandname }}"
          />
          @error('brandname')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-3 mt-3">
          <label for="productsname" class="form-label">نام محصول:</label>
          <input
            type="text"
            class="form-control"
            id="productsname"
            placeholder="نام محصول را وارد نمایید"
            name="productsname"
            value="{{ $product->productsname }}"
          />
          @error('productsname')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-3 mt-3">
          <label for="company" class="form-label">کشورسازنده:</label>
          <input
            type="text"
            class="form-control"
            id="company"
            placeholder="کشورسازنده را وارد نمایید"
            name="company"
            value="{{ $product->company }}"
          />
          @error('company')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-3 mt-3">
          <label for="price" class="form-label">قیمت:</label>
          <input
            type="text"
            class="form-control"
            id="price"
            placeholder="قیمت را وارد نمایید"
            name="price"
            value="{{ $product->price }}"
          />
          @error('price')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-3 mt-3">
          <label for="memory" class="form-label">حافظه داخلی:</label>
          <input
            type="text"
            class="form-control"
            id="memory"
            placeholder="حافظه داخلی راوارد نمایید"
            name="memory"
            value="{{ $product->memory }}"

          />
          @error('memory')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
        <div class="mb-3 mt-3">
          <label for="operatingsystem" class="form-label"> سیستم عامل:</label>
          <input
            type="text"
            class="form-control"
            id="operatingsystem"
            placeholder="سیستم عامل راوارد نمایید"
            name="operatingsystem"
            value="{{ $product->operatingsystem }}"
          />
          @error('operatingsystem')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
        
        </div>
          <div class="container">
          <label for="color" class="form-label"> رنگ:</label>
          <input
            type="text"
            class="form-control"
            id="color"
            placeholder="رنگ راوارد نمایید"
            name="color"
            value="{{ $product->color }}"
          />
          @error('color')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <div class="container">
          <label for="inventorystatus" class="form-label"> وضعیت موجودی:</label>
          <input
            type="text"
            class="form-control"
            id="inventorystatus"
            placeholder="وضعیت موجودی راوارد نمایید"
            name="inventorystatus"
            value="{{ $product->inventorystatus }}"
          />
          @error('inventorystatus')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <div class="container">
          <label for="description" class="form-label"> توضیحات:</label>
          <input
            type="text"
            class="form-control"
            id="description"
            placeholder="توضیحات راوارد نمایید"
            name="description"
            value="{{ $product->description }}"
          />
          @error('description')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
      <div class="container">
        <input type="submit" value="send">
</body>
</html>