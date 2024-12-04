
<body>
<div class="margin-top">
        <table class="products">
            <tr>
                <th>Qty</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
            <tr class="items">
                @foreach($data as $item)
                    <td>
                        {{ $item['quantity'] }}
                    </td>
                    <td>
                        {{ $item['description'] }}
                    </td>
                    <td>
                        {{ $item['price'] }}
                    </td>
                @endforeach
            </tr>
        </table>
    </div>

</body>


