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
            <b>Bidang Peminatan</b>
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
            <b>Semester</b>
          </td>
          <td style="border:none; border:none; !important;">
            <div class="form-group">
              <select name="" id="" class="form-control">
                <option value="" >
                  -- Pilih Semester --
                </option>
                 <option value="" >Ganjil</option>
                 <option value="" >Genap</option>
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
            <b>TA Berkelompok</b>
          </td>
          <td style="border:none; border:none; !important;">
            <div class="form-group">
              <input class="" type="radio" name="gridRadios" id="gridRadios1" value="option1"> Kelompok
              <input class="" style="margin-left:5px;" type="radio" name="gridRadios" id="gridRadios1" value="option2"> Individu
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
        <button type="button" class="btn btn-info">Ubah</button>
      </div>
    </form>    
  </div>

</div>



@extends('mahasiswa/template/footer')