<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon_solid.png" type="png">

  <title> AlgoSpear</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/driver.js@0.9.8/dist/driver.min.css">
  <script src="https://cdn.jsdelivr.net/npm/driver.js@0.9.8/dist/driver.min.js"></script>
  
  <style>
    
    /* Specific styles for Sorting Algorithm Visualization */
    .sorting-visualization-body {
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      
      background-color: #ffffff;
      margin-top: 50px; /* Ensure it does not conflict with other page content */
    }

    .sorting-visualization-body h2 {
      margin-top: 1px;
        margin-bottom: 30px;
        color: #ffffff;
        font-weight: 800;
        text-shadow: 2px 1px 4px #000000;
    }

    .sorting-visualization-body #array-container {
      display: flex;
      flex-direction: row;
      align-items: flex-end;
      text-shadow: 2px 3px 5px #053107;
      text-align: center;
      font-size: 20px;
      margin-top: 5px;
      height: 320px;
      width: 965px;
      border: 2px solid #1701a2;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      text-shadow: -2px 4px 5px #000000;
      border-width: 4px;
      border-radius: 10px;
      background-color: #f4f1fe;
      padding: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      --color: #E1E1E1;
  background-color: #F3F3F3;
  background-image: linear-gradient(0deg, transparent 24%, var(--color) 25%, var(--color) 26%, transparent 27%,transparent 74%, var(--color) 75%, var(--color) 76%, transparent 77%,transparent),
      linear-gradient(90deg, transparent 24%, var(--color) 25%, var(--color) 26%, transparent 27%,transparent 74%, var(--color) 75%, var(--color) 76%, transparent 77%,transparent);
  background-size: 55px 55px;
      
    }

    .sorting-visualization-body .array-bar {
      background-color: #4CAF50;
      margin: 0 4px;

      display: inline-block;
      transform-origin: top;
      border: 2px solid #2e7d32;
      border-width: 3px;
      text-shadow: 1px 3px 3px #031f04;
      color: white;
      font-weight: bold;
      border-radius: 100%;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
      position: relative; /* Added to position the value inside the bar */
    }

    .array-bar {
      padding-bottom: 30px;
    }

    .sorting-visualization-body .controls-1 {
    
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 0px;
    }

    .sorting-visualization-body .controls {
      
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 20px;
    }
    

    /* Highlight the bar being moved/swapped */
.highlight {
  background-color: yellow !important; /* Highlight color */
  transition: background-color 0.5s ease;  /* Smooth transition */
}


