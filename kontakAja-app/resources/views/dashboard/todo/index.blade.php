@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="body-main">
            <div class="filter"></div>
            <div class="box">
                <i class="fa-solid fa-xmark"></i>
                <h2 class="title">Edit</h2>
                <input type="text" class="editItem"/>
                <input type="submit" class="editSubmit" value="Ubah"/>
            </div>
            <div id="leftSide">
                <header>
                    <div class="add-container">
                        <form class="input-container">
                            <input type="text" class="todo-input" placeholder="Apa rencanamu?" />
                            <select name="priority" class="priority">
                                <option selected disabled>Pilih prioritas...</option>
                                <option value="high">Tinggi</option>
                                <option value="middle">Menengah</option>
                                <option value="low">Rendah</option>
                            </select>
                            <input type="submit" class="submitBtn" value="Tambah" />
                        </form>
                    </div>
                </header>
                <div class="todo-title">Belum dilakukan</div>
                <div class="list"></div>
                <div class="total">Tugas Tersisa: 0</div>
            </div>
            <div id="rightSide">
                <div class="todo-title">Sudah dilakukan</div>
                <div class="list"></div>
                <div class="total">Tugas Selesai: 0</div>
            </div>
        </div>
    </div>
@endsection
