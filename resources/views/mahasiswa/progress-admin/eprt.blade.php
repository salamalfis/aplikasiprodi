@include('mahasiswa/template/header')
<div class="row" style="margin-bottom:200px; background-color:white; padding:30px; border-radius:30px;">
  <div class="container" style="display:inline; margin-bottom:20px;">
    <div class="nav-wrapper position-relative end-0" style="width:50%;">
      <ul class="nav nav-pills nav-fill p-1" role="tablist">
         <li class="nav-item  @if($menu == 1) button-blue @else bg-white  @endif " style="border-radius: 10px; padding:10px;">
            <a href="<?= route('mahasiswa.progres-admin.index') ?>" class="nav-link mb-0 px-0 py-1 active  @if($menu == 1) text-white @endif"  role="tab" aria-controls="profile" aria-selected="true">
            Progress Per bab
            </a>
         </li>
         <li class="nav-item @if($menu == 2) button-blue @else bg-white  @endif" style="border-radius: 10px; padding:10px;">
            <a href="<?= route('mahasiswa.progres-admin.dokumen') ?>" class="nav-link mb-0 px-0 py-1 @if($menu == 2) text-white @endif"   role="tab" aria-controls="dashboard" aria-selected="false">
            Dokumen Lengkap
            </a>
         </li>
         <li class="nav-item @if($menu == 3) button-blue @else bg-white  @endif" style="border-radius: 10px; padding:10px;">
            <a href="<?= route('mahasiswa.progres-admin.tak') ?>" class="nav-link mb-0 px-0 py-1 @if($menu == 3) text-white @endif"    role="tab" aria-controls="dashboard" aria-selected="false">
              TAK
            </a>
        </li>
        <li class="nav-item @if($menu == 4) button-blue @else bg-white  @endif" style="border-radius: 10px; padding:10px;">
          <a href="<?= route('mahasiswa.progres-admin.eprt') ?>" class="nav-link mb-0 px-0 py-1 @if($menu == 4) text-white @endif"   role="tab" aria-controls="dashboard" aria-selected="false">
          EPRT
          </a>
        </li>
       </ul>
   </div>
  </div>
   <div class="container" style="height:600px; background-color:#F8F9FA;"> 
      <div class="container" style="display:flex;  justify-content: center; align-items: center; background-color:white; width:700px; height:500px; margin-top:40px;">
        <div class="text-center">
          <form action="">
            <h5>Input Dokumen Lengkap</h5>
            <h5>(Ukuran Max 3 MB, Nama File Max 50 Karakter)</h5>
            <div class="form-group form-upload">
              <div for="file-upload" class="custom-file-upload">
                <div class="bg-blue">
                  <i class="fa-solid fa-folder"></i>
                </div>
                Klik di sini untuk memilih berkas
              </div>
            </div>
            <input type="file" id="file-upload" class="form-control" style="height:200px;">
            <div class="form-group">
              <button class="btn btn-info form-control">Simpan</button>
            </div>
          </form>
        </div>
      </div>
  </div>

</div>


{{-- DETAIL MODAL --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

          <table style="border:0; width:100%;">
            <tr style="border-bottom:none;">
              <td style="width:25%;">
                <span>Judul</span>
              </td>
              <td>
                <div class="form-group">
                  <textarea  id="" class="form-control"></textarea>
                </div>
              </td>
            </tr>
            <tr style="border-bottom:none;">
              <td style="width:25%;">
                <span>Permintaan</span>
              </td>
              <td>
                <div class="form-group">
                  <select name="" id="" class="form-control">
                    <option value="" >
                      -- SELECT DATA --
                    </option>
                  </select>
    
                </div>
              </td>
            </tr>
    
            <tr style="border-bottom:none;">
              <td style="width:25%;">
                <span>Dosen Metlit</span>
              </td>
              <td>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Nama Dosen">
                </div>
              </td>
            </tr>
            <tr style="border-bottom:none;">
              <td style="width:25%;">
                <span>Dosen Pembimbing</span>
              </td>
              <td>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Nama Dosen Pembimbing">
                </div>
              </td>
            </tr>
            <tr style="border-bottom:none;">
              <td style="width:25%;">
                <span>NIM</span>
              </td>
              <td>
                <div class="form-group">
                  <input type="number" class="form-control" placeholder="NIM">
                </div>
              </td>
            </tr>
            <tr style="border-bottom:none;">
              <td style="width:25%;">
                <span>Nama Anggota</span>
              </td>
              <td>
                <div class="form-group">
                  <select name="" id="" class="form-control">
                    <option value="" >
                      -- SELECT DATA --
                    </option>
                  </select>
    
                </div>
              </td>
            </tr>
            <tr style="border-bottom:none;">
              <td style="width:25%;">
                <span>NIM Anggota</span>
              </td>
              <td>
                <div class="form-group">
                  <input type="number" class="form-control" placeholder="NIM">
                </div>
              </td>
            </tr>
          </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


@extends('mahasiswa/template/script/pendataan')
@extends('mahasiswa/template/footer')