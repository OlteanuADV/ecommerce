@php
$categories = App\Models\Categories::get();
@endphp
<header class="section-header">
    <section class="header-main bg-white">
       <div class="container">
          <div class="row gy-3 align-items-center">
             <div class="col-lg-2 col-sm-4 col-4">
                <a href="{{ url('/') }}" class="navbar-brand">
                <img class="logo" height="40" src="https://2get.ro/userfiles/templates/starter/assets/img/logo.png">
                </a>
             </div>
             <div class="order-lg-last col-lg-3 col-sm-8 col-8">
                <div class="float-end">
                   <a href="#" class="btn btn-light"> 
                   <i class="fa fa-user"></i>  <span class="ms-1 d-none d-sm-inline-block">Conecteaza-te</span> 
                   </a>
                   <a data-bs-toggle="offcanvas" href="#offcanvas_cart" class="btn btn-light"> 
                   <i class="fa fa-shopping-cart"></i> <span class="ms-1">Cos (0)</span> 
                   </a>
                </div>
             </div>
             <div class="col-lg-7 col-md-12 col-12">
                <form action="#" class="">
                   <div class="input-group">
                       <input type="search" class="form-control" placeholder="Search">
                       {{-- 
                       <select class="form-select">
                           <option value="">All type</option>
                           <option value="codex">Special</option>
                           <option value="comments">Only best</option>
                           <option value="content">Latest</option>
                       </select>
                       --}}
                       <button class="btn bg-2get">
                           <i class="fa fa-search"></i> 
                       </button>
                   </div>
                </form>
             </div>
          </div>
       </div>
    </section>
    <nav class="navbar navbar-dark bg-2get navbar-expand-lg">
       <div class="container">
          <button class="navbar-toggler border" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_main" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbar_main">
             <ul class="navbar-nav">
               <li class="nav-item">
                   <a class="nav-link ps-0" href="javascript:$('#categories').toggleClass('d-none')"> Categorii </a>
               </li>
             </ul>
          </div>
       </div>
    </nav>
</header>
<section class="section-intro padding-top-sm d-none" id="categories">
    <div class="container">
        <main>
            <div class="row">
                <aside class="col-lg-3">
                    <div class="card p-3 mb-3">
                        <nav class="nav flex-column nav-pills nav-tabs" id="categories" role="tablist"> 
                            @foreach($categories as $category)
                                <a class="nav-link @if(str_contains(url()->current(), $category->link)) active @endif" aria-current="page"  id="category_{{$category->id}}" data-bs-toggle="tab" data-bs-target="#category_{{$category->id}}" type="button" role="tab" aria-controls="profile" aria-selected="false">{{$category->name}}</a> 
                            @endforeach
                        </nav>
                    </div>
                 </aside>
                  <aside class="col-lg-9">
                     <div class="tab-content" id="categoriesContent">
                        @foreach($categories as $category)
                           <nav class="card tab-pane fade" id="category_{{ $category->id }}" role="tabpanel">
                              <div class="card-body">
                                 <ul class="cols-four list-menu">
                                    @foreach(array_chunk($category->subcategories->toArray(), 6) as $main)
                                    <li class="mb-3">
                                       @foreach($main as $subcategory)
                                       <a href="#">{{$subcategory['name']}}</a>
                                       @endforeach
                                    </li>
                                    @endforeach
                                 </ul>
                              </div>
                           </nav>
                        @endforeach
                     </div>
                 </aside>
              </div>
           </main>
        </div>
     </section>