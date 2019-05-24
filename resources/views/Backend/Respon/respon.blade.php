<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('asset/plugins/images/favicon.png')}}">
    <title>Admin Prognet 8</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('asset/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css')}}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{asset('asset/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <!-- toast CSS -->
    <link href="{{asset('asset/plugins/bower_components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- page CSS -->
    <link href="{{asset('asset/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('asset/plugins/bower_components/custom-select/custom-select.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('asset/plugins/bower_components/switchery/dist/switchery.min.css')}}" rel="stylesheet" />
    <link href="{{asset('asset/plugins/bower_components/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" />
    <link href="{{asset('asset/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}" rel="stylesheet" />
    <link href="{{asset('asset/plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
    <link href="{{asset('asset/plugins/bower_components/multiselect/css/multi-select.css')}}" rel="stylesheet" type="text/css" />
    <!-- animation CSS -->
    <link href="{{asset('asset/css/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{asset('asset/css/colors/default.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        @include('Backend.Layouts.navbar')
        <!-- Navigation -->
        <!-- Left navbar-header -->
        @include('Backend.Layouts.sidebar')
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Response</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Response</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

                <!-- /.kurir view -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <div class="table-responsive">
                                <table class="table product-overview" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>User</th>
                                            <th>Product</th>
                                            <th>Rate</th>
                                            <th>Content</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($review as $row)
                                        <tr>
                                            <td style="padding: 0px 20px; width: 5%">{{$loop->iteration}}</td>
                                            <td>{{$row->name}}</td>
                                            <td>{{$row->product_name}}</td>
                                            <td>{{$row->rate}}</td>
                                            <td>{{$row->content}}</td>
                                            <td style="width: 12%">
                                                <button type="submit" style="padding: 10px 10px" class="btn btn-block btn-info btn-xs mt-1 mb-1" data-toggle="modal" data-target="#modal-default">
                                                    <i class="ti-marker-alt"></i>
                                                </button>
                                                <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                                                    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h2 class="modal-title" id="modal-title-default">Response</h2>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">X</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="/respon" method="POST">
                                                                    {{ csrf_field() }}
                                                                    <div class="form-group mb-0">
                                                                        <input name="review_id" hidden value="{{$row->id}}">
                                                                        <label class="form-label">Response</label>
                                                                        <textarea class="form-control" name="content" rows="4" placeholder="Response"></textarea>
                                                                    </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-success mt-1 mb-1">POST</button>
                                                                {{-- <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button> --}}
                                                            </div>
                                                        </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--view -->

            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2019 &copy; Kelompok 8 </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="{{asset('asset/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('asset/bootstrap/dist/js/tether.min.js')}}"></script>
    <script src="{{asset('asset/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('asset/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{asset('asset/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{asset('asset/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('asset/js/waves.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{asset('asset/js/custom.min.js')}}"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="{{asset('asset/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('asset/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js')}}"></script>
    <script src="{{asset('asset/plugins/bower_components/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('asset/plugins/bower_components/switchery/dist/switchery.min.js')}}"></script>
    <script src="{{asset('asset/plugins/bower_components/custom-select/custom-select.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('asset/plugins/bower_components/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('asset/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{asset('asset/plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('asset/plugins/bower_components/multiselect/js/jquery.multi-select.js')}}"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // For select 2

            $(".select2").select2();
            $('.selectpicker').selectpicker();
            
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    </script>
    <!--Style Switcher -->
    <script src="{{asset('asset/plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
</body>

</html>