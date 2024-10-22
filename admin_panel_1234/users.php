<?php include_once 'page/header.php'?>
<?php include_once 'page/sidebar.php'?>
    <div class="main-content font-size-13">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item is-active" href="users.html">همه کاربران</a>
                <a class="tab__item" href="">مدیران</a>
                <a class="tab__item" href="">مدرسین</a>
                <a class="tab__item" href="">نویسنده</a>
                <a class="tab__item" href="">کاربران تاییده نشده</a>
                <a class="tab__item" href="">کاربران تایید شده</a>
                <a class="tab__item" href="create-user.php">ایجاد کاربر جدید</a>
            </div>
        </div>
        <div class="d-flex flex-space-between item-center flex-wrap padding-30 border-radius-3 bg-white">
            <div class="t-header-search">
                <form action="" onclick="event.preventDefault();">
                    <div class="t-header-searchbox font-size-13">
                        <input type="text" class="text search-input__box font-size-13" placeholder="جستجوی کاربر">
                        <div class="t-header-search-content ">
                            <input type="text"  class="text"  placeholder="ایمیل">
                            <input type="text"  class="text" placeholder="شماره">
                            <input type="text"  class="text" placeholder="آی پی">
                            <input type="text"  class="text margin-bottom-20" placeholder="نام و نام خانوادگی">
                            <btutton class="btn btn-netcopy_net">جستجو</btutton>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="table__box">
            <table class="table">
                <thead role="rowgroup">
                <tr role="row" class="title-row">
                    <th>شناسه</th>
                    <th>نام و نام خانوادگی</th>
                    <th>ایمیل</th>
                    <th>شماره موبایل</th>
                    <th>سطح کاربری</th>
                    <th>تاریخ عضویت</th>
                    <th>ای پی</th>
                    <th>درحال یادگیری</th>
                    <th>وضعیت حساب</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                <tr role="row" class="">
                    <td><a href="">1</a></td>
                    <td><a href="">محسن</a></td>
                    <td>programming@gmail.com</td>
                    <td>09276108107</td>
                    <td>کاربر عادی</td>
                    <td>1399/11/11</td>
                    <td>148.12.12.1</td>
                    <td>5 دوره</td>
                    <td class="text-success">تاییده شده</td>
                    <td>
                        <a href="" class="item-delete mlg-15" title="حذف"></a>
                        <a href="" class="item-confirm mlg-15" title="تایید"></a>
                        <a href="" class="item-reject mlg-15" title="رد"></a>
                        <a href="edit-user.html" target="_blank" class="item-eye mlg-15" title="مشاهده"></a>
                        <a href="edit-user.html" class="item-edit " title="ویرایش"></a>
                    </td>
                </tr>
                <tr role="row" class="">
                    <td><a href="">1</a></td>
                    <td><a href="">محسن</a></td>
                    <td>programming@gmail.com</td>
                    <td>09276108107</td>
                    <td>کاربر عادی</td>
                    <td>1399/11/11</td>
                    <td>148.12.12.1</td>
                    <td>5 دوره</td>
                    <td class="text-error">تایید نشده</td>
                    <td>
                        <a href="" class="item-delete mlg-15" title="حذف"></a>
                        <a href="" class="item-confirm mlg-15" title="تایید"></a>
                        <a href="" class="item-reject mlg-15" title="رد"></a>
                        <a href="edit-user.html" target="_blank" class="item-eye mlg-15" title="مشاهده"></a>
                        <a href="edit-user.html" class="item-edit " title="ویرایش"></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/js.js"></script>
</html>