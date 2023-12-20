<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <script src="https://getbootstrap.com/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">

    <title>KoeShoes</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">
    <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

    
  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="cart" viewBox="0 0 16 16">
      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
      </symbol>
    </svg>

<header data-bs-theme="dark">
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="<?php echo base_url('home/index')?>" class="navbar-brand d-flex align-items-center">
      <svg fill="White" height="50px" width="50px" stroke="White" id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.001 512.001" class="me-2">
        <g transform="translate(0 -1)">
          <g>
            <g>
              <path d="M512,286.527v-0.059c0-0.02-0.004-0.038-0.004-0.057c-0.002-0.34-0.028-0.681-0.071-1.021
                c-0.011-0.091-0.02-0.182-0.033-0.272c-0.047-0.291-0.109-0.58-0.187-0.868c-0.049-0.188-0.109-0.369-0.171-0.55
                c-0.031-0.091-0.065-0.18-0.1-0.27c-0.112-0.296-0.237-0.583-0.379-0.859c-5.935-12.436-18.723-20.249-43.75-27.572
                c-0.441-0.129-0.903-0.258-1.352-0.387c-0.662-0.19-1.315-0.38-1.994-0.57c-1.042-0.291-2.11-0.582-3.192-0.872
                c-0.101-0.027-0.196-0.054-0.297-0.081c-8.364-2.236-17.927-4.46-28.849-6.794c-5.448-1.164-8.426-1.782-20.643-4.299
                c-7.61-1.578-14.997-3.11-18.082-3.766c-15.837-3.366-28.73-6.359-41.102-9.631c-21.253-5.622-39.984-11.891-56.457-19.148
                c-0.326-0.173-0.663-0.317-1.004-0.444c-9.394-4.185-18.05-8.696-26.004-13.603c-0.336-0.243-0.682-0.466-1.042-0.653
                c-8.316-5.207-15.867-10.851-22.695-17.015c-2.608-2.354-6.392-2.87-9.535-1.299c-1.064,0.532-2.92,1.496-5.377,2.831
                c-4.073,2.212-8.362,4.674-12.681,7.327c-39.686,24.377-88.57,29.758-133.586,14.976c-14.295-4.692-29.671-10.302-46.175-16.893
                c-1.411-0.563-2.898-0.725-4.323-0.529c-8.863-0.626-15.848-7.981-15.848-17.005c0-4.713-3.82-8.533-8.533-8.533
                S0,162.43,0,167.142c0,14.094,8.53,26.182,20.711,31.393c-2.409,4.46-4.787,9.278-7.041,14.4
                c-4.547,10.335-8.091,20.716-10.38,30.987c-0.213,0.944-0.415,1.886-0.606,2.825c-0.02,0.1-0.039,0.2-0.059,0.3
                c-2.981,14.838-3.2,29.079-0.001,42.354C1.009,290.956,0,293.133,0,295.548v33.587c0,4.713,3.82,8.533,8.533,8.533
                c8.582,0,18.885,0.038,31.45,0.147c18.852,0.164,38.031,0.458,56.812,0.909c51.323,1.235,91.906,3.453,115.315,6.842
                c108.017,15.623,251.314,14.822,296.441-18.659c2.17-1.61,3.449-4.152,3.449-6.853v-33.502C512,286.545,512,286.536,512,286.527z
                M413.753,260.001c6.286,1.304,11.911,2.474,14.386,3.003c9.305,1.988,17.509,3.898,24.705,5.773
                c0.148,0.039,0.291,0.077,0.438,0.116c0.644,0.169,1.286,0.337,1.914,0.506c0.453,0.121,0.893,0.242,1.337,0.363
                c0.31,0.084,0.626,0.169,0.932,0.253c15.769,4.347,26.145,8.556,32.281,13.174c-5.515,1.926-12.503,3.862-21.122,5.711
                c-38.406,8.237-96.384,12.316-177.793,9.92c2.092-7.06,8.63-12.212,16.366-12.212c0.096,0.009,0.82,0.029,1.841,0.049
                c15.087,0.293,33.142-0.39,50.575-2.878C386.43,279.952,405.496,272.824,413.753,260.001z M225.932,201.136
                c3.992-2.452,7.972-4.738,11.749-6.793c3.887,3.265,7.961,6.378,12.215,9.362l-13.088,13.088c-3.332,3.332-3.332,8.735,0,12.068
                c3.333,3.332,8.735,3.332,12.068,0l15.772-15.772c3.881,2.241,7.898,4.398,12.053,6.477l-9.671,9.671
                c-3.332,3.333-3.332,8.735,0,12.068c3.332,3.332,8.735,3.332,12.068,0l14.159-14.159c4.304,1.803,8.732,3.547,13.302,5.231
                l-10.367,10.367c-3.332,3.332-3.332,8.735,0,12.068s8.735,3.332,12.068,0l16.309-16.309c7.31,2.302,14.92,4.496,22.86,6.596
                c12.682,3.355,25.83,6.406,41.918,9.826c1.047,0.223,2.578,0.544,4.435,0.931c-7.34,4.796-19.959,8.657-36.581,11.029
                c-16.363,2.335-33.584,2.986-47.833,2.71c-0.927-0.018-1.56-0.036-1.869-0.047c-17.281-0.005-31.412,12.442-34.006,28.724
                c-18.712-0.747-38.559-1.822-59.583-3.249c-2.832-0.192-5.628-0.38-8.399-0.564c-0.026-0.002-0.052-0.003-0.078-0.005
                c-37.026-2.462-68.623-4.225-95.829-5.425c-6.732-38.966-39.723-68.577-79.695-70.573c2.454-5.457,5.051-10.548,7.648-15.117
                c14.39,5.436,27.863,10.289,40.533,14.448C127.83,234.118,181.932,228.163,225.932,201.136z M19.601,286.903
                c-0.299-1.126-0.562-2.269-0.799-3.424c-0.031-0.15-0.056-0.301-0.086-0.451c-0.205-1.04-0.388-2.091-0.543-3.154
                c-0.019-0.129-0.037-0.257-0.056-0.386c-0.339-2.413-0.556-4.883-0.646-7.411c-0.208-5.824,0.24-11.851,1.244-18.005
                c0.066-0.402,0.125-0.802,0.196-1.206c0.06-0.345,0.131-0.692,0.195-1.037c0.994-5.331,2.403-10.798,4.214-16.375
                c0.768-0.029,1.527-0.044,2.279-0.044c32.233,0,59.481,22.453,66.467,52.897C62.916,287.203,39.291,286.806,19.601,286.903z
                M494.933,315.536c-43.996,27.263-180.281,27.619-280.378,13.141c-24.302-3.519-65.352-5.762-117.349-7.013
                c-18.875-0.454-38.139-0.749-57.073-0.914c-8.709-0.076-16.338-0.117-23.066-0.136v-16.62
                c20.824-0.146,48.016,0.342,84.658,1.851c0.312,0.013,0.621,0.008,0.925-0.012c30.719,1.285,67.014,3.292,110.106,6.216
                c123.389,8.373,207.308,4.762,259.486-6.45c1.21-0.26,2.386-0.521,3.533-0.782c0.377-0.086,0.733-0.172,1.104-0.258
                c0.757-0.176,1.515-0.351,2.244-0.527c0.426-0.103,0.83-0.206,1.246-0.308c0.643-0.159,1.29-0.317,1.91-0.476
                c0.438-0.112,0.855-0.224,1.281-0.335c0.57-0.149,1.143-0.299,1.693-0.448c0.425-0.115,0.832-0.23,1.245-0.345
                c0.525-0.146,1.051-0.292,1.558-0.438c0.405-0.116,0.793-0.232,1.186-0.348c0.483-0.143,0.966-0.285,1.431-0.427
                c0.386-0.118,0.758-0.235,1.133-0.352c0.446-0.14,0.89-0.28,1.32-0.419c0.36-0.117,0.709-0.233,1.058-0.349
                c0.247-0.082,0.509-0.166,0.75-0.248V315.536z"/>
            </g>
          </g>
        </g>
      </svg>
      <strong>KoeShoes</strong>
      </a>
    </div>
</header>