button {
    appearance: button;
    background-color: #06509f;
    text-shadow: -2px 1px 5px #000000;
    border: solid transparent;
    border-radius: 8px;
    border-width: 0 0 6px;
    box-sizing: border-box;
    color: #FFFFFF;
    cursor: pointer;
    display: inline-block;
    font-size: 14.5px;
    font-weight: 700;
    letter-spacing: .8px;
    line-height: 20px;
    margin: 0px;
    margin-right: -51px;
    outline: none;
    overflow: visible;
    padding: 13px 19px;
    text-align: center;
    text-transform: uppercase;
    touch-action: manipulation;
    transform: translateZ(0);
    transition: filter .2s;
    user-select: none;
    -webkit-user-select: none;
    vertical-align: middle;
    white-space: nowrap;
    z-index: 1;
}

    button:after {
    background-clip: padding-box;
    background-color: #1a7de6;
    border: solid transparent;
    border-radius: 8px;
    border-width: 0 0 4px;
    bottom: -4px;
    content: "";
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    z-index: -2;
    }

    button:main, button:focus {
    user-select: auto;
    }

    button:hover:not(:disabled) {
    filter: brightness(1.1);
    }

    button:disabled {
    cursor: auto;
    }

    button:active:after {
    border-width: 0 0 0px;
    }

    button:active {
    padding-bottom: 10px;
    }

    .bubble {
  position: relative;
  top: 5px;
  left: -146px;
  background-color: rgba(144, 178, 255, 0.448);
  border-width: 4px;  
  color: rgb(255, 255, 255);
  font-size: 7px;
  width: 12px;
  font-weight: 600;
  border-radius: 70%;
  height: 8px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 1px 3px 12px rgba(5, 66, 163, 0.511);
  z-index: 9999;
}
    .bubble-2 {
  position: relative;
  top: 5px;
  left: -222px;
  background-color: rgba(144, 178, 255, 0.448);
  border-width: 4px;  
  color: rgb(255, 255, 255);
  font-size: 7px;
  width: 12px;
  font-weight: 600;
  border-radius: 70%;
  height: 8px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 1px 3px 12px rgba(5, 66, 163, 0.511);
  z-index: 9999;
}
.bubble-3 {
  position: relative;
  top: 5px;
  left: -106px;
  background-color: rgba(144, 178, 255, 0.448);
  border-width: 4px;  
  color: rgb(255, 255, 255);
  font-size: 7px;
  width: 12px;
  font-weight: 600;
  border-radius: 70%;
  height: 8px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 1px 3px 12px rgba(5, 66, 163, 0.511);
  z-index: 9999;
}
.bubble-4 {
  position: relative;
  top: 5px;
  left: -130px;
  background-color: rgba(144, 178, 255, 0.448);
  border-width: 4px;  
  color: rgb(255, 255, 255);
  font-size: 7px;
  width: 12px;
  font-weight: 600;
  border-radius: 70%;
  height: 8px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 1px 3px 12px rgba(5, 66, 163, 0.511);
  z-index: 9999;
}
.bubble-5 {
  position: relative;
  top: 5px;
  left: -127px;
  background-color: rgba(144, 178, 255, 0.448);
  border-width: 4px;  
  color: rgb(255, 255, 255);
  font-size: 7px;
  width: 12px;
  font-weight: 600;
  border-radius: 70%;
  height: 8px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 1px 3px 12px rgba(5, 66, 163, 0.511);
  z-index: 9999;
}
.bubble-6 {
  position: relative;
  top: 5px;
  left: -98px;
  background-color: rgba(144, 178, 255, 0.448);
  border-width: 4px;  
  color: rgb(255, 255, 255);
  font-size: 7px;
  width: 12px;
  font-weight: 600;
  border-radius: 70%;
  height: 8px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 1px 3px 12px rgba(5, 66, 163, 0.511);
  z-index: 9999;
}
.bubble-7 {
  position: relative;
  top: 5px;
  left: -91px;
  background-color: rgba(144, 178, 255, 0.448);
  border-width: 4px;  
  color: rgb(255, 255, 255);
  font-size: 7px;
  width: 12px;
  font-weight: 600;
  border-radius: 70%;
  height: 8px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 1px 3px 12px rgba(5, 66, 163, 0.511);
  z-index: 9999;
}
.bubble-8 {
  position: relative;
  top: 5px;
  left: -85px;
  background-color: rgba(144, 178, 255, 0.448);
  border-width: 4px;  
  color: rgb(255, 255, 255);
  font-size: 7px;
  width: 12px;
  font-weight: 600;
  border-radius: 70%;
  height: 8px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 1px 3px 12px rgba(5, 66, 163, 0.511);
  z-index: 9999;
}

#toast {
      position: fixed;
      top: 95px;
      right: 34px;
      background-color: #007bff;
      color: white;
      padding: 10px 30px;
      padding-right: 15px;
      border-radius: 5px;
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.5s, visibility 0.6s;
      z-index: 9999;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    #toast.show {
      opacity: 1;
      visibility: visible;
    }
    #toast .close-btn {
      background: none;

      border: none;
      color: white;
      font-size: 15px;
      cursor: pointer;
    }



    .toast .fa-exclamation-triangle {
      font-size: 15px; /* Adjust size of the icon */
      padding: 10px;
      margin-right: -10px;
      margin-left: 10px;
    }

    .toast-body {
      display: flex;
      align-items: center; /* Vertically align icon and text */
    }


    .sorting-visualization-body button:hover {
      background-color: #0056b3;
    }

    .sorting-visualization-body button:disabled {
      background-color: #ccc;
      cursor: not-allowed;
    }

    .sorting-visualization-body #array-input {
      padding: 10px;
      border: solid 4px #6c6c6c;
      margin-left: -30px;
    width: 485px;
    border-radius: 8px;
    border-width:  2.5px;
    box-sizing: border-box;
    color: #050505;
    cursor: pointer;
    display: inline-block;
    font-size: 14.5px;
    font-weight: 700;
    letter-spacing: .8px;
    line-height: 20px;  
    outline: none;
    overflow: visible;
    padding: 13px 19px;
    text-align: center;
    text-transform: uppercase;
    touch-action: manipulation;
    transform: translateZ(0);
    transition: filter .2s;
    user-select: none;
    -webkit-user-select: none;
    vertical-align: middle;
    white-space: nowrap;

    }

    /* Info icon styles */
.info-icon {
  position: relative;
  top: -5px;
  right: -282px;
  background-color: yellow;
  text-shadow: 1px 2px 4px #000000;
  border-width: 4px;
  color: black;
  font-size: 12px;
  width: 20px;
  height: 20px;
  font-weight: 600;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  box-shadow: 2px 5px 5px rgba(0, 0, 0, 0.3);
  z-index:9999;
}

