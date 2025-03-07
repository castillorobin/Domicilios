<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic
Product Version: 8.1.8
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
    <base href="" />
    <title>Melo Express - Domicilios</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            <div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside"
                data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
                <!--begin::Logo-->
                <div class="aside-logo flex-column-auto pt-10 pt-lg-20" id="kt_aside_logo">
                    <a href="/dashboard">
                        <img alt="Logo" src="assets/media/logos/demo9.svg" class="h-40px" />
                    </a>
                </div>
                <!--end::Logo-->
               <!--end::Logo-->
               <div class="aside-menu flex-column-fluid pt-0 pb-7 py-lg-10" id="kt_aside_menu">
					<!--begin::Aside menu-->
					<div class="pt-15 w-100 " data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="0">
						<div  class="menu menu-column menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-icon-gray-400 menu-arrow-gray-400 fw-semibold fs-6 my-auto" data-kt-menu="true">
							<!--begin:Menu item-->
							<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item here show py-2">
								<!--begin:Menu link-->
								<span class="menu-link menu-center">
									<span class="menu-icon me-0">
										<i class="ki-duotone ki-home-2 fs-2x">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</span>
								</span>
								<!--end:Menu link-->
								<!--begin:Menu sub-->
								<div class="menu-sub menu-sub-dropdown px-2 py-4 w-250px mh-75 overflow-auto">
									<!--begin:Menu item-->
									
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<a class="menu-link active" href="/dashboard">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Inicio</span>
										</a>
										
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->

								</div>


								<!--end:Menu sub-->
							</div>

							<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item here show py-2">
								<!--begin:Menu link-->
								@can('repartidor-crear')
								
									<span class="menu-link menu-center">
										<span class="menu-icon me-0">
											<i class="ki-duotone ki-badge fs-2x">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
												<span class="path4"></span>
												<span class="path5"></span>
											</i>
										</span>
									</span>
							
									<div class="menu-sub menu-sub-dropdown px-2 py-4 w-250px mh-75 overflow-auto">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu content-->
											<div class="menu-content">
												<span class="menu-section fs-5 fw-bolder ps-1 py-1">Usuarios</span>
											</div>
											<!--end:Menu content-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/usuarios/lista">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Lista</span>
											</a>

										
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
	
									</div>

									@endcan


                                    <!--end:Menu sub-->

                            </div>

                            </a>

                        </div>

                    </div>
                    <!--end::Aside menu-->
                </div>
                <!--end::Nav-->
                <!--begin::Footer-->
                
                <!--end::Footer-->
            </div>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header tablet and mobile-->
                <div class="header-mobile py-3">
                    <!--begin::Container-->
                    <div class="container d-flex flex-stack">
                        <!--begin::Mobile logo-->
                        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                            <a href="/dashboard">
                                <img alt="Logo" src="assets/media/logos/demo9.svg" class="h-35px" />
                            </a>
                        </div>
                        <!--end::Mobile logo-->
                        <!--begin::Aside toggle-->
                        <button class="btn btn-icon btn-active-color-primary me-n4" id="kt_aside_toggle">
                            <i class="ki-duotone ki-abstract-14 fs-2x">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </button>
                        <!--end::Aside toggle-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header tablet and mobile-->
                <!--begin::Header-->
                <div id="kt_header" class="header py-6 py-lg-0" data-kt-sticky="true" data-kt-sticky-name="header"
                    data-kt-sticky-offset="{lg: '300px'}">
                    <!--begin::Container-->
                    <div class="header-container container-xxl">
                        <!--begin::Page title-->
                        <div
                            class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-20 py-3 py-lg-0 me-3">
                            <!--begin::Heading-->
                            <h1 class="d-flex flex-column text-dark fw-bold my-1">
                                <span class="text-white fs-1">Cambios</span>
                                <small class="text-gray-600 fs-6 fw-normal pt-2"></small>
                            </h1>
                            <!--end::Heading-->
                        </div>
                        <!--end::Page title=-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center flex-wrap">
                            <!--begin::Search-->
                           
                            <!--end::Search-->
                            <!--begin::Action-->
                            <div class="d-flex align-items-center py-3 py-lg-0">
                              
                                <!--begin::Item-->
                                <div class="me-3">
                                    <a href="#" class="btn btn-icon btn-custom btn-active-color-primary"
                                        data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                        data-kt-menu-placement="bottom-end">
                                        <i class="ki-duotone ki-user fs-1 text-white">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </a>
                                    <!--begin::User account menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content d-flex align-items-center px-3">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-50px me-5">
                                                    <img alt="Logo" src="assets/media/avatars/300-1.jpg" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Username-->
                                                <div class="d-flex flex-column">
                                                    <div class="fw-bold d-flex align-items-center fs-5"> {{ Auth::user()->name }}
                                                        
                                                    </div>
                                                    
                                                </div>
                                                <!--end::Username-->
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->
                                        
                                       
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                      
                                        <div class="menu-item px-5">
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                            <a href="#" class="menu-link px-5" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                Sign Out
                                            </a>
                                        </div>

                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::User account menu-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Theme mode-->
                                <div class="d-flex align-items-center me-3">
                                    <!--begin::Menu toggle-->
                                    <a href="#" class="btn btn-icon btn-custom btn-active-color-primary"
                                        data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                        data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                        <i class="ki-duotone ki-night-day theme-light-show fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                            <span class="path6"></span>
                                            <span class="path7"></span>
                                            <span class="path8"></span>
                                            <span class="path9"></span>
                                            <span class="path10"></span>
                                        </i>
                                        <i class="ki-duotone ki-moon theme-dark-show fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </a>
                                    <!--begin::Menu toggle-->
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                        data-kt-menu="true" data-kt-element="theme-mode-menu">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                                data-kt-value="light">
                                                <span class="menu-icon" data-kt-element="icon">
                                                    <i class="ki-duotone ki-night-day fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                        <span class="path5"></span>
                                                        <span class="path6"></span>
                                                        <span class="path7"></span>
                                                        <span class="path8"></span>
                                                        <span class="path9"></span>
                                                        <span class="path10"></span>
                                                    </i>
                                                </span>
                                                <span class="menu-title">Light</span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                                data-kt-value="dark">
                                                <span class="menu-icon" data-kt-element="icon">
                                                    <i class="ki-duotone ki-moon fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </span>
                                                <span class="menu-title">Dark</span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                                data-kt-value="system">
                                                <span class="menu-icon" data-kt-element="icon">
                                                    <i class="ki-duotone ki-screen fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                    </i>
                                                </span>
                                                <span class="menu-title">System</span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Theme mode-->
                                <!--begin::Item-->
                                
                            </div>
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                    <div class="header-offset"></div>
                </div>
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Container-->
                   

                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-11 ps-xl-4 " >
                                <!--begin::Engage widget 1-->
                                <div class="card bgi-position-y-bottom bgi-position-x-end bgi-no-repeat bgi-size-cover min-h-250px bg-primary mb-5 mb-xl-8"
                                    style="background-color:white !important; " dir="ltr">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 pt-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bold fs-3 mb-1 text-gray-600 text-uppercase">
                                               
                                                ENVIOS CAMBIOS
                                               
                                            </span>
                                            <span class="text-muted mt-1 fw-semibold fs-7">
                                                <!-- Puedes agregar un subtítulo dinámico aquí si lo necesitas -->
                                            </span>
                                        </h3>
                                    </div>
                                    <!--end::Header-->

                                    <!--begin::Body-->

                                    <div class="card-body py-3">
                                        <div class="table-responsive" style="overflow-x: auto; padding: 0;">

                                            <!--begin::Main wrapper-->
                                            <div id="kt_docs_search_handler_basic"
                                                data-kt-search-keypress="true"
                                                data-kt-search-min-length="2"
                                                data-kt-search-enter="true"
                                                data-kt-search-layout="inline">

                                                <!--begin::Input Form-->
                                                <form data-kt-search-element="form" class="w-50 position-relative mb-5" autocomplete="off">
                                                    <input type="hidden" />

                                                    <!--begin::Icon (Font Awesome)-->
                                                    <span class="position-absolute top-50 start-0 translate-middle-y ps-5 text-gray-500">
                                                        <i class="fa-solid fa-magnifying-glass"></i>
                                                    </span>
                                                    <!--end::Icon-->

                                                    <input type="text" class="form-control form-control-lg form-control-solid px-15"
                                                        name="search"
                                                        value=""
                                                        placeholder="Buscar..."
                                                        data-kt-search-element="input" id="customSearch" />

                                                    <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                                                        <span class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
                                                    </span>

                                                    <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
                                                        data-kt-search-element="clear" id="clearSearch">
                                                        &#10006;
                                                    </span>
                                                </form>
                                            </div>
                                            <!--end::Main wrapper-->

                                            <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable" id="envios_table" style="width: 100%; table-layout: auto; overflow-x: hidden;">
                                                <thead>
                                                    <tr class="text-start text-gray-600 fw-bold fs-7 text-uppercase gs-0">
                                                        <th class="min-w-100px">GUIA</th>
                                                        <th class="min-w-100px">COMERCIO</th>
                                                        <th class="min-w-100px">DESTINATARIO</th>

                                                        @if (Route::currentRouteName() !== 'filtroreprogramado')
                                                        <th class="min-w-100px">FECHA</th> <!-- Solo visible si NO es filtroreprogramado -->
                                                        @endif

                                                        @if (Route::currentRouteName() === 'filtroreprogramado')
                                                        <th class="min-w-150px">FECHA REPROGRAMADO</th> <!-- Solo visible en filtroreprogramado -->
                                                        @endif

                                                        <th class="text-end min-w-75px">PRECIO</th>
                                                        <th class="text-center min-w-100px">ESTADO</th>
                                                       
                                                        
                                                    </tr>
                                                </thead>

                                                <tbody class="fw-semibold text-gray-600">
                                                    @php
                                                    $estadoColores = [
                                                    'En ruta' => '#F39C12',
                                                    'Entregado' => '#2ECC71',
                                                    'Fallido' => '#E74C3C',
                                                    'No entregado' => '#C0392B',
                                                    'Reprogramado' => '#F1C40F',
                                                    'Cambio' => '#3498DB'
                                                    ];
                                                    @endphp

                                                    @foreach ($envios as $envio)
                                                    @if ($envio->repartidor == Auth::user()->name)
                                                    @php
                                                    $estado = $envio->estado;
                                                    $color = $estadoColores[$estado] ?? '#BDC3C7';
                                                    @endphp

                                                    <tr>
                                                        <td><a href="/detalles/{{ $envio->guia }}" class="text-gray-600 text-hover-primary">{{ $envio->guia }}</a></td>
                                                        <td>{{ $envio->comercio }}</td>
                                                        <td>{{ $envio->destinatario }}</td>

                                                        @if (Route::currentRouteName() !== 'filtroreprogramado')
                                                        <td data-order="{{ $envio->fecha_entrega }}">
                                                            {{ date('d M Y, h:i a', strtotime($envio->fecha_entrega)) }}
                                                        </td>
                                                        @endif

                                                        @if (Route::currentRouteName() === 'filtroreprogramado')
                                                        <td data-order="{{ $envio->fecha_reprogramado }}">
                                                            @if ($envio->fecha_reprogramado)
                                                            {{ date('d M Y', strtotime($envio->fecha_reprogramado)) }}
                                                            @else
                                                            -
                                                            @endif
                                                        </td>
                                                        @endif

                                                        <td class="text-end">${{ number_format($envio->precio, 2) }}</td>
                                                        <td class="text-center">
                                                            <span class="badge" style="background-color: {{ $color }}; color: white; padding: 8px 8px; border-radius: 6px;">{{ $estado }}</span>
                                                        </td>
                                                       
                                                       
                                                    </tr>
                                                    @endif
                                                    @endforeach
                                                </tbody>


                                            </table>
                                            <a href="/dashboard">
