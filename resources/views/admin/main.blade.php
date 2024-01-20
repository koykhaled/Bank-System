<div class="cardBox">
    <div class="card">
        <div>
            @if ($customers == 0)
            <div class="numbers">{{ $customers }}</div>
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
            <ion-icon name="people-outline"></ion-icon>
        </div>
    </div>
    <div class="card">
        <div>
            @if ($transictions_count == 0)
            <div class="numbers">{{ $transictions_count }}</div>
            <div class="cardName">No Transictions</div>
            @elseif($transictions_count > 1)
            <div class="numbers">{{ $transictions_count }}</div>
            <div class="cardName">Transictions</div>
            @else
            <div class="numbers">{{ $transictions_count }}</div>
            <div class="cardName">Transciction</div>
            @endif
        </div>
        <div class="iconBox">
            <ion-icon name="cash-outline"></ion-icon>
        </div>
    </div>
</div>

<div class="details">
    <div class="topic__header">
        <div>
            <h2>Transictions History</h2>
        </div>
    </div>
    <div class="topics">
        <x-notify::notify />
        <div class="cardHeader">
            @if ($transictions_count > 0)
            <Table>
                <thead>
                    <tr>
                        <td>from</td>
                        <td>to</td>
                        <td>transfared_at</td>
                        <td>amount</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transictions as $transiction)
                    <tr>
                        <td>
                            {{ $transiction->from_customer->name }}
                        </td>
                        <td>
                            {{ $transiction->to_customer->name }}
                        </td>
                        <td>
                            {{ $transiction->transfared_at }}
                        </td>
                        <td>{{ $transiction->amount }} $</td>
                    </tr>
                    @endforeach
                </tbody>
            </Table>
            @else
            <p class="empty">There is No customers Yet</p>
            @endif
        </div>
    </div>
</div>