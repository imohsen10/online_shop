<div class="sidebar__nav border-top border-left  ">
    <span class="bars d-none padding-0-18"></span>
    <a class="header__logo  d-none" href="https://netcopy.ir"></a>
    <div class="profile__info border cursor-pointer text-center">
        <div class="avatar__img"><img src="img/pro.jpg" class="avatar___img">
            <input type="file" accept="image/*" class="hidden avatar-img__input">
            <div class="v-dialog__container" style="display: block;"></div>
            <div class="box__camera default__avatar"></div>
        </div>
        <span class="profile__name">کاربر : محسن</span>
    </div>

    <?php
    $current_page = basename($_SERVER['PHP_SELF']);
    ?>

    <ul>
        <li class="item-li i-dashboard <?php echo ($current_page == 'index.php') ? 'is-active' : ''; ?>"><a href="index.php">پیشخوان</a></li>
        <li class="item-li i-courses <?php echo ($current_page == 'courses.php') ? 'is-active' : ''; ?>"><a href="courses.php">دوره ها</a></li>
        <li class="item-li i-users <?php echo ($current_page == 'users.php') ? 'is-active' : ''; ?>"><a href="users.php">کاربران</a></li>
        <li class="item-li i-categories <?php echo ($current_page == 'categories.php') ? 'is-active' : ''; ?>"><a href="categories.php">دسته بندی ها</a></li>
        <li class="item-li i-slideshow <?php echo ($current_page == 'slideshow.php') ? 'is-active' : ''; ?>"><a href="slideshow.php">اسلایدشو</a></li>
        <li class="item-li i-banners <?php echo ($current_page == 'banners.php') ? 'is-active' : ''; ?>"><a href="banners.php">بنر ها</a></li>
        <li class="item-li i-articles <?php echo ($current_page == 'articles.php') ? 'is-active' : ''; ?>"><a href="articles.php">مقالات</a></li>
        <li class="item-li i-ads <?php echo ($current_page == 'ads.php') ? 'is-active' : ''; ?>"><a href="ads.php">تبلیغات</a></li>
        <li class="item-li i-comments <?php echo ($current_page == 'comments.php') ? 'is-active' : ''; ?>"><a href="comments.php">نظرات</a></li>
        <li class="item-li i-tickets <?php echo ($current_page == 'tickets.php') ? 'is-active' : ''; ?>"><a href="tickets.php">تیکت ها</a></li>
        <li class="item-li i-discounts <?php echo ($current_page == 'discounts.php') ? 'is-active' : ''; ?>"><a href="discounts.php">تخفیف ها</a></li>
        <li class="item-li i-transactions <?php echo ($current_page == 'transactions.php') ? 'is-active' : ''; ?>"><a href="transactions.php">تراکنش ها</a></li>
        <li class="item-li i-checkouts <?php echo ($current_page == 'checkouts.php') ? 'is-active' : ''; ?>"><a href="checkouts.php">تسویه حساب ها</a></li>
        <li class="item-li i-checkout__request <?php echo ($current_page == 'checkout-request.php') ? 'is-active' : ''; ?>"><a href="checkout-request.php">درخواست تسویه</a></li>
        <li class="item-li i-my__purchases <?php echo ($current_page == 'mypurchases.php') ? 'is-active' : ''; ?>"><a href="mypurchases.php">خرید های من</a></li>
        <li class="item-li i-my__peyments <?php echo ($current_page == 'mypeyments.php') ? 'is-active' : ''; ?>"><a href="mypeyments.php">پرداخت های من</a></li>
        <li class="item-li i-notification__management <?php echo ($current_page == 'notification-management.php') ? 'is-active' : ''; ?>"><a href="notification-management.php">مدیریت اطلاع رسانی</a></li>
        <li class="item-li i-user__inforamtion <?php echo ($current_page == 'user-information.php') ? 'is-active' : ''; ?>"><a href="user-information.php">اطلاعات کاربری</a></li>
    </ul>



</div>
