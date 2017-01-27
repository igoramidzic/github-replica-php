<!-- Main navbar -->
<nav class="loggedInNavbar">
    <div class="content">
      <!-- Right group -->
      <ul class="left-group">
        <li>
          <a href="#">
            <svg class="nav-logo" aria-hidden="true" class="octicon octicon-mark-github" height="28" version="1.1" viewBox="0 0 16 16" width="28">
              <path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z">
              </path>
            </svg>
          </a>
        </li>
        <li>
          <!-- Search SipNub form -->
          <form class="search-form" role="search">
              <input type="text" class="search-textbox" placeholder="Search SipNub">
          </form>
        </li>
        <li class="nav-link"><a href="#">Pull requests</a></li>
        <li class="nav-link"><a href="#">Issues</a></li>
        <li class="nav-link"><a href="#">Gist</a></li>
        <li>
          <form class="nav-link" action="user/logout_user.php" method="post">
            <button class="btn btn-danger" name="logout-button" type="submit" name="button">Logout</button>
          </form>
        </li>
      </ul>

      <!-- Right group -->
      <ul class="right-group pull-right">
        <li>
          <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              Dropdown
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
</nav>
