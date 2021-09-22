<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
      <!-- Aplication Brand -->
      <div class="app-brand">
        <a href="/index.html">
          <svg
            class="brand-icon"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="xMidYMid"
            width="30"
            height="33"
            viewBox="0 0 30 33"
          >
            <g fill="none" fill-rule="evenodd">
              <path
                class="logo-fill-blue"
                fill="#7DBCFF"
                d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
              />
              <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
            </g>
          </svg>
          <span class="brand-name">Sleek Dashboard</span>
        </a>
      </div>
      <!-- begin sidebar scrollbar -->
      <div class="sidebar-scrollbar">

        <!-- sidebar menu -->
    
              <ul  class="collapse show"  id="dashboard"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                      <li  class="active" >
                        <a class="sidenav-item-link" href="{{route('dashs')}}">
                          <span class="nav-text">Dashboard</span>
                        </a>
                      </li>
                    
                      <li >
                        <a class="sidenav-item-link" href="{{route('add_jobs')}}">
                          <span class="nav-text">Add new Jobs</span>
                          
                          <span class="badge badge-success">new</span>
                          
                        </a>
                      </li>
                    
                  

                  
                </div>
              </ul>
          

          

       

          
        </ul>

      </div>

      <hr class="separator" />

 
    </div>
  </aside>