.info-icon:hover::after {
  content: attr(data-tooltip);
  position: absolute;
  bottom: 25px;
  left: -100px;
  background-color: black;
  color: white;
  padding: 5px 10px;
  border-radius: 5px;
  font-size: 12px;  
  white-space: nowrap;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
  z-index: 10;
}
.info-icon-2 {
  position: relative;
  top: -56px;
  right: -200px;
  background-color: yellow;
  text-shadow: 1px 2px 4px #000000;
  border-width: 4px;
  color: black;
  font-size: 12px;
  width: 20px;
  height: 20px;
  font-weight: 600;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  box-shadow: 2px 5px 5px rgba(0, 0, 0, 0.3);
  z-index: 9999;
}

.info-icon-2:hover::after {
  content: attr(data-tooltip);
  position: absolute;
  bottom: 25px;
  left: -100px;
  background-color: black;
  color: white;
  padding: 5px 10px;
  border-radius: 5px;
  font-size: 12px;  
  white-space: nowrap;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
  z-index: 10;
}.info-icon-3 {
  position: relative;
  top: -5px;
  right: -5px;
  background-color: yellow;
  text-shadow: 1px 2px 4px #000000;
  border-width: 4px;
  color: black;
  font-size: 12px;
  width: 20px;
  height: 20px;
  font-weight: 600;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  box-shadow: 2px 5px 5px rgba(0, 0, 0, 0.3);
  z-index: 9999;
}

.info-icon-3:hover::after {
  content: attr(data-tooltip);
  position: absolute;
  bottom: 25px;
  left: -100px;
  background-color: black;
  color: white;
  padding: 5px 10px;
  border-radius: 5px;
  font-size: 12px;  
  white-space: nowrap;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
  z-index: 10;
}.info-icon-4 {
  position: relative;
  top: -5px;
  right: -5px;
  background-color: yellow;
  text-shadow: 1px 2px 4px #000000;
  border-width: 4px;
  color: black;
  font-size: 12px;
  width: 20px;
  height: 20px;
  font-weight: 600;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  box-shadow: 2px 5px 5px rgba(0, 0, 0, 0.3);
  z-index: 9999;
}

.info-icon-4:hover::after {
  content: attr(data-tooltip);
  position: absolute;
  bottom: 25px;
  left: -100px;
  background-color: black;
  color: white;
  padding: 5px 10px;
  border-radius: 5px;
  font-size: 12px;  
  white-space: nowrap;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
  z-index: 10;
}.info-icon-5 {
  position: relative;
  top: -5px;
  right: -5px;
  background-color: yellow;
  text-shadow: 1px 2px 4px #000000;
  border-width: 4px;
  color: black;
  font-size: 12px;
  width: 20px;
  height: 20px;
  font-weight: 600;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  box-shadow: 2px 5px 5px rgba(0, 0, 0, 0.3);
  z-index: 9999;
}

.info-icon-5:hover::after {
  content: attr(data-tooltip);
  position: absolute;
  bottom: 25px;
  left: -100px;
  background-color: black;
  color: white;
  padding: 5px 10px;
  border-radius: 5px;
  font-size: 12px;  
  white-space: nowrap;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
  z-index: 10;
}.info-icon-6 {
  position: relative;
  top: -5px;
  right: -5px;
  background-color: yellow;
  text-shadow: 1px 2px 4px #000000;
  border-width: 4px;
  color: black;
  font-size: 12px;
  width: 20px;
  height: 20px;
  font-weight: 600;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  box-shadow: 2px 5px 5px rgba(0, 0, 0, 0.3);
  z-index: 9999;
}

.info-icon-6:hover::after {
  content: attr(data-tooltip);
  position: absolute;
  bottom: 25px;
  left: -100px;
  background-color: black;
  color: white;
  padding: 5px 10px;
  border-radius: 5px;
  font-size: 12px;  
  white-space: nowrap;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
  z-index: 10;
}.info-icon-7 {
  position: relative;
  top: -5px;
  right: -5px;
  background-color: yellow;
  text-shadow: 1px 2px 4px #000000;
  border-width: 4px;
  color: black;
  font-size: 12px;
  width: 20px;
  height: 20px;
  font-weight: 600;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  box-shadow: 2px 5px 5px rgba(0, 0, 0, 0.3);
  z-index: 9999;
}

.info-icon-7:hover::after {
  content: attr(data-tooltip);
  position: absolute;
  bottom: 25px;
  left: -100px;
  background-color: black;
  color: white;
  padding: 5px 10px;
  border-radius: 5px;
  font-size: 12px;  
  white-space: nowrap;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
  z-index: 10;
}.info-icon-8 {
  position: relative;
  top: -5px;
  right: -5px;
  background-color: yellow;
  text-shadow: 1px 2px 4px #000000;
  border-width: 4px;
  color: black;
  font-size: 12px;
  width: 20px;
  height: 20px;
  font-weight: 600;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  box-shadow: 2px 5px 5px rgba(0, 0, 0, 0.3);
  z-index: 9999;
}

