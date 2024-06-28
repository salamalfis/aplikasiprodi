@include('kaprodi/template/header')

<div class="row" style="margin-bottom:100px; background-color:white; padding:30px; border-radius:30px;">
  <div class="container"> 
    <table class=""style="width: 100% !important;" id="table">
        <thead style="border-bottom:2px solid #d9dce0;">
          <tr>
            <th>NO</th>
            <th>JUDUL</th>
            <th>DOSEN</th>
            <th>NAMA MAHASISWA</th>
            <th>ANGGOTA KELOMPOK</th>
            <th>AKSI</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1.</td>
            <td>Sistem Dashboard Untuk Program Studi</td>
            <td>Taufik Nur Adi</td>
            <td>Zaidan Yahya</td>
            <td>Ali Abeedin</td>
            
            <td>
              <div style="display: inline;">
              <button class="fa-solid fa-eye btn-aksi detail" style="">

              </button> 
               <button class="fa-solid fa-square-check"  style="color:green; border:none; background-color:white;">

              </button> 
             
               <button class="fa-solid fa-circle-xmark tolak"  data-bs-target="#tolakData" data-bs-toggle="modal"  style="color:red; border:none; background-color:white;"></button>
              </div>
            </td>
          </tr>
          <tr>
            <td>2.</td>
            <td>Sistem Stockopname Pada Gudang</td>
            <td>Tien Fabrianti Kusumasari</td>
            <td>Alfyansyah Hutagalung</td>
            <td>Novia Bachmid</td>
         
             <td>
              <div style="display: inline;">
              <button class="fa-solid fa-eye btn-aksi detail" style="">

              </button>
              <button class="fa-solid fa-square-check"  style="color:green; border:none; background-color:white;">

              </button> 
             
                <button class="fa-solid fa-circle-xmark tolak"  data-bs-target="#tolakData" data-bs-toggle="modal"  style="color:red; border:none; background-color:white;"></button>
              </div>
            </td>
          </tr>
        </tbody> 

      </table>
  </div>

</div>

{{-- Tolak MODAL --}}

<div class="modal fade" id="tolakData" tabindex="-1" aria-labelledby="tolakDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="tolakDataLabel">Tolak Pengajuan Metlit</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
        <div class="form-group">
          <label for="">Alasan Penolakan</label>
          <textarea name="" id="" class="form-control" style="height:80px;"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-info">Simpan</button>
      </div>
    </div>
  </div>
</div>
{{-- DETAIL MODAL --}}

<div class="modal fade" id="detailData" tabindex="-1" aria-labelledby="detailDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="detailDataLabel">Detail Mahasiswa Metlit</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row"> 
          <div class="col-md-6">
            <td style="border:none; ">Judul</td>
          </div>
          <div class="col-md-6">
            <td style="border:none;">Sistem Dashboard Untuk Program Studi</td>
            </div>
        </div>
          <div class="row"> 
          <div class="col-md-6">
            <td style="border:none; ">Peminatan</td>
          </div>
          <div class="col-md-6">
            <td style="border:none;">Enterprise Data Engineering (EDE)</td>
            </div>
        </div>
        <div class="row"> 
          <div class="col-md-6">
            <td style="border:none; ">Dosen Metlit</td>
          </div>
          <div class="col-md-6">
            <td style="border:none;">Tien Febrianti Kusumasari</td>
            </div>
        </div>
        <div class="row"> 
          <div class="col-md-6">
            <td style="border:none; ">Dosen Pembimbing</td>
          </div>
          <div class="col-md-6">
            <td style="border:none;">Taufik Nur Adi</td>
            </div>
        </div>
      <div class="row"> 
        <div class="col-md-6">
            <td style="border:none; ">Nama Mahasiswa</td>
        </div>
        <div class="col-md-6">
            <td style="border:none;">Zaidan Yahya</td>
            </div>
        </div>
        <div class="row"> 
        <div class="col-md-6">
            <td style="border:none; ">Nim Mahasiswa</td>
        </div>
        <div class="col-md-6">
            <td style="border:none;">1202228412</td>
            </div>
        </div>
      <div class="row"> 
        <div class="col-md-6">
            <td style="border:none; ">Nama Anggota</td>
        </div>
        <div class="col-md-6">
            <td style="border:none;">Ali Abideen</td>
            </div>
        </div>
       <div class="row"> 
        <div class="col-md-6">
            <td style="border:none; ">Nim Anggota</td>
        </div>
        <div class="col-md-6">
            <td style="border:none;">34210908</td>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
     
      </div>
    </div>
  </div>
</div>

@extends('kaprodi/template/script/verifikasi-metlit')
@extends('kaprodi/template/footer')