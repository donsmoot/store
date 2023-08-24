<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="assets/admin/images/logo-icon.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Onedash</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class="bi bi-list"></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li class="menu-label">Контент</li>
        <li class="mm-active">
            <a class="has-arrow" href="javascript:;" aria-expanded="true">
                <div class="parent-icon"><i class="fadeIn animated bx bx-edit"></i>
                </div>
                <div class="menu-title">Контент</div>
            </a>
            <ul class="mm-collapse" style="">
                <li> <a href="{{ route('admin.category.index') }}"><i class="bi bi-circle"></i>Категории</a>
                </li>
                <li> <a href="table-advance-tables.html"><i class="bi bi-circle"></i>Теги</a>
                </li>
                <li> <a href="table-datatable.html"><i class="bi bi-circle"></i>Посты</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="pages-user-profile.html">
                <div class="parent-icon"><i class="bi bi-person-lines-fill"></i>
                </div>
                <div class="menu-title">User Profile</div>
            </a>
        </li>
    </ul>

    <!--end navigation-->
</aside>
