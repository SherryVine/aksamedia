<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">SB Admin v2.0</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-messages">
                <li>
                    <a class="text-center" href="#">
                        Nothing to Show
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-messages -->
        </li>
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-tasks">
                <li>
                    <a class="text-center" href="#">
                      Nothing to Show
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-tasks -->
        </li>
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-alerts">
                <li>
                    <a class="text-center" href="#">
                      Nothing to Show
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-alerts -->
        </li>
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li>
                  <a href="#" class="text-center">Nothing to Show</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                  <a href="#">User's<span class="fa arrow"></span></a>
                  <ul class="nav nav-second-level">
                    <li>
                      <a href="{{ Route('user.input') }}"><i class="fa fa-keyboard-o fa-fw"></i> User Input Post</a>
                    </li>
                    <li>
                      <a href="{{ Route('user.input2') }}"><i class="fa fa-keyboard-o fa-fw"></i> User Input Put</a>
                    </li>
                    <li>
                      <a href="{{ Route('user.result') }}"><i class="fa fa-table fa-fw"></i> Result Table</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#">Product's<span class="fa arrow"></span></a>
                  <ul class="nav nav-second-level">
                    <li>
                      <a href="{{ Route('product.input') }}"><i class="fa fa-keyboard-o fa-fw"></i> Product Input</a>
                    </li>
                    <li>
                      <a href="{{ Route('product.result') }}"><i class="fa fa-table fa-fw"></i> Result Table</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#">Article's<span class="fa arrow"></span></a>
                  <ul class="nav nav-second-level">
                    <li>
                      <a href="{{ Route('article.input') }}"><i class="fa fa-keyboard-o fa-fw"></i> Article Input</a>
                    </li>
                    <li>
                      <a href="{{ Route('article.article_result') }}"><i class="fa fa-table fa-fw"></i> Article List</a>
                    </li>
                    <li>
                      <a href="{{ Route('article.category_result') }}"><i class="fa fa-table fa-fw"></i> Category List</a>
                    </li>
                  </ul>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
