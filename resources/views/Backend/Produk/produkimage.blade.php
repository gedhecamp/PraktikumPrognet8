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
    <link rel="stylesheet" type="text/css" href="{{asset('asset/plugins/bower_components/gallery/css/animated-masonry-gallery.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('asset/plugins/bower_components/fancybox/ekko-lightbox.min.css')}}" />
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
                        <h4 class="page-title">Product</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Product</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

                <!-- /.produk edit -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-info">
                            <div class="panel-heading"> Update Product</div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    
                                        <div class="form-body">
                                            {{-- <div class="row">
                                                <div class="col-md-12">
                                                    <h3 class="box-title m-t-10">Product Image</h3>
                                                    <div id="gallery-content">
                                                        <div id="gallery-content-center">
                                                            @foreach ($images as $image)
                                                                <a href="/{{$image->image_name}}" class="big"><img src="/{{$image->image_name}}" alt="gallery" title="{{$image->image_name}}" /></a>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <hr>
                                            <div class="white-box">
                                                    <div class="table-responsive">
                                                        <table class="table product-overview" id="myTable">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Gambar</th>
                                                                    <th>Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach($images as $i)

                                                                @php
                                                                    $id = $i->product_id;
                                                                @endphp
                                                                <tr>
                                                                    <td style="padding: 0px 20px; width: 5%">{{$loop->iteration}}</td>
                                                                    <td>
                                                                        <img src="/{{$i->image_name}}" alt="iMac" width="150"/>
                                                                    </td>
                                                                    <td style="width: 8%">
                                                                        <div class="col-md-12">    
                                                                            <form method='get' action='/produkkurang/{{$i->id}}'>
                                                                                {{ method_field('DELETE') }}
                                                                                {{ csrf_field() }}
                                                                                
                                                                                <button type="submit" style="padding: 10px 10px" class="btn btn-block btn-danger btn-xs mt-1 mb-1">
                                                                                    <i class="ti-trash"></i>
                                                                                </button>
                                                                            </form>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                                <tr>
                                                                    <td style="padding: 0px 20px; width: 5%"></td>
                                                                    <td></td>
                                                                    <td style="width: 8%">
                                                                        <div class="col-md-12">    
                                                                            <form method='post' action='/tambahgambar' enctype="multipart/form-data">
                                                                                @csrf
                                                                                
                                                                                <div class="fileupload btn btn-info waves-effect waves-light">
                                                                                    <span><i class="ion-upload m-r-5"></i>Upload</span>
                                                                                    <input type="file" class="upload" name="gambar">
                                                                                </div>
                                                                                    
                                                                                @foreach($images as $i)
                                                                                        @php
                                                                                            $id = $i->product_id;
                                                                                        @endphp
                                                                                    <input type="hidden" name="id_product" value="{{$id}}">
                                                                                    @endforeach
                                                                                    <button type="submit" class="btn btn-block btn-info btn-xs mt-1 mb-1">
                                                                                            <i class="ti-upload"></i>
                                                                                    </button>

                                                                                {{-- {{ method_field('DELETE') }}
                                                                                {{ csrf_field() }}
                                                                                
                                                                                <button type="submit" style="padding: 10px 10px" class="btn btn-block btn-danger btn-xs mt-1 mb-1">
                                                                                    <i class="ti-trash"></i>
                                                                                </button> --}}
                                                                            </form>
                                                                        </div>
                                                                    </td>
                                                                
                                                                </tr>
                                                                {{-- <tr>
                                                                    <td style="width: 10%">
                                                                        <div class="col-md-12">    
                                                                            <form method='post' action='gambarproduk/{{$i->id}}'>
                                                                                {{ method_field('DELETE') }}
                                                                                {{ csrf_field() }}
                                                                                
                                                                                <button type="submit" style="padding: 10px 10px" class="btn btn-block btn-danger btn-xs mt-1 mb-1">
                                                                                    <i class="ti-trash"></i>
                                                                                </button>
                                                                            </form>
                                                                        </div>
                                                                    </td>
                                                                </tr>    --}}
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                        </div>
                                    <form action='/produk' method="GET" >
                                        {{ method_field('GET') }}
                                        {{ csrf_field() }}
                                        <div class="form-actions m-t-20">
                                            <button href="/produk" type="submit" class="btn btn-info"> <i class="fa fa-chevron-left"></i> Kembali</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--edit -->

                <!-- /.produk view -->
                {{-- <div class="row">
                    <div class="col-md-12">
                        <form action='/produk' method="get">
                            {{ csrf_field() }}
                        <div class="white-box">
                            <div class="table-responsive">
                                <table class="table product-overview" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Gambar</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($images as $image)
                                        <tr>
                                            <td style="padding: 0px 20px; width: 5%">{{$loop->iteration}}</td>
                                            <td>
                                                <a href="/{{$image->image_name}}" class="big"><img src="/{{$image->image_name}}" title="{{$image->image_name}}" /></a>
                                            </td>
                                            <td style="width: 10%">
                                                <div class="col-md-4">    
                                                    <form method='post' action='gambarproduk/{{$image->id}}'>
                                                        {{ method_field('DELETE') }}
											            {{ csrf_field() }}
                                                        
                                                        <button type="submit" style="padding: 10px 10px" class="btn btn-block btn-danger btn-xs mt-1 mb-1">
                                                            <i class="ti-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach   
                                        <tr>
                                            <td style="width: 10%">
                                                <div class="col-md-4">    
                                                    <form method='post' action='gambarproduk/{{$image->id}}'>
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        
                                                        <button type="submit" style="padding: 10px 10px" class="btn btn-block btn-danger btn-xs mt-1 mb-1">
                                                            <i class="ti-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                    </div>
                </div> --}}
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
    <script type="text/javascript" src="{{asset('asset/plugins/bower_components/gallery/js/animated-masonry-gallery.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/plugins/bower_components/gallery/js/jquery.isotope.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/plugins/bower_components/fancybox/ekko-lightbox.min.js')}}"></script>
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
    <script type="text/javascript">
        $(document).ready(function($) {
            // delegate calls to data-toggle="lightbox"
            $(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
                event.preventDefault();
                return $(this).ekkoLightbox({
                    onShown: function() {
                        if (window.console) {
                            return console.log('Checking our the events huh?');
                        }
                    },
                    onNavigate: function(direction, itemIndex) {
                        if (window.console) {
                            return console.log('Navigating ' + direction + '. Current item: ' + itemIndex);
                        }
                    }
                });
            });
    
            //Programatically call
            $('#open-image').click(function(e) {
                e.preventDefault();
                $(this).ekkoLightbox();
            });
            $('#open-youtube').click(function(e) {
                e.preventDefault();
                $(this).ekkoLightbox();
            });
    
            // navigateTo
            $(document).delegate('*[data-gallery="navigateTo"]', 'click', function(event) {
                event.preventDefault();
    
                var lb;
                return $(this).ekkoLightbox({
                    onShown: function() {
    
                        lb = this;
    
                        $(lb.modal_content).on('click', '.modal-footer a', function(e) {
    
                            e.preventDefault();
                            lb.navigateTo(2);
    
                        });
    
                    }
                });
            });
    
    
        });
        </script>
    <!--Style Switcher -->
    <script src="{{asset('asset/plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
</body>

</html>