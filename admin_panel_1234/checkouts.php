<?php include_once 'page/header.php'?>
<?php include_once 'page/sidebar.php'?>
    <div class="main-content">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item is-active" href="checkouts.html"> همه تسویه ها</a>
                <a class="tab__item " href="checkouts.html">تسویه های جدید</a>
                <a class="tab__item " href="checkouts.html">تسویه های واریز شده</a>
                <a class="tab__item " href="checkout-request.php">درخواست تسویه جدید</a>
            </div>
        </div>
        <div class="bg-white padding-20">
            <div class="t-header-search">
                <form action="" onclick="event.preventDefault();">
                    <div class="t-header-searchbox font-size-13">
                        <input type="text" class="text search-input__box font-size-13"
                               placeholder="جستجوی در تسویه حساب ها">
                        <div class="t-header-search-content ">
                            <input type="text" class="text" placeholder="شماره کارت">
                            <input type="text" class="text" placeholder="شماره">
                            <input type="text" class="text" placeholder="تاریخ">
                            <input type="text" class="text" placeholder="ایمیل">
                            <input type="text" class="text margin-bottom-20" placeholder="نام و نام خانوادگی">
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
                    <th>شناسه تسویه</th>
                    <th>مبدا</th>
                    <th>مقصد</th>
                    <th>شماره کارت</th>
                    <th>تاریخ درخواست واریز</th>
                    <th>تاریخ واریز شده</th>
                    <th>مبلغ (تومان )</th>
                    <th>وضعیت</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                <tr role="row">
                    <td><a href="">40851</a></td>
                    <td><a href="">mohsenzone.ir</a></td>
                    <td><a href="">محسن شیخ الاسلامی</a></td>
                    <td><a href="">6037691581560950</a></td>
                    <td><a href="">2 روز پیش</a></td>
                    <td><a href=""> 1 روز پیش</a></td>
                    <td><a href="">1,430,000</a></td>
                    <td><a href="" class="text-success">تسویه شده</a></td>
                    <td>
                        <a href="" class="item-delete mlg-15" title="حذف"></a>
                        <a href="show-comment.html"  class="item-reject mlg-15" title="رد"></a>
                        <a href="show-comment.html"  class="item-confirm mlg-15" title="تایید"></a>
                        <a href="edit-comment.html" class="item-edit " title="ویرایش"></a>
                    </td>
                </tr>
                <tr role="row">
                    <td><a href="">40851</a></td>
                    <td><a href="">mohsenzone.ir</a></td>
                    <td><a href="">محسن شیخ الاسلامی</a></td>
                    <td><a href="">6037691581560950</a></td>
                    <td><a href="">2 روز پیش</a></td>
                    <td><a href=""> 1 روز پیش</a></td>
                    <td><a href="">1,430,000</a></td>
                    <td><a href="" class="text-error">رد شده</a></td>
                    <td>
                        <a href="" class="item-delete mlg-15" title="حذف"></a>
                        <a href="show-comment.html"  class="item-reject mlg-15" title="رد"></a>
                        <a href="show-comment.html"  class="item-confirm mlg-15" title="تایید"></a>
                        <a href="edit-comment.html" class="item-edit " title="ویرایش"></a>
                    </td>
                </tr>
                <tr role="row">
                    <td><a href="">40851</a></td>
                    <td><a href="">mohsenzone.ir</a></td>
                    <td><a href="">محسن شیخ الاسلامی</a></td>
                    <td><a href="">6037691581560950</a></td>
                    <td><a href="">2 روز پیش</a></td>
                    <td><a href=""> 1 روز پیش</a></td>
                    <td><a href="">1,430,000</a></td>
                    <td><a href="" class="text-warning">در انتظار واریز</a></td>
                    <td>
                        <a href="" class="item-delete mlg-15" title="حذف"></a>
                        <a href="show-comment.html"  class="item-reject mlg-15" title="رد"></a>
                        <a href="show-comment.html"  class="item-confirm mlg-15" title="تایید"></a>
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