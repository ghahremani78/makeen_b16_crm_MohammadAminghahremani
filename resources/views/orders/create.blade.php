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
      <form action="/orders/create"method="post">
        @csrf
        <h2>ایجاد سفارش</h2>
        <div class="mb-3 mt-3">
          <label for="nameproduct" class="form-label">نام محصول:</label>
          <input
            type="text"
            class="form-control"
            id="nameproduct"
            placeholder="نام محصول را وارد نمایید"
            name="nameproduct"
          />
          @error('nameproduct')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-3 mt-3">
          <label for="selectcolor" class="form-label">رنگ را انتخاب کنید:</label>
          <input
            type="text"
            class="form-control"
            id="selectcolor"
            placeholder="رنگ محصول را وارد نمایید"
            name="selectcolor"
          />
          />
          @error('selectcolor')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-3 mt-3">
          <label for="num" class="form-label">تعداد:</label>
          <input
            type="text"
            class="form-control"
            id="num"
            placeholder="تعداد مورد نیاز را وارد نمایید"
            name="num"
          />
          @error('num')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-3 mt-3">
          <label for="paymenttype
          " class="form-label">نوع پرداخت را تعیین کنید:</label>
          <input
            type="text"
            class="form-control"
            id="paymenttype"
            placeholder="نوع پرداخت را تعین کنید"
            name="paymenttype"
          />
          @error('paymenttype')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-3 mt-3">
          <label for="locationn" class="form-label">آدرس:</label>
          <input
            type="text"
            class="form-control"
            id="location"
            placeholder="آدرس راوارد نمایید"
            name="location"
          />
          @error('location')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
        <div class="mb-3 mt-3">
          <label for="codeposti" class="form-label"> کد پستی را وارد کنید:</label>
          <input
            type="text"
            class="form-control"
            id="codeposti"
            placeholder="سیستم عامل راوارد نمایید"
            name="codeposti"
          />
          @error('codeposti')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
        
        </div>
          <div class="container">
          <label for="transferee" class="form-label"> دونفر به عنوان تحویل گیرنده تعیین کنید:</label>
          <input
            type="text"
            class="form-control"
            id="transferee"
            placeholder="دونفر به عنوان تحویل گیرنده تعیین کنید"
            name="transferee"
          />
          @error('transferee')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <div class="container">
          <label for="customername" class="form-label">نام و نام خانوادگی خریدار:</label>
          <input
            type="text"
            class="form-control"
            id="customername"
            placeholder="نام و نام خانوادگی خریدار:"
            name="customername"
          />
          @error('customername')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <div class="container">
          <label for="mobile " class="form-label"> شماره تلفن همراه:</label>
          <input
            type="text"
            class="form-control"
            id="mobile "
            placeholder="شماره تلفن همراه"
            name="mobile"
          />
          @error('mobile')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
        
        <div class="container">
            <label for="homephonenumber" class="form-label"> شماره تلفن منزل:</label>
            <input
              type="text"
              class="form-control"
              id="homephonenumber "
              placeholder="شماره تلفن منزل"
              name="homephonenumber"
            />
            @error('homephonenumber')
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
