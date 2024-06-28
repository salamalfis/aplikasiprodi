@include('doswal/template/header')

<div class="row" style="margin-bottom:100px; background-color:white; padding:30px; border-radius:30px;">
  <div class="container"> 
    <table class=""style="width: 100% !important;" id="table">
        <thead style="border-bottom:2px solid #d9dce0;">
          <tr>
            <th>NO</th>
            <th>JUDUL</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>PEMINATAN</th>
            <th>KELAS</th>
            <th>PROGRES</th>
            <th>AKSI</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1.</td>
            <td>Sistem Dashboard Untuk Program Studi</td>
            <td>1202228412</td>
            <td>Alfia Sabila Azzahra</td>
            <td>Enterprise Resource System Develoment(ESD)</td>
            <td>SI-45-01</td>
            <td>25%</td>
            
            <td>
              <div style="display: inline;">
              <button class="fa-solid fa-eye btn-aksi detail" style="">

              </button> 
              <button class="fa-solid fa-paper-plane komen" style=" border:none;background-color:white; color:#2684FF;">

              </button> 
              </div>
            </td>
          </tr>
          <tr>
            <td>2.</td>
            <td>Sistem Stockopname Pada Gudang</td>
            <td>1202228412</td>
            <td>Aditia Dika</td>
            <td>Enterprise Resource System Develoment(ESD)</td>
            <td>SI-45-01</td>
            <td>25%</td>
         
             <td>
              <div style="display: inline;">
              <button class="fa-solid fa-eye btn-aksi detail" style="">

              </button>
               <button class="fa-solid fa-paper-plane komen" style=" border:none;background-color:white; color:#2684FF;">

              </button> 
             
               
              </div>
            </td>
          </tr>
        </tbody> 

      </table>
  </div>

</div>
{{-- Komentar MODAL --}}

<div class="modal fade" id="komentar" tabindex="-1" aria-labelledby="komentarLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="komentarDataLabel">Kirim Komen</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="">Kirim Ke</label>
         
        </div>
        <div class="form-group">
          <label for="">Isi Komen</label>
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
        <h1 class="modal-title fs-5" id="detailDataLabel">Detail Progres Mahasiswa Metlit</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
          <div class="row"> 
            <div class="col-md-6">
              <td style="border:none; ">Nama Mahasiswa</td>
          </div>
            <div class="col-md-6">
              <td style="border:none;">Alfia Sabila Azzahra</td>
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
              <td style="border:none; ">Peminatan</td>
          </div>
            <div class="col-md-6">
              <td style="border:none;">Enterprise Resource System Develoment(ESD)</td>
            </div>
          </div>
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
              <td style="border:none; ">Progres Dokumen</td>
          </div>
            <div class="col-md-6">
              <td style="border:none;">25%</td>
            </div>
          </div>
          <div class="row"> 
            <div class="col-md-6">
              <td style="border:none; ">Progres Bimbingan</td>
          </div>
            <div class="col-md-6">
              <td style="border:none;">25%</td>
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
              <td style="border:none; ">Dosen Metlit</td>
          </div>
            <div class="col-md-6">
              <td style="border:none;">Tien Febrianti Kusumasari</td>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
     
      </div>
    </div>
  </div>
</div>

@extends('doswal/template/script/lihat-metlit')
@extends('doswal/template/footer')