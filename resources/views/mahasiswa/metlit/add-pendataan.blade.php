@include('mahasiswa/template/header')
<style>
  tr {
    border-bottom: 0px solid gray;
  }
</style>
<div class="row" style="margin-bottom:100%;">

  <b>Tambah Pendataan</b>
  <div class="container" style="background-color:white; padding:30px; border-radius:30px;"> 
    <form action="#">

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
            <b>Semester</b>
          </td>
          <td style="border:none; border:none; !important;">
            <div class="form-group">
              <select name="" id="" class="form-control">
                <option value="" >
                  -- SELECT SEMESTER --
                </option>
                 <option value="">Ganjil</option>
                 <option value="">Genap</option>
              </select>

            </div>
          </td>
        </tr>
        <tr style="border:none; !important;">
          <td style="border:none; width:25%;">
            <b>Jumlah SKS Yang Ditempuh</b>
          </td>
          <td style="border:none; border:none; !important;">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Jumlah SKS Yang Ditempuh">
            </div>
          </td>
        </tr>
        <tr style="border:none; !important;">
          <td style="border:none; width:25%;">
            <b>Peminatan</b>
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
            <b>NAMA</b>
          </td>
          <td style="border:none; border:none; !important;">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="NAMA">
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
      <div style="float: right;">
        <button type="button" class="btn btn-danger">Close</button>
        <button type="button" class="btn btn-info">Simpan</button>
      </div>
    </form>    
  </div>

</div>



@extends('mahasiswa/template/footer')