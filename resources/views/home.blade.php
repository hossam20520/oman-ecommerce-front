@extends('layouts.admin')
@section('content')
<div class="content">
    {{-- <link href="https://unpkg.com/intro.js/minified/introjs.min.css" rel="stylesheet"> --}}
    <!-- Add IntroJs RTL styles -->
    <link href="{{ asset('dist/introjs.css')}}" rel="stylesheet">
    <link href="{{ asset('dist/introjs-rtl.css')}}" rel="stylesheet">

@include('dashboard')
@include('dashboard_2')
@include('sectionDas')

</div>
@endsection
{{-- <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script> --}}
{{-- <script src="{{ asset('dist/js/adminlte.js') }}"></script> --}}
<script src="{{ asset('dist/intro.js') }}"></script>

@section('scripts')
@parent
@if (strtoupper(app()->getLocale()) == "AR")


<script>
    // introJs().start();
    introJs().onbeforeexit(function () {
  return confirm("Are you sure?");
}).setOptions({
        showProgress: true,
      nextLabel: 'بعد',
      prevLabel: 'قبل',
      doneLabel: 'اتمام',
      steps: [{
        title: 'المخزون',
        intro: 'اجمالي عدد المنتجات في المخزون ',
        element: document.querySelector('.vx')
      },
      {
        element: document.querySelector('.total_users'),
        title: 'العملاء',
        intro: 'اجمالي عدد العملاء'
      },
      {
        title: 'مبيعات',
        element: document.querySelector('.sales'),
        intro: 'اجمالي عدد المبيعات (يتم حسابتها عن طريق جمع تكلفة الاوردرات)'
      }
      ,
      {
        title: 'عدد العملاء',
        element: document.querySelector('.new_members'),
        intro: 'عدد العملاء الجدد المنضمون في الاسبوع الحالي '
      },
      {
        title: 'الطلبات التي تم رفضها',
        element: document.querySelector('.rejected_orders'),
        intro: 'اجمالي عدد الطلبات التي تم رفضها'
      }
      ,
      {
        title: 'عدد الطلبات التي تم قبولها',
        element: document.querySelector('.accepted_orders'),
        intro: 'عدد الطلبات التي تم قبولها وفي حالة المعالجة',
      },
      {
        title: 'الطلبات المعلقة',
        element: document.querySelector('.pending_orders'),
        intro: 'اجمالي عدد الطلبات المعلقة وهذة الطلبات التي يجب على مدير التطبيق النظر اليها'
      }

      ,
      {
        title: 'الطلبات التي تم توصيلها',
        element: document.querySelector('.delivered'),
        intro: 'اجمالي عدد الطلبات التي تم توصيلها'
      }

      ,
      {
        title: 'المنتجات الحالية',
        element: document.querySelector('.current_pro'),
        intro: 'المنتجات التي تمت اضافتها مؤخرا'
      }


      ,
      {
        title: 'عرض جميع المنتجات',
        element: document.querySelector('.showAll'),
        intro: 'يؤدي الى صفحة عرض المنتجات'
      }
      ,
      {
        title: 'عملاء تم تسجيلهم مؤخرا',
        element: document.querySelector('.Latest_Members'),
        intro: 'العملاء المنضمون مئخرا'
      }
      ,
      {
        title: 'اظهار كل العملاء',
        element: document.querySelector('.showAllV'),
        intro: 'اظهار كل العملاء'
      }
      ,
      {
        title: 'عمليات الدفع المرفوضة',
        element: document.querySelector('.rejeca'),
        intro: 'اجمالي عمليات الدفع المرفوضة'
      }
      ,
      {
        title: 'طلبات جاري توصيلها',
        element: document.querySelector('.waitingDel'),
        intro: 'اجمالي الطلبات الجاري توصيلها'
      }
      ,
      {
        title: 'اجمالي الطلبيات',
        element: document.querySelector('.total_orders'),
        intro: 'اجمالي عدد الطلبات'
      }

      ,
      {
        title: 'عدد عملاءالجملة',
        element: document.querySelector('.wholese'),
        intro: 'اجمالي عدد عملاء الجملة'
      }

      ,
      {
        title: 'الطلبات المطلوبة مؤخرا',
        element: document.querySelector('.latestorders'),
        intro: 'طلبات مطلوبة مؤخرا'
      },
      {
        title: 'الرقم التعريفي للاوردر',
        element: document.querySelector('.orderIda'),
        intro: 'الرقم التعريفي للاوردر وهذا الرقم يتم اضافتة بشكل تلقائي عند كل عملية شراء فهو بمثابة الرقم المرجعي للاوردر ولايمكن اضافتة يدوي حيث يتم انشائة عن طريق الشراء من التطبيق'
      }

      ,
      {
        title: 'اسم العميل',
        element: document.querySelector('.nameus'),
        intro: 'اسم العميل الذي قام بطلب الاوردر من الابلكيشن'
      }
      ,
      {
        title: 'رقم الهاتف',
        element: document.querySelector('.PhoneUsers'),
        intro: 'رقم الهاتف الذي تم ادخالة مع العنوان في عملية الشراء وليس رقم الهاتف الذي تم الدخول به'
      }
      ,
      {
        title: 'حالة الطلب',
        element: document.querySelector('.statusName'),
        intro: 'حالة الطلب ... توجد خمس حالات للطلب وهي كالتالي 1-تم التوصيل 2-طلبات تم رفضها 3- طلبات جاهزة للتوصيل 4-طلبات تم الموافقة عليها وفي مرحلة المعالجة 5-طلبات في حالة التاكيد او التعليق'
      }
      ,
      {
        title: 'اجمالي تكلفة الطلب',
        element: document.querySelector('.TotalCosts'),
        intro: 'اجمالي تكلفة الطلب'
      }
      ,
      {
        title: 'اظهار كل الطلبات',
        element: document.querySelector('.viwAllOrders'),
        intro: 'اظهار كل الطلبات التي تم انشائها من خلال الشراء عبر الابلكيشن'
       
      },
      {
        title: 'النهاية',
       
        intro: 'تم الانتهاء من شرح الداش بورد'
       
      }
      // ,
      // {
      //   title: 'الداش بورد',
      //   element: document.querySelector('.homeDas'), 
      //   intro: 'الداش بوردالرئيسية'
       
      // }
      

      // ,
      // {
      //   title: 'التصنيف',
      //   element: document.querySelector('.category_menuc'), 
      //   intro: 'من فضلك اضغط على التصنيف'
       
      // }


      ]
    })
    .start();
    
        </script>
        
        @endif
@endsection