@include('mahasiswa/template/header')
<div class="row" style="margin-bottom:200px; background-color:white; padding:30px; border-radius:30px;">
  <div class="container" style="display:inline;">
    <div class="nav-wrapper position-relative end-0" style="width:50%;">
      <ul class="nav nav-pills nav-fill p-1" role="tablist">
         <li class="nav-item  @if($menu == 1) button-blue @else bg-white  @endif " style="border-radius: 10px; padding:10px;">
            <a href="<?= route('mahasiswa.ta-progres-admin.index') ?>" class="nav-link mb-0 px-0 py-1  @if($menu == 1) text-white  active @endif"  role="tab" aria-controls="profile" aria-selected="true">
            Progress Per bab
            </a>
         </li>
         <li class="nav-item @if($menu == 2) button-blue @else bg-white  @endif" style="border-radius: 10px; padding:10px;">
            <a href="<?= route('mahasiswa.ta-progres-admin.dokumen') ?>" class="nav-link mb-0 px-0 py-1 @if($menu == 2) text-white  active @endif"   role="tab" aria-controls="dashboard" aria-selected="false">
            Dokumen Lengkap
            </a>
         </li>
         <li class="nav-item @if($menu == 3) button-blue @else bg-white  @endif" style="border-radius: 10px; padding:10px;">
            <a href="<?= route('mahasiswa.ta-progres-admin.tak') ?>" class="nav-link mb-0 px-0 py-1 @if($menu == 3) text-white  active @endif"    role="tab" aria-controls="dashboard" aria-selected="false">
              TAK
            </a>
        </li>
        <li class="nav-item @if($menu == 4) button-blue @else bg-white  @endif" style="border-radius: 10px; padding:10px;">
          <a href="<?= route('mahasiswa.ta-progres-admin.eprt') ?>" class="nav-link mb-0 px-0 py-1 @if($menu == 4) text-white  active @endif"   role="tab" aria-controls="dashboard" aria-selected="false">
          EPRT
          </a>
       </li>
       </ul>
   </div>
   <button type="button" class="btn button-blue" data-bs-toggle="modal" data-bs-target="#addData" style="float: right;">
    Tambah <i class="fa-solid fa-plus"></i>
  </button>
  </div>
  <div class="container"> 
    <table class=""style="width: 100% !important;" id="table">
        <thead style="border-bottom:2px solid #d9dce0;">
          <tr>
            <th>NO</th>
            <th>TANGGAL</th>
            <th>DOKUMEN</th>
            <th>KETERANGAN</th>
            <th>PRESENTASI PROGRESS</th>
            <th>AKSI</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1.</td>
            <td>BAB I Hasil Revisi</td>
            <td>Dokumen Fix BAB setelah hasil revisi dari dosen Pembimbing</td>
            <td>24/04/2024 </td>
            <td>25%</td>
            <td>
              <div style="display: inline;">
                <button class="fa-solid fa-edit" style="color:#2684FF;  padding:4px; border:none; background-color:white;" data-bs-toggle="modal" data-bs-target="#editData"></button>
                <button class="fa-solid fa-trash hapus"  style="color:red; padding:4px; border:none; background-color:white;"></button>
              </div>
            </td>
          </tr>
          <tr>
            <td>1.</td>
            <td>BAB I Hasil Revisi</td>
            <td>Dokumen Fix BAB setelah hasil revisi dari dosen Pembimbing</td>
            <td>24/04/2024 </td>
            <td>25%</td>
            <td>
              <div style="display: inline;">
                <button class="fa-solid fa-edit" style="color:#2684FF; padding:4px; border:none; background-color:white;" data-bs-toggle="modal" data-bs-target="#editData"></button>
                <button class="fa-solid fa-trash hapus"  style="color:red; padding:4px; border:none; background-color:white;"></button>
              </div>
            </td>
          </tr>
        </tbody> 

      </table>
  </div>

</div>


{{--ADD DATA --}}

<div class="modal fade" id="addData" tabindex="-1" aria-labelledby="addDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addDataLabel">Add Bimbingan Online</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="">Tanggal</label>
          <input type="date" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Keterangan</label>
          <textarea name="" id="" class="form-control" style="height:50px;"></textarea>
        </div>
        <div class="form-group">
          <label>Status</label>
          <select name="" id="" class="form-control">
            <option value=""> -- Select Data -- </option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Upload Dokumen</label>
          <input type="file" class="form-control" placeholder="Upload Bukti Bimbingan">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-info">Tambah</button>
      </div>
    </div>
  </div>
</div>


{{--EDIT DATA --}}
<div class="modal fade" id="editData" tabindex="-1" aria-labelledby="editDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editDataLabel">Edit Bimbingan Online</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="">Tanggal</label>
          <input type="date" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Keterangan</label>
          <textarea name="" id="" class="form-control" style="height:50px;"></textarea>
        </div>
        <div class="form-group">
          <label>Status</label>
          <select name="" id="" class="form-control">
            <option value=""> -- Select Data -- </option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Upload Dokumen</label>
          <input type="file" class="form-control" placeholder="Upload Bukti Bimbingan">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-info">Ubah</button>
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