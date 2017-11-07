<?PHP
?>
    <header>
      <!-- Fixed navbar -->
      <nav style="padding: 0;" class="navbar navbar-expand-md navbar-light fixed-top bg-light">
        
        <a class="col-xs-5 navbar-brand" alt="TokenPlay" href="index.php">
            <img height=70px; src="images/tokenplay_blue_black.png">
        </a>
        
        <button style="margin-right: 20px;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

          <div class="col-xs-7 collapse navbar-collapse mt-2 mt-md-0" id="navbarCollapse">
              <ul class="navbar-nav mr-auto">
                <li style="" class="nav-item"> <!--active-->
                    <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                </li>

                <li class="dropdown"> 
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">About&nbsp;</a>
                    <ul class="dropdown-menu">
                        <ul style="width: 300px;" class='list-inline'>
                            <li style="margin-left: 10px; display: inline-block;">
                                <a style="color: #48576B;" href="about.php" id="">&middot;  What is TokenPLay</a>
                            </li>
                            <li style="margin-left: 10px; display: inline-block;">
                                <a style="color: #48576B;" href="investors.php" id="">&middot; Team Members</a>
                            </li>
                        </ul>
                    </ul>
                </li>

                <li class="dropdown"> 
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Platform&nbsp;</a>
                    <ul class="dropdown-menu">
                        <ul style="width: 300px;" class='list-inline'>
                            <li style="margin-left: 10px; display: inline-block;">
                                <a style="color: #48576B;" href="exchange.php" id="">&middot;  Exchange</a>
                            </li>
                            <li style="margin-left: 10px; display: inline-block;">
                                <a style="color: #48576B;" href="development-roadmap.php" id="">&middot; Development Roadmap</a>
                            </li>
                        </ul>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="api.php">API&nbsp;</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="develop.php">Develop With Us&nbsp;</a>
                </li>

              </ul>

          </div>
      </nav>
    </header>