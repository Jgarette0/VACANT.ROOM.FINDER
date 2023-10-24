
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../css/layout.css">
  <link rel="stylesheet" href="../../css/navbar.css">
  <link rel="stylesheet" href="../../css/navbar-bottom.css">
  <link rel="stylesheet" href="../../css/map.css">
</head>
  <body>
  <nav>
      <div class="navbar" id="navbar">
      <a href="../../index.php">
          <div class="profile-holder">
            <button id="profileBtn">
            <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
            <lord-icon
                src="https://cdn.lordicon.com/zxvuvcnc.json"
                trigger="click"
                style="width:25px;height:25px;">
            </lord-icon>
            </button>
          </div>
        </a>
        <div class="search-container">
          <form class="searchform" action="../../search/search.php" method="post">
            <a>
              <button type="submit" class="submits">
                <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="click" colors="primary:#121331,secondary:#242424" style="width:30px;height:30px;">
                </lord-icon>
              </button>
              </a>
              <a>
                <input id="search" type="text" name="usersearch" placeholder="Search...">
            </a>
          </form>
        </div>
      </div>
    </nav>
    <nav class="navbarBottom">
<div class="radio-container">
<div class="radio-inputs">
		<label>
			<input class="radio-input" type="radio" name="engine">
				<span class="radio-tile">
        <a href="">
					<script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
            <lord-icon
              src="https://cdn.lordicon.com/dycatgju.json"
              trigger="click"
              colors="primary:#171717"
              state="hover-2"
              style="width:32px;height:32px;">
            </lord-icon>
					<span class="radio-label">Settings</span>
          </a>
				</span>
		</label>
    <label>
			<input class="radio-input" type="radio" name="engine">
			<span class="radio-tile">
      <a href="../../index.php">
        <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
        <lord-icon
      src="https://cdn.lordicon.com/slduhdil.json"
      trigger="click"
      colors="primary:#171717"
      state="hover-3"
      style="width:32px;height:32px;">
    </lord-icon>
				<span class="radio-label">Home</span>
        </a>
			</span>
		</label>
    
		<label>
			<input class="radio-input" type="radio" name="engine">
			<span class="radio-tile">
      <a href="../../show-vacants/vacants.php">
				<script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
        <lord-icon
          src="https://cdn.lordicon.com/zncllhmn.json"
          trigger="click"
          colors="primary:#171717"
          state="hover"
          style="width:32px;height:32px;">
        </lord-icon>
    <span class="radio-label">Vacants</span>	
    </a>
			</span>
		</label>
