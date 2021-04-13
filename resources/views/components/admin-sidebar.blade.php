<div class="sidebar">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
  -->
    <div class="sidebar-wrapper">
        <div class="logo">
            <span class="simple-text logo-mini">Dashboard</span>
        </div>
        <ul class="nav">
            <li class="">
                <a href="{{route('admin.categories.index')}}">
                    <i class="tim-icons icon-notes"></i>
                    <p>Категории</p>
                </a>
            </li>
            <li>
                <a href="{{route('admin.news.index')}}">
                    <i class="fas fa-newspaper"></i>
                     <p>Новости</p>
                </a>
            </li>
        </ul>
    </div>
</div>
