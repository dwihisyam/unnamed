<section class="reservation_form_area p_50">
    <div class="container">
        <div class="res_form_inner">
            <div class="form_title">
                <h2>Reservation Form</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <form class="reservation_form row" action="/fogertyas/ucapan" method="post">
                @csrf
                <div class="form-group col-lg-12">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Name">
                </div>
                <div class="form-group col-lg-12">
                    <input type="text" class="form-control" id="komentar" name="komentar" placeholder="Komentar">
                </div>
                <div class="form-group col-lg-12">
                    <button class="btn submit_btn" type="submit" value="submit">Send </button>
                </div>
            </form>
        </div>
    </div>
</section>
<section class="progress_area">
    <div class="container box_1620 p_50">
        <div class="main_title">
            <h2>Arrengement in progress</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
        </div>
        <div class="row progress_inner">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="progress_item">
                    @foreach($komentar as $kmn)
                    <div class="progress_text">
                        <p>{{$kmn->nama}}</p>
                        <p>{{$kmn->komentar}}</p>
                        <p>{{$kmn->tanggal}}</p>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>