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
      <form action="/users/edit/{{ $users->id }}" method="post">
      @csrf
        <h2>ویرایش کاربر </h2>
        @csrf
        <div class="mb-3 mt-3">
        @csrf
          <label class="form-label">نام و نام خانوادگی:</label>
          <input
            type="text"
            class="form-control"
            placeholder="نام و نام خانوادگی را وارد نمایید"
            name="name"
            value="{{ $users->name }}"
          />
          @error('name')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-3 mt-3">
        @csrf
          <label class="form-label">کد ملی</label>
          <input
            type="text"
            class="form-control"
            placeholder="کد ملی را وارد نمایید"
            name="codeMelli"
            value="{{ $users->codeMelli }}"

          />
          @error('codeMelli')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-3 mt-3">
        @csrf
          <label class="form-label">شماره همراه:</label>
          <input
            type="text"
            class="form-control"
            placeholder="شماره همراه را وارد نمایید"
            name="phoneNumber"
            value="{{ $users->phoneNumber }}"
          />
          @error('phoneNumber')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-3">
        @csrf
          <label class="form-label">تاریخ تولد:</label>
          <input
            type="date"
            class="form-control"
            placeholder="تاریخ تولد را وارد نمایید"
            name="birthDate"
            value="{{ $users->birthDate }}"
          />
          @error('birthDate')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-3">
        @csrf
          <label class="form-label">جنسیت:</label>
          <select class="form-control" name="gender">
            <option value="مرد"{{ $users->gender == 'مرد' ? 'selected' : '' }}>مرد</option>
            <option value="زن"{{ $users->gender == 'زن' ? 'selected' : '' }}>زن</option>
            
          </select> 
          @error('gener')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-3 mt-3">
        @csrf
          <label class="form-label">ایمیل:</label>
          <input
            type="text"
            class="form-control"
            placeholder="ایمیل را وارد نمایید"
            name="email"
            value="{{ $users->email }}"
          />
          @error('email')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-3">
        @csrf
          <label class="form-label">رمز عبور:</label>
          <input
            type="password"
            class="form-control"
            placeholder="رمز عبور را وارد نمایید"
            name="password"
            value="{{ $users->password }}"
          />
          @error('password')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <button type="submit" value="send" class="btn btn-light">ثبت</button>
      </form>
    </div>

  </body>
</html>
