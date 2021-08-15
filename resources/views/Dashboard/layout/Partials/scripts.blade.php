
 <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script src="{{ asset("Dashboard/lib/popper.js/popper.js") }}"></script>
<script src="{{ asset("Dashboard/lib/bootstrap/bootstrap.js") }}"></script>
<script src="{{ asset("Dashboard/lib/highlightjs/highlight.pack.js") }}"></script>
<script src="{{ asset("Dashboard/lib/datatables/jquery.dataTables.js") }}"></script>
<script src="{{ asset("Dashboard/lib/datatables-responsive/dataTables.responsive.js") }}"></script>
<script src="{{ asset("Dashboard/lib/select2/js/select2.min.js") }}"></script>

<script src="{{ asset("Dashboard/lib/flot-spline/jquery.flot.spline.js") }}"></script>
<script src="{{ asset("Dashboard/lib/jquery-ui/jquery-ui.js") }}"></script>
<script src="{{ asset("Dashboard/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js") }}"></script>
<script src="{{ asset("Dashboard/lib/jquery.sparkline.bower/jquery.sparkline.min.js") }}"></script>
<script src="{{ asset("Dashboard/lib/d3/d3.js") }}"></script>
<script src="{{ asset("Dashboard/lib/rickshaw/rickshaw.min.js") }}"></script>
<script src="{{ asset("Dashboard/js/chart.chartjs.js") }}"></script>


<script src="{{ asset("Dashboard/js/starlight.js") }}"></script>
<script src="{{ asset("Dashboard/js/ResizeSensor.js") }}"></script>
<script src="{{ asset("Dashboard/js/dashboard.js") }}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>





<script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>
<script>
$('#datatable1').DataTable({
responsive: true,
language: {
  searchPlaceholder: 'Search...',
  sSearch: '',
  lengthMenu: '_MENU_ items/page',
}
});
$('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });


@if(Session::has('message'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.success("{{ session('message') }}");
    @endif

    @if(Session::has('error'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.error("{{ session('error') }}");
    @endif

    @if(Session::has('info'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.info("{{ session('info') }}");
    @endif

    @if(Session::has('warning'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.warning("{{ session('warning') }}");
    @endif
</script>


