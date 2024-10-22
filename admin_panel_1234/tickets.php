<?php include_once 'page/header.php'?>
<?php include_once 'page/sidebar.php'?>
    <div class="main-content tickets">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item is-active" href="tickets.html">همه تیکت ها</a>
                <a class="tab__item " href="tickets.html">جدید ها (خوانده نشده)</a>
                <a class="tab__item " href="tickets.html">پاسخ داده شده ها</a>
                <a class="tab__item " href="create-ticket.html">ارسال تیکت جدید</a>
            </div>
        </div>
        <div class="bg-white padding-20">
            <div class="t-header-search">
                <form action="" onclick="event.preventDefault();">
                    <div class="t-header-searchbox font-size-13">
                        <input type="text" class="text search-input__box font-size-13" placeholder="جستجوی در تیکت ها">
                        <div class="t-header-search-content ">
                            <input type="text"  class="text"  placeholder="ایمیل">
                            <input type="text"  class="text "  placeholder="نام و نام خانوادگی">
                            <input type="text"  class="text margin-bottom-20"  placeholder="تاریخ">
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
                    <th>نام ارسال کننده</th>
                    <th>ایمیل ارسال کننده</th>
                    <th>آخرین بروزرسانی</th>
                    <th>وضعیت</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                <tr role="row" >
                    <td><a href="">1</a></td>
                    <td><a href="">تست</a></td>
                    <td><a href="">mmd@gmail.com</a></td>
                    <td>1399/05/01</td>
                    <td class="text-info">جدید</td>
                    <td>
                        <a href="" class="item-delete mlg-15" title="حذف"></a>
                        <a href="show-comment.html" target="_blank" class="item-eye mlg-15" title="مشاهده"></a>
                        <a href="edit-comment.html" class="item-edit " title="ویرایش"></a>
                    </td>
                </tr>
                <tr role="row" >
                    <td><a href="">1</a></td>
                    <td><a href="">تست</a></td>
                    <td><a href="">mmd@gmail.com</a></td>
                    <td>1399/05/01</td>
                    <td class="text-success">پاسخ داده شده</td>
                    <td>
                        <a href="" class="item-delete mlg-15" title="حذف"></a>
                        <a href="show-comment.html" target="_blank" class="item-eye mlg-15" title="مشاهده"></a>
                        <a href="edit-comment.html" class="item-edit " title="ویرایش"></a>
                    </td>
                </tr>
                <tr role="row" class="close-status">
                    <td><a href="">1</a></td>
                    <td><a href="">تست</a></td>
                    <td><a href="">mmd@gmail.com</a></td>
                    <td>1399/05/01</td>
                    <td>بسته شده</td>
                    <td>
                        <a href="" class="item-delete mlg-15" title="حذف"></a>
                        <a href="show-comment.html" target="_blank" class="item-eye mlg-15" title="مشاهده"></a>
                        <a href="edit-comment.html" class="item-edit " title="ویرایش"></a>
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