@extends('marketing.layout.master')

@section('content')
 <div class="shadow-wrapper">
    <div class="tag-box tag-box-v1 box-shadow shadow-effect-2">
        <h2>{{ $article->title }}</h2>
        {!! $article->full_text; !!}
    </div>
 </div>

 <div class="headline"><h2>До 1500 руб.</h2></div>
 <div class="row">
     @for ($i = 1; $i <= 4; $i++)
     <div class="col-md-3">
         <div class="thumbnails thumbnail-style">
             <img alt="" src="assets/img/main/img22.jpg" class="img-responsive">
             <div class="caption">
                 <h3><a href="#" class="hover-effect">Эмоция {{ $i }}</a></h3>
                 <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                 <p class="tooltips" data-placement="bottom" data-original-title="Самые лучшие"><i class="fa fa-info-circle"></i>&nbsp;&nbsp;<span class="color-dark-blue">Какие впечатления внутри</span></p>
                 <hr class="devider devider-dotted">

                 <div class="row">
                     <div class="col-md-5 text-center">
                        <p><del>2500 руб.</del></p>
                        <p class="lead">1000 руб.</p>
                     </div>
                     <div class="col-md-7">
                        <a class="btn btn-u btn-u-orange btn-u-lg btn-block rounded-2x" href="#"><i class="fa fa-shopping-cart"></i> Заказать</a>
                     </div>
                 </div>

                 <hr class="devider devider-dotted">
             </div>
         </div>
     </div>
     @endfor;
 </div>


 <div class="headline"><h2>1500 руб. - 3000 руб.</h2></div>
 <div class="row">
      @for ($i = 1; $i <= 4; $i++)
      <div class="col-md-3">
          <div class="thumbnails thumbnail-style">
              <img alt="" src="assets/img/main/img22.jpg" class="img-responsive">
              <div class="caption">
                  <h3><a href="#" class="hover-effect">Эмоция  {{ $i }}</a></h3>
                  <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                  <p class="tooltips" data-placement="bottom" data-original-title="Самые лучшие"><i class="fa fa-info-circle"></i>&nbsp;&nbsp;<span class="color-dark-blue">Какие впечатления внутри</span></p>
                  <hr class="devider devider-dotted">

                  <div class="row">
                      <div class="col-md-5 text-center">
                         <p><del>2500 руб.</del></p>
                         <p class="lead">1000 руб.</p>
                      </div>
                      <div class="col-md-7">
                         <a class="btn btn-u btn-u-orange btn-u-lg btn-block rounded-2x" href="#"><i class="fa fa-shopping-cart"></i> Заказать</a>
                      </div>
                  </div>

                  <hr class="devider devider-dotted">
              </div>
          </div>
      </div>
      @endfor;
 </div>

 <div class="headline"><h2>3000 руб. - 5000 руб.</h2></div>
 <div class="row">
       @for ($i = 1; $i <= 4; $i++)
       <div class="col-md-3">
           <div class="thumbnails thumbnail-style">
               <img alt="" src="assets/img/main/img22.jpg" class="img-responsive">
               <div class="caption">
                   <h3><a href="#" class="hover-effect">Эмоция  {{ $i }}</a></h3>
                   <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                   <p class="tooltips" data-placement="bottom" data-original-title="Самые лучшие"><i class="fa fa-info-circle"></i>&nbsp;&nbsp;<span class="color-dark-blue">Какие впечатления внутри</span></p>
                   <hr class="devider devider-dotted">

                   <div class="row">
                       <div class="col-md-5 text-center">
                          <p><del>2500 руб.</del></p>
                          <p class="lead">1000 руб.</p>
                       </div>
                       <div class="col-md-7">
                          <a class="btn btn-u btn-u-orange btn-u-lg btn-block rounded-2x" href="#"><i class="fa fa-shopping-cart"></i> Заказать</a>
                       </div>
                   </div>

                   <hr class="devider devider-dotted">
               </div>
           </div>
       </div>
       @endfor
 </div>

 <div class="headline"><h2>Свыше 5000 руб.</h2></div>
 <div class="row">
        @for ($i = 1; $i <= 4; $i++)
        <div class="col-md-3">
            <div class="thumbnails thumbnail-style">
                <img alt="" src="assets/img/main/img22.jpg" class="img-responsive">
                <div class="caption">
                    <h3><a href="#" class="hover-effect">Эмоция {{ $i }}</a></h3>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                    <p class="tooltips" data-placement="bottom" data-original-title="Самые лучшие"><i class="fa fa-info-circle"></i>&nbsp;&nbsp;<span class="color-dark-blue">Какие впечатления внутри</span></p>
                    <hr class="devider devider-dotted">

                    <div class="row">
                        <div class="col-md-5 text-center">
                           <p><del>2500 руб.</del></p>
                           <p class="lead">1000 руб.</p>
                        </div>
                        <div class="col-md-7">
                           <a class="btn btn-u btn-u-orange btn-u-lg btn-block rounded-2x" href="#"><i class="fa fa-shopping-cart"></i> Заказать</a>
                        </div>
                    </div>

                    <hr class="devider devider-dotted">
                </div>
            </div>
        </div>
        @endfor;
 </div>
@stop