<x-app-layout>

    @section('topics')
        <div class="details">
            <x-notify::notify />
            <div class="topic__header">
                <div>
                    <h2>Customer</h2>
                    <p> {{ $customer_count }} Customer</p>
                </div>
            </div>
            <div class="topics">
                <div class="cardHeader">
                    @if ($users_count > 0)
                        <Table>
                            <thead>
                                <tr>
                                    <td>Name</td>
                                    <td>Balance</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>customer_name</td>
                                        <td>100$</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </Table>
                    @else
                        <p class="empty">There is No Users Yet</p>
                    @endif
                </div>
            </div>
        </div>
    @endsection
</x-app-layout>
