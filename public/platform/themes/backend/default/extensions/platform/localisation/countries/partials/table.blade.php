@foreach ($rows as $row)
    <tr>
        <td><a href="{{ URL::to_admin('localisation/country/edit/' . $row['slug']) }}">{{ $row['name'] }}</a></td>
        <td>{{ $row['iso_code_2'] }}</td>
        <td>
            <div class="btn-group">
                <a class="btn btn-mini" href="{{ URL::to_admin('localisation/country/edit/' . $row['slug']) }}">{{ Lang::line('button.edit') }}</a>
                @if ($default_country != $row['iso_code_2'])

                <a id="modal-confirm" href="{{ URL::to_admin('localisation/country/delete/' . $row['slug']) }}" role="button" class="btn btn-mini btn-danger" data-row="{{ $row['id'] }}">{{ Lang::line('button.delete') }}</a>

                @endif
            </div>
        </td>
    </tr>
@endforeach
