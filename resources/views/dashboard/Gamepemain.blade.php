@extends('layouts.template')

@section('title')

@section('content')
<div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Player Table</span>
      <input id="inp" type="text" placeholder="Search..." style="width: 55%; height: 30px;">
    </div>
    <div class="topright">
      <ul>
        <li>Kazuhaaa</li>
        <li><img src="/image/Kazuha.jpg" alt="profileImg"></li>
        <li><iconify-icon icon="ant-design:setting-filled"></iconify-icon></li>
      </ul>
    </div>
    <div class="contain-4">
            <div class="card">
                <form action="/tambahgamepemain" method="POST" enctype="multipart/form-data">
                    <table id="tbl-card">
                        @csrf
                            <tr>
                                <td>
                                    <label for="">Pilih Nama Pemain</label>  
                                    <select name="pemain" id="">
                                        <option value=""></option>
                                        @foreach ($us as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </td>   
                            </tr>
                                <td>
                                    <button class="ara" type="submit"><p>Save</p></button>
                                </td>   
                        </table>
                    </form>
            </div>
       </div>
@endsection