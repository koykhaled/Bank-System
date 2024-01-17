<div class="navigation">
    <ul>
        <li>
            <a href="" class="header__logo">
                <img src="{{ secure_asset('assets/logo.svg') }}" />
                <h2>BankSys</h2>
            </a>
        </li>
        <li>
            <a href="{{ route('home') }}">
                <span class="icon">
                    <ion-icon name="home-outline"></ion-icon>
                </span>
                <span class="title">Home</span>
            </a>
        </li>
        <li>
            <a href="{{ route('customers.index') }}">
                <span class="icon">
                    <ion-icon name="person-outline"></ion-icon>
                </span>
                <span class="title">Customers</span>
            </a>
        </li>
    </ul>
</div>
