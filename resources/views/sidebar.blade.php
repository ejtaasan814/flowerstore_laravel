<ul class="nav nav-pills flex-column">
              <li class="nav-item">
                @if(session('nav') == 'product')
                <a class="nav-link active" aria-current="page" href="/">Products</a>
                @else
                <a class="nav-link" aria-current="page" href="/">Products</a>
                @endif
              </li>
              <li class="nav-item">
                @if(session('nav') == 'orders')
                <a class="nav-link active" href="/orders">Orders</a>
                @else
                <a class="nav-link" href="/orders">Orders</a>
                @endif
              </li>
              <li class="nav-item">
                @if(session('nav') == 'users')
                <a class="nav-link active" href="/users">Users</a>
                @else
                <a class="nav-link" href="/users">Users</a>                
                @endif
              </li>
            </ul>