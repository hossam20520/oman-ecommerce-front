<div class="row">
    <!-- Left col -->
    <div class="col-md-8">
      <!-- MAP & BOX PANE -->

      <!-- /.card -->
      <div class="row">
        <div class="col-md-6">
          <!-- DIRECT CHAT -->
          <div class="card current_pro">
            <div class="card-header">
              <h3 class="card-title">{{ trans('dash.dash.rcao') }}</h3>
    
              {{-- <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div> --}}
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <ul class="products-list product-list-in-card pl-2 pr-2">
               
               @foreach ($latest_products as $item)
               <li class="item">
                <div class="product-img">
                  @if($item->image)
                  {{-- <a href="{{ $item->image->getUrl() }}" target="_blank" style="display: inline-block">
                      <img src="">
                  </a> --}}

                  <img src="{{ $item->image->getUrl('thumb') }}" alt="Product Image" class="img-size-50">
               
                  @endif
                 
                </div>
                <div class="product-info">
                  <a href="{{ route('admin.inventories.show' , $item->id) }}" class="product-title"> {{ $item->name }}
                    <span class="badge badge-warning float-right"> {{ $item->price }} OMR</span></a>
                  <span class="product-description">
                    {{ $item->short_desc }}
                  </span>
                </div>
              </li>
               @endforeach
          




      
                <!-- /.item -->
        
                <!-- /.item -->
          


                <!-- /.item -->
              </ul>
            </div>
            <!-- /.card-body -->
            <div class="card-footer text-center showAll">
              <a href="{{ route('admin.inventories.index') }}" class="uppercase">{{ trans('dash.dash.vallPr') }}</a>
            </div>
            <!-- /.card-footer -->
          </div>



          <!--/.direct-chat -->
        </div>
        <!-- /.col -->

        <div class="col-md-6">
          <!-- USERS LIST -->



          
          <div class="card Latest_Members">
            <div class="card-header">
              <h3 class="card-title">{{ trans('dash.dash.ltmem') }}</h3>

              {{-- <div class="card-tools">
                <span class="badge badge-danger">8 New Members</span>
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div> --}}
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <ul class="users-list clearfix">

                @foreach ($lastUsers as $item)
                <li>
                  <img src="https://www.pngarts.com/files/6/User-Avatar-in-Suit-PNG.png" alt="User Image">
                  <a class="users-list-name" href="{{ route('admin.clients.show' , $item->id ) }}">{{ $item->fname }}</a>
                  <span class="users-list-date">{{ $item->role }}</span>
                </li>
                @endforeach
             
                
              </ul>
              <!-- /.users-list -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer text-center showAllV">
              <a href="{{ route('admin.clients.index') }}">{{ trans('dash.dash.viewAlU') }}</a>
            </div>
            <!-- /.card-footer -->
          </div>
          <!--/.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- TABLE: LATEST ORDERS -->

      <!-- /.card -->
    </div>
    <!-- /.col -->

    <div class="col-md-4">
      <!-- Info Boxes Style 2 -->
      <div class="info-box mb-3 bg-danger rejeca">
        <span class="info-box-icon"><i class="fas fa-credit-card"></i></span>
 
        <div class="info-box-content">
          <span class="info-box-text">{{ trans('dash.dash.rjpa') }}</span>
          <span class="info-box-number">{{ $rejectedPayment }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
      <div class="info-box mb-3 bg-success waitingDel">
        <span class="info-box-icon"><i class="fas fa-truck"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">{{ trans('dash.dash.awtd') }}</span>
          <span class="info-box-number">{{ $awiting }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
      <div class="info-box mb-3 bg-danger total_orders">
        <span class="info-box-icon"><i class="fas fa-box-open"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">{{ trans('dash.dash.totalor') }}</span>
          <span class="info-box-number">{{ $totalOrders }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
      <div class="info-box mb-3 bg-info wholese">
        <span class="info-box-icon"><i class="fas fa-user"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">{{ trans('dash.dash.whols') }}</span>
          <span class="info-box-number">{{ $wholesaler }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>

  <div class="row">

    <div class="col-md-12">
        <div class="card latestorders" >
            <div class="card-header border-transparent">
              <h3 class="card-title">{{ trans('dash.dash.laor') }}</h3>
    
              {{-- <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div> --}}
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table m-0">
                  <thead>
                  <tr>
                    <th class="orderIda">{{ trans('dash.dash.OrderID') }}</th>
                    <th class="nameus">{{ trans('dash.dash.Name') }}</th>
                    <th class="PhoneUsers">{{ trans('dash.dash.phone') }}</th>
                    <th class="statusName">{{ trans('dash.dash.Status') }}</th>
                    <th class="TotalCosts">{{ trans('dash.dash.total_cost') }}</th>
                  </tr>
                  </thead>
                  <tbody>

        @foreach ($lastOrders as $item)
        <tr>
          <td><a href="pages/examples/invoice.html">{{ $item->orderid }}</a></td>
         
          <td>{{ $item->fname }} {{ $item->lname }}</td>
          <td>{{ $item->phone }}</td>

          @if ($item->status == "cancelled")
          <td><span class="badge badge-danger">{{ $item->status }}</span></td>
          @endif
         

          @if ($item->status == "delivered")
          <td><span class="badge badge-success">{{ $item->status }}</span></td>
          @endif


          @if ($item->status == "pending")
          <td><span class="badge badge-warning">{{ $item->status }}</span></td>
          @endif
          

          @if ($item->status == "accepted")
          <td><span class="badge badge-info">{{ $item->status }}</span></td>
          @endif


          @if ($item->status == "shippedAwaitingDelivery")
          <td><span class="badge badge-success">{{ $item->status }}</span></td>
          @endif

          <td>
            <div class="sparkbar" data-color="#00a65a" data-height="20">{{ $item->total_cost }}</div>
          </td>
        </tr>
        @endforeach

                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              {{-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a> --}}
              <a href="{{ route('admin.orders.index') }}" class="btn btn-sm btn-secondary float-right viwAllOrders">{{ trans('dash.dash.vaor') }}</a>
            </div>
            <!-- /.card-footer -->
          </div>


    </div>
  </div>