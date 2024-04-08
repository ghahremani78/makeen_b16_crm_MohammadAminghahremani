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
  

    <div class="container mt-3">
      <h2>کاربران</h2>
      <button type="submit" class="btn btn-light">
        <a href="/users/create">کاربر جدید</a>
      </button>
      <br />
      <br />
      <table class="table table-bordered">
        <thead>
        <tr>
          <th>id</th>
          <th>نام و نام خانوادگی</th>
          <th>کد ملی</th>
          <th>شماره همراه</th>
          <th>تاریخ تولد</th>
          <th>جنسیت</th>
          <th>ایمیل</th>
          <th>ویرایش/حذف</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
          
          <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->codeMelli }}</td>
              <td>{{ $user->phoneNumber }}</td>
              <td>{{ $user->birthDate }}</td>
              <td>{{ $user->gender }}</td>
              <td>{{ $user->email }}</td>
              <td>
                      
                            <a href="/users/edit/ {{ $user->id }}"  >ویرایش</a>
                       
                         <form action="/users/delete/ {{ $user->id }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="حذف">
                        </form>
            </td>
            
          </tr>
          @endforeach
          
      </table>
    </div>
   
  </body>
</html>
