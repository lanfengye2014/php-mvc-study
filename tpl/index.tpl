<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Title</title>
    <link rel="stylesheet" href="resource/css/foundation.css">
    <script type="text/javascript" src="resource/js/vendor/jquery.js"></script>
    <script type="text/javascript" src="resource/js/vendor/fastclick.js"></script>
    <script type="text/javascript" src="resource/js/foundation.min.js"></script>
    <script type="text/javascript">
        $(document).foundation();
    </script>
</head>
<body>
<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
        <li class="name">
            <h1><a href="#">{$username}</a></h1>
        </li>
    </ul>
    <section class="top-bar-section">
        <ul class="right">
            <li class="active"><a href="#">Right Button Active</a></li>
            <li class="has-dropdown">
                <a href="#">Right Button Dropdown</a>
                <ul class="dropdown">
                    <li><a href="#">First link in dropdown</a></li>
                    <li class="active"><a href="#">Active link in dropdown</a></li>
                </ul>
            </li>
        </ul>
        <ul class="left">
            <li><a href="#">Left Nav Button</a></li>
        </ul>
    </section>
</nav>
<div class="content">
</div>
</body>
</html>