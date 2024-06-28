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
            <b>Dokumen</b>
          </td>
          <td style="border:none; border:none; !important;">
            <div class="form-group">
              <textarea  id="" class="form-control"></textarea>
            </div>
          </td>
        </tr>
        <tr style="border:none; !important;">
          <td style="border:none; width:25%;">
            <b>Keterangan</b>
          </td>
          <td style="border:none; border:none; !important;">
            <div class="form-group">
              <textarea  id="" class="form-control"></textarea>
            </div>
          </td>
        </tr>

        <tr style="border:none; !important;">
          <td style="border:none; width:25%;">
            <b>Presentasi Progress</b>
          </td>
          <td style="border:none; border:none; !important;">
            <div class="form-group">
              <input type="text" class="form-control">
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