</nav>
</div>
  </div>
  <div class="top-view">
    <div class="layout-container"> 
      <div class="layout">
        <div class="col1">
          <div class="row1">
            <div class="stairs-classroom">
              <button class="blank">Room 6</button>
            </div>
            <div class="stairs-side">
              <div class="stairs-step1">
              </div>
              <div class="stairs-step2">
              </div>
            </div>
          </div>
          <div class="row2">
            <div class="main-col1">
              <div class="main-classrooms1">
                <div class="main-classroom">
                  <button class="blank">Room 1</button>
                </div>
                <div class="main-classroom">
                  <button class="blank">Room 2</button>
                </div>
                <div class="main-classroom">
                  <button class="blank">Room 3</button>
                </div>
              </div>
              <div class="main-classrooms2">
                <div class="main-classroom">
                  <button class="blank">Room 4</button>
                </div>
                <div class="main-classroom">
                  <button class="blank">Room 5</button>
                </div>
                <div class="main-classroom">
                  <button class="blank">Computer Laboratory</button>
                </div>
              </div>
            </div>
            <div class="main-col2"></div>
          </div>
          <div class="row3">
            <div class="stairs-classroom2">
              <button class="blank">Lecture</button>
              

            </div>
            <div class="stairs-side2">
              <div class="stairs-step1a">
              </div>
              <div class="stairs-step2b">
              </div>
            </div>
          </div>
        </div>
        <div class="col2">
          <div class="rowb1">
            <div class="side-classrooms">
              <div class="side-classroom">
                <button class="blank">SH1</button>
              </div>
              <div class="side-classroom">
                <button class="blank">SH2</button>
              </div>
              <div class="side-classroom">
                <button class="blank">SH3</button>
              </div>
            </div>
            <div class="side-alley">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="input">
    <button class="value" id="btn3rdFloor">
    <img src="../../images/stairs-up-dark.svg" alt="stairs-up">
      3rd Floor
    </button>
    <button class="value" id="btn2ndFloor">
      <img src="../../images/stairs-dark.svg" alt="stairs">
        2nd Floor
      </button>
    <button class="value" id="btn1stFloor">
      <img src="../../images/stairs-down-dark.svg" alt="stairs-down">
        1st Floor
      </button>
  </div>

  <script>
    // JavaScript to change the content based on button clicks
    const topView = document.querySelector(".top-view");
    const btn2ndFloor = document.getElementById("btn2ndFloor");
    const btn3rdFloor = document.getElementById("btn3rdFloor");
    const btn1stFloor = document.getElementById("btn1stFloor");

    // Simulate a click on the 2nd Floor button to set it as the default
    btn2ndFloor.click();

    btn2ndFloor.addEventListener("click", () => {
      topView.innerHTML = `
      <div class="top-view">
    <div class="layout-container"> 
      <div class="layout">
        <div class="col1">
          <div class="row1">
            <div class="stairs-classroom">
              <button class="blank">Room 6</button>
            </div>
            <div class="stairs-side">
              <div class="stairs-step1">
              </div>
              <div class="stairs-step2">
              </div>
            </div>
          </div>
          <div class="row2">
            <div class="main-col1">
              <div class="main-classrooms1">
                <div class="main-classroom">
                  <button class="blank">Room 1</button>
                </div>
                <div class="main-classroom">
                  <button class="blank">Room 2</button>
                </div>
                <div class="main-classroom">
                  <button class="blank">Room 3</button>
                </div>
              </div>
              <div class="main-classrooms2">
                <div class="main-classroom">
                  <button class="blank">Room 4</button>
                </div>
                <div class="main-classroom">
                  <button class="blank">Room 5</button>
                </div>
                <div class="main-classroom">
                  <button class="blank">Computer Laboratory</button>
                </div>
              </div>
            </div>
            <div class="main-col2"></div>
          </div>
          <div class="row3">
            <div class="stairs-classroom2">
              <button class="blank">Lecture</button>
            </div>
            <div class="stairs-side2">
              <div class="stairs-step1a">
              </div>
              <div class="stairs-step2b">
              </div>
            </div>
          </div>
        </div>
        <div class="col2">
          <div class="rowb1">
            <div class="side-classrooms">
              <div class="side-classroom">
                <button class="blank">SH1</button>
              </div>
              <div class="side-classroom">
                <button class="blank">SH2</button>
              </div>
              <div class="side-classroom">
                <button class="blank">SH3</button>
              </div>
            </div>
            <div class="side-alley">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
      `;
    });

    btn3rdFloor.addEventListener("click", () => {
      topView.innerHTML = ` 
      <div class="top-view">
  <div class="layout-container"> 
    <div class="layout">
      <div class="col1">
        <div class="row1">
          <div class="stairs-classroom">
            <button class="blank">Room 6</button>
          </div>
          <div class="stairs-side">
            <div class="stairs-step1">
            </div>
            <div class="stairs-step2">
            </div>
          </div>
        </div>
        <div class="row2">
          <div class="main-col1">
            <div class="main-classrooms1">
              <div class="main-classroom">
                <button class="blank">Room 1</button>
              </div>
              <div class="main-classroom">
                <button class="blank">Room 2</button>
              </div>
              <div class="main-classroom">
                <button class="blank">Room 3</button>
              </div>
            </div>
            <div class="main-classrooms2">
              <div class="main-classroom">
                <button class="blank">Room 4</button>
              </div>
              <div class="main-classroom">
                <button class="blank">Room 5</button>
              </div>
              <div class="main-classroom">
                <button class="blank">Computer Laboratory</button>
              </div>
            </div>
          </div>
          <div class="main-col2"></div>
        </div>
        <div class="row3">
          <div class="stairs-classroom2">
        <button class="blank">Lecture</button>
          </div>
          <div class="stairs-side2">
            <div class="stairs-step1a">
            </div>
            <div class="stairs-step2b">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

      `;
    });

    btn1stFloor.addEventListener("click", () => {
      topView.innerHTML = `
      <div class="top-view">
    <div class="layout-container"> 
      <div class="layout">
        <div class="col1">
          <div class="row1">
            <div class="stairs-classroom">
              <button class="blank">Room 7</button>
            </div>
            <div class="stairs-side">
              <div class="stairs-step1">
              </div>
              <div class="stairs-step2">
              </div>
            </div>
          </div>
          <div class="row2">
            <div class="main-col1">
              <div class="main-classrooms1">
                <div class="main-classroom">
                  <button class="blank">Room 8</button>
                </div>
                <div class="main-classroom">
                  <button class="blank">Room 9</button>
                </div>
                <div class="main-classroom">
                  <button class="blank">Room 10</button>
                </div>
              </div>
              <div class="main-classrooms2">
                <div class="main-classroom">
                  <button class="blank">Room 11</button>
                </div>
                <div class="main-classroom">
                  <button class="blank">Room 12</button>
                </div>
                <div class="main-classroom">
                  <button class="blank">Computer Laboratory</button>
                </div>
              </div>
            </div>
            <div class="main-col2"></div>
          </div>
          <div class="row3">
            <div class="stairs-classroom2">
              <button class="blank">Lecture</button>
            </div>
            <div class="stairs-side2">
              <div class="stairs-step1a">
              </div>
              <div class="stairs-step2b">
              </div>
            </div>
          </div>
        </div>
        <div class="col2">
          <div class="rowb1">
            <div class="side-classrooms">
              <div class="side-classroom">
                <button class="blank">SH1</button>
              </div>
              <div class="side-classroom">
                <button class="blank">SH2</button>
              </div>
              <div class="side-classroom">
                <button class="blank">SH3</button>
              </div>
            </div>
            <div class="side-alley">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
      `;
    });
  </script>




  </body>
</html>
