  <div class="sl-logo"><a href="{{route('dashboard')}}">Smart Packing System</a></div>
    <div class="sl-sideleft">
        <div class="input-group input-group-search">
            <input type="search" name="search" class="form-control" placeholder="Search">
            <span class="input-group-btn">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span>
            <!-- input-group-btn -->
        </div>
        <!-- input-group -->

        <label class="sidebar-label">Navigation</label>
        <div class="sl-sideleft-menu">
            <a href="{{route('dashboard')}}" class="sl-menu-link active">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                    <span class="menu-item-label">Dashboard</span>
                </div>
                <!-- menu-item -->
            </a>
            <!-- sl-menu-link -->
            <a href="#" class="sl-menu-link">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                    <span class="menu-item-label">Cards &amp; Vehicles</span>
                </div>
                <!-- menu-item -->
            </a>
            <!-- sl-menu-link -->
            <a href="#" class="sl-menu-link">
                <div class="sl-menu-item">
                    <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                    <span class="menu-item-label">Vehicles</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div>
                <!-- menu-item -->
            </a>
            <!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{route('all.vehicles')}}" class="nav-link">All Vehicles</a></li>


            </ul>
            <a href="#" class="sl-menu-link">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
                    <span class="menu-item-label">Cards</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div>
                <!-- menu-item -->
            </a>
            <!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{route('all.card')}}" class="nav-link">All Cards</a></li>

            </ul>

            <a href="#" class="sl-menu-link">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
                    <span class="menu-item-label">Tap Up Card</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div>
                <!-- menu-item -->
            </a>
            <!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{route('tap.all.card')}}" class="nav-link">Card Deposit</a></li>

            </ul>

            <a href="#" class="sl-menu-link">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
                    <span class="menu-item-label">Payments</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div>
                <!-- menu-item -->
            </a>
            <!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{route('all.payment')}}" class="nav-link">Payment Record</a></li>


            </ul>



        </div>
        <!-- sl-sideleft-menu -->

        <br>
    </div>