.info-icon-8:hover::after {
  content: attr(data-tooltip);
  position: absolute;
  bottom: 25px;
  left: -100px;
  background-color: black;
  color: white;
  padding: 5px 10px;
  border-radius: 5px;
  font-size: 12px;  
  white-space: nowrap;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
  z-index: 10;
}



    /* Ribbon background style */
.ribbon-title {
    position: relative;
    display: inline-block;
    padding: 10px 30px;
    font-size: 24px;
    font-weight: bold;
    background-color: red; /* Red background for the ribbon */
    color: white;
    text-transform: uppercase;
    text-align: center;
    border-top: 4px solid gold;  /* Gold line at the top */
    border-bottom: 4px solid gold; /* Gold line at the bottom */
}

/* Create the ribbon effect */
.ribbon-title::before,
.ribbon-title::after {
    content: "";
    position: absolute;
    top: 0;
    width: 0;
    height: 0;
    border-style: solid;
}

.ribbon-title::before {
    left: -20px;
    border-width: 15px 20px 15px 0;
    border-color: transparent rgb(172, 1, 1) transparent transparent;
}
.ribbon-title::before {
    left: -20px;
    top: 10px;
    border-width: 15px 20px 15px 0;
    border-color: transparent rgb(172, 1, 1) transparent transparent;
}

.ribbon-title::after {
    right: -20px;
    top: 10px;
    border-width: 15px 0 15px 20px;
    border-color: transparent transparent transparent rgb(172, 1, 1);
}



.gradient-overlay {
    position: fixed;
    bottom: 0; /* Anchor to the bottom of the screen */
    left: 0;
    width: 100%; /* Cover the entire width */
    height: 100px; /* Adjust height to your preference */
    background: linear-gradient(to top, rgb(174, 174, 234), transparent); /* Black fading to transparent */
    pointer-events: none; /* Allow interactions with elements beneath */
    z-index: 0; /* Place it above other content */
}


.scroll-button {
            position: fixed; /* Fixed position for bottom right corner */
            bottom: 20px; /* Distance from the bottom */
            right: 20px; /* Distance from the right */
            width: 50px; /* Width of the button */
            height: 50px; /* Height of the button */
            border-radius: 50%; /* Circular shape */
            background-color: #007bff; /* Button color */
            color: white; /* Arrow color */
            border: none; /* No border */
            cursor: pointer; /* Pointer cursor */
            display: flex; /* Flexbox to center the icon */
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            font-size: 24px; /* Icon size */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Shadow effect */
            transition: background-color 0.3s; /* Transition for hover effect */
            display: none; /* Initially hidden */
        }
        .scroll-button:hover {
            background-color: #0056b3; /* Darker shade on hover */
        }

        body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      color: #333;
    }

    .highlight-yellow {
    background-color: yellow !important;
}

.highlight-red {
    background-color: red !important;
    transition: background-color 0.3s ease-in-out;
}


  </style>
</head>

