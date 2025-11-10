<tr>
    <td>{{ $id }}</td>
    <td>{{ $name }}</td>
    <td>{{ $email }}</td>
    <td>
        <x-partials.button data-id="{{ $id }}" class="toggle-desc">
            Показать описание
        </x-partials.button>
    </td>
</tr>
<tr id="desc-{{ $id }}" class="description-row" style="display: none;">
    <td colspan="4" class="p-3 bg-light">
        <strong>Описание:</strong> {{ $description }}
    </td>
</tr>