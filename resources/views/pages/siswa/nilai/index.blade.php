@extends('layouts.main')
@section('title', 'List Nilai')

@section('content')
<section class="section custom-section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4>List Nilai</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-2">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tugas</th>
                                        <th>Deskripsi</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($tugas as $key => $tugas)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $tugas->judul }}</td>
                                        <td>{{ $tugas->deskripsi }}</td>
                                        <td>{{ $tugas->guru->mapel->nama_mapel }}</td>
                                        @foreach ($jawaban as $key => $jawaban)
                                        <td>{{ $jawaban->nilai }}</td>
                                        @endforeach
                                    </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection