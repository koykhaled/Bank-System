    <div class="cardBox">
        <div class="card">
            <div>
                @if ($customers == 0)
                    <div class="cardName">No Customers</div>
                @elseif($customers > 1)
                    <div class="numbers">{{ $customers }}</div>
                    <div class="cardName">Customers</div>
                @else
                    <div class="numbers">{{ $customers }}</div>
                    <div class="cardName">Customer</div>
                @endif
            </div>
            <div class="iconBox">
                <ion-icon name="person-outline"></ion-icon>
            </div>
        </div>
    </div>
