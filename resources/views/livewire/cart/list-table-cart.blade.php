<div>
    @foreach ($content as $item)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->qty}}</td>
            <td>{{$item->price}}</td>
            <td>S/. {{$item->price*$item->qty}}</td>
            <td>
                {{-- <a href="#" wire:click="deleteItem"> --}}
                <a href="#" wire:click="deleteItem({{ $item->id }},'{{ $item->name }}')">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </a>
                {{-- <a href="">
                    <i class="far fa-edit"></i>
                </a> --}}
            </td>
        </tr>
    @endforeach
    {{-- <tr>
        <td colspan="3"></td>
        <td>Total a pagar: </td>
        <td>{{$total_count}}</td>
    </tr> --}}
    <tr>
        <td colspan="3"></td>
        <td>Total a pagar: </td>
        <td>S/. {{$suma}}</td>
        <td></td>
    </tr>
</div>
