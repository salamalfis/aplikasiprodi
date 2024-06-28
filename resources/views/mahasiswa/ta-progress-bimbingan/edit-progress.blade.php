@include('mahasiswa/template/header')
<style>
  tr {
    border-bottom: 0px solid gray;
  }
</style>
<div class="row" style="margin-bottom:100%;">

  <b>Tambah Pendataan</b>
  <div class="container" style="background-color:white; padding:20px;"> 
    <form action="#">

      <table style="border:none; !important; width:100%;">
        <tr style="border:none; !important;">
          <td style="border:none; width:25%;">
            <b>Tanggal</b>
          </td>
          <td style="border:none; border:none; !important;">
            <div class="form-group">
              <input type="date" class="form-control">
            </div>
          </td>
        </tr>
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
        {{-- <tr style="border:none; !important;">
          <td style="border:none; width:25%;">
            <b>Dosen Pembimbing 1</b>
          </td>
          <td style="border:none; border:none; !important;">
            <div class="form-group">
              <select name="" id="" class="form-control">
                <option value="" >
                  -- Pilih Pembimbing --
                </option>
              </select>
            </div>
          </td>
        </tr>
        <tr style="border:none; !important;">
          <td style="border:none; width:25%;">
            <b>Dosen Pembimbing 2</b>
          </td>
          <td style="border:none; border:none; !important;">
            <div class="form-group">
              <select name="" id="" class="form-control">
                <option value="" >
                  -- Pilih Pembimbing --
                </option>
              </select>
            </div>
          </td>
        </tr> --}}
        <tr style="border:none; !important;">
          <td style="border:none; width:25%;">
            <b>Catatan</b>
          </td>
          <td style="border:none; border:none; !important;">
            <div class="form-group">
              <textarea name="" class="form-control"  style="height:50px;" id=""></textarea>
            </div>
          </td>
        </tr>
        <tr style="border:none; !important;">
          <td style="border:none; width:25%;">
            <b>Bukti Bimbingan</b>
          </td>
          <td style="border:none; border:none; !important;">
            <div class="form-group">
              <input type="file" class="form-control" placeholder="NIM">
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