<div>
    <table class="table-auto w-full" style="table-layout: fixed; width: 100%;">
        <thead>
            <tr>
                <th class="px-4 py-2" style="width: 50%;">Tanda Tangan Teknisi</th>
                <th class="px-4 py-2" style="width: 50%;">Tanda Tangan Operator</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="width: 50%;">
                    @if($data->technician_signature)
                    <img src="{{ $data->technician_signature }}" alt="Tanda Tangan Teknisi">
                    @else
                    <p class="text-center" style="color:rgb(116, 116, 116)">Tidak ada Tanda tangan</p>
                    @endif
                </td>
                <td style="width: 50%;">
                    @if($data->operator_signature)
                    <img src="{{ $data->operator_signature }}" alt="Tanda Tangan Operator">
                    @else
                    <p class="text-center" style="color:rgb(116, 116, 116)">Tidak ada Tanda tangan</p>
                    @endif
                </td>
            </tr>
        </tbody>
    </table>
</div>