<body class="sub_page">

  <div class="hero_area">
    <div class="hero_bg_box">
      <div class="bg_img_box">
        <img src="images/hero-bg.png" alt="">
      </div>
    </div>

    <!-- Header section -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <span>AlgoSpear</span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class=""></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item "><a class="nav-link" href="index.html">Home</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Courses</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="readings.html">Reading Materials</a>
                  <a class="dropdown-item" href="videos.html">Video Tutorials</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown">Assessment</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                  <a class="dropdown-item" href="exercise.html">Exercises</a>
                  <a class="dropdown-item" href="quiz.html">Quizzes</a>
                </div>
              </li>
              <li class="nav-item active dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown">Visualizations</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                  <a class="dropdown-item" href="datastructures.html">Data Structures</a>
                  <a class="dropdown-item" href="algorithms.html">Algorithms</a>
                </div>
              </li>
              <li class="nav-item"><a class="nav-link" href="login.html"><i class="fa fa-user"></i> Login</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>
  <div class="gradient-overlay"></div>

  <!-- Sorting Algorithm Visualization Section -->
  <div class="sorting-visualization-body">


    
    <h2 class="ribbon-title">Sorting Algorithm Visualization</h2>

    
    <div class="controls-1">
      <input type="text" id="array-input" placeholder="Enter numbers (e.g., 5, 10, 3)" />
      <button onclick="generateArray()" class="generateArrays">Generate Arrays</button>
      <span class="bubble"></span>
      <span class="info-icon" data-tooltip="Generate an array with random values with 10 size."><i>?</i></span>
      <button onclick="generateRandomArray()" class="generateRandomArrays">Generate Random Arrays</button>
      <span class="bubble-2"></span>
    </div>
    <span class="info-icon-2" data-tooltip="Create an array with user-defined size and values."><i>?</i></span>

    <div id="array-container"></div>

    <div class="controls">
      
      <button onclick="bubbleSort()" class="bubblesort">Bubble Sort</button>
      <span class="bubble-3"></span>
      <span class="info-icon-3" data-tooltip="Visualize pairwise comparison and swapping to sort elements."><i>?</i></span>
      <button onclick="selectionSort()" class="selectionsort">Selection Sort</button>
      <span class="bubble-4"></span>
      <span class="info-icon-4" data-tooltip="Highlight smallest element selection in each sorting pass."><i>?</i></span>
      <button onclick="insertionSort()" class="insertionsort">Insertion Sort</button>
      <span class="bubble-5"></span>
      <span class="info-icon-5" data-tooltip="Show gradual element insertion into a sorted subsection."><i>?</i></span>
      <button onclick="mergeSort()" class="mergesort">Merge Sort</button>
      <span class="bubble-6"></span>
      <span class="info-icon-6" data-tooltip="Display divide-and-conquer sorting by merging sorted halves."><i>?</i></span>
      <button onclick="quickSort()" class="quicksort">Quick Sort</button>
      <span class="bubble-7"></span>
      <span class="info-icon-7" data-tooltip="Illustrate pivot-based partitioning and recursive element sorting."><i>?</i></span>
      <button onclick="heapSort()" class="heapsort">Heap Sort</button>
      <span class="bubble-8"></span>
      <span class="info-icon-8" data-tooltip="Visualize sorting using a binary heap structure."><i>?</i></span>
    </div>
  </div>

  

  <div id="toast" class="toast">
    <span id="toast-message"></span>
    <button type="button" class="close ml- mr-2 py-1" data-dismiss="toast" aria-label="Close" style="border: none; background: none;">
        <span aria-hidden="true">&times;</span>
    </button>
  </div>

  <!-- Sorting Algorithm Visualization Script -->
  <script>
    const arrayContainer = document.getElementById('array-container');
    let array = [];
    const delay = 500;

    const toastTimeout = 2500; // Set the timeout for the toast in milliseconds
    function showToast(message) {
      const toast = document.getElementById('toast');
      const toastMessage = document.getElementById('toast-message');
       const exclamationIcon = '<i class="fas fa-exclamation-circle" style="font-size: 15px; padding-right: 15px; color: white;"></i>';
  
  toastMessage.innerHTML = exclamationIcon + message; 

      toast.classList.add('show');
      setTimeout(() => {
        toast.classList.remove('show');
      }, 2500);
    }

    function closeToast() {
      const toast = document.getElementById('toast');
      toast.classList.remove('show');
    }


    function generateArray() {
    const input = document.getElementById('array-input').value.trim();

    // Validate input to allow numbers separated by spaces or commas
    const inputArray = input.split(/[\s,]+/)
        .map(num => parseInt(num.trim()))
        .filter(num => !isNaN(num));

    if (inputArray.length === 0) {
        showToast("Numbers split by commas or spaces."); // Show toast if input is empty
        return;
    }

    if (inputArray.length > 10) {
        showToast("Enter less than 10 numbers.");
        return;
    }

    for (let num of inputArray) {
        if (num < 1 || num > 100) {
            showToast("Enter numbers 1-100");
            return;
        }
    }

    array = inputArray;
    renderArray();
}



    function generateRandomArray() {
        array = Array.from({ length: 10 }, () => Math.floor(Math.random() * 100) + 1);
        renderArray();
    }

    function renderArray() {
        arrayContainer.innerHTML = '';
        array.forEach(value => {
            const bar = document.createElement('div');
            bar.classList.add('array-bar');
            bar.style.height = `${value * 3}px`;
            bar.style.width = '120px';

            // Create a span element to display the value
            const valueSpan = document.createElement('span');
            valueSpan.classList.add('bar-value');
            valueSpan.textContent = value; // Set the text to the value of the bar

            bar.appendChild(valueSpan); // Append the span to the bar
            arrayContainer.appendChild(bar);
        });
    }

    async function bubbleSort() {
        disableButtons();
        for (let i = 0; i < array.length; i++) {
            for (let j = 0; j < array.length - i - 1; j++) {
                const bars = document.querySelectorAll('.array-bar');

                // Highlight current pair being compared
                bars[j].classList.add('highlight-yellow');
                bars[j + 1].classList.add('highlight-yellow');
                await pause(delay);

                if (array[j] > array[j + 1]) {
                    // Swap the values
                    [array[j], array[j + 1]] = [array[j + 1], array[j]];

                    // Render the array and get updated bars
                    renderArray();
                    const updatedBars = document.querySelectorAll('.array-bar');

                    // Add red highlight for swapped bars
                    updatedBars[j].classList.add('highlight-red');
                    updatedBars[j + 1].classList.add('highlight-red');

                    await pause(delay);

                    // Remove red highlights after transition
                    updatedBars[j].classList.remove('highlight-red');
                    updatedBars[j + 1].classList.remove('highlight-red');
                }

                // Remove yellow highlights after comparison
                bars[j].classList.remove('highlight-yellow');
                bars[j + 1].classList.remove('highlight-yellow');
            }
        }
        enableButtons();
    }

    async function selectionSort() {
        disableButtons();
        for (let i = 0; i < array.length - 1; i++) {
            let minIndex = i;
            const bars = document.querySelectorAll('.array-bar');

            // Highlight the current starting element
            bars[i].classList.add('highlight-yellow');
            
            for (let j = i + 1; j < array.length; j++) {
                // Highlight current comparison element
                bars[j].classList.add('highlight-yellow');
                await pause(delay);
                
                if (array[j] < array[minIndex]) {
                    minIndex = j;
                }

                // Remove highlight after comparison
                bars[j].classList.remove('highlight-yellow');
            }

            if (minIndex !== i) {
                // Swap elements
                [array[i], array[minIndex]] = [array[minIndex], array[i]];
                renderArray();

                // Re-select bars after render
                const updatedBars = document.querySelectorAll('.array-bar');
                
                // Add red highlight for swapped elements
                updatedBars[i].classList.add('highlight-red');
                updatedBars[minIndex].classList.add('highlight-red');
                
                await pause(delay);

                // Remove red highlights after transition
                updatedBars[i].classList.remove('highlight-red');
                updatedBars[minIndex].classList.remove('highlight-red');
            }

            // Remove yellow highlight from sorted element
            bars[i].classList.remove('highlight-yellow');
        }
        enableButtons();
    }

    async function insertionSort() {
        disableButtons();
        for (let i = 1; i < array.length; i++) {
            let key = array[i];
            let j = i - 1;
            const bars = document.querySelectorAll('.array-bar');

            // Highlight the key element being inserted
            bars[i].classList.add('highlight-yellow');
            await pause(delay);

            while (j >= 0 && array[j] > key) {
                // Shift element to the right
                array[j + 1] = array[j];

                renderArray();
                const updatedBars = document.querySelectorAll('.array-bar');

                // Highlight moved element in red
                updatedBars[j + 1].classList.add('highlight-red');
                await pause(delay);

                // Remove red highlight after transition
                updatedBars[j + 1].classList.remove('highlight-red');

                j--;
            }

            array[j + 1] = key;
            renderArray();

            // Remove yellow highlight from the inserted element
            const updatedBars = document.querySelectorAll('.array-bar');
            updatedBars[j + 1].classList.remove('highlight-yellow');

            await pause(delay);
        }
        enableButtons();
    }

    
    async function mergeSort() {
    disableButtons();
    await mergeSortHelper(0, array.length - 1);
    enableButtons();
}

