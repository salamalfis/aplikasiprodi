@include('kaprodi/template/header')

<div class="row" style="margin-bottom:100px; background-color:white; padding:30px; border-radius:30px;">
  <div class="container"> 
    <table class=""style="width: 100% !important;" id="table">
        <thead style="border-bottom:2px solid #d9dce0;">
          <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>NIM</th>
            <th>USERNAME</th>
            <th>KELAS</th>
            <th>STATUS</th>
            <th>AKSI</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1.</td>
            <td>Alifia Sabila Azzahra</td>
            <td>1202228412</td>
            <td>azzahrasabilaalifia</td>
            <td>SIX-46-01</td>
              <td><a class="btn" style="color:white; padding:4px; border:none; background-color:green;">Aktif</a></td>
            
            <td>
              <div style="display: inline;">
             <button class="fa-solid fa-square-check"  style="color:green; border:none; background-color:white;">

              </button> 
                <button class="fa-solid fa-circle-xmark"  style="color:red; padding:4px; border:none; background-color:white;"></button>
              </div>
            </td>
          </tr>
          <tr>
            <td>2.</td>
            <td>Alfis Salam</td>
            <td>1202228401</td>
            <td>salamalfis</td>
            <td>SIX-47-01</td>
             <td><a class="btn" style="color:white; padding:4px; border:none; background-color:red;">Tidak Aktif</a></td>
              <td>
              <div style="display: inline;">
             <button class="fa-solid fa-square-check"  style="color:green; border:none; background-color:white;">

              </button> 
                <button class="fa-solid fa-circle-xmark"  style="color:red; padding:4px; border:none; background-color:white;"></button>
              </div>
            </td>
          </tr>
        </tbody> 

      </table>
  </div>

</div>
@extends('kaprodi/template/script/verifikasi')
@extends('kaprodi/template/footer')