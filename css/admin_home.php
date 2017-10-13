<script>

$(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

});

</script>

<div class="container-fluid pagee" style="background-image: url('images/bg.png');">
	
	<div class="wrapper">

        <nav id="sidebar">
            <!-- Sidebar Header -->
            <div class="sidebar-header">
                <h3>Collapsible Sidebar</div>
                <strong>BS</strong>
            </div>

            <!-- Sidebar Links -->
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="glyphicon glyphicon-home"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-briefcase"></i>
                        About
                    </a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="glyphicon glyphicon-duplicate"></i>
                        Pages
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li><a href="#">Page 1</a></li>
                        <li><a href="#">Page 2</a></li>
                        <li><a href="#">Page 3</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-link"></i>
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-send"></i>
                        Contact
                    </a>
                </li>
            </ul>
        </nav>

        <div id="content">
            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                <i class="glyphicon glyphicon-align-left"></i>
                Toggle Sidebar
            </button>
        <div>

</div>
	
</div>