async function mergeSortHelper(left, right) {
    if (left < right) {
        let mid = Math.floor((left + right) / 2);

        await mergeSortHelper(left, mid);
        await mergeSortHelper(mid + 1, right);

        await merge(left, mid, right);
    }
}

async function merge(left, mid, right) {
    let leftArr = array.slice(left, mid + 1);
    let rightArr = array.slice(mid + 1, right + 1);
    let i = 0, j = 0, k = left;

    while (i < leftArr.length && j < rightArr.length) {
        renderArray();
        const bars = document.querySelectorAll('.array-bar');

        // Highlight all bars being compared in yellow
        for (let x = left; x <= right; x++) {
            bars[x].classList.add('highlight-yellow');
        }
        await pause(delay);

        if (leftArr[i] <= rightArr[j]) {
            array[k] = leftArr[i];
            i++;
        } else {
            array[k] = rightArr[j];
            j++;
        }

        // Highlight all swapped/moved elements in red
        for (let x = left; x <= k; x++) {
            bars[x].classList.add('highlight-red');
        }
        await pause(delay);

        // Remove red highlights after movement
        for (let x = left; x <= k; x++) {
            bars[x].classList.remove('highlight-red');
        }
        for (let x = left; x <= right; x++) {
            bars[x].classList.remove('highlight-yellow');
        }

        k++;
    }

    while (i < leftArr.length) {
        renderArray();
        const bars = document.querySelectorAll('.array-bar');

        // Highlight remaining elements in yellow
        for (let x = left; x <= right; x++) {
            bars[x].classList.add('highlight-yellow');
        }
        await pause(delay);

        array[k] = leftArr[i];
        i++;

        // Highlight all swapped/moved elements in red
        for (let x = left; x <= k; x++) {
            bars[x].classList.add('highlight-red');
        }
        await pause(delay);

        // Remove red and yellow highlights
        for (let x = left; x <= k; x++) {
            bars[x].classList.remove('highlight-red');
        }
        for (let x = left; x <= right; x++) {
            bars[x].classList.remove('highlight-yellow');
        }

        k++;
    }

    while (j < rightArr.length) {
        renderArray();
        const bars = document.querySelectorAll('.array-bar');

        // Highlight remaining elements in yellow
        for (let x = left; x <= right; x++) {
            bars[x].classList.add('highlight-yellow');
        }
        await pause(delay);

        array[k] = rightArr[j];
        j++;

        // Highlight all swapped/moved elements in red
        for (let x = left; x <= k; x++) {
            bars[x].classList.add('highlight-red');
        }
        await pause(delay);

        // Remove red and yellow highlights
        for (let x = left; x <= k; x++) {
            bars[x].classList.remove('highlight-red');
        }
        for (let x = left; x <= right; x++) {
            bars[x].classList.remove('highlight-yellow');
        }

        k++;
    }

    renderArray(); // Final render
}


