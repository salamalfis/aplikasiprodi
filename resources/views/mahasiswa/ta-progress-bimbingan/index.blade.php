@include('mahasiswa/template/header')
<div class="row" style="margin-bottom:200px; background-color:white; padding:30px; border-radius:30px;">
  <div class="container" style="display:inline;">
    <div class="nav-wrapper position-relative end-0" style="width:50%;">
      <ul class="nav nav-pills nav-fill p-1" role="tablist">
         <li class="nav-item  @if($menu == 1) button-blue @else bg-white  @endif " style="border-radius: 10px; padding:10px;">
            <a href="<?= route('mahasiswa.ta-progress-bimbingan.index') ?>" class="nav-link mb-0 px-0 py-1  @if($menu == 1) text-white  active @endif"  role="tab" aria-controls="profile" aria-selected="true">
            Bimbingan
            </a>
         </li>
         <li class="nav-item @if($menu == 2) button-blue @else bg-white  @endif" style="border-radius: 10px; padding:10px;">
            <a href="<?= route('mahasiswa.ta-progress-bimbingan.dospem1') ?>" class="nav-link mb-0 px-0 py-1 @if($menu == 2) text-white  active @endif"   role="tab" aria-controls="dashboard" aria-selected="false">
            Pembimbing 1
            </a>
         </li>
         <li class="nav-item  @if($menu == 3) button-blue @else bg-white  @endif" style="border-radius: 10px; padding:10px;">
            <a href="<?= route('mahasiswa.ta-progress-bimbingan.dospem2') ?>" class="nav-link mb-0 px-0 py-1 @if($menu == 3) text-white  active @endif"    role="tab" aria-controls="dashboard" aria-selected="false">
              Pembimbing 2
            </a>
        </li>
       </ul>
   </div>
    <button  data-bs-toggle="modal" data-bs-target="#addData" style="float: right;" type="a" class="btn button-blue">Tambah <i class="fa-solid fa-plus"></i> </button>
  </div>
  <div class="container"> 
    <table class=""style="width: 100% !important;" id="table">
        <thead style="border-bottom:2px solid #d9dce0;">
          <tr>
            <th>#</th>
            <th>TANGGAL</th>
            <th>CATATAN</th>
            <th>BUKTI BIMBINGAN</th>
            <th>AKSI</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="checkbox"></td>
            <td>24/04/2024 </td>
            <td>Revisi</td>
            <td>#</td>
            <td>
              <div style="display: inline;">
                <button class="fa-solid fa-eye btn-aksi detail" style="">

                </button> 
                <button class="fa-solid fa-edit edit btn-aksi"  data-bs-target="#editData" data-bs-toggle="modal" style="color:#2684FF; background-color:white;"></button>
                <button class="fa-solid fa-trash hapus btn-aksi" style="color:red; background-color:white;"></button>
              </div>
            </td>
          </tr>
        </tbody> 
      </table>
  </div>
 <div class="container">
    <button class="fa-solid btn btn-danger hapus-all"> Hapus Semua </button>
  </div>
</div>


