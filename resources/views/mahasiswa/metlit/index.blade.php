@include('mahasiswa/template/header')

<div class="row" style="margin-bottom:100%;">
  <div class="container"> 
    <table class=""style="width: 100% !important;" id="table">
        <thead style="border-bottom:2px solid #d9dce0;">
          <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>NIP</th>
            <th>#</th>
            <th>JABATAN</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1.</td>
            <td>TAUFIK NUR HADI</td>
            <td>121231231</td>
            <td><button type="button" class="btn bg-gradient-success">ONLINE</button></td>
            <td>MANAGER</td>
            <td>
              <i class="fa-solid fa-eye" style="">

              </i>
              <i class="fa-solid fa-edit" style="color:#2684FF;"></i>
              <i class="fa-solid fa-trash" style="color:red;"></i>
            </td>
          </tr>
          <tr>
            <td>1.</td>
            <td>TAUFIK NUR HADI</td>
            <td>121231231</td>
            <td><button type="button" class="btn bg-gradient-secondary">OFFLINE</button></td>
            <td>MANAGER</td>
            <td>
              <i class="fa-solid fa-eye" style="">

              </i>
              <i class="fa-solid fa-edit" style="color:#2684FF;"></i>
              <i class="fa-solid fa-trash" style="color:red;"></i>
            </td>
          </tr>
        </tbody> 

      </table>
  </div>

  <div class="container mt-4">
    <h5>Project Table</h5> 
    <table class="table table-responsive">
      <thead style="border-bottom:2px solid #d9dce0;">
        <tr>
          <th>PROJECT</th>
          <th>BUDGET</th>
          <th>STATUS</th>
          <th>COMPLETION</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><i class="fa-brands fa-spotify" style="color:green; font-size:20px;"></i> Spotify</td>
          <td>2,5000</td>
          <td>WORKING</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><i class="fa-brands fa-jira" style="color:#2684FF; font-size:20px;"></i> Jira</td>
          <td>2,5000</td>
          <td>WORKING</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><i class="fa-brands fa-slack" style="color:#2684FF; font-size:20px;"></i> Slack</td>
          <td>2,5000</td>
          <td>WORKING</td>
          <td></td>
          <td></td>
        </tr>
      </tbody> 

    </table>
</div>
</div>

@extends('mahasiswa/template/footer')