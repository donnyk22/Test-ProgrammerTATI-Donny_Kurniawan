@include('header')

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Staff</th>
            <th scope="col">Judul Aktivitas</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Tanggal Input</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @php($i = 1)
        @foreach ($datas as $data)
            <tr>
                <th scope="row">{{ $i++ }}</th>
                <td>{{ $data->user->name }}</td>
                <td>{{ $data->title }}</td>
                <td>{{ $data->body }}</td>
                <td>{{ $data->created_at }}</td>
                <td>
                    @if ($data->status == -1)
                        <span class="badge badge-danger">Ditolak</span>
                    @elseif ($data->status == 0)
                        <span class="badge badge-secondary">Pending</span>
                    @elseif ($data->status == 1)
                        <span class="badge badge-success">Disetujui</span>
                    @endif
                </td>
                <td>
                    <a class="btn btn-warning @if ($data->status == 1) disabled @endif"
                        href="/post/approve/{{ $data->id }}"
                        @if ($data->status == 1) aria-disabled="true" @endif role="button"
                        onclick="return confirm('Apakah Anda yakin untuk menyetujuinya?')">Setujui</a>
                    <a class="btn btn-danger @if ($data->status == -1) disabled @endif"
                        href="/post/reject/{{ $data->id }}"
                        @if ($data->status == -1) aria-disabled="true" @endif role="button"
                        onclick="return confirm('Apakah Anda yakin untuk menolaknya?')">Tolak</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@empty($datas)
<img src="{{ asset('/images/empty_data.png') }}" class="mx-auto d-block" alt="Tidak ada data" width="350px" style="margin-top: 100px">
<div class="d-flex justify-content-center"><h4>Data Kosong</h4></div>
@endempty