<div class="modal fade" id="addData" tabindex="-1" aria-labelledby="addDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addDataLabel">Add Bimbingan Online</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <table style="border:none; !important; width:100%;">
        <tr style="border:none; !important;">
          <td style="border:none; width:25%;">
            <b>Judul</b>
          </td>
          <td style="border:none; border:none; !important;">
            <div class="form-group">
              <textarea  id="" class="form-control"></textarea>
            </div>
          </td>
        </tr>
        <tr style="border:none; !important;">
          <td style="border:none; width:25%;">
            <b>Permintaan</b>
          </td>
          <td style="border:none; border:none; !important;">
            <div class="form-group">
              <select name="" id="" class="form-control">
                <option value="" >
                  -- SELECT DATA --
                </option>
              </select>

            </div>
          </td>
        </tr>

        <tr style="border:none; !important;">
          <td style="border:none; width:25%;">
            <b>Dosen Metlit</b>
          </td>
          <td style="border:none; border:none; !important;">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Nama Dosen">
            </div>
          </td>
        </tr>
        <tr style="border:none; !important;">
          <td style="border:none; width:25%;">
            <b>Dosen Pembimbing</b>
          </td>
          <td style="border:none; border:none; !important;">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Nama Dosen Pembimbing">
            </div>
          </td>
        </tr>
        <tr style="border:none; !important;">
          <td style="border:none; width:25%;">
            <b>NIM</b>
          </td>
          <td style="border:none; border:none; !important;">
            <div class="form-group">
              <input type="number" class="form-control" placeholder="NIM">
            </div>
          </td>
        </tr>
        <tr style="border:none; !important;">
          <td style="border:none; width:25%;">
            <b>Nama Anggota</b>
          </td>
          <td style="border:none; border:none; !important;">
            <div class="form-group">
              <select name="" id="" class="form-control">
                <option value="" >
                  -- SELECT DATA --
                </option>
              </select>

            </div>
          </td>
        </tr>
        <tr style="border:none; !important;">
          <td style="border:none; width:25%;">
            <b>NIM Anggota</b>
          </td>
          <td style="border:none; border:none; !important;">
            <div class="form-group">
              <input type="number" class="form-control" placeholder="NIM">
            </div>
          </td>
        </tr>
      </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-info">Tambah</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="editData" tabindex="-1" aria-labelledby="editDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editDataLabel">Edit Bimbingan Online</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <table style="border:none; !important; width:100%;">
        <tr style="border:none; !important;">
          <td style="border:none; width:25%;">
            <b>Judul</b>
          </td>
          <td style="border:none; border:none; !important;">
            <div class="form-group">
              <textarea  id="" class="form-control"></textarea>
            </div>
          </td>
        </tr>
        <tr style="border:none; !important;">
          <td style="border:none; width:25%;">
            <b>Permintaan</b>
          </td>
          <td style="border:none; border:none; !important;">
            <div class="form-group">
              <select name="" id="" class="form-control">
                <option value="" >
                  -- SELECT DATA --
                </option>
              </select>

            </div>
          </td>
        </tr>

        <tr style="border:none; !important;">
          <td style="border:none; width:25%;">
            <b>Dosen Metlit</b>
          </td>
          <td style="border:none; border:none; !important;">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Nama Dosen">
            </div>
          </td>
        </tr>
        <tr style="border:none; !important;">
          <td style="border:none; width:25%;">
            <b>Dosen Pembimbing</b>
          </td>
          <td style="border:none; border:none; !important;">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Nama Dosen Pembimbing">
            </div>
          </td>
        </tr>
        <tr style="border:none; !important;">
          <td style="border:none; width:25%;">
            <b>NIM</b>
          </td>
          <td style="border:none; border:none; !important;">
            <div class="form-group">
              <input type="number" class="form-control" placeholder="NIM">
            </div>
          </td>
        </tr>
        <tr style="border:none; !important;">
          <td style="border:none; width:25%;">
            <b>Nama Anggota</b>
          </td>
          <td style="border:none; border:none; !important;">
            <div class="form-group">
              <select name="" id="" class="form-control">
                <option value="" >
                  -- SELECT DATA --
                </option>
              </select>

            </div>
          </td>
        </tr>
        <tr style="border:none; !important;">
          <td style="border:none; width:25%;">
            <b>NIM Anggota</b>
          </td>
          <td style="border:none; border:none; !important;">
            <div class="form-group">
              <input type="number" class="form-control" placeholder="NIM">
            </div>
          </td>
        </tr>
      </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-info">Ubah</button>
      </div>
    </div>
  </div>
</div>


{{-- DETAIL MODAL --}}
<div class="modal fade" id="detailData" tabindex="-1" aria-labelledby="detailDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="detailDataLabel">Detail Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row"> 
          <div class="col-md-6">
            <td style="border:none; ">Tanggal</td>
        </div>
        <div class="col-md-6">
            <td style="border:none;">20/04/2024</td>
          </div>
      </div>
      <div class="row"> 
          <div class="col-md-6">
            <td style="border:none; ">Catatan</td>
        </div>
        <div class="col-md-6">
            <td style="border:none;">Revisi</td>
          </div>
      </div>
        <div class="row"> 
          <div class="col-md-6">
            <td style="border:none; ">Bukti Bimbingan</td>
        </div>
        <div class="col-md-6">
            <td style="border:none;"></td>
          </div>
      </div>   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



@extends('mahasiswa/template/script/pendataan')
@extends('mahasiswa/template/footer')