async function partition(arr, low, high) {
    const pivot = arr[high];  
    let i = low - 1;

    renderArray();
    const bars = document.querySelectorAll('.array-bar');

    // Highlight pivot in yellow
    bars[high].classList.add('highlight-yellow');
    await pause(delay);

    for (let j = low; j < high; j++) {
        // Highlight all elements being compared
        bars[j].classList.add('highlight-yellow');
        await pause(delay);

        if (arr[j] < pivot) {
            i++;

            // Highlight swapped elements in red BEFORE swapping
            bars[i].classList.add('highlight-red');
            bars[j].classList.add('highlight-red');
            await pause(delay); // Let red highlight appear before swapping

            // Swap elements
            [arr[i], arr[j]] = [arr[j], arr[i]];
            renderArray();
            await pause(delay); // Pause to show the swap visually

            // Update bar references after re-render
            const updatedBars = document.querySelectorAll('.array-bar');
            updatedBars[i].classList.add('highlight-red');
            updatedBars[j].classList.add('highlight-red');
            await pause(delay); // Let red stay a bit before removal

            // Remove red highlight after swap
            updatedBars[i].classList.remove('highlight-red');
            updatedBars[j].classList.remove('highlight-red');
        }

        // Remove yellow highlight after comparison
        bars[j].classList.remove('highlight-yellow');
    }

    // Swap pivot with correct position
    bars[i + 1].classList.add('highlight-red');
    bars[high].classList.add('highlight-red');
    await pause(delay);

    [arr[i + 1], arr[high]] = [arr[high], arr[i + 1]];
    renderArray();
    await pause(delay); // Pause to let the swap be seen

    // Update bar references after re-render
    const updatedBars = document.querySelectorAll('.array-bar');
    updatedBars[i + 1].classList.add('highlight-red');
    updatedBars[high].classList.add('highlight-red');
    await pause(delay);

    // Remove red highlights after final swap
    updatedBars[i + 1].classList.remove('highlight-red');
    updatedBars[high].classList.remove('highlight-red');
    updatedBars[high].classList.remove('highlight-yellow');

    return i + 1;
}

async function quickSortHelper(arr, low, high) {
    if (low < high) {
        const pivotIndex = await partition(arr, low, high);
        await quickSortHelper(arr, low, pivotIndex - 1);
        await quickSortHelper(arr, pivotIndex + 1, high);
    }
}

async function quickSort() {
    disableButtons();
    await quickSortHelper(array, 0, array.length - 1);
    enableButtons();
}

async function heapSort() {
    disableButtons();

    const n = array.length;

    // Build max heap
    for (let i = Math.floor(n / 2) - 1; i >= 0; i--) {
        await heapify(array, n, i);
    }

    // Extract elements from heap one by one
    for (let i = n - 1; i > 0; i--) {
        renderArray();
        const bars = document.querySelectorAll('.array-bar');

        // Highlight swapped elements in red BEFORE swapping
        bars[0].classList.add('highlight-red');
        bars[i].classList.add('highlight-red');
        await pause(delay); // Allow animation to be visible

        [array[0], array[i]] = [array[i], array[0]];
        renderArray();
        await pause(delay); // Show swap before continuing

        // Remove red highlight after swap
        bars[0].classList.remove('highlight-red');
        bars[i].classList.remove('highlight-red');

        await heapify(array, i, 0);
    }

    enableButtons();
}

async function heapify(arr, heapSize, rootIndex) {
    let largest = rootIndex;
    let left = 2 * rootIndex + 1;
    let right = 2 * rootIndex + 2;

    renderArray();
    const bars = document.querySelectorAll('.array-bar');

    // Highlight current node and children in yellow
    bars[rootIndex].classList.add('highlight-yellow');
    if (left < heapSize) bars[left].classList.add('highlight-yellow');
    if (right < heapSize) bars[right].classList.add('highlight-yellow');

    await pause(delay); // Allow highlight to be visible

    if (left < heapSize && arr[left] > arr[largest]) {
        largest = left;
    }

    if (right < heapSize && arr[right] > arr[largest]) {
        largest = right;
    }

    if (largest !== rootIndex) {
        // Highlight swapped elements in red BEFORE swapping
        bars[rootIndex].classList.add('highlight-red');
        bars[largest].classList.add('highlight-red');
        await pause(delay); // Allow animation to be visible

        [arr[rootIndex], arr[largest]] = [arr[largest], arr[rootIndex]];
        renderArray();
        await pause(delay); // Show swap before continuing

        // Remove red highlight after swap
        bars[rootIndex].classList.remove('highlight-red');
        bars[largest].classList.remove('highlight-red');

        await heapify(arr, heapSize, largest);
    }

    // Remove yellow highlights after comparison
    bars[rootIndex].classList.remove('highlight-yellow');
    if (left < heapSize) bars[left].classList.remove('highlight-yellow');
    if (right < heapSize) bars[right].classList.remove('highlight-yellow');
}


// Function to highlight multiple bars
function highlightBars(bars, startIndex, className) {
    for (let i = startIndex; i < bars.length; i++) {
        bars[i].classList.add(className);
    }
}

// Function to remove highlights from all bars
function removeHighlight() {
    document.querySelectorAll('.array-bar').forEach(bar => {
        bar.classList.remove('highlight-red', 'highlight-yellow');
    });
}


function highlightMovingBar(index) {
    document.querySelectorAll('.array-bar')[index]?.classList.add('highlight-red');
}

function highlightUpcomingBar(index) {
    document.querySelectorAll('.array-bar')[index]?.classList.add('highlight-yellow');
}

function removeHighlight() {
    document.querySelectorAll('.array-bar').forEach(bar => {
        bar.classList.remove('highlight-red', 'highlight-yellow');
    });
}




  
    function disableButtons() {
        document.querySelectorAll('button').forEach(button => button.disabled = true);
    }

    function enableButtons() {
        document.querySelectorAll('button').forEach(button => button.disabled = false);
    }

    function pause(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }



    generateRandomArray(); // Generate initial random array
</script>
<script>
  document.addEventListener("DOMContentLoaded", async function () {
  // Initialize Driver.js
  const driver = new Driver({
    showProgress: true, // Show step progress
    allowClose: false, // Prevent users from closing early
    overlayOpacity: 0.3, // Dim background
    doneBtnText: "Finish",
    nextBtnText: "Next",
    prevBtnText: "Previous",
    closeBtnText: "Close",
  });

  // Define Steps
  driver.defineSteps([
    {
      element: "#array-container",
      popover: {
        title: "Visualization Container",
        description: "This is the main container where sorting visualizations will be shown.",
        position: "top",
      },
    },
    {
      element: "#array-input",
      popover: {
        title: "Input Field",
        description: "Enter numbers separated by commas to create your custom array.",
        position: "bottom",
      },
    },
    {
      element: ".generateArrays",
      popover: {
        title: "Generate Arrays Button",
        description: "Click to generate an array from your input.",
        position: "bottom",
      },
    },
    {
      element: ".generateRandomArrays",
      popover: {
        title: "Generate Random Arrays Button",
        description: "Click to generate a random array with default size 10.",
        position: "bottom",
      },
    },
    {
      element: ".bubblesort",
      popover: {
        title: "Bubble Sort Button",
        description: "Visualize sorting using the Bubble Sort algorithm.",
        position: "top",
      },
    },
    {
      element: ".selectionsort",
      popover: {
        title: "Selection Sort Button",
        description: "Visualize sorting using the Selection Sort algorithm.",
        position: "top",
      },
    },
    {
      element: ".insertionsort",
      popover: {
        title: "Insertion Sort Button",
        description: "Visualize sorting using the Insertion Sort algorithm.",
        position: "top",
      },
    },
    {
      element: ".mergesort",
      popover: {
        title: "Merge Sort Button",
        description: "Visualize sorting using the Merge Sort algorithm.",
        position: "top",
      },
    },
    {
      element: ".quicksort",
      popover: {
        title: "Quick Sort Button",
        description: "Visualize sorting using the Quick Sort algorithm.",
        position: "top",
      },
    },
    {
      element: ".heapsort",
      popover: {
        title: "Heap Sort Button",
        description: "Visualize sorting using the Heap Sort algorithm.",
        position: "top",
      },
    },
  ]);

  // Start the Tour
  await driver.start();
});

</script>

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
