<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/admin/dashboard') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ '/admin/settings '}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Settings</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Ads </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ url('/admin/add-ad') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Add an Ad </span></a></li>
                        <li class="sidebar-item"><a href="{{ url('/admin/view-ads') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> View Ads </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Posts </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Post categories </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="{{ url('/admin/posts/add-category') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> add post category </span></a></li>
                            <li class="sidebar-item"><a href="{{ url('/admin/posts/view-categories') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> view post categories </span></a></li>
                        </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Post tags </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ url('/admin/posts/add-tag') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> add post tag </span></a></li>
                                <li class="sidebar-item"><a href="{{ url('/admin/posts/view-tags') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> view post tags </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"><a href="{{ url('/admin/posts/create') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Add Post </span></a></li>
                        <li class="sidebar-item"><a href="{{ url('/admin/posts') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> View Posts </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Images </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ url('/admin/image') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Add Image </span></a></li>
                        <li class="sidebar-item"><a href="{{ url('/admin/view-images') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> View Images </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Videos </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ url('/admin/video') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Add Video </span></a></li>
                        <li class="sidebar-item"><a href="{{ url('/admin/view-videos') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> View Videos </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Categories </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ url('/admin/add-category') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Add Category </span></a></li>
                        <li class="sidebar-item"><a href="{{ url('/admin/view-categories') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> View Categories </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"><a href="{{ url('/admin/manage-users') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Users </span></a></li>

                
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
