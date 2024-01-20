<div class="navigation">
    <ul>
        <li>
            <a href="" class="header__logo">
                <img src="{{ asset('assets/logo_small.png') }}" />
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
                    <ion-icon name="people-outline"></ion-icon>
                </span>
                <span class="title">Customers</span>
            </a>
        </li>
    </ul>
</div>