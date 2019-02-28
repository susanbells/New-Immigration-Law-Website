

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Poonam</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
            <li><a href="../index.php">HOME PAGE</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  Poonam <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-arrows-v"></i> Insights <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                                <a href="posts.php">View All Posts</a>
                            </li>
                            <li>
                                <a href="posts.php?source=add_posts">Add Posts</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="../admin/categories.php"><i class="fa fa-fw fa-wrench"></i> Categories</a>
                    </li>
                    <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-arrows-v"></i>About <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                            <li>
                                <a href="about.php">View All Info</a>
                            </li>
                            <li>
                                <a href="about.php?source=add_about">Add Info</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo3"><i class="fa fa-fw fa-arrows-v"></i>Services <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo3" class="collapse">
                            <li>
                                <a href="services.php">View All Services</a>
                            </li>
                            <li>
                                <a href="services.php?source=add_services">Add Services</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo4"><i class="fa fa-fw fa-arrows-v"></i> Recent Changes <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo4" class="collapse">
                            <li>
                                <a href="changes.php">View All Recent Changes</a>
                            </li>
                            <li>
                                <a href="changes.php?source=add_changes">Add Recent Changes</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo5"><i class="fa fa-fw fa-arrows-v"></i> Testimonials <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo5" class="collapse">
                            <li>
                                <a href="testimonials.php">View All Testimonials</a>
                            </li>
                            <li>
                                <a href="testimonials.php?source=add_testimonials">Add Testimonials</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
