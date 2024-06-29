@if (Auth::user()->hasRole('Program Studi'))
    @include('kaprodi.dashboard.index')
@elseif (Auth::user()->hasRole('Dosen Wali'))
    @include('doswal.dashboard.index')
@elseif (Auth::user()->hasRole('Mahasiswa'))
    @include('mahasiswa.dashboard.index')
@else