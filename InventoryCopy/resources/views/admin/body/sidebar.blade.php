<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('adminbackend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Admin</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

        <li>
            <a href="{{ route('admin.dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Ecom Dashboard</div>
            </a>
        </li>
        <li>
            <a href="{{ route('posadmin') }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Pos Dashboard</div>
            </a>
        </li>
        <li>
            <a href="{{ route('invadmin') }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Inv Dashboard</div>
            </a>
        </li>
        
        <!-- <ul >
            <li><a href="{{ route('posadmin') }}">Pos Dashboard</a></li>
            <li><a class="active" href="{{ route('invadmin') }}">Inventory Dashboard</a></li>
        </ul> -->


        <!-- <li class="menu-label">POS</li>
        <li>
            <a href="{{ route('pos') }}">
                <span class="badge bg-pink float-end">Hot</span>
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span> POS </span>
            </a>
        </li>
        <li class="menu-title mt-2">Apps</li>
        <li>
            <a href="#sidebarEcommerce" data-bs-toggle="collapse">
                <i class="mdi mdi-cart-outline"></i>
                <span> Employee Manage </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarEcommerce">
                <ul class="nav-second-level">

                    <li>
                        <a href="{{ route('all.employee') }}">All Employee</a>
                    </li>


                    <li>
                        <a href="{{ route('add.employee') }}">Add Employee </a>
                    </li>

                </ul>
            </div>
        </li>
        <li>
            <a href="#sidebarCrm" data-bs-toggle="collapse">
                <i class="mdi mdi-account-multiple-outline"></i>
                <span> Customer Manage </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarCrm">
                <ul class="nav-second-level">

                    <li>
                        <a href="{{ route('all.customer') }}">All Customer</a>
                    </li>

                    <li>
                        <a href="{{ route('add.customer') }}">Add Customer</a>
                    </li>


                </ul>
            </div>
        </li>
        <li>
            <a href="#sidebarEmail" data-bs-toggle="collapse">
                <i class="mdi mdi-email-multiple-outline"></i>
                <span> Supplier Manage </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarEmail">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('all.supplier') }}">All Supplier</a>
                    </li>
                    <li>
                        <a href="{{ route('add.supplier') }}">Add Supplier</a>
                    </li>

                </ul>
            </div>
        </li>
        <li>
            <a href="#salary" data-bs-toggle="collapse">
                <i class="mdi mdi-email-multiple-outline"></i>
                <span> Employee Salary </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="salary">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('add.advance.salary') }}">Add Advance Salary</a>
                    </li>
                    <li>
                        <a href="{{ route('all.advance.salary') }}">All Advance Salary</a>
                    </li>

                    <li>
                        <a href="{{ route('pay.salary') }}">Pay Salary</a>
                    </li>

                    <li>
                        <a href="{{ route('month.salary') }}">Last Month Salary</a>
                    </li>

                </ul>
            </div>
        </li>
        <li>
            <a href="#attendence" data-bs-toggle="collapse">
                <i class="mdi mdi-email-multiple-outline"></i>
                <span> Employee Attendence </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="attendence">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('employee.attend.list') }}">Employee Attendence List </a>
                    </li>

                </ul>
            </div>
        </li>
        <li>
            <a href="#category" data-bs-toggle="collapse">
                <i class="mdi mdi-email-multiple-outline"></i>
                <span> Category </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="category">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('all.pcategory') }}">All Category </a>
                    </li>

                </ul>
            </div>
        </li>
        <li>
            <a href="#product" data-bs-toggle="collapse">
                <i class="mdi mdi-email-multiple-outline"></i>
                <span> Products </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="product">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('all.pproduct') }}">All Product </a>
                    </li>

                    <li>
                        <a href="{{ route('add.pproduct') }}">Add Product </a>
                    </li>
                    <li>
                        <a href="{{ route('import.pproduct') }}">Import Product </a>
                    </li>

                </ul>
            </div>
        </li>
        <li>
            <a href="#orders" data-bs-toggle="collapse">
                <i class="mdi mdi-email-multiple-outline"></i>
                <span> Orders </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="orders">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('pending.porder') }}">Pending Orders </a>
                    </li>

                    <li>
                        <a href="{{ route('complete.porder') }}">Complete Orders </a>
                    </li>

                    <li>
                        <a href="{{ route('pending.due') }}">Pending Due </a>
                    </li>


                </ul>
            </div>
        </li>
        <li>
            <a href="#stock" data-bs-toggle="collapse">
                <i class="mdi mdi-email-multiple-outline"></i>
                <span> Stock Manage </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="stock">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('stock.manage') }}">Stock </a>
                    </li>


                </ul>
            </div>
        </li>
        <li>
            <a href="#permission" data-bs-toggle="collapse">
                <i class="mdi mdi-email-multiple-outline"></i>
                <span> Roles And Permission </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="permission">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('all.ppermission') }}">All Permission </a>
                    </li>

                    <li>
                        <a href="{{ route('all.proles') }}">All Roles </a>
                    </li>

                    <li>
                        <a href="{{ route('add.proles.ppermission') }}">Roles in Permission </a>
                    </li>

                    <li>
                        <a href="{{ route('all.proles.ppermission') }}">All Roles in Permission </a>
                    </li>


                </ul>
            </div>
        </li>
        <li>
            <a href="#admin" data-bs-toggle="collapse">
                <i class="mdi mdi-email-multiple-outline"></i>
                <span> Setting Admin User </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="admin">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('all.padmin') }}">All Admin </a>
                    </li>

                    <li>
                        <a href="{{ route('add.padmin') }}">Add Admin </a>
                    </li>

                </ul>
            </div>
        </li>
        <li>
            <a href="#sidebarAuth" data-bs-toggle="collapse">
                <i class="mdi mdi-account-circle-outline"></i>
                <span>Expense </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarAuth">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('add.expense') }}">Add Expense</a>
                    </li>
                    <li>
                        <a href="{{ route('today.expense') }}">Today Expense</a>
                    </li>
                    <li>
                        <a href="{{ route('month.expense') }}">Monthly Expense</a>
                    </li>
                    <li>
                        <a href="{{ route('year.expense') }}">Yearly Expense</a>
                    </li>

                </ul>
            </div>
        </li>
        <li>
            <a href="#backup" data-bs-toggle="collapse">
                <i class="mdi mdi-account-circle-outline"></i>
                <span>Database Backup </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="backup">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('database.backup') }}">Database Backup </a>
                    </li>

                </ul>
            </div>
        </li>
        <li class="menu-label">Inventory</li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-hotel-fill"></i>
                <span>Manage Suppliers</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('supplier.all') }}">All Supplier</a></li>

            </ul>
        </li>


        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-shield-user-fill"></i>
                <span>Manage Customers</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('customer.all') }}">All Customers</a></li>
                <li><a href="{{ route('credit.customer') }}">Credit Customers</a></li>

                <li><a href="{{ route('paid.customer') }}">Paid Customers</a></li>
                <li><a href="{{ route('customer.wise.report') }}">Customer Wise Report</a></li>

            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-delete-back-fill"></i>
                <span>Manage Units</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('unit.all') }}">All Unit</a></li>

            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-apps-2-fill"></i>
                <span>Manage Category</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('category.all') }}">All Category</a></li>

            </ul>
        </li>


        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-reddit-fill"></i>
                <span>Manage Product</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('product.all') }}">All Product</a></li>

            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-oil-fill"></i>
                <span>Manage Purchase</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('purchase.all') }}">All Purchase</a></li>
                <li><a href="{{ route('purchase.pending') }}">Approval Purchase</a></li>
                <li><a href="{{ route('daily.purchase.report') }}">Daily Purchase Report</a></li>

            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-compass-2-fill"></i>
                <span>Manage Invoice</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('invoice.all') }}">All Invoice</a></li>
                <li><a href="{{ route('invoice.pending.list') }}">Approval Invoice</a></li>
                <li><a href="{{ route('print.invoice.list') }}">Print Invoice List</a></li>
                <li><a href="{{ route('daily.invoice.report') }}">Daily Invoice Report</a></li>

            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-gift-fill"></i>
                <span>Manage Stock</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('stock.report') }}">Stock Report</a></li>
                <li><a href="{{ route('stock.supplier.wise') }}">Supplier / Product Wise </a></li>

            </ul>
        </li> -->
        <li class="menu-label">Ecom Dashboard Management</li>
        @if(Auth::user()->can('brand.menu'))
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cookie'></i>
                </div>
                <div class="menu-title">Brand</div>
            </a>
            <ul>
                @if(Auth::user()->can('brand.list'))
                <li> <a href="{{ route('all.brand') }}"><i class="bx bx-right-arrow-alt"></i>All Brand</a>
                </li>
                @endif
                @if(Auth::user()->can('brand.add'))
                <li> <a href="{{ route('add.brand') }}"><i class="bx bx-right-arrow-alt"></i>Add Brand </a>
                </li>
                @endif
            </ul>
        </li>
        @endif

        @if(Auth::user()->can('cat.menu'))
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Category</div>
            </a>
            <ul>
                @if(Auth::user()->can('category.list'))
                <li> <a href="{{ route('all.category') }}"><i class="bx bx-right-arrow-alt"></i>All Category</a>
                </li>
                @endif
                @if(Auth::user()->can('category.add'))
                <li> <a href="{{ route('add.category') }}"><i class="bx bx-right-arrow-alt"></i>Add Category</a>
                </li>
                @endif

            </ul>
        </li>
        @endif
        @if(Auth::user()->can('subcategory.menu'))
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="lni lni-codepen"></i>
                </div>
                <div class="menu-title">SubCategory</div>
            </a>
            <ul>
                @if(Auth::user()->can('subcategory.list'))
                <li> <a href="{{ route('all.subcategory') }}"><i class="bx bx-right-arrow-alt"></i>All SubCategory</a>
                </li>
                @endif
                @if(Auth::user()->can('subcategory.add'))
                <li> <a href="{{ route('add.subcategory') }}"><i class="bx bx-right-arrow-alt"></i>Add SubCategory</a>
                </li>
                @endif

            </ul>
        </li>
        @endif
        @if(Auth::user()->can('product.menu'))
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="lni lni-fresh-juice"></i>
                </div>
                <div class="menu-title">Product Manage</div>
            </a>
            <ul>
                @if(Auth::user()->can('product.list'))
                <li> <a href="{{ route('all.product') }}"><i class="bx bx-right-arrow-alt"></i>All Product</a>
                </li>
                @endif
                @if(Auth::user()->can('product.add'))
                <li> <a href="{{ route('add.product') }}"><i class="bx bx-right-arrow-alt"></i>Add Product</a>
                </li>
                @endif

            </ul>
        </li>
        @endif

        @if(Auth::user()->can('slider.menu'))
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="lni lni-gallery"></i>
                </div>
                <div class="menu-title">Slider Manage</div>
            </a>
            <ul>
                @if(Auth::user()->can('slider.list'))
                <li> <a href="{{ route('all.slider') }}"><i class="bx bx-right-arrow-alt"></i>All Slider</a>
                </li>
                @endif
                @if(Auth::user()->can('slider.add'))
                <li> <a href="{{ route('add.slider') }}"><i class="bx bx-right-arrow-alt"></i>Add Slider</a>
                </li>
                @endif

            </ul>
        </li>
        @endif
        @if(Auth::user()->can('ads.menu'))

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="lni lni-image"></i>
                </div>
                <div class="menu-title">Banner Manage</div>
            </a>
            <ul>
                @if(Auth::user()->can('ads.list'))
                <li> <a href="{{ route('all.banner') }}"><i class="bx bx-right-arrow-alt"></i>All Banner</a>
                </li>
                @endif
                @if(Auth::user()->can('ads.add'))
                <li> <a href="{{ route('add.banner') }}"><i class="bx bx-right-arrow-alt"></i>Add Banner</a>
                </li>
                @endif
            </ul>
        </li>
        @endif
        @if(Auth::user()->can('coupon.menu'))
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="lni lni-invention"></i>
                </div>
                <div class="menu-title">Coupon System</div>
            </a>
            <ul>
                @if(Auth::user()->can('coupon.list'))
                <li> <a href="{{ route('all.coupon') }}"><i class="bx bx-right-arrow-alt"></i>All Coupon</a>
                </li>
                @endif
                @if(Auth::user()->can('coupon.add'))
                <li> <a href="{{ route('add.coupon') }}"><i class="bx bx-right-arrow-alt"></i>Add Coupon</a>
                </li>
                @endif

            </ul>
        </li>
        @endif
        @if(Auth::user()->can('area.menu'))
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="lni lni-map"></i>
                </div>
                <div class="menu-title">Shipping Area </div>
            </a>
            <ul>
                <li> <a href="{{ route('all.division') }}"><i class="bx bx-right-arrow-alt"></i>All Division</a>
                </li>
                <li> <a href="{{ route('all.district') }}"><i class="bx bx-right-arrow-alt"></i>All District</a>
                </li>

                <li> <a href="{{ route('all.state') }}"><i class="bx bx-right-arrow-alt"></i>All State</a>
                </li>

            </ul>
        </li>
        @endif

        <li class="menu-label">UI Elements</li>
        @if(Auth::user()->can('vendor.menu'))
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='lni lni-network'></i>
                </div>
                <div class="menu-title">Vendor Manage </div>
            </a>
            <ul>
                <li> <a href="{{ route('inactive.vendor') }}"><i class="bx bx-right-arrow-alt"></i>Inactive Vendor</a>
                </li>
                <li> <a href="{{ route('active.vendor') }}"><i class="bx bx-right-arrow-alt"></i>Active Vendor</a>
                </li>

            </ul>
        </li>
        @endif

        @if(Auth::user()->can('order.menu'))
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart'></i>
                </div>
                <div class="menu-title">Order Manage </div>
            </a>
            <ul>
                <li> <a href="{{ route('pending.order') }}"><i class="bx bx-right-arrow-alt"></i>Pending Order</a>
                </li>
                <li> <a href="{{ route('admin.confirmed.order') }}"><i class="bx bx-right-arrow-alt"></i>Confirmed
                        Order</a>
                </li>
                <li> <a href="{{ route('admin.processing.order') }}"><i class="bx bx-right-arrow-alt"></i>Processing
                        Order</a>
                </li>
                <li> <a href="{{ route('admin.delivered.order') }}"><i class="bx bx-right-arrow-alt"></i>Delivered
                        Order</a>
                </li>

            </ul>
        </li>
        @endif

        @if(Auth::user()->can('return.order.menu'))
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='lni lni-paperclip'></i>
                </div>
                <div class="menu-title">Return Order </div>
            </a>
            <ul>
                <li> <a href="{{ route('return.request') }}"><i class="bx bx-right-arrow-alt"></i>Return Request</a>
                </li>
                <li> <a href="{{ route('complete.return.request') }}"><i class="bx bx-right-arrow-alt"></i>Complete
                        Request</a>
                </li>
            </ul>
        </li>
        @endif
        @if(Auth::user()->can('report.menu'))
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="lni lni-stats-up"></i>
                </div>
                <div class="menu-title">Reports Manage</div>
            </a>
            <ul>
                <li> <a href="{{ route('report.view') }}"><i class="bx bx-right-arrow-alt"></i>Report View</a>
                </li>

                <li> <a href="{{ route('order.by.user') }}"><i class="bx bx-right-arrow-alt"></i>Order By User</a>
                </li>


            </ul>
        </li>
        @endif

        @if(Auth::user()->can('user.management.menu'))
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="lni lni-slideshare"></i>
                </div>
                <div class="menu-title">User Manage</div>
            </a>
            <ul>
                <li> <a href="{{ route('all-user') }}"><i class="bx bx-right-arrow-alt"></i>All User</a>
                </li>

                <li> <a href="{{ route('all-vendor') }}"><i class="bx bx-right-arrow-alt"></i>All Vendor</a>
                </li>


            </ul>
        </li>
        @endif

        @if(Auth::user()->can('blog.menu'))
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="lni lni-pyramids"></i>
                </div>
                <div class="menu-title">Blog Manage</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.blog.category') }}"><i class="bx bx-right-arrow-alt"></i>All Blog
                        Categroy</a>
                </li>

                <li> <a href="{{ route('admin.blog.post') }}"><i class="bx bx-right-arrow-alt"></i>All Blog Post</a>
                </li>


            </ul>
        </li>
        @endif
        @if(Auth::user()->can('review.menu'))
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="lni lni-indent-increase"></i>
                </div>
                <div class="menu-title">Review Manage</div>
            </a>
            <ul>
                <li> <a href="{{ route('pending.review') }}"><i class="bx bx-right-arrow-alt"></i>Pending Review</a>
                </li>

                <li> <a href="{{ route('publish.review') }}"><i class="bx bx-right-arrow-alt"></i>Publish Review</a>
                </li>


            </ul>
        </li>
        @endif
        @if(Auth::user()->can('site.menu'))
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="lni lni-cog"></i>
                </div>
                <div class="menu-title">Setting Manage</div>
            </a>
            <ul>
                <li> <a href="{{ route('site.setting') }}"><i class="bx bx-right-arrow-alt"></i>Site Setting</a>
                </li>

                <li> <a href="{{ route('seo.setting') }}"><i class="bx bx-right-arrow-alt"></i>Seo Setting</a>
                </li>


            </ul>
        </li>

        @endif
        @if(Auth::user()->can('stock.menu'))
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="lni lni-cart-full"></i>
                </div>
                <div class="menu-title">Stock Manage</div>
            </a>
            <ul>
                <li> <a href="{{ route('product.stock') }}"><i class="bx bx-right-arrow-alt"></i>Product Stock</a>
                </li>




            </ul>
        </li>
        @endif


        @if(Auth::user()->can('role.permission.menu'))
        <li class="menu-label">Roles And Permission</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="lni lni-users"></i>
                </div>
                <div class="menu-title">Role & Permission</div>
            </a>
            <ul>
                <li> <a href="{{ route('all.permission') }}"><i class="bx bx-right-arrow-alt"></i>All Permission</a>
                </li>
                <li> <a href="{{ route('all.roles') }}"><i class="bx bx-right-arrow-alt"></i>All Roles</a>
                </li>

                <li> <a href="{{ route('add.roles.permission') }}"><i class="bx bx-right-arrow-alt"></i>AddRoles in
                        Permission</a>
                </li>

                <li> <a href="{{ route('all.roles.permission') }}"><i class="bx bx-right-arrow-alt"></i>All Roles in
                        Permission</a>
                </li>

            </ul>
        </li>
        @endif
        @if(Auth::user()->can('admin.user.menu'))

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="lni lni-user"></i>
                </div>
                <div class="menu-title">Admin Manage </div>
            </a>
            <ul>
                <li> <a href="{{ route('all.admin') }}"><i class="bx bx-right-arrow-alt"></i>All Admin</a>
                </li>
                <li> <a href="{{ route('add.admin') }}"><i class="bx bx-right-arrow-alt"></i>Add Admin</a>
                </li>


            </ul>
        </li>
        @endif


        <li>
            <a href=" " target="_blank">
                <div class="parent-icon"><i class="bx bx-support"></i>
                </div>
                <div class="menu-title">Support</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>