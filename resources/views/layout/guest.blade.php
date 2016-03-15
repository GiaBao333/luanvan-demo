<?php use App\Content;
      use App\Category; 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="product" content="Metro UI CSS Framework">
    <meta name="description" content="Simple responsive css framework">
    <meta name="author" content="Sergey S. Pimenov, Ukraine, Kiev">
    <meta name="keywords" content="js, css, metro, framework, windows 8, metro ui">
    <link rel="stylesheet" type="text/css" href="{{url('public/asset/guest/css/metro-bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/asset/guest/css/metro-bootstrap-responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/asset/guest/css/docs.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/asset/guest/js/prettify/prettify.css') }}">

    <!-- Load JavaScript Libraries -->
    <script src="{{ url('public/asset/guest/js/jquery/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('public/asset/guest/js/jquery/jquery.widget.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('public/asset/guest/js/jquery/jquery.mousewheel.js') }}" type="text/javascript"></script>
    <!-- Metro UI CSS JavaScript plugins -->
    <script src="{{ url('public/asset/guest/js/load-metro.js') }}" type="text/javascript"></script>
    <!-- Local JavaScript -->

    <title>Cổng thông tin thi tốt nghiệp và đại học</title>
</head>
<body class="metro" style="background-color: #f2f2f2">
    <header class="bg-blue">
        <div class="navigation-bar blue">
            <div class="navigation-bar-content container">
                <a href="{{ url('/') }}" class="element">Trang chủ</a>
                <span class="element-divider"></span>

                <a class="element1 pull-menu" href="#"></a>
                <ul class="element-menu">
                    <li>
                        <a class="dropdown-toggle" href="#">Tra cứu kết quả thi</a>
                        <ul class="dropdown-menu white" data-role="dropdown">
                            <li>
                                <a href="requirements.html">Requirements</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle">General CSS</a>
                                <ul class="dropdown-menu white" data-role="dropdown">
                                    <li>
                                        <a href="global.html">Global styles</a>
                                    </li>
                                    <li>
                                        <a href="grid.html">Grid system</a>
                                    </li>
                                    <div class="divider"></div>
                                    <li>
                                        <a href="typography.html">Typography</a>
                                    </li>
                                    <li>
                                        <a href="tables.html">Tables</a>
                                    </li>
                                    <li>
                                        <a href="forms.html">Forms</a>
                                    </li>
                                    <li>
                                        <a href="buttons.html">Buttons</a>
                                    </li>
                                    <li>
                                        <a href="images.html">Images</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="responsive.html">Responsive</a>
                            </li>
                            <li class="disabled">
                                <a href="layouts.html">Layouts and templates</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="icons.html">Icons</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="dropdown-toggle"  href="#">Tra cứu ngành học</a>
                        <ul class="dropdown-menu white" data-role="dropdown">
                            <li>
                                <a href="tiles.html">Tiles</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle">Navigation</a>
                                <ul class="dropdown-menu white" data-role="dropdown">
                                    <li>
                                        <a href="navbar.html">Navigation Bar</a>
                                    </li>
                                    <li>
                                        <a href="menus.html">Menus</a>
                                    </li>
                                    <li>
                                        <a href="fluent-menu.html">Fluent Menu</a>
                                    </li>
                                    <li>
                                        <a href="sidebar.html">Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="tab-control.html">Tab Control</a>
                                    </li>
                                    <li>
                                        <a href="accordion.html">Accordion</a>
                                    </li>
                                    <li>
                                        <a href="buttons.html#_set">Button Set</a>
                                    </li>
                                    <li>
                                        <a href="buttons.html#_breadcrumbs">Breadcrumbs</a>
                                    </li>
                                    <li>
                                        <a href="wizard.html">Wizard</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle">Visualisation</a>
                                <ul class="dropdown-menu white" data-role="dropdown">
                                    <li>
                                        <a href="rating.html">Rating</a>
                                    </li>
                                    <li>
                                        <a href="progress-bar.html">Progress Bar</a>
                                    </li>
                                    <li>
                                        <a href="scroll.html">Scroll Bar</a>
                                    </li>
                                    <li>
                                        <a href="slider.html">Slider</a>
                                    </li>
                                    <li>
                                        <a href="carousel.html">Carousel</a>
                                    </li>
                                    <li>
                                        <a href="treeview.html">TreeView</a>
                                    </li>
                                    <li>
                                        <a href="lists.html">Lists</a>
                                    </li>
                                    <li>
                                        <a href="hint.html">Hint</a>
                                    </li>
                                    <li>
                                        <a href="balloon.html">Balloon</a>
                                    </li>
                                    <li>
                                        <a href="notices.html">Notices</a>
                                    </li>
                                    <li>
                                        <a href="stepper.html">Stepper</a>
                                    </li>
                                    <li>
                                        <a href="panels.html">Panel</a>
                                    </li>
                                    <li>
                                        <a href="streamer.html">Streamer</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle">Date and Time</a>
                                <ul class="dropdown-menu white" data-role="dropdown">
                                    <li>
                                        <a href="calendar.html">Calendar</a>
                                    </li>
                                    <li>
                                        <a href="datepicker.html">DatePicker</a>
                                    </li>
                                    <li>
                                        <a href="times.html">Times</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle">Information</a>
                                <ul class="dropdown-menu white" data-role="dropdown">
                                    <li>
                                        <a href="window.html">Window</a>
                                    </li>
                                    <li>
                                        <a href="dialog.html">Dialog</a>
                                    </li>
                                    <li>
                                        <a href="notify.html">Notify</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#" class="dropdown-toggle">Third-party</a>
                                <ul class="dropdown-menu white" data-role="dropdown">
                                    <li>
                                        <a href="dataTables.html">DataTables</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">Lịch thi</a>
                        <ul class="dropdown-menu white" data-role="dropdown">
                            <li>
                                <a href="template-news-portal.html">News Portal (msn.com)</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="dropdown-toggle"  href="#">Cụm thi</a>
                        <ul class="dropdown-menu white" data-role="dropdown">
                            <li class="disabled">
                                <a href="http://blog.metroui.net">Blog</a>
                            </li>
                            <li class="disabled">
                                <a href="http://forum.metroui.net">Community Forum</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="https://github.com/olton/Metro-UI-CSS">Github</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="https://github.com/olton/Metro-UI-CSS/blob/master/LICENSE">License</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">Thí sinh</a>
                        <ul class="dropdown-menu white" data-role="dropdown">
                            <li>
                                <a href="examples.html">Top page</a>
                            </li>
                            <li class="divider"></li>

                            <li>
                                <a href="#" class="dropdown-toggle">General</a>
                                <ul class="dropdown-menu white" data-role="dropdown">
                                    <li>
                                        <a href="examples.html#__table__">Table</a>
                                    </li>
                                    <li>
                                        <a href="examples.html#__form__">Form</a>
                                    </li>
                                    <li>
                                        <a href="examples.html#__buttons__">Buttons</a>
                                    </li>
                                    <li>
                                        <a href="examples.html#__image__">Images</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#" class="dropdown-toggle">Navigation</a>
                                <ul class="dropdown-menu white" data-role="dropdown">
                                    <li>
                                        <a href="examples.html#__navbar__">Navigation bar</a>
                                    </li>
                                    <li>
                                        <a href="examples.html#__dropdown__">Dropdown menu</a>
                                    </li>
                                    <li>
                                        <a href="examples.html#__sidebar__">Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="examples.html#__tabs__">Tab control</a>
                                    </li>
                                    <li>
                                        <a href="examples.html#__accordion__">Accordion</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#" class="dropdown-toggle">Visualization</a>
                                <ul class="dropdown-menu white" data-role="dropdown">
                                    <li>
                                        <a href="examples.html#__tile__">Tiles</a>
                                    </li>
                                    <li>
                                        <a href="examples.html#__rating__">Rating</a>
                                    </li>
                                    <li>
                                        <a href="examples.html#__progress__">Progress bar</a>
                                    </li>
                                    <li>
                                        <a href="examples.html#__scroll__">Scroll bar</a>
                                    </li>
                                    <li>
                                        <a href="examples.html#__slider__">Slider</a>
                                    </li>
                                    <li>
                                        <a href="examples.html#__carousel__">Carousel</a>
                                    </li>
                                    <li>
                                        <a href="examples.html#__tree__">Tree view</a>
                                    </li>
                                    <li>
                                        <a href="examples.html#__lists__">List view</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#" class="dropdown-toggle">Visualization 2</a>
                                <ul class="dropdown-menu white" data-role="dropdown">
                                    <li>
                                        <a href="examples.html#__hint__">Hint</a>
                                    </li>
                                    <li>
                                        <a href="examples.html#__balloon__">Balloon</a>
                                    </li>
                                    <li>
                                        <a href="examples.html#__notice__">Notice</a>
                                    </li>
                                    <li>
                                        <a href="examples.html#__calendar__">Calendar</a>
                                    </li>
                                    <li>
                                        <a href="examples.html#__times__">Countdown &amp; Times</a>
                                    </li>
                                    <li>
                                        <a href="examples.html#__window__">Windows</a>
                                    </li>
                                    <li>
                                        <a href="examples.html#__streamer__">Streamer</a>
                                    </li>
                                    <li>
                                        <a href="examples.html#__panel__">Panel</a>
                                    </li>
                                    <li>
                                        <a href="examples.html#__stepper__">Stepper</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>

                <div class="element input-element place-right span4">
                    <form>
                        <div class="input-control text" style="width: 100%;">
                            <input type="text" placeholder="Tìm kiếm...">
                            <button class="btn-search"></button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </header>

    <div class="container">
        <div class="grid fluid">
            <div class="row">
                <div class="span8">
                    <a href="{{ url('/') }}" title="">
                        <img src="{{ url('public/asset/guest/images/logo1.png') }}" class="img-responsive" alt="Image" style="width: 100% !important;height: 175px !important;object-fit: cover;">
                    </a>
                </div>
                <div class="span4">
                    <a href="{{ url('/') }}" title="">
                        <img src="{{ url('public/asset/guest/images/thi-thu-dai-hoc.jpg') }}" class="img-responsive" alt="Image" style="width: 100% !important;height: 175px !important;object-fit: cover;">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="grid fluid">
            <div class="row">
                <div class="span8">
                @yield('main')
                </div>
                <div class="span4">
                <div class="new-box">
                    <blockquote style="border-left:5px solid #0281c3;">
                        <p class="item-title" style="color:inherit;">HỖ TRỢ - TƯ VẤN</p>
                        <small>
                            <cite title="Source Title">Hỗ trợ tư vấn thí sinh miễn phí</cite>
                        </small>
                    </blockquote>
                    <br> 
                    <address class="padding20 bg-white">
                        <strong><i class="icon-phone"></i> Tel: </strong>07103123456 <br>
                        <strong><i class="icon-mobile"></i> Phone: </strong>0909123456<br>
                        <strong><i class="icon-mail"></i> Email: </strong> <a href="mailto:#">dangkythi@gmail.com</a><br> 
                        <p><small>(Thời gian hỗ trợ từ 8.00am đến 22.00pm )</small></p>
                    </address>

                </div>
                <br> 
                <div class="news-box">
                    <blockquote style="border-left:5px solid #0281c3;">
                        <p class="item-title" style="color:inherit;">ĐĂNG NHẬP</p>
                        <small>
                            <cite title="Source Title">Đăng nhập để đăng ký thi, tra cứu kết quả</cite>
                        </small>
                    </blockquote>
                    <br>
                    {!! Form::open(array('action'=>'Auth\AuthController@postLogin','class'=>'bg-white padding20')) !!}
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <fieldset>
                            <label>Email</label>
                            <div class="input-control text" data-role="input-control">
                                {!! Form::text('email', Input::old('email')) !!}
                                <button type="button" class="btn-clear" tabindex="-1"></button>
                            </div>
                            <label>Mật khẩu</label>
                            <div class="input-control password" data-role="input-control">
                                {!! Form::password('password') !!}
                                <button type="button" class="btn-reveal" tabindex="-1"></button>
                            </div>
                            <div class="input-control checkbox" data-role="input-control">
                                <label>
                                    <input checked="" type="checkbox">
                                    <span class="check"></span>
                                    Ghi nhớ
                                </label>
                            </div>
                            <div class="input-control text" data-role="input-control">
                                {!! Form::submit('Đăng nhâp', array('class'=>'primary')) !!}
                            </div>
                        </fieldset>
                    {!! Form::close() !!}
                    <img src="{{ url('public/asset/guest/images/MienDong-25.jpg') }}" class="img-responsive" alt="Image">
                </div>
                <br>
                <div class="news-box">
                    <blockquote style="border-left:5px solid #0281c3;">
                        <p class="item-title">
                        <a style="color:inherit; text-transform:uppercase;" href="{{ url('tin-tuc/'.Category::find(2)->alias) }}" title="">
                        {{ Category::find(2)->category_name }}</p>
                        </a>
                        <small>
                            <cite title="Source Title">{{ Category::find(3)->note }}</cite>
                        </small>
                    </blockquote>
                    <br>
                    <ul class="bg-white no-margin padding5">
                    @foreach(Content::where('category_id','=',2)->where('public','=',1)->orderBy('created_at', 'DESC')->take(10)->get() as $value)
                        <li class="padding5">
                            <i class="icon-stop-2 fg-blue"></i>
                            &nbsp;<a class="fg-black" href="{{ url('tin-tuc/'.Category::find(2)->alias.'/'.$value->alias) }}">{{ $value->title }}</a>
                        </li>
                    @endforeach
                    </ul>
                </div>
                </div>
                
            </div>
        </div>
    </div>
    <footer style="background-color: #191a1c !important; height:200px; border-top:4px solid #0281c3;">
        <div class="container">
            <div class="grid fluid no-margin">
                <div class="row">
                    <div class="span4 padding10">
                        <h2 class="fg-blue">Liên hệ</h2>
                        <p style="color:#424242;">
                            Địa chỉ: Khu II, đường 3/2, P. Xuân Khánh, Q. Ninh Kiều, TP. Cần Thơ.
                            <br>
                            Số điện thoại: (84-0710) 3832663
                            <br>
                            Fax: (84-0710) 3838474
                            <br>Email: dhct@ctu.edu.vn.</p>
                    </div>
                    <div class="span4">
                        <h2 class="fg-blue">Kết nối</h2>
                        <p style="color:#424242;">
                            Facebook
                            <br>
                            Twitter
                            <br>
                            Youte
                            <br>Google+</p>
                    </div>
                    <div class="span4">
                        <h2 class="fg-blue">Đăng ký nhận tin</h2>
                        <form action="guest_submit" method="get" accept-charset="utf-8">
                            <div class="input-control text" data-role="input-control">
                                <input style="background-color:#424242; border:none;" placeholder="examplegmail.com" type="text">
                                <button type="button" class="btn-clear" tabindex="-1"></button>
                            </div>
                            <input class="primary" value="Nhận tin" type="submit"
                        ></form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ url('public/asset/guest/js/hitua.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.carousel').carousel();
    });
        
    </script>
</body>
</html>