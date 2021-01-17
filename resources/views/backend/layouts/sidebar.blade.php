@php
$prefix=Request::route()->getPrefix();
$route=Route::current()->getName();
@endphp     


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


          @if(Auth::user()->usertype=='Admin')
          <li class="nav-item {{($prefix=='/users')?'menu-open':''}} ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                  Manage user
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item ">
                <a href="{{route('users.view')}}" class="pl-4 nav-link  {{ ($route=='users.view')?'active':''}} ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View user</p>
                </a>
              </li>
          
            </ul>
          </li>   
          @endif 

            <li class="nav-item  {{($prefix=='/profiles')?'menu-open':''}}  ">
             <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                  Manage profile
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item ">
                <a href="{{route('profiles.view')}}" class="pl-4 nav-link     {{ ($route=='profiles.view')?'active':''}}  ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Your profile</p>
                </a>
              </li>
             <li class="nav-item ">
                <a href="{{route('profiles.password.view')}}" class="pl-4 nav-link     {{ ($route=='profiles.password.view')?'active':''}}  ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change password</p>
                </a>
              </li>
            </ul>
          </li>

       <li class="nav-item  {{($prefix=='/logos')?'menu-open':''}}  ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                  Manage logo
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item ">
                <a href="{{route('logos.view')}}" class="pl-4 nav-link    {{ ($route=='logos.view')?'active':''}} ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View logo</p>
                </a>
              </li>
          
            </ul>
        </li>

       <li class="nav-item  {{($prefix=='/sliders')?'menu-open':''}}  ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                  Manage slider
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item ">
                <a href="{{route('sliders.view')}}" class="pl-4 nav-link     {{ ($route=='sliders.view')?'active':''}} ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View slider</p>
                </a>
              </li>
          
            </ul>
        </li>


        <li class="nav-item  {{($prefix=='/contacts')?'menu-open':''}} ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                  Manage contact
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item ">
                <a href="{{route('contacts.view')}}" class="pl-4 nav-link    {{ ($route=='contacts.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View contact</p>
                </a>
              </li>
          
            </ul>
        </li>


        <li class="nav-item  {{($prefix=='/categories')?'menu-open':''}} ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                  Manage category
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item ">
                <a href="{{route('categories.view')}}" class="pl-4 nav-link {{ ($route=='categories.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View category</p>
                </a>
              </li>
          
            </ul>
        </li>
        

        <li class="nav-item  {{($prefix=='/brands')?'menu-open':''}} ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                  Manage brand
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item ">
                <a href="{{route('brands.view')}}" class="pl-4 nav-link    {{ ($route=='brands.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View brand</p>
                </a>
              </li>
          
            </ul>
        </li>


          <li class="nav-item  {{($prefix=='/colors')?'menu-open':''}} ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                  Manage colors
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item ">
                <a href="{{route('colors.view')}}" class="pl-4 nav-link    {{ ($route=='colors.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View colors</p>
                </a>
              </li>
          
            </ul>
        </li>



        <li class="nav-item  {{($prefix=='/size')?'menu-open':''}} ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                  Manage size
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item ">
                <a href="{{route('sizes.view')}}" class="pl-4 nav-link    {{ ($route=='sizes.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View size</p>
                </a>
              </li>
          
            </ul>
        </li>

         <li class="nav-item  {{($prefix=='/product')?'menu-open':''}} ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                  Manage product
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item ">
                <a href="{{route('products.view')}}" class="pl-4 nav-link    {{ ($route=='products.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View product</p>
                </a>
              </li>
          
            </ul>
        </li>
        </ul>

      </nav>
      <!-- /.sidebar-menu -->