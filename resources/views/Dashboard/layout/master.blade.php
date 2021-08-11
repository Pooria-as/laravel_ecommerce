<!DOCTYPE html>
<html lang="en">
  <head>
    @include("Dashboard.layout.Partials.MetaTags")
    <title>
        @yield('Page_Title')
    </title>

    <!-- vendor css -->
    @include("Dashboard.layout.Partials.styles")
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    @include("Dashboard.layout.Partials.LeftSideBar")
   <!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    @include("Dashboard.layout.Partials.HeadPanel")
   <!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    @include("Dashboard.layout.Partials.RitghPanel")
    <!-- sl-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->

    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
          <a class="breadcrumb-item">Shop Panel</a>
          <a class="breadcrumb-item">@yield('Location')</a>
          <span class="breadcrumb-item active">@yield("page")</span>
        </nav>

        <div class="sl-pagebody">
            @yield('content')
          </div>

    </div>
        {{-- @include("Dashboard.layout.Partials.MainPannel") --}}
   <!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

   @include("Dashboard.layout.Partials.scripts")


  </body>


</html>
