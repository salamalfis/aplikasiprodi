@include('mahasiswa/template/header')
<div class="row">
  <div class="container">
    <button type="button" class="btn button-blue" data-bs-toggle="modal" data-bs-target="#addData" style="float: right;">
      Tambah <i class="fa-solid fa-plus"></i>
    </button>
  </div>
</div>
<div class="row" style="margin-bottom:200px; background-color:white; padding:30px; border-radius:30px;">
  <div class="container"> 
      <table class="" id="table">
        <thead style="border-bottom:2px solid #E4E6E9;">
          <tr>
            <th><input type="checkbox"></th>
            <th>NO</th>
            <th>TANGGAL</th>
            <th>CATATAN</th>
            <th>BUKTI BIMBINGAN</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody>
          <tr>
             <td><input type="checkbox"></td>
            <td>1.</td>
            <td>20/04/2024</td>
            <td>Membahas Mengenai BAB 1 (Latar Belakang, rumusan masalah, dan tujuan penelitian)</td>
            <td>#</td>
            <td>
              <button class="fa-solid fa-eye btn-aksi detail" style="">

              </button> 
              <button class="fa-solid fa-edit edit btn-aksi" style="color:#2684FF;"></button>
              <button class="fa-solid fa-trash hapus btn-aksi" style="color:red;"></button>
            </td>
          </tr>
          <tr>
            <td><input type="checkbox"></td>
            <td>2.</td>
            <td>20/04/2024</td>
            <td>Revisi Bab 1 dan pembahasan Bab 2</td>
            <td>#</td>
            <td>
              <button class="fa-solid fa-eye btn-aksi detail" style="">

              </button>
              <button class="fa-solid fa-edit edit btn-aksi" style="color:#2684FF;"></button>
              <button class="fa-solid fa-trash hapus btn-aksi" style="color:red;"></button>
            </td>
          </tr>
        </tbody> 

      </table>
  </div>
  <div class="container">
    <button class="fa-solid btn btn-danger hapus-all"> Hapus Semua </button>
  </div>
  
</div>

{{-- ADD MODAL --}}

<div class="modal fade" id="addData" tabindex="-1" aria-labelledby="addDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addDataLabel">Add Data Bimbingan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="">Tanggal</label>
          <input type="date" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Catatan</label>
          <textarea name="" id="" class="form-control" style="height:50px;"></textarea>
        </div>
        <div class="form-group">
          <label for="">Dosen Pembimbing</label>
          <select name="" id="" class="form-control">
            <option value=""> -- Dosen Pembimbing Ke --</option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Nama Dosen</label>
          <input type="text" class="form-control" placeholder="Masukan Nama Dosen">
        </div>
        <div class="form-group">
          <label for="">Upload Bukti Bimbingan</label>
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


{{-- EDIT MODAL --}}

<div class="modal fade" id="editData" tabindex="-1" aria-labelledby="editDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editDataLabel">Edit Data Bimbingan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="">Tanggal</label>
          <input type="date" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Catatan</label>
          <textarea name="" id="" class="form-control" style="height:50px;"></textarea>
        </div>
        <div class="form-group">
          <label for="">Dosen Pembimbing</label>
          <select name="" id="" class="form-control">
            <option value=""> -- Dosen Pembimbing Ke --</option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Nama Dosen</label>
          <input type="text" class="form-control" placeholder="Masukan Nama Dosen">
        </div>
        <div class="form-group">
          <label for="">Upload Bukti Bimbingan</label>
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

<div class="modal fade" id="detailData" tabindex="-1" aria-labelledby="detailDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="detailDataLabel">Detail Data Bimbingan</h1>
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
            <td style="border:none;">Membahas Mengenai BAB 1 (Latar Belakang, rumusan masalah, dan tujuan penelitian)</td>
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
@extends('mahasiswa/template/script/progress-bimbingan')
@extends('mahasiswa/template/footer')