<div style="margin-top: 20px;">
    <button type="button" class="btn btn-secondary" style="float: right">Cerrar</button>
</div>
</a>
                                            <style>
                                                #envios_table {
                                                    width: 100% !important;
                                                    table-layout: auto;
                                                    overflow-x: hidden;
                                                }

                                                .table-responsive {
                                                    overflow-x: auto;
                                                    -webkit-overflow-scrolling: touch;
                                                }

                                                .dataTables_info,
                                                .dataTables_filter {
                                                    display: none !important;
                                                }

                                                table.dataTable.no-footer,
                                                .dataTables_scrollBody {
                                                    border-bottom: none !important;
                                                }
                                            </style>

                                        </div>

                                        <script>
                                            $(document).ready(function() {
                                                var table = $('#envios_table').DataTable({
                                                    "pageLength": 10,
                                                    "lengthChange": false,
                                                    "scrollY": "400px",
                                                    "scrollCollapse": true,
                                                    "paging": false,
                                                    "autoWidth": false,
                                                    "responsive": true,
                                                    "footer": false
                                                });

                                                $('#customSearch').on('keyup', function() {
                                                    table.search(this.value).draw();
                                                });

                                                $('#clearSearch').on('click', function() {
                                                    $('#customSearch').val('');
                                                    table.search('').draw();
                                                    $(this).addClass('d-none');
                                                });

                                                $('#customSearch').on('input', function() {
                                                    if ($(this).val().length > 0) {
                                                        $('#clearSearch').removeClass('d-none');
                                                    } else {
                                                        $('#clearSearch').addClass('d-none');
                                                    }
                                                });
                                            });
                                        </script>
                                    </div>

                                    <!--end::Body-->
                                </div>
                                <!--end::Engage widget 1-->

                            </div>
                        </div>

                    </div>
                    <!--end::Container-->
                </div>





                        <!-- Modal Fallido -->
                        <div class="modal fade" tabindex="-1" id="kt_modal_fallido">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title">ESTADO FALLIDO</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                    </div>
                                    <div class="modal-body">
                                        <label for="estadoSelect" class="form-label p-2">Motivo</label>
                                        <select id="estadoSelect" class="form-select form-select-solid"
                                            data-control="select2" data-placeholder="Seleccionar una opción"
                                            data-hide-search="true" onchange="toggleNotaField()">
                                            <option></option>
                                            <option value="Cliente no contesta">Cliente no contesta</option>
                                            <option value="Cliente no estaba en el lugar" selected>Cliente no estaba en el lugar</option>
                                            <option value="Cliente no tenía dinero">Cliente no tenía dinero</option>
                                            <option value="Otro">Otro</option>
                                        </select>

                                        <div id="notaField" class="rounded border p-2 mt-3" style="display: none;">
                                            <label for="nota_fallido" class="form-label">Nota</label>
                                            <textarea id="nota_fallido" class="form-control" data-kt-autosize="true" placeholder="Escribe tu nota aquí..."></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-primary" data-estado="Fallido"
                                            >Guardar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal No Entregado -->
                        <div class="modal fade" tabindex="-1" id="kt_modal_no_entregado">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title">ESTADO NO ENTREGADO</h3>
                                    </div>
                                    <div class="modal-body">
                                        <div id="notaContainer" class="rounded border d-flex flex-column p-2 mt-3">
                                            <label for="nota_no_entregado" class="form-label">Motivo</label>
                                            <textarea id="nota_no_entregado" class="form-control" data-kt-autosize="true" placeholder="Escribe el motivo..."></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-primary" data-estado="No entregado"
                                            >Guardar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Reprogramado -->
                        <div class="modal fade" tabindex="-1" id="kt_modal_reprogramado">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">ESTADO REPROGRAMADO</h5>
                                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                            data-bs-dismiss="modal" aria-label="Cerrar">
                                            <span class="svg-icon fs-2x"></span>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-0">
                                            <label class="form-label p-2">Nueva Fecha</label>
                                            <input class="form-control form-control-solid"
                                                placeholder="Seleccione la Fecha" id="kt_daterangepicker_3" />

                                            <div id="notaContainer" class="rounded border d-flex flex-column p-2 mt-3">
                                                <label for="nota_reprogramado" class="form-label">Motivo</label>
                                                <textarea id="nota_reprogramado" class="form-control" data-kt-autosize="true" placeholder="Escribe el motivo..."></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <script>                                
                                        $(document).ready(function() {
                                            $("#kt_daterangepicker_3").daterangepicker({
                                                singleDatePicker: true,
                                                showDropdowns: true,
                                                minYear: 1901,
                                                maxYear: parseInt(moment().format("YYYY"), 12),
                                                locale: {
                                                    format: 'YYYY-MM-DD' // Formato esperado por MySQL
                                                }
                                            }, function(start) {
                                                $("#kt_daterangepicker_3").val(start.format("YYYY-MM-DD"));
                                            });
                                        });

                                    </script>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-primary" data-estado="Reprogramado"
                                            >Guardar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" tabindex="-1" id="kt_modal_cambio">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title">ESTADO CAMBIO</h3>
                                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                            data-bs-dismiss="modal" aria-label="Cerrar">
                                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                                    class="path2"></span></i>
                                        </div>
                                    </div>
                                    <div class="modal-body">

                                        <form action="cambiando" method="POST" enctype="multipart/form-data">
                                            
                                            @method('GET')

                                        <div class="row mb-6">
                                            <label class="col-lg-3 col-form-label fw-semibold fs-6">Foto</label>
                                            <div class="col-lg-8">
                                                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url(/assets/media/avatars/300-1.jpg)"></div>
                                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                        <i class="ki-duotone ki-pencil fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                        <input type="file" name="foto" accept=".png, .jpg, .jpeg" capture="camera" /> <!-- Agregar capture="camera" -->
                                                        <input type="hidden" name="avatar_remove" />
                                                    </label>
                                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                                        <i class="ki-duotone ki-cross fs-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                                        <i class="ki-duotone ki-cross fs-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <div class="form-text">Tipos de archivos: png, jpg, jpeg.</div>
                                            </div>
                                        </div>
                                        <!--end::Dropzone--> 

                                        <!-- Div no centralizado para el label y el input -->
                                        <div class="mb-5">
                                            <label class="form-label p-2">Guia de Cambio</label>
                                            <input type="text" class="form-control form-control-solid" name="notarepa" />
                                        </div>
                                        @if($envios->isNotEmpty())
                                        <input type="text" class="form-control form-control-solid" name="guia2" value="{{$envios[0]->id}}" hidden/>
                                        @endif
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                </form>
                                   

                                </div>
                            </div>
                        </div>

                        <script>
                            function cambiarEstado(button, redirigirUrl) {
                                var estado = button.getAttribute('data-estado');
                                var guia = button.getAttribute('data-guia'); // Obtenemos la guía específica del botón

                                $.ajax({
                                    url: '/cambiar-estado',
                                    method: 'POST',
                                    data: {
                                        _token: '{{ csrf_token() }}',
                                        estado: estado,
                                        guia: guia // Enviamos la guía en lugar del ID
                                    },
                                    success: function(response) {
                                        window.location.href = redirigirUrl;
                                    },
                                    error: function(xhr) {
                                        alert('Error al cambiar el estado');
                                    }
                                });
                            }

                            function guardarEstado(button, redirigirUrl) {
                                var estado = button.getAttribute('data-estado');
                                var guia = button.getAttribute('data-guia'); // Obtenemos la guía específica del botón

                                var motivo = null;
                                var nota = null;
                                var fechaReprogramado = null;

                                if (estado === "No entregado") {
                                    nota = document.getElementById("nota_no_entregado").value || null;
                                }

                                if (estado === "Fallido") {
                                    var selectMotivo = document.getElementById("estadoSelect").value;
                                    motivo = selectMotivo;

                                    if (selectMotivo === "Otro") {
                                        nota = document.getElementById("nota_fallido").value || null;
                                    }
                                }

                                if (estado === "Reprogramado") {
                                    fechaReprogramado = document.getElementById("kt_daterangepicker_3").value || null;
                                    nota = document.getElementById("nota_reprogramado").value || null;
                                }

                                $.ajax({
                                    url: '/cambiar-estado',
                                    method: 'POST',
                                    data: {
                                        _token: '{{ csrf_token() }}',
                                        estado: estado,
                                        guia: guia, // Enviamos la guía en lugar del ID
                                        nota: motivo,
                                        nota_repartidor: nota,
                                        fecha_reprogramado: fechaReprogramado
                                    },
                                    success: function(response) {
                                        window.location.href = redirigirUrl;
                                    },
                                    error: function(xhr) {
                                        alert('Error al guardar el estado');
                                    }
                                });
                            }

                            function toggleNotaField() {
                                var estado = document.getElementById("estadoSelect").value;
                                var notaField = document.getElementById("notaField");
                                if (estado === "Otro") {
                                    notaField.style.display = "block";
                                } else {
                                    notaField.style.display = "none";
                                }
                            }
                        </script>







                <!--end::Content-->
                <!--begin::Footer-->
                 <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex flex-column flex-md-row flex-stack">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-gray-400 fw-semibold me-1"></span>
                            <a href="https://keenthemes.com" target="_blank"
                                class="text-muted text-hover-primary fw-semibold me-2 fs-6">Keenthemes</a>
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                            <li class="menu-item">
                                <a href="https://keenthemes.com" target="_blank" class="menu-link px-2"></a>
                            </li>
                            <li class="menu-item">
                                <a href="https://devs.keenthemes.com" target="_blank"
                                    class="menu-link px-2"></a>
                            </li>
                            <li class="menu-item">
                                <a href="https://1.envato.market/EA4JP" target="_blank"
                                    class="menu-link px-2"></a>
                            </li>
                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Container-->
                </div> 
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>

   
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/widgets.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="assets/js/custom/utilities/modals/users-search.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>