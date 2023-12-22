@extends('main')

@section('content')

<div class="container">
      <div class="row justify-content-end">
        <div class="col-md-4">
          <form class="form-inline">
            <input class="form-control form-control-sm mr-0 w-75" type="text" placeholder="Search"
              aria-label="Search" id="myInput" onkeyup="myFunction()">
            <button type="submit"><i class="fas fa-search" aria-hidden="true"></i></button>
          </form>
        </div>
      </div>
      <br>
      <table id="datakamar" class="table table-striped table-bordered table-sm table-hover" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th class="th-sm" onclick="sortTable(0)">Nomor Kamar</th>
            <th class="th-sm" onclick="sortTable(1)">Nama</th>
            <th class="th-sm" onclick="sortTable(2)">Harga Kamar</th>
            <th class="th-sm" onclick="sortTable(3)">Lama Pembayaran</th>
            <th class="th-sm" onclick="sortTable(4)">Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1.1</td>
            <td>Magfira Dilaila Fadia</td>
            <td>650000</td>
            <td>6 bulan</td>
            <td>3900000</td>
          </tr>

          <tr>
            <td>1.2</td>
            <td>Rizki Nuraini Ramadhani</td>
            <td>600000</td>
            <td>12 bulan</td>
            <td>7200000</td>
          </tr>
        </tbody>
      </table>
    </div>

@endsection