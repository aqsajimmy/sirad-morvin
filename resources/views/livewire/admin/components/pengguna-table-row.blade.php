<tr>
    <th scope="row">{{ $iteration }}</th>
    <td>{{ $item->name }}</td>
    <td>{{ $item->email }}</td>
    <td>
        <div class="badge badge-soft-success font-size-12">{{ $item->role }}</div>
    </td>
    <td id="tooltip-container1" class="d-flex gap-4">
        <a href="javascript:void(0);" class="text-primary" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip"
            data-bs-placement="top" title="Edit"><i class="fa-duotone fa-solid fa-pencil"></i></a>
        <a href="javascript:void(0);" class="text-danger" data-bs-container="#tooltip-container1"
            data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i
                class="fa-duotone fa-solid fa-trash"></i></a>
    </td